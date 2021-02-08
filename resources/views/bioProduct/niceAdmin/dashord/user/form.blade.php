 <?php
    if($user->id){
        $route=route('user.update',$user);
    }else{
        $route=route('user.store');
    }
 ?>
    <section id="main-content">
      <section class="wrapper">
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enregistrement d'un utilisateur
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" enctype="multipart/form-data"  id="feedback_form" method="Post" action="{{$route}}">
                   @csrf
                   {{ $method}}
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Role <span class="required"></span></label>
                      <div class="col-lg-10">
                        <select class="form-control" id="cname" name="role_id" minlength="5" type="text" required />
                @foreach(role() as $role)
                    <option value="{{old('role_id')?? $role->id }}" 
                        @if(old('role_id') ==$role->id  || $user->role_id == $role->id ) selected @endif>
                         {{$role->title }}
                    </option>
                @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Nom <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control  @error('name') is-invalid @enderror " id="cemail" value="{{old('name')?? $user->name }}" type="text" name="name" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Email <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control  @error('email') is-invalid @enderror" id="cemail" value="{{old('email')?? $user->email }}" type="email" name="email" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Mot de passe <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control  @error('password') is-invalid @enderror" id="cemail" value="{{old('password')?? $user->password }}" type="password" name="password" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Confirmer mot de passe <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control @error('password_confirmation') is-invalid @enderror"   value="{{old('password_confirmation')?? $user->password_confirmation }}" id="cemail"  type="password" name="password_confirmation" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Photo <span class=""></span></label>
                      <div class="col-lg-10">
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" id="subject" value="{{old('password_confirmation')?? $user->image }}"  name="image" minlength="5" type="text" />
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