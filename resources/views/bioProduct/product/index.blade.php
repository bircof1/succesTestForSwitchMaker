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
<div>
  @if(request()->input('q'))
      <h3 class="text-center" ><span class="bg bg-success" > {{$products->total()}} </span>résultats pour la recherche " <span class="bg bg-primary"> {{request()->q}} </span>"</h3>
  @else
  <h3 class="text-center" >La liste de tous les produits </h3>
  @endif
</div>
		<ul class="thumbnails">
			@foreach($products as $product)
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
<div class="d-flex">
	<p>		  {{ $products->links() }}</p>
</div>
@endsection