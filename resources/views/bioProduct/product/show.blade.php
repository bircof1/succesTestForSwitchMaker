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
                       <img src="{{ asset('productImage/'.$product->image) }}" alt="" style="width:100%">
                      </div>
                    </div>
                </div>
                </div>
                <div class="span7">
                    <p> Catégorie: <strong>{{ $product->category->title }}</strong> </p> 
                    <h3> Nom du produit: {{ $product->title }}</h3>
                    <h3> Prix du produit: {{ $product->price }}F  CFA</h3>
                    <hr class="soft"/>
                    
                    <form class="form-horizontal qtyFrm">

                      <h4>Description</h4>
                      <p> {{ $product->description }} <p>
                      <a class="shopBtn" href="{{ route('product.index') }}"> <span></span> Retour</button></a>
                    </form>
                </div>
                </div>
                    <hr class="softn clr"/>
 
                </div>
        </div>

@endsection