<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Only include fields relevant to a category
    protected $fillable = [
        'name',        // Category name
        'description', // Optional: description of the category
    ];

    // Relationship: one category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
