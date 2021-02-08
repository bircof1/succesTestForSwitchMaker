 <?php
    if($category->id){
        $route=route('category.update',$category);
    }else{
        $route=route('category.store');
    }
 ?>
        <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
  <p>Enregistrement d'une catégorie</p>
        <!-- Basic Forms & Horizontal Forms-->

        <div class="row">
          <div class="col-sm-12">
              <div class="panel-body">
                <form role="form" action="{{$route}}" method="post" enctype="multipart/form-data" >
                   @csrf
                    {{ $method}}
                  <div class="form-group">
                    <label for="title">Nom</label>
                    <input type="title" class="form-control  @error('title') is-invalid @enderror"   name="title" id="exampleInputEmail1" required value="{{old('title')?? $category->title }}" placeholder="Nom de la catégorie">
                    {!! $errors->first('name','<p class="alert alert-danger form-control mt-1 text-center">:message</p>' ) !!}
                  </div>
                  <div class="form-group">
                    <label class="control-label">Description</label>
                        <textarea class="form-control  @error('description') is-invalid @enderror" name="description" required rows="6">{{old('description')??$category->description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image de la catégorie</label>
                    <input type="file" class="@error('image') is-invalid @enderror" id="exampleInputFile"  name="image" >
                  </div>
                  <button type="submit" class="btn btn-primary">Sauvegader</button>
                </form>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
</form>