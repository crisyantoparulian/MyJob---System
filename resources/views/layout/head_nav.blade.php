<!-- start header -->
    <header>
      <div class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <a class="navbar-brand" href="{{url('/')}}"><span>My</span>Jobs</a>
          </div>
          <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
               @if (Sentinel::check())
                     <li><a>Wellcome {!! Sentinel::getUser()->email !!}</a></li>
                    <li>{!! link_to(route('logout'), 'Logout') !!}</li>
                    @else
                    <li class="{{ Request::is('signup') ? 'active' : '' }}"><a href="{{url('signup')}}"> Sign Up</a></li>
                     <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}"> Login</a></li>
                    @endif
            </ul>
            
                   
      
          </div>

        </div>
      </div>
    </header>
    <!-- end header -->