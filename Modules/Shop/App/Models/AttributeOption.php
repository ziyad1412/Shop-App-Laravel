<?php

namespace Modules\Shop\App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttributeOption extends Model
{
    use HasFactory, UuidTrait;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'attribute_id',
        'slug',
        'name',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\Factories\AttributeOptionFactory::new();
    }
}
