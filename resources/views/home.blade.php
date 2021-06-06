@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mx-auto p-0">
    <div class="card">
    <div class="login-box">
    <div class="login-snip card-header">{{ __('Dashboard') }}</div>
    <div class="login-space">
    <div class="login card-body">
                          @if (session('status'))
                             <div class="alert alert-success" role="alert">
                                 {{ session('status') }}
                                   </div>
                                      @endif

                           You are logged in!
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
      </div>
    </div>
@endsection
