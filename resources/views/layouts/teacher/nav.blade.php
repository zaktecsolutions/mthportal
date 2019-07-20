
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0"><!-- Changes Here-->
      <img class="maths-logo" src="{{asset('public/images/mathstutorhelplogo.png')}}">
      <!-- <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a> -->
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <!-- <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
           <!--<a class="nav-link" href="#">Sign out</a>--><!--
        </li> -->
                    <li class="nav-item text-nowrap dropdown">
                        <a id="student" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><!-- Changes Here-->
                            Sign Out <span class="caret"></span>
                        </a>

                        <!--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                            </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>-->
                    </li>
      </ul>
    </nav>
    <nav class="navbar menu navbar-dark fixed-top bg-dark  p-2"><!-- Changes Here-->
	    <ul class="nav px-3 top-navbar-admin">
	            <li class="nav-item text-nowrap active"><a class="nav-link" href="">Home</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="">Admin</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="#">Contact US</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="#">More</a></li>
	          </ul>
	</nav> 