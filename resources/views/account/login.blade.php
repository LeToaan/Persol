@extends('account/master')
@section('body')
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="post" action="{{route('postLogin')}}"  id="form-1">
      @csrf
      <div class="form-group ">
        @if (Session::has('info'))
          <span style="color: green">{{Session::get('info')}}</span>
        @endif
          <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" id="username" name="username_account" >
              <div class="input-group-append">
                  <div class="input-group-text">
                      <i class="fas fa-user-tie fa-fw" style="color: var(--fa-navy);"></i>
                  </div>
              
              </div>
              <br>
      
          </div>
          <span class="form-message"></span>
      </div>
      <div class="form-group ">
          <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="pass"name="password">
          <div class="input-group-append">
              <div class="input-group-text">
              <span class="fas fa-lock"></span>
              </div>
          </div>
          </div>
          <span class="form-message"></span>
      </div>
      <div class="row">
        <div class="col-8">
         
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

 
    <!-- /.social-auth-links -->

    <p class="mb-1">
      <a href="{{route('forgetPass')}}">I forgot my password</a>
    </p>
    <p class="mb-0">
      <a href="{{route('register')}}" class="text-center">Register a new membership</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
@endsection

