@extends('bioProduct.niceAdmin.dashord.app')

@section('dasboard')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- page start-->

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> ID</th>
                    <th><i class="icon_calendar"></i> NOM</th>
                    <th><i class="icon_mail_alt"></i> DESCRIPTION</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  @foreach(category() as $key => $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->title}}</td>
                      <td>{{$category->description}}</td>
                      {{-- <td><img class="imgCust" src="{{ asset('productImage/'.$category->image ) }}" alt=" {{ $category->title }} "></td> --}}
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="{{ route('category.show',$category) }}"><i class="icon_plus_alt2"></i></a>
                          <a class="btn btn-success" href="{{ route('category.edit',$category) }}"><i class="icon_check_alt2"></i></a>
                          <div class="d-flex">
                            <form onsubmit="return confirm('Voulez-vous supprimez {{$category->nom}} ?')"  action="{{route('category.destroy',$category)}}" method="post">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                  <button class="btn btn-danger" type="submit"><i class="icon_close_alt2"></i></button>
                          </form>
                        </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach  
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->

    @endsection