<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCategoryProduct;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show','recherche','welcome']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(8);
        return view('bioProduct.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view('bioProduct.niceAdmin.dashord.product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCategoryProduct $request)
    {
        Product::create ([
            'title'=> $request->title,
            'category_id'=> $request->category_id,
            'price'=> $request->price,
            'image'=>$request->image->store('product','public'),
            'description'=>$request->description,
            ]);
        Flashy::message('prooduct enregistré avec succès!', '#');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('bioProduct.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('bioProduct.niceAdmin.dashord.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCategoryProduct $request, Product $product)
    {
        $input = $request->all();
        if($request->image){
            if($request-> hasFile('image')  ){
                $input['image']=$request->image->store('product','public');
                
            }
        }
        $product->update($input);
        Flashy::primary('Product modifiée avec succès!', '#');
        return redirect()->route('product.show',$product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Flashy::error('Product supprimé avec succès!', '#');
        return redirect()->route('productList');

    }

    //Here, we create the methode to display product by category

    public function productByCategory($id){

        $categories = Category::find($id);
        $products = Product::where('category_id','=',$id)->paginate(32);
        return view('bioProduct.product.productByCategory',compact('categories','products'));

    }

        //I try to use driver algolia whithout success

        public function recherche(){
        
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
            return view('bioProduct.welcome');
        }
}
