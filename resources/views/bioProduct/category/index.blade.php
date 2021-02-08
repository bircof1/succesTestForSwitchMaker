@extends('bioProduct.master.layout')

@section('css')
	<link rel="stylesheet" href="{{ asset('custum/css/css.css') }}">
@endsection
@section('content')

<!-- 
Body Section 
-->
<!--
Three column view
-->
	<h3 class="text-center" >La liste des catégories </h3>
		<ul class="thumbnails">
			@foreach($categories as $category)
			<li class="span3">		
				<div class="thumbnail">		
					<a href="product_details.html" class="overlay"></a>
					<a class="zoomTool" href="{{ route('category.show',$category) }}" title="add to cart"><span class="icon-search"></span> Détail</a>
					<a href="{{ route('category.show',$category) }}"><img class="imgCust" src="{{ asset('productImage/'.$category->image ) }}" alt=" {{ $category->title }} "></a>
					<div class="caption cntr">
						<p>{{ $category->title }}</p>
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
@endsection