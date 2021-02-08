@extends('bioProduct.niceAdmin.dashord.app')

@section('dasboard')

          @include('bioProduct.niceAdmin.dashord.product.form',[
            'method'=>$product->id? method_field('PUT') : ''
            ])

@endsection