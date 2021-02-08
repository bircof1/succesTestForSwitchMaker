<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\RequestCategoryProduct;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(8);
        return view('bioProduct.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        return view('bioProduct.niceAdmin.dashord.category.create',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCategoryProduct $request)
    {
        Category::create ([
            'title'=> $request->title,
            'image'=>$request->image->store('category','public'),
            'description'=>$request->description,
            ]);
        Flashy::message('Catégorie créee avec succès!', '#');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('bioProduct.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('bioProduct.niceAdmin.dashord.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCategoryProduct $request, Category $category)
    {
        $input = $request->all();
        if($request->image){
            if($request-> hasFile('image')  ){
                $input['image']=$request->image->store('category','public');
                
            }
        }
        $category->update($input);
        Flashy::primary('Category modifiée avec succès!', '#');
        return redirect()->route('category.show',$category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->products()->delete();
        $category->delete();
        Flashy::error('Category supprimée avec succès!', '#');
        return redirect()->route('categoryList');
    }
}
