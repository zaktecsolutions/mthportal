
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap"><!-- Changes Here-->
      <img class="maths-logo" src="{{asset('public/images/mathstutorhelplogo.png')}}">
      <!-- <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a> -->
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  	<ul class="nav px-3 top-navbar-admin">
	            <li class="nav-item text-nowrap active"><a class="nav-link" href="{!! url('/'); !!}">Home</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="admin">Admin</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="#">Contact US</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="#">More</a></li>
	          </ul>
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
		                       <a id="teacher" href="teacher"><!-- Changes Here-->
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
		  </div>
    </nav>
    <!--<nav class="navbar menu navbar-dark fixed-top bg-dark  p-2">
	    <ul class="nav px-3 top-navbar-admin">
	            <li class="nav-item text-nowrap active"><a class="nav-link" href="">Home</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="admin">Admin</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="#">Contact US</a></li>
	            <li class="nav-item text-nowrap"><a class="nav-link" href="#">More</a></li>
	          </ul>
	</nav>-->
