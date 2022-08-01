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
    <link rel="stylesheet" type="text/css" href="assets/css/adjust.css">
    
  <title>Hello, world!</title>
  </head>
  <body>

    <!-- Navbar Starts  <nav class="navbar fixed-top navbar-light bg-light">-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
        <img src="assets/img/mydec.jpg" class="C" salt="" width="60" height="60">
          <a class="navbar-brand shift-me" id="header" href="{{ url('/') }}">ILANCodersAcademy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb                                                                    -lg-0">

            <li class="nav-item item1 dropdown" id="item1">
                <a class="nav-link dropdown-toggle drop-down active" aria-current="page" href="#" id="item1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  FRONTEND
                </a>
                <ul class="dropdown-menu item1" aria-labelledby="navbarDropdown">
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

             <li class="nav-item dropdown">
            @if (Route::has('login'))
                <li class="nav-item dropdown">
                    @auth
   <a class="nav-link  drop-down active" aria-current="page" href="{{ url('/home') }}">HOME</a>
                    @else
                    <a class="nav-link sub-1 drop-down active" id="item6" aria-current="page" href="{{ url('/login') }}">LOGIN</a>

<!--    prevents the register element from appearing as a clickable button on the navigation bar 
             @if (Route::has('register'))
             <li class="nav-item dropdown">
             <a class="nav-link sub-way drop-down active" aria-current="page" href="{{ url('/register') }}">REGISTER</a>                       
    @endif
-->

    @endauth
    </li>
    @endif
    </li>

<!-- Adds a searchMenu to the welcome page -->
<div class="search-menu">
     <form autocomplete="off" action="/action_page.php" class="d-flex">
            <input class="form-control autocomplete me-2" type="text" name="myCountry" id="myInput" placeholder="Country" aria-label="Search">
          
            <button class="btn btn-warning" type="submit">Search</button>
      </form>
</div>

</li>
</ul>
        </div>
        </div>
      </nav>

<!-- Main content -->
      <main class="container mb-3">
      
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="bg-light  p-2 rounded">
          <h1 class="my-name" id="my-intro">BILANcodersAcademy</h1>
          <p class="lead"><strong> An online academy</strong> that introduces students to computer programming. At the academy, Front end technologies such as <a href="#" style="color:orangered; text-decoration:underline">HTML(Hypertext Markup Language), CSS(Cascading style sheet),  JAVASCRIPT</a> and <a href="#" style="color:orangered; text-decoration:underline">BOOTSTRAP</a> are taught in very simple, basic and easy to understand way. Also, the academy provides an excellent resource on the relational database MYSQL as well as on backend technologies like PHP and its framework LARAVEL. </p>
          <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">continue reading &raquo;</a>
        </div>
      </main>

      <div class="container">
      <div class="row">

      <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="content-inner-1 bg-light">
      <h2 class="my-intro">COMPUTER PROGRAMMING FOR KIDS</h2>
      <p class="begin"> Computer Programming is a set of instructions written using a programming langauge that enables the computer perform a specified task. It involves a step by step process of designing and developing various sets of computer programs to accomplish specific computing outcomes. Some of the most popular programming languages include:</p>
    <p><dl class="custom"><dt>JAVASCRIPT</dt><dt>PHP</dt><dt>PHYTON</dt><dt>JAVA</dt><dt>RUBY ON RAILS</dt><dt>ASP.NET</dt></dl></p>

      </div>
     </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="images">
        <img src="assets/img/kidsCode.jpg" alt="kids practicing coding at the BilanCodersAcademy">
    </div>
    </div>


</div>
</div>

<script type="text/javascript" src="assets/qb/main.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
