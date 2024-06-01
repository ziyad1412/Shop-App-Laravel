<?php

namespace Modules\Shop\Repositories\Front;

use Modules\Shop\App\Models\Tag;
use Modules\Shop\Repositories\Front\Interfaces\TagRepositoryInterface;

class TagRepository implements TagRepositoryInterface
{

    public function findAll($options = [])
    {
        return Tag::orderBy('name', 'asc')->get();
    }

    public function findBySlug($slug)
    {
        return Tag::where('slug', $slug)->firstOrFail();
    }
}
