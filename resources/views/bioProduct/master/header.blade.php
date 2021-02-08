<!--
Navigation Bar Section 
-->
<div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="{{ set_active_route('welcome') }}"><a href="{{ route('welcome') }}">Accueil	</a></li>
            <li class="{{ set_active_route('category.index') }}"><a href="{{ route('category.index')}}">Categoies</a></li>
            <li class="{{ set_active_route('product.index') }}"><a href="{{ route('product.index')}}">Produits</a></li>
             @can('delete-setting') 
                <li class="{{ set_active_route('user.index') }}"><a href="{{ route('user.index')}}">Membre</a></li>
                <li class="{{ set_active_route('adminDashboard') }}"><a href="{{ url('dashboard')}}">Administration</a></li>
            @endcan
          <form class="navbar-search pull-left"  action="{{route('recherche')}}" method="get">
            <input type="text" class="search-query span2" name="q" id="" value="{{request()->q?? ''}}" placeholder="Rechercher">
          </form>
                        <!-- Authentication Links -->   
                        @guest
                          <li class=""><a class="nav-collapse" href="{{ route('login') }}">{{ __('Login') }}</a></li>

                            @if (Route::has('register'))
                               <li class="{{ set_active_route('register') }}"> <a class="nav-link" href="{{ route('register') }}">{{ __('Créer un compte') }}</a></li>
                            @endif
                        @else

                               <li class="">  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li>
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                        @endguest
            </ul>        
        </div>
      </div>
    </div>
  </div>
