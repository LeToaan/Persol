
@extends('account/master')
@section('body')
<div class="card-body">
    <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
    <form action="login.html" method="post" id="form-1">
       <div class="input-group mb-3">
          <input type="password" class="form-control" id="pass" placeholder="Password">
          <div class="input-group-append">
             <div class="input-group-text">
                <span class="fas fa-lock"></span>
             </div>
          </div>
       </div>
       <div class="input-group mb-3">
          <input type="password" class="form-control" id="repass" placeholder="Confirm Password">
          <div class="input-group-append">
             <div class="input-group-text">
                <span class="fas fa-lock"></span>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-12">
             <button type="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
       </div>
    </form>
    <p class="mt-3 mb-1">
       <a href="{{route("login")}}">Login</a>
    </p>
 </div>
@endsection
