<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to refugees-connect.com</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body id="app">

    @if(! Request::is('/') && ! Request::is(Session::get('lang')) )
        @include('partials.navigation')
    @endif

    <div class="container">

        @yield('content')

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <ul>
                        <li><a href="{{ url('impressum') }}">IMPRESSUM</a></li>
                        <li>
                            @if(Auth::check())
                                <a href="/auth/logout">LOGOUT</a>
                            @else
                                <a href="{{ url('/auth/login/' . Session::get('lang')) }}">LOGIN</a>
                            @endif

                        @if(Auth::check())
                            <li>
                                <a href="{{ url('users/' . Auth::user()->id . '/edit/' . Session::get('lang')) }}">PROFILE</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-5P">
                    <form action="/languages" class="form pull-right" role="search" method="POST">
                        <select name="language" id="language" class="form-control input-sm" v-model="language" v-on="change: changeLanguage">
                            <option value="0">Choose Language</option>
                            <option value="en">English</option>
                            <option value="de">Deutsch</option>
                        </select>
                    </form>
                    <p>&copy 2015 &lt;/marc_troesken&gt; Development. All rights served!</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/bundle.js') }}"></script>
</body>
</html>