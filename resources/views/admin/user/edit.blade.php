@extends('admin/master')


@section('head')
    <style>
        .form-message {
            font-size: 1.2rem;
            line-height: 1.6rem;
            padding: 4px 0 0;
            color: #f33a58
        }
    </style>
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection

@section('body1')
    <form method="post" action="{{route('admin.user.update',['id'=>$data1->id])}}" enctype="multipart/form-data" id="form-1">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit user</h3>
            </div>
            <div class="card-body">
                <div class="form-group  ">
                    <label>Name:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="name_account" value="{{ $data1->name_account }}"
                            class="form-control datetimepicker-input  " data-target="#reservationdate" id="name">
                            
                    </div>
                    <span class="form-message"></span>
                   

                </div>
                <div class="form-group ">
                    <label>Username:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="username_account" value="{{ $data1->username_account }}"
                            class="form-control datetimepicker-input " id="username">
                         {{-- nơi để tên name cũ dùng khi thay đổi name --}}
                        
                         
                    </div>

                    <span class="form-message">{{$errors->first('username_account')}}</span>
                    {{-- lỗi trùng name thì xuất hiện --}}
                </div>
                <div class="form-group ">
                    <label>Email:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="email_account" value="{{ $data1->email_account }}"
                            class="form-control datetimepicker-input " id="email">

                    </div>

                    <span class="form-message">{{$errors->first('email_account')}}</span>
                </div>

                <div class="form-group ">
                    <label>Phone:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="phone_account" value="{{ $data1->phone_account }}"
                            class="form-control datetimepicker-input " id="phone">

                    </div>

                    <span class="form-message"></span>
                </div>
                <div class="form-group ">
                    <label>Adress:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="adress_account" value="{{$data1->adress_account }}"
                            class="form-control datetimepicker-input " id="adress">

                    </div>

                    <span class="form-message"></span>
                </div>

                <div class="form-group ">
                    <label>Password:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="password" placeholder="Password"  name="pass_account" value=""
                            class="form-control datetimepicker-input " id="pass">

                    </div>

                    <span class="form-message"></span>
                </div>
                <div class="form-group ">
                    <label>Repass:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="password"  placeholder="Confirm Password"  
                            class="form-control datetimepicker-input " id="repass">

                    </div>

                    <span class="form-message"></span>
                </div>

                <div class="form-group ">
                    <label>Birthday:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" name="dob_account" value="{{ $data1->dob_account }}"
                            class="form-control datetimepicker-input " id="dob">

                    </div>

                    <span class="form-message"></span>
                </div>
                <div class="form-group ">
                    <label>Gender:</label>
                    <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary1" name="gender_account" value="0"  @if ($data1->gender_account == 0 ) checked @endif>
                            <label for="radioPrimary1">Male
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="gender_account" value="1" @if ($data1->gender_account == 1 ) checked @endif >
                            <label for="radioPrimary2">Female
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary3" name="gender_account" value="2" @if ($data1->gender_account == 2 ) checked @endif>
                            <label for="radioPrimary3">
                                Other
                            </label>
                        </div>
                    </div>

                    <span class="form-message"></span>
                </div>
                <div class="form-group ">
                    <label>Rank</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <select name="rank_account">Rank
                          @if(Auth::user()->id==$data1->rank_account && Auth::user()->id==1) <option value="1"  @if ($data1->rank_account == 1 ) selected @endif>Supper admin</option> @endif
                           @if(Auth::user()->rank_account<=2) <option value="2"  @if ($data1->rank_account == 2 ) selected @endif>Admin</option> @endif
                            <option value="3" @if ($data1->gender_account == 3 ) selected @endif >User</option>
                        </select> 
                    </div>

                    <span class="form-message"></span>
                </div>
                
                
                <div class="form-group ">
                    <label>Old file:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                       
                        <img src="{{asset('admin/user/'.((!empty($data1->image_account))?$data1->image_account:'user.png'))}}" width="100px" height="100px">
                        <div class="collapse mt-4" id="">
                            {{-- nơi để tên file ảnh cũ --}}
                            <input type="text" name="oldimage" value="{{$data1->image_account}}">
                        </div>
                    </div>

                    
                </div>
                <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->

                    <div class="custom-file">                                                        
                        <input type="file" class="custom-file-input" id="customFile" accept="image/png, image/jpeg" name="image_account">
                        <label class="custom-file-label" for="customFile" >New file</label>                                                  
                    </div>
                    <span class="form-message"></span>
                </div>
               

            </div>
            <div class="card-footer">

            </div>
            <table>
                <tr>
                    <td width="50%" ><a href="{{route('admin.user.index')}}" class="btn btn-block btn-success" >Return Index</a></td>
                    <td width="50%"><button align="center"   class="btn btn-block btn-primary">Save</button></td>
                </tr>
            </table>
        </div>
    </form>
@endsection


@section('script')
    {{-- file myjs do mình tự tạo --}}
    <script src="{{ asset('admin/dist/js/my.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mong muốn của chúng ta
            Validator({
                form: '#form-1',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#name', 'Please Enter Your Name'),
                    Validator.maxLength('#name',40,'Max 40 characters'),
                    Validator.isRequired('#username','Please Enter Username'),
                    Validator.maxLength('#username',40,'Max 40 characters'),
                    Validator.isRequired('#address','Please Enter Your Address'),
                    Validator.isRequired('#email','Please Enter Your Email'),
                    Validator.isEmail('#email','This is not Email'),
                    Validator.maxLength('#email',40,'Max 40 characters'),
                
                    Validator.minLength('#pass',6,'Password must be at least 6 characters'),
                   
                    Validator.isConfirmed('#repass', function () {
              return document.querySelector('#form-1 #pass').value;
            }, 'Pass is not the same'),
                    Validator.isRequired('#phone','Please Enter Youe=r Phone'),
                    Validator.checkNumber('#phone','Phone is Number'),
                     Validator.minLength('#phone',10,'Phone number must have 10 digits'),
                    Validator.maxLength('#phone',10,'Max 10 number'),
                    Validator.isRequired('#dob','Please enter you birthday'),

                    // Validator.minLength('#name',6,'nhập ít nhấp 6 ký tự'),
                    // Validator.maxLength('#name',30,'bạn đã vượt quá số ký tự cho phép'),
                    // Validator.isRequired('#score','Vui lòng nhập điểm số của bạn'),
                    // Validator.checkNumber('#score','vui lòng nhập số'),
                    // Validator.rangeInterger('#score',0,10),
                 

                    


                ],
                onSubmit: function(data) {
                    // Call API

                }
            });



        });

        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
