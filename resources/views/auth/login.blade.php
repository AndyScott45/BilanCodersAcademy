@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12 mx-auto p-0">
    <div class="card">
    <div class="login-box">
    <div class="card-header"><input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Login') }}</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">{{ __('Sign-Up') }}</label>
    <div class="login-space">

    <div class="login">
    <form method="POST" action="{{ route('login') }}">
                 @csrf 
                 
   <div class="group">   
   <label for="pass" class="label">{{ __('Email Address') }}</label> <input id="pass" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
       @error('email')
       <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
       </span>
       @enderror
       </div>
       
<!-- <label for="user" class="label">{{ __('Username') }}</label> <input id="user" type="text" class="input form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

           @error('username')
           <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
           </span>
            @enderror
       -->
   
<div class="group">
 <label for="pass" class="label">{{ __('Password') }}</label> <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" data-type="password" name="password" required autocomplete="current-password">
 @error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="group"> 
<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
     {{ __('Remember Me') }}
        </label>
<!--
<input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span>{{ __('Keep me Signed in') }}</label> 
-->
</div>                                           <!-- <span class="icon"></span> Keep me Signed in</label> </div> -->

<div class="group"> 
<input type="submit" class="button" value="Sign In"> 
</div>
<div class="hr"></div>

@if (Route::has('password.request'))
<div class="foot"> <a href="http://127.0.0.1:8000/password/reset">{{ __('Forgot Password?') }} </a></div>
@endif
</form>
</div>


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

                                          <div class="group"><input type="submit" id="my-button" class="button" value="Sign Up"></div>
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
        </div>



<!--
<div class="sign-up-form"> 
   <form method="POST" action="{{ route('register') }}">
                     @csrf           
<div class="group"> 
                <label for="user" class="label">{{ __('Username') }}</label> <input id="user" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus> 
                @error('username')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
 </div>

 <div class="group"> 
       <label for="pass" class="label">{{ __('Email Address') }}</label> <input id="pass" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
       @error('email')
       <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
       </span>
       @enderror
</div>
               
               
<div class="group"> 
       <label for="pass" class="label">{{ __('Password') }}</label> <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" data-type="password" name="password" required autocomplete="new-password"> 
       @error('password')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
      </span>
      @enderror
</div>

<div class="group">  
       <label for="pass" class="label">{{ __('Repeat Password') }}</label> <input id="pass" type="password" class="form-control" data-type="password" name="password_confirmation" required autocomplete="new-password">

</div>


<div class="group"> 
       <label for="pass" class="label">{{ __('Email Address') }}</label> <input id="pass" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
       @error('email')
       <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
       </span>
       @enderror
</div>



<div class="group"> 
      <input type="submit" class="button" value="Sign-Up"> 
</div>

<div class="hr"></div>
<div class="foot"> <label for="tab-1">{{ __('Already Member') }}</label> </div>

                 </form>
                </div>
-->

       
            
@endsection

