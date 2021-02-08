<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\User;

function category(){
    return Category::orderBy('title')->get();
}
function product(){
    return Product::orderBy('title')->get();
}
function role(){
    return Role::orderBy('title')->get();
}
function user(){
    return User::orderBy('name')->get();
}
    
