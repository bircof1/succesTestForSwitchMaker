@extends('bioProduct.niceAdmin.dashord.app')

@section('dasboard')

          @include('bioProduct.niceAdmin.dashord.category.form',[
            'method'=>$category->id? method_field('PUT') : ''
            ])

    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

  <!-- container section end -->

  @endsection