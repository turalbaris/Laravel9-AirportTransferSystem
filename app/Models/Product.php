<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Many to one
     * Category and product relation created.Category has many product.And product just belong at one category.
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
