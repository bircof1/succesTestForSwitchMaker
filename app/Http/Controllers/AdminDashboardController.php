<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show','rechercheDashboard']);
    }
    
    public function categoryList(){
        return view('bioProduct.niceAdmin.dashord.category.index');
    }
    public function productList(){
        return view('bioProduct.niceAdmin.dashord.product.index');
    }
    public function roleList(){
        return view('bioProduct.niceAdmin.dashord.role.index');
    }
    public function userList(){
        return view('bioProduct.niceAdmin.dashord.user.index');
    }

    
    public function rechercheDashboard(){
        
        request()->validate([
            'q'=>'required|min:2'
        ]);

        $q=request()->input('q');

        $products= Product::where('title','like',"%$q%")
                            ->orWhere('description','like',"%$q%")
                            ->paginate(32);
        return view('bioProduct.product.index',compact('products'));  

    }
    public function welcome(){
        return view('bioProduct.niceAdmin.dashord.product.index');
    }
}
