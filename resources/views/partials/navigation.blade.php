<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/' . Session::get('lang')) }}">
              <img src="{{ asset('images/Logo.png') }}" alt="Logo Refugees Connect">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if( ! Request::is('/'))
                  <form class="navbar-form navbar-left text-center" action="{{ url('/search/' . Session::get('lang')) }}" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback">
                      <input type="text" class="form-control input-sm" name="string" placeholder="Search">
                      <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                    </div>
                  </form>
                @endif
              @if(Auth::check())
                <li>
                  <a href="{{ url('users/' . Auth::user()->id . '/edit/' . Session::get('lang')) }}">Profile</a>
                </li>
              @endif
              <li>
                @if(Auth::check())
                  <a href="/auth/logout">Logout</a>
                @else
                  <a href="{{ url('/auth/login/' . Session::get('lang')) }}">Login</a>
                @endif
              </li>
            </ul>
          </div>
        </div>
    </div>
</nav>