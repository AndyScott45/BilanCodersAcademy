<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/target.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/adjust.css">
     <!-- This css styles affects the color of the navbar Styles 
     <link href="http://127.0.0.1:8000/assets/css/app.css" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      -->
  
    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
        <img src="assets/img/mydec.jpg" class="C" salt="" width="60" height="60">
          <a class="navbar-brand shift-me" href="{{ url('/') }}">ILANCodersAcademy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  FRONTEND
                </a>
                <ul class="dropdown-menu pull-right" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">HTML5</a></li>
                  
                  <li><a class="dropdown-item" href="#">CSS3</a></li>
                  
                  <li><a class="dropdown-item" href="#">JAVASCRIPT</a></li>
                  
                <li><a class="dropdown-item" href="#">BOOTSTRAP</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  BACKEND
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">PHP</a></li>
                  <li><a class="dropdown-item" href="#">LARAVEL</a></li>

                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MYSQL
                </a>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               TECH NEWS 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>     
            <!-- Authentication links !-->


<li class="nav-item dropdown">
<!-- Authenticatin links -->
@guest
<li class="nav-item">
<a class="nav-link drop-down active" aria-current="page" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
</li>  
@if (Route::has('register'))
<li class="nav-item">
<a class="nav-link drop-down active" aria-current="page" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }} <span class="caret"></span>
</a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</li>
@endguest
</ul>

<div class="searchMenu">
            <form autocomplete="off" action="/action_page.php" class="d-flex">
              <input class="form-control autocomplete me-2" type="text" name="myCountry" id="myInput" placeholder="Country" aria-label="Search">
              <input type="submit">
              
              <!--
              <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>

        </div>
        </div>
        </div>
      </nav>

    <main class="py-4">
            @yield('content')
    </main>

    <script src="http://127.0.0.1:8000/js/app.js" defer></script>
    <script type="text/javascript" src="assets/qb/main.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
    </html>
    