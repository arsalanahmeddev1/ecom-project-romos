<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
   
{
    use HasFactory; 
    protected $fillable = ['category_id', 'name', 'slug', 'description', 'price', 'stock'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function getRouteKeyName()
    {
        return 'slug'; // Yeh batata hai ke route mein 'slug' use karna hai
    }
}
