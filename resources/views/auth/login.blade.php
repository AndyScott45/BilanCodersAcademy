@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

<!-- adds an image of kids learning to code to the BilanCodersAcademy Register page -->
<div class="col-md-6 col-sm-12 col-xs-12">
            <div class="my-images">
                    <a href="#">
                        <img class="resize" src="assets/img/learnCode.jpg" alt="Kids learning to code at the BilanCodersAcademy">
                    </a>
            </div>
</div>

    <div class="col-md-6 col-sm-12 col-xs-12 mx-auto p-0">
    <div class="card">
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
                            
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="group form-group row">
                                            <label for="name" class="label col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                               <div class="col-md-12">
                                                  <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autocomplete="Username" autofocus>

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
                                                  <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                                     <input id="password" type="password" class="input" name="password" data-type="password" required autocomplete="new-password">

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
                                                    <input id="password-confirm" type="password" class="input" name="password_confirmation" data-type="password" required autocomplete="new-password"> 
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

                <div class="col-md-12 col-sm-12 col-xs-12 p-4 mx-auto p-0">
                   <div class="my-page p-2 rounded"> 
                        <h1 class="my-page2">Introduction to Computer Programming</h1>
                          <p class="starter-2">Computer Programming is the process of telling a computer to perform specific actions by giving it a set of instructions. These instructions are referred to as programs. A person who writes instructions is a computer programmer. The instructions may come in different langauges like Javascript, PHP, python. Ruby on Rails, Asp.net. These languages are referred to as programming languages.</p>
                   </div>
               </div>  

        </div>
        </div>





<!-- WORKING REGISTRATION SYSTEM  -->
<!--
<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 mx-auto p-0">
                <div class="card">
                    <div class="login-box">
                        <div class="card-header"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
                            <div class="login-space">
                                <div class="sign-up-form card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="group form-group row">
                                            <label for="name" class="label col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                               <div class="col-md-6">
                                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="Username" autofocus>

                                                  @error('name')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror
                                                </div>
                                          </div>

                                        <div class="group form-group row">
                                            <label for="email" class="label col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                               <div class="col-md-6">
                                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                  @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror

                                               </div>
                                         </div>

                                         <div class="group form-group row">
                                            <label for="password" class="label col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" data-type="password" required autocomplete="new-password">

                                                     @error('password')
                                                     <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror

                                                </div>
                                         </div>

                                         <div class="group form-group row">
                                            <label for="password-confirm" class="label col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" data-type="password" required autocomplete="new-password"> 
                                            </div>
                                          </div>

                                         <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
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









<!--
<div class="container">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mx-auto p-0">
    <div class="card">
    <div class="login-box">
    <div class="login-snip card-header"><input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Login') }}</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">{{ __('REGISTER') }}</label>
    <div class="login-space">
           
  <div class="sign-up-form card-body"> 
      <form method="POST" action="{{ route('login') }}">
          @csrf           
             <div class="group form-group row"> 
                 <label for="user" class="label">{{ __('Username') }}</label> 
                     <div class="col-md-12">
                        <input id="user" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus> 
                             @error('username')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                         </span>
                   @enderror
              </div>
    </div>

      <div class="group form-group row"> 
          <label for="email" class="label col-form-label text-md-right">{{ __('Email Address') }}</label> 
              <div class="col-md-12">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                             </span>
                       @enderror
          </div>
      </div>
               
               
<div class="group form-group row"> 
       <label for="pass" class="label">{{ __('Password') }}</label> 
           <div class="col-md-12">
              <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" data-type="password" name="password" required autocomplete="new-password"> 
                   @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                               </span>
                   @enderror
          </div>
  </div>

<div class="group form-group row">  
       <label for="pass" class="label">{{ __('Repeat Password') }}</label> 
           <div class="col-md-12">    
               <input id="pass" class="form-control" type="password" data-type="password" name="password_confirmation" required autocomplete="new-password">
           </div>
</div>

<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
</div>

<div class="hr"></div>
<div class="foot"> <label for="tab-1">{{ __('Already Member') }}</label> </div>

                 </form>
                </div>
               </div>
              </div>
            </div>
        </div>
    </div>
</div>
</div> 
--> 
@endsection