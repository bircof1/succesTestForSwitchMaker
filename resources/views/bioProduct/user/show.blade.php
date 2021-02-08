@extends('bioProduct.master.layout')

@section('css')
	<link rel="stylesheet" href="{{ asset('custum/css/css.css') }}">
@endsection
@section('content')


<div class="row">
    @include('bioProduct.master.sidebar')

        <div class="span9">
        <div class="well well-small">
        <div class="row-fluid">
                <div class="span5">
                <div id="myCarousel" class="carousel slide cntr">
                    <div class="carousel-inner">
                      <div class="item active">
                       <img src="{{ asset('productImage/'.$user->image) }}" alt="{{$user->name}} " style="width:100%">
                      </div>
                    </div>
                </div>
                </div>
                <div class="span7">
                    <h3> ID: {{ $user->id }}</h3>
                    <h3> Nom: {{ $user->name }}</h3>
                    <h3> Email: {{ $user->email }}</h3>
                    {{-- <h3> Role: {{ $user->role()->title }}</h3> --}}
                    <hr class="soft"/>
                    
                    <form class="form-horizontal qtyFrm">
                      <a class="shopBtn" href="{{ route('user.index') }}"> <span></span> Retour</button></a>
                    </form>
                </div>
                </div>
                    <hr class="softn clr"/>
 
                </div>
        </div>

@endsection