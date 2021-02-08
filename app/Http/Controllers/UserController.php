<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
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
        
        if( Gate::denies('edit-setting')){
            return back();
        }
        $users = User::latest()->paginate(8);
        return view('bioProduct.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('bioProduct.niceAdmin.dashord.user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create ([
            'name'=> $request->name,
            'role_id'=> $request->role_id,
            'email'=> $request->email,
            'image'=>$request->image->store('user','public'),
            'password' => Hash::make($request->password),
            ]);
        Flashy::message('Compte crée avec succès!', '#');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('bioProduct.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
        if( Gate::denies('edit-setting')){
            return back();
        }
        return view('bioProduct.niceAdmin.dashord.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $input = $request->all();
        if($request->image){
            if($request-> hasFile('image')  ){
                $input['image']=$request->image->store('user','public');
                
            }
        }
        $user->update($input);
        Flashy::primary('Utilisateur modifiée avec succès!', '#');
        return redirect()->route('user.show',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
        if( Gate::denies('delete-setting')){
            return back();
        }
        $user->delete();
        Flashy::error('Utilisateur suprimé avec succès!', '#');
        return redirect()->route('userList');
    }
}
