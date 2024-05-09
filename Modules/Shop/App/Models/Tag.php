<?php

namespace Modules\Shop\App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\TagFactory;

class Tag extends Model
{
    use HasFactory, UuidTrait;

    /**
     * The attributes that are mass assignable.
     */

    protected $table = 'shop_tags';

    protected $fillable = [
        'slug',
        'name',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\TagFactory::new();
    }

    public function products()
    {
        return $this->belongsToMany('Modules\Shop\App\Models\Product', 'shop_products_tags', 'tag_id', 'product_id');
    }
}
