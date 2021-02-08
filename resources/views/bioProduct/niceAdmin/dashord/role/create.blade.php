@extends('bioProduct.niceAdmin.dashord.app')

@section('dasboard')

          @include('bioProduct.niceAdmin.dashord.role.form',[
            'method'=>$role->id? method_field('PUT') : ''
            ])
@endsection    