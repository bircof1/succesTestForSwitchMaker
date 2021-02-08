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
                       <img src="{{ asset('productImage/'.$category->image) }}" alt="" style="width:100%">
                      </div>
                    </div>
                </div>
                </div>
                <div class="span7">
                    <h3>{{ $category->title }}</h3>
                    <hr class="soft"/>
                    
                    <form class="form-horizontal qtyFrm">

                      <h4>Description</h4>
                      <p> {{ $category->description }} <p>
                      <a class="shopBtn" href="{{ route('category.index') }}"> <span></span> Retour</button></a>
                    </form>
                </div>
                </div>
                    <hr class="softn clr"/>
 
                </div>
        </div>

@endsection