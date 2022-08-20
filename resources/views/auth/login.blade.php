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
    
  <title>Hello, world!</title>
  </head>
  <body>

    <!-- Navbar Starts -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-3 navbar-fixed-top">
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



<!-- Images starts here -->
<div class="container .px-4">
<div class="row gx-5">

<!-- adds an image of kids learning to code to the BilanCodersAcademy Register page -->
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 get-it">
<div class="my-images" id="center">
<a href="#">                  
 <img class="resize" src="assets/img/learnCode.jpg" alt="Kids learning to code at the BilanCodersAcademy">  
 </a>                   
</div>
</div>

<!-- login details -->
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="login-box">
    <div class="card-header"><input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Login') }}</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">{{ __('Sign-Up') }}</label>
    <div class="login-space">

    <div class="login">
    <form method="POST" action="{{ route('login') }}">
                 @csrf 
                 
   <div class="group form-group row">   
          <label for="email" class="label col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

          <div class="col-md-12">
              <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                   <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                    @enderror
          </div>
   </div>
       

 <!--  
 <label for="user" class="label">{{ __('Username') }}</label> <input id="user" type="text" class="input form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
           @error('username')
           <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
           </span>
            @enderror
       
-->

<div class="group form-group row">
 <label for="password" class="label col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> 
 
    <div class="col-md-12">
          <input id="password" type="password" class="input" data-type="password" name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
          @enderror
         </div>
</div>

<div class="group"> 
      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

       <label class="form-check-label" for="remember">
       {{ __('Keep Me Signed In') }}
       </label>
</div>


<div class="group"> 
     <input type="submit" id="h-effect" class="button" value="Sign In"> 
</div>
<div class="hr-1"></div>

@if (Route::has('password.request'))
<div class="foot"> <a href="http://127.0.0.1:8000/password/reset">{{ __('Forgot Password?') }} </a></div>
@endif
</form>
</div>

      <!--
        <div class="col-md-6 col-sm-12 col-xs-12 mx-auto p-0">
            <div class="card"> 
               <div class="login-box">
                        <div class="card-header"><input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('LOGIN') }}</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">{{ __('SIGN-UP') }}</label>
                          
                            <div class="login-space">
    
-->
                     <!-- sign up details -->       
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="group form-group row">
                                            <label for="name" class="label col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                               <div class="col-md-12">
                                                  <input id="name" type="text" class="input promote-1" name="name" value="{{ old('name') }}" required autocomplete="Username" autofocus>

                                                  @error('name')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror
                                                </div>
                                          </div>

                                        <div class="group form-group row">
                                            <label for="email" class="label col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                               <div class="col-md-12">
                                                  <input id="email" type="email" class="input promote-1" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                  @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror

                                               </div>
                                         </div>

                                         <div class="group form-group row">
                                            <label for="password" class="label col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-12">
                                                     <input id="password" type="password" class="input promote-1" name="password" data-type="password" required autocomplete="new-password">

                                                     @error('password')
                                                     <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror

                                                </div>
                                         </div>

                                         <div class="group form-group row">
                                                  <label for="password-confirm" class="label col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                             <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="input promote-1" name="password_confirmation" data-type="password" required autocomplete="new-password"> 
                                              </div>
                                          </div>

                                          <div class="hr-1"></div>

                                          <div class="group"><input type="submit" id="my-button" class="it-button" value="Sign Up"></div>
                                          
                                          <!-- Creates a new title on login page -->
                                              
                                          
                                    <!-- commented out the bootstrap register button
                                         <div class="group form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary success">
                                                    {{ __('Register') }}
                                                </button>
                                    -->
                                        </form>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
</div>

<script type="text/javascript" src="assets/qb/main.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>


