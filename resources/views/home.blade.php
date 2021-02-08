@extends('bioProduct.master.layout')

@section('css')
	<link rel="stylesheet" href="{{ asset('custum/css/css.css') }}">
@endsection
@section('content')

	<div class="row">
            @include('bioProduct.master.sidebar')
            <div class="span9">
            <div class="well np">
                <div id="myCarousel" class="carousel slide homCar">
                    <div class="carousel-inner">
                    <div class="item">
                        <img style="width:100%" src="productImage/17.jpg" alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                        <h4>Savourez-vous les fraises!</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img style="width:100%" src="productImage/18.jpg" alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                        <h4>De la salade pour votre dessert!</h4>
                        </div>
                    </div>
                    <div class="item active">
                        <img style="width:100%" src="productImage/20.jpg" alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                        <h4>Du citron 100% bio!</h4>

                        </div>
                    </div>
                    <div class="item">
                        <img style="width:100%" src="productImage/19.jpg" alt="bootstrap templates">
                        <div class="carousel-caption">
                        <h4>Les meilleurs poivron du monde!</h4>
        
                        </div>
                    </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
                </div>
        <!--
        New Products
        -->
                <ul class="thumbnails">
                    @foreach(product() as $product)
                    <li class="span3">		
                        <div class="thumbnail">		
                            <a href="product_details.html" class="overlay"></a>
                            <a class="zoomTool" href="{{ route('product.show',$product) }}" title="add to cart"><span class="icon-search"></span> Détail</a>
                            <a href="{{ route('product.show',$product) }}"><img class="imgCust" src="{{ asset('productImage/'.$product->image ) }}" alt=" {{ $product->title }} "></a>
                            <div class="caption cntr">
                                <p>{{ $product->title }}</p>
                                {{-- <p><strong> $22.00</strong></p> --}}
                                {{-- <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4> --}}
                                {{-- <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a> 
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>  --}}
                                <br class="clr">
                            </div>	
                        </div>	
                    </li>
                    @endforeach
                </ul>
            <div class="well well-small">
            <a class="btn btn-mini pull-right" href="{{ route('product.index')}}">Voir+ <span class="icon-plus"></span></a>
            Le meilleur du bio!!!
	</div>
	</div>
	</div>
 @endsection   