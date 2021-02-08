@extends('bioProduct.niceAdmin.dashord.app')

@section('dasboard')

          @include('bioProduct.niceAdmin.dashord.user.form',[
            'method'=>$user->id? method_field('PUT') : ''
            ])

@endsection    