<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/target.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script type="text/javascript" src="assets/qb/main.js"></script>   
    <script type="text/javascript" src="assets/qb/myEdit.js"></script> 


  <title>Hello, world!</title>
  </head>
  <body>

    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 navbar-fixed-top">
        <div class="container-fluid">
        <img src="assets/img/mydec.jpg" class="C" salt="" width="60" height="60">
          <a class="navbar-brand shift-me" id="header" href="{{ url('/') }}">ILANCodersAcademy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item item1 dropdown" id="item1">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" id="item1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  FRONTEND
                </a>
                <ul class="dropdown-menu item1 pull-right" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">HTML5</a></li>
                  
                  <li><a class="dropdown-item" href="#">CSS3</a></li>
                  
                  <li><a class="dropdown-item" href="#">JAVASCRIPT</a></li>
                  
                <li><a class="dropdown-item" href="#">BOOTSTRAP</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown" id="item2">
                <a class="nav-link item2 dropdown-toggle drop-down active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  BACKEND
                </a>
                <ul class="dropdown-menu item2" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">PHP</a></li>
                  <li><a class="dropdown-item" href="#">LARAVEL</a></li>

                </ul>
              </li>

              <li class="nav-item dropdown" id="item3">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  DATABASES
                </a>

                <ul class="dropdown-menu item3" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">MYSQL</a></li>
                  <li><a class="dropdown-item" href="#">POSTGRE</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown" id="item4">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               TECH NEWS 
                </a>
                <ul class="dropdown-menu item4" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>     

              <li class="nav-item dropdown" id="item5">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SERVERS
                </a>
                <ul class="dropdown-menu item5" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">APACHE</a></li>
                </ul>
              </li>
            <!-- Authentication links !-->


<li class="nav-item dropdown">
<!-- Authenticatin links -->
@guest
<li class="nav-item">
<a class="nav-link drop-down active" aria-current="page" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
</li>

<!--
@if (Route::has('register'))
<li class="nav-item">
<a class="nav-link drop-down active" aria-current="page" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
</li>
@endif
-->

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

<!-- Adds a searchMenu to the welcome page -->
<div class="search-menu">
     <form autocomplete="off" action="/action_page.php" class="d-flex">
            <input class="form-control autocomplete me-2" type="text" name="myCountry" id="myInput" placeholder="Country" aria-label="Search">
          
            <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>

</li>
</ul>
        </div>
        </div>
      </nav>

    <main class="py-4">
            @yield('content')
    </main>

    <script type="text/javascript" src="assets/qb/main.js"></script>   
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/qb/myEdit.js"></script>  
  </body>
    </html>