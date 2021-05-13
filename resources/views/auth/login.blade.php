@extends('layouts.app')

@section('content')


<div class="container">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mx-auto p-0">
    <div class="card">
    <div class="login-box">
    <div class="login-snip"><input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-space">
    <div class="login card-body">
                <form method="POST" action="http://127.0.0.1:8000/login">
                <input type="hidden" name="_token" value="UJuSYJTENx0UZ0xdz36ZAga9415XfWE7cBesWrIZ">
                        
                        <div class="group"><label for="user" class="label">Username</label> <input id="user" type="text" class="input" placeholder="Enter your username"> </div> 
                        <div class="group"><label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                        <div class="group"><input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                 <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                 <div class="hr"></div>
                 <div class="foot"><a href="http://127.0.0.1:8000/password/reset">Forgot Password?</a></div>
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

