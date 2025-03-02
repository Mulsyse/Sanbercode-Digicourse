<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @auth
        <span class="text-white">{{ Auth::user()->name }}</span>
    @else
        <span class="text-white">belum login</span>
    @endauth
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="/films" class="nav-link">
                
                <p>
                    film

                </p>
            </a>
        </li>

        <li class="nav-item">
          <a href="/genres" class="nav-link">
              
              <p>
                  genre

              </p>
          </a>
      </li>


        

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Table
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>table</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/data-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>data-table</p>
              </a>
            </li>
          </ul>
        </li>

 @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link btn-warning">
                        <p>Login</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link  btn-primary">
                        <p>Register</p>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
            @endguest

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>