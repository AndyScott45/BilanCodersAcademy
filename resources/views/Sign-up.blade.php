@extends('layouts.app')

@section('content')


<div class="container">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mx-auto p-0">
    <div class="card">
    <div class="login-box">
    <div class="login-snip card-header"><input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Login') }}</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">{{ __('Sign-Up') }}</label>
    <div class="login-space">

    <div class="sign-up-form"> 
   <form method="POST" action="{{ route('Sign-Up') }}">
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
      <input type="submit" class="button" value="Sign-Up"> 
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
@endsection
