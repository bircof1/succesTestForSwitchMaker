    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
       
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Ajouter</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="{{ set_active_route('category.create') }}" href="{{route('category.create')}}">Une catégorie</a></li>
              <li><a class="{{ set_active_route('product.create') }}" href="{{route('product.create')}}"><span>Un Produit</span></a></li>
              <li><a class="{{ set_active_route('role.create') }}" href="{{route('role.create')}}"><span>Un role</span></a></li>
              <li><a class="{{ set_active_route('user.create') }}" href="{{route('user.create')}}"><span>Un Utilisateur</span></a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Liste</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="{{ set_active_route('categoryList') }}" href="{{route('categoryList')}}">Des categories</a></li>
              <li><a class="{{ set_active_route('productList') }}" href="{{route('productList')}}">Des Produits</a></li>
              <li><a class="{{ set_active_route('userList') }}" href="{{route('userList')}}">Des Utilisateurs</a></li>
              <li><a class="{{ set_active_route('roleList') }}" href="{{route('roleList')}}">Des Roles</a></li>
            </ul>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
