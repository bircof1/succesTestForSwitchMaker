 <?php
    if($product->id){
        $route=route('product.update',$product);
    }else{
        $route=route('product.store');
    }
 ?>
    <section id="main-content">
      <section class="wrapper">
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enregistrement d'un produit
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" enctype="multipart/form-data"  id="feedback_form" method="Post" action="{{$route}}">
                   @csrf
                     {{ $method}}
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Catégorie <span class="required"></span></label>
                      <div class="col-lg-10">
                        <select class="form-control" id="cname" name="category_id" minlength="5" type="text" required />
                @foreach(category() as $category)
                    <option value="{{old('category_id')?? $category->id }}" 
                        @if(old('category_id') ==$category->id  || $product->category_id == $category->id ) selected @endif>
                         {{$category->title }}
                    </option>
                @endforeach
                </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Nom <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control  @error('title') is-invalid @enderror"  value="{{old('title')?? $product->title }}"  id="cemail" type="text" name="title" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Prix <span class="required" ></span></label>
                      <div class="col-lg-10">
                        <input class="form-control @error('price') is-invalid @enderror" id="cemail" type="number"  name="price" required value="{{old('price')?? $product->price }}"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Photo <span class=""></span></label>
                      <div class="col-lg-10">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="subject" value="{{old('image')?? $product->image }}" name="image" minlength="5" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Description</label>
                      <div class="col-lg-10">
                        <textarea class="form-control @error('description') is-invalid @enderror" id="ccomment" value="{{old('description')?? $product->description }}" name="description" required>{{old('description')??$category->description}}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Sauvegader</button>
                        <button class="btn btn-default" type="reset">Reinitialiser</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
    </section>