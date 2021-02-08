@extends('bioProduct.master.layout')

@section('css')
	<link rel="stylesheet" href="{{ asset('custum/css/css.css') }}">
@endsection
@section('content')

<!-- 
Body Section 
-->
<div class="row">
    @include('bioProduct.master.sidebar')

<div class="span9">
<div class="well well-small">
    @foreach($users as $user) 
	<div class="row-fluid">	
 
		<div class="span2">
			<a href="{{ route('user.show',$user) }}"><img src="{{ asset('productImage/'.$user->image ) }}" alt=" {{ $user->name }} "></a>
		</div>    
		<div class="span6">
			<h5>{{$user->name}}</h5>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm"><br>
		<div class="btn-group">
		  <a href="{{route('user.show',$user)}}" class="shopBtn">Détail</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
@endforeach
</div>
</div>
</div>

@endsection