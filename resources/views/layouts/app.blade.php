<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Yg7TRxRZxJfp6XjM7sTB4XJL7iJKNUEpKAbrYPK3">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/target.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <!-- Styles -->
     <link href="http://127.0.0.1:8000/assets/css/app.css" rel="stylesheet">
     <!-- Fonts -->
  
    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
        <img src="assets/img/mydec.jpg" class="C" salt="" width="60" height="60">
          <a class="navbar-brand shift-me" href="#">ILANCodersAcademy</a>
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

             <li class="nav-item dropdown">
            @if (Route::has('login'))
                <li class="nav-item dropdown">
                    @auth
   <a class="nav-link  drop-down active" aria-current="page" href="{{ url('/home') }}">HOME</a>
                    @else
                    <a class="nav-link sub-1 drop-down active" aria-current="page" href="{{ url('/login') }}">LOGIN</a>                      
   @if (Route::has('register'))
   <li class="nav-item dropdown">
<a class="nav-link sub-way drop-down active" aria-current="page" href="{{ url('/register') }}">REGISTER</a>                       
   @endif
  @endauth
</li>
@endif
</li>
</li>

<div class="searchMenu">
            <form autocomplete="off" action="/action_page.php" class="d-flex">
              <input class="form-control autocomplete me-2" type="text" name="myCountry" id="myInput" placeholder="Country" aria-label="Search">
              <input type="submit">
              
              <!--
              <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>

</li>
</ul>
        </div>
        </div>
        </div>
      </nav>


    <div id="free-promo" style="
    text-align: center;
    margin-top: 5px;
">
    
      
<div class="container">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 mx-auto p-0">
                  <div class="card">
                      <div class="login-box">
                          <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                              <div class="login-space">
      
                                  <div class="card-body login">
                                  <form method="POST" action="http://127.0.0.1:8000/login">
                                      <input type="hidden" name="_token" value="Yg7TRxRZxJfp6XjM7sTB4XJL7iJKNUEpKAbrYPK3">
      
                                      <div class="group"> <label for="email" class="label">Email-Address</label> <input id="email" type="text" class="input" placeholder="Enter your email address" required autocomplete="email" autofocus> </div>
                                      <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password" required autocomplete="current-password"> </div>
                                      <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                                      <div class="group"><a class="nav-link" href="http://127.0.0.1:8000/sign-up"><input type="submit" class="button" value="Sign In"></a></div>
                                      <div class="hr"></div>
                                      <div class="foot"> <a href="http://127.0.0.1:8000/password/reset">Forgot Password?</a> </div>
                                  </form></div>
       
                                  <!-- This should be in a new page -->
                                  <div class="sign-up-form">
                                      <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" class="input" placeholder="Create your Username"> </div>
                                      <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Create your password"> </div>
                                      <div class="group"> <label for="pass" class="label">Repeat Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password"> </div>
                                      <div class="group"> <label for="pass" class="label">Email Address</label> <input id="pass" type="text" class="input" placeholder="Enter your email address"> </div>
                                      <div class="group"><a class="nav-link" href="http://127.0.0.1:8000/register"><input type="submit" class="button" value="Sign Up"></a></div>
                                      <div class="hr"></div>
                                      <div class="foot"> <label for="tab-1">Already A Member?</label> </div>
                                  </div>
      
                          </form>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>
    <script type="text/javascript" src="assets/qb/main.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
    </html>