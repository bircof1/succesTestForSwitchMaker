<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Traits\Sluggeable;
use App\Models\Traits\SlugRoutable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'description', 'image'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
