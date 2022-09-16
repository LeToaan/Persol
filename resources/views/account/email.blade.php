@extends('account/master')
@section('body')
<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form action="{{route('repass')}}" method="get" id="form-1">
        <div class="form-group ">
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
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <span class="form-message">{{$errors->first('email_account')}}</span>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{route('login')}}">Login</a>
      </p>
      <p class="mb-0">
        <a href="{{route('register')}}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
@endsection