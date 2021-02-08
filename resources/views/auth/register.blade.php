@extends('bioProduct.master.layout')

@section('css')
	<link rel="stylesheet" href="{{ asset('custum/css/css.css') }}">
@endsection
@section('content')
<div class="row">
    @include('bioProduct.master.sidebar')

	<div class="span9">

	<h3 class="text-center"> Création de compte</h3>	
	<hr class="soft"/>
	<div class="well">
	<form class="form-horizontal" method="POST" action="{{ route('register') }}">
		@csrf

        <div class="control-group">
			<label class="control-label" for="Nom">Nom <sup>*</sup></label>
			<div class="controls">
			  <input type="text" class="@error('name') is-invalid @enderror" name="name"  value="{{ old('name') }}" id="Nom" placeholder="Nom">
            </div>
                @error('name')
                    <span class="invalid-feedback text-center text-warning" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Email <sup>*</sup></label>
			<div class="controls">
			  <input type="email"  class="@error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}"  id="inputLname" placeholder="Email">
                </div>
                @error('email')
                    <span class="invalid-feedback text-center text-warning" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Photo (facultatif) <sup></sup></label>
		<div class="controls">
		  <input type="file" class="@error('image') is-invalid @enderror"  name="image" value="{{ old('image') }}"   placeholder="Photo">
            </div>
            @error('image')
                <span class="invalid-feedback text-center text-warning" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
	  </div>	  
		<div class="control-group">
		<label class="control-label">Mot de passe <sup>*</sup></label>
		<div class="controls">
		  <input type="password" class="@error('password') is-invalid @enderror" name="password"  placeholder="Password">
		</div>
        		
            @error('password')
                <span class="invalid-feedback text-center text-warning" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
	  </div>
		<div class="control-group">
		<label class="control-label">Confimer mot de passe <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Confirmer mot de passe" name="password_confirmation" >
		
        </div>
            @error('password_confirmation')
                <span class="invalid-feedback text-center text-warning" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
	  </div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" value="Créer mon Compte" class="exclusive shopBtn">
		</div>
	</div>
	</form>
</div>
</div>
@endsection
