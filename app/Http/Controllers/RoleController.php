<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\RequestRole;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = role::latest()->paginate(8);
        return view('bioProduct.role.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = new role();
        return view('bioProduct.niceAdmin.dashord.role.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestRole $request)
    {
        Role::create ([
            'title'=> $request->title,
            'description'=>$request->description,
            ]);
        Flashy::message('Role crée avec succès!', '#');
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('bioProduct.role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('bioProduct.niceAdmin.dashord.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(RequestRole $request, Role $role)
    {
        $role->update([
            'title'=> $request->title,
            'description'=>$request->description,
            ]);
        Flashy::message('Role modifié avec succès!', '#');
        return redirect()->route('roleList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->user()->delete();
        $role->delete();
        Flashy::error('Role supprimé avec succès!', '#');
        return redirect()->route('roleList');
    }
}
