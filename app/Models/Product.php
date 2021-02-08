<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Traits\Sluggeable;
use App\Models\Traits\SlugRoutable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SlugRoutable;
    protected $fillable = ['category_id','title', 'description', 'price','image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
