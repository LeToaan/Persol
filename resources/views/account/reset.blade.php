@extends('account/master')
@section('body')
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Reset password</p>

    <form  method="post" action="{{route('resetPassword')}}"  id="form-1">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group ">
        @if (Session::has('fail'))
          <span class="form-message">{{Session::get('fail')}}</span>
        @endif
          <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email address" id="email_account" name="email_account" value="{{$email_account??old('email_account')}}">
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
                <input type="password" class="form-control" placeholder="New password" id="pass"name="pass_account">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
          </div>
          <span class="form-message"></span>
      </div>
      <div class="form-group ">
          <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Confirm password" id="pass"name="confirmpass_account">
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
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Change password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

 
    <!-- /.social-auth-links -->

    <p class="mb-1">
      <a href="{{route('login')}}">Login</a>
    </p>
    <p class="mb-0">
      <a href="{{route('register')}}" class="text-center">Register a new membership</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
@endsection

