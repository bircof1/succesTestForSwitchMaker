@extends('bioProduct.master.layout')

@section('css')
	<link rel="stylesheet" href="{{ asset('custum/css/css.css') }}">
@endsection

@section('content')

	<div class="row">
        @include('bioProduct.master.sidebar')
	<div class="span9">
<!--
New Products
-->
	<h3 class="text-center" >La liste des produits par catégorie </h3>

        @if($products -> count() > 0)
            <h3 class="text-center"> {{ $products->count() }}  produit(s) trouvés</h3>
        @else  
          <h3 class="text-center">Pas de produits trouvés pour cette categorie</h3>
        @endif

		<ul class="thumbnails">
			@foreach($products as $product)
			<li class="span3">		
				<div class="thumbnail">		
					<a href="{{ route('product.show',$product) }}" class="overlay"></a>
					<a class="zoomTool" href="{{ route('product.show',$product) }}" title="add to cart"><span class="icon-search"></span> Détail</a>
					<a href="{{ route('product.show',$product) }}"><img class="imgCust" src="{{ asset('productImage/'.$product->image ) }}" alt=" {{ $product->title }} "></a>
					<div class="caption cntr">
						<p>{{ $product->title }}</p>
						<br class="clr">
					</div>	
				  </div>	
			</li>
			@endforeach
		  </ul>
	</div>
	</div>
@endsection