<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- adds an external javascript to the menu laterali homepage -->
     <script src="{{ asset('js/myscripts.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    

    <!-- Styles -->
 <!-- Bootstrap CSS  -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/target.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/adjust.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu laterali.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 
</head>
<body>

<!-- Home page Content -->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent ">
            <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
<input type='checkbox' id='check'>
<label id='icone' for='check'><img class="gift" src='assets/img/icone.png'></label>

<div class='barra'>

<nav>
   
<li><a href=""><div class='link reset-00'>FRONT-END &#9662;</div></a>
        <ul class="dropdown-1 set-00">
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
            <li><a href="#">TYPESCRIPT</a></li>
        </ul>
   </li>

<li><a href=""><div class='link reset-01'>BACK-END  &#9662;</div></a>
        <ul class="dropdown-1 set-01">
            <li><a href="#">NODE.JS</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">LARAVEL</a></li>
            <li><a href="#">PYTHON</a></li>
        </ul>
    </li>

<li> <a href=""><div class='link reset-03'>LIBRARY/FRAMEWORK &#9662;</div></a>
     <ul class="dropdown-1 set-02">
           <li><a href="#">BOOTSTRAP</a></li>
            <li><a href="#">JQUERY</a></li>
            <li><a href="#">REACT.JS</a></li>
            <li><a href="#">ANGULAR.JS</a></li>
    </ul>
</li>


<li> <a href=""><div class='link reset-02'>DATABASE &#9662;</div></a>
    <ul class="dropdown-1 set-03">
           <li><a href="#">MYSQL</a></li>
            <li><a href="#">POSTGRE</a></li>
            <li><a href="#">MONGOBDB</a></li>
    </ul>
</li>


<li> <a href=""><div class='link reset-04'>VERSION CONTROL&#9662;</div></a>
<ul class="dropdown-1 set-04">
           <li><a href="#">GIT</a></li>
            <li><a href="#">BITBUCKET</a></li>
    </ul>
</li>


<li> <a href="logout"><div class='link reset-05'>LOGOUT</div></a></li>
   
</nav>

</div>

<!-- creates a form element with a route for redirection to the welcome page -->
<div>
<form id="myID" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>

<!-- Navbar starts -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                               
                               
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>
