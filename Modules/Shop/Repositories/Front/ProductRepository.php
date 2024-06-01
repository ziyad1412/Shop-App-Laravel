<?php

namespace Modules\Shop\Repositories\Front;

use Modules\Shop\App\Models\Category;
use Modules\Shop\App\Models\Product;
use Modules\Shop\App\Models\Tag;
use Modules\Shop\Repositories\Front\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function findAll($options = [])
    {
        $perPage = $options['per_page'] ?? null;
        $categorySlug = $options['filter']['category'] ?? null;
        $tagSlug = $options['filter']['tag'] ?? null;

        $products = Product::with(['categories', 'tags']);

        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->firstOrFail();

            $childCategoryIDs = Category::childIDs($category->id);

            $categoryIDs = array_merge([$category->id], $childCategoryIDs);

            $products = $products->whereHas('categories', function ($query) use ($categoryIDs) {
                $query->whereIn('shop_categories.id', $categoryIDs);
            });
        }

        if ($tagSlug) {
            $tag = Tag::where('slug', $tagSlug)->firstOrFail();

            $products = $products->whereHas('tags', function ($query) use ($tag) {
                $query->where('shop_tags.id', $tag->id);
            });
        }

        if ($perPage) {
            return $products->paginate($perPage);
        }

        return $products->get();
    }
}
