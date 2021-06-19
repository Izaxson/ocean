<nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a>
            </li>
            <li>
            
              </a>
            </li>

         
          </ul>
        </div>
        
        
        <ul class="navbar-nav navbar-right">
        <button class="btn btn-success float-left " >Staff   Dashboard</button>
        <ul class="navbar-nav navbar-right">
        <button class="btn btn-sucess dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="dropdown-title text-right"><b>{{ Auth::user()->name}}</b></div>
                      </button>
          <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ asset('assets/img/default.jpg')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title"><b>{{ Auth::user()->name}}</b></div>
              <a href="{{route('staff.profile')}}" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> 
                <a href="{{route('staff.profile')}}" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
               Change Password
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                         <i class="fas fa-sign-out-alt"></i>
              {{ __('Logout') }}

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                  </form>
              </a>
            </div>
          </li>
        </ul>
      </nav>
 
      