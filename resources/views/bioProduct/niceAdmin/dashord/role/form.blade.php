 <?php
    if($role->id){
        $route=route('role.update',$role);
    }else{
        $route=route('role.store');
    }
 ?>
    <section id="main-content">
      <section class="wrapper">
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enregistrement d'un role
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" enctype="multipart/form-data"  id="feedback_form" method="Post" action="{{$route}}">
                   @csrf
                    {{ $method}}
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Titre du role <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control @error('title') is-invalid @enderror" id="cemail" type="text"  value="{{old('title')?? $role->title }}" name="title" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Description du role <span class="required"></span></label>
                      <div class="col-lg-10">
                          <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="6">{{old('description')??$role->description}}</textarea>                      
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