@extends('bioProduct.master.layout')

@section('css')
	<link rel="stylesheet" href="{{ asset('custum/css/css.css') }}">
@endsection
@section('content')
<div class="row">
    @include('bioProduct.master.sidebar')

	<div class="span9">

	<h3 class="text-center"> Connexion</h3>	
	<hr class="soft"/>
	<div class="well">
                    <form class="form-horizontal"  method="POST" action="{{ route('login') }}">
                        @csrf


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
                <div class="controls">
                    <button type="submit" class=" text-center exclusive shopBtn">
                        {{ __('Se connecter') }}
                    </button>
                </div>
            </div>
	</form>
</div>
</div>
@endsection
