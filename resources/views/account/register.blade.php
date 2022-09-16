@extends('account/master')
@section('body')
    <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="{{ route('registerStore') }}" method="post" id="form-1">
            @csrf
            <div class="form-group ">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{old('username_account')}}" name="username_account" id="username"placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user">{{ $errors->first('username_account') }}</span>
                        </div>
                    </div>
                </div>
                <span class="form-message"></span>
            </div>
            <div class="form-group ">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ old('name_account') }}" name="name_account" id="name"placeholder="Full Name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <span class="form-message"></span>
            </div>
            <div class="form-group ">
                <div class="input-group mb-3">
                    <input type="date" class="form-control" value="{{ old('dob_account') }}" name="dob_account" id="dob">
                    <div class="input-group-append">
                        <div class="input-group-text">

                        </div>
                    </div>
                </div>
                <span class="form-message"></span>
            </div>
           
            <div class="form-group ">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" id="email" value="{{ old('email_account') }}" name="email_account" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                </div>
                <span class="form-message">{{ $errors->first('email_account') }}</span>
            </div>
            <div class="form-group ">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="phone" value="{{ old('phone_account') }}" name="phone_account" placeholder="Phone number">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone fa-fw"></span>
                        </div>
                    </div>

                </div>
                <span class="form-message"></span>
            </div>
            <div class="form-group ">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="pass"  name="pass_account"placeholder="Password">
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
                    <input type="password" class="form-control" id="repass"placeholder="Confirm password">
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
                    <input type="radio" id="radioPrimary1" name="gender_account" value="0" checked>
                    <label for="radioPrimary1">Male</label>
                    <input type="radio" id="radioPrimary2" name="gender_account" value="1"
                        @if (old('gender_account') == 1) checked @endif>
                    <label for="radioPrimary2">Female
                    </label>
                    <input type="radio" id="radioPrimary3" name="gender_account" value="2" @if (old('gender_account') == 2 ) checked @endif>
                    <label for="radioPrimary3">
                        Other
                    </label>
                </div>
                <span class="form-message"></span>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="form-group ">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" class="hayqua" name="terms" value="1">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>

                        </div>
                        <span class="form-message"></span>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" value='1'class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
@endsection
