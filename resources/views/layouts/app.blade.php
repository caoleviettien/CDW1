<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Flights - Worldskills Travel @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{!! asset ('template/assets/bootstrap/css/bootstrap.css')!!}">
        <link rel="stylesheet" type="text/css" href="{!! asset ('template/assets/style.css')!!}">
    </head>
    <body>
        <div class="wrapper">
            @section('sidebar')
            <header>
                <nav class="navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="{{route('index')}}" class="navbar-brand">Worldskills Travel</a>
                        </div>
                        <div class="collapse navbar-collapse" id="main-navbar">
                            <ul class="nav navbar-nav navbar-right">
                                @if (Session::get('login') == TRUE)
                                    <li><a href="#">Welcome {{Session::get('name')}}</a></li>
                                @else
                                    <li><a href="#">Welcome message</a></li>
                                @endif

                                    <li><a href="{{route('index')}}">Flights</a></li>

                                @if (Session::get('login') == TRUE) 
                                    <li><a href="{{route('logout')}}">Log Out</a></li>
                                @else
                                    <li><a href="{{route('login')}}">Log In</a></li>
                                @endif

                                @if (Session::get('login') == TRUE)
                                    <li><a href="{{route('update')}}">Update</a></li>
                                @else
                                    <li><a href="{{route('register')}}">Register</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            @show
            <main>
                <div class="container">
                    @yield('content')
                </div>
            </main>
            <footer>
                <div class="container">
                    <p class="text-center">
                        Copyright &copy; 2017 | All Right Reserved
                    </p>
                </div>
            </footer>
        </div>
        <!--scripts-->
        <script type="text/javascript" src="{!! asset ('template/assets/jquery-3.2.1.min.js')!!}"></script>
        <script type="text/javascript" src="{!! asset ('template/assets/bootstrap/js/bootstrap.min.js')!!}"></script>
        <script type="text/javascript" src="{!! asset ('template/assets/bootstrap/js/bootstrap.js')!!}"></script>
        <script src="{!! asset ('template/assets/validateSearch.js')!!}" type="text/javascript"></script>
    </body>
</html>