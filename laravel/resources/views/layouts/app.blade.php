<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/web.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        RuneStuff
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="/boss_guides">Boss Guides</a>
                        </li>
                        <!-- Authentication Links -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               @if (Auth::guest())
                                    Login or Register
                               @else
                                    <i class="fa fa-user"></i>&nbsp;{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                               @endif <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li><a href="{{ url('/user') }}">Your Profile</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

        @if ($boss_info)
            <div class="container content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default panel-size-fix">
                            <div class="panel-heading">{{ $boss_info->name }}</div>

                            <div class="panel-body">
                                <img class="boss-image" src="{{ URL::to('/') }}/img/{{ $boss_info->title }}.png">
                                <div class="boss-info">
                                    <h4>Information</h4>
                                    <ul class="boss-info-menu">
                                        <li>Name: {{ $boss_info->name }}</li>
                                        <li>Level: {{ $boss_info->level }}</li>
                                        <li>LifePoints: {{ $boss_info->lifepoints }}</li>
                                        <li>Aggressive: {{ $boss_info->aggressive }}</li>
                                        <li>Poisonous: {{ $boss_info->poisonous }}</li>
                                        <li>Weakness: {{ $boss_info->weakness }}</li>
                                    </ul>
                                </div>
                                <div class="boss-reqs">
                                    <h4>Requirements</h4>
                                    <ul class="boss-reqs-menu">
                                        <li>{{ $boss_reqs->req1 }}</li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            <div class="boss-content">
                                <hr>
                                @yield('about')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
