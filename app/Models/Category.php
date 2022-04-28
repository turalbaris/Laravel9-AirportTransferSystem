<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * One To Many
     * Category and product relation created.Category has many product.And product just belong at one category.
     */

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
