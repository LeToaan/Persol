<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Persol | Account Page</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

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
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{url('/')}}" class="h1"><b>Per</b>sol</a>
            </div>
            @yield('body')

            <!-- /.form-box -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.register-box -->
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/my.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mong muốn của chúng ta
            Validator({
                form: '#form-1',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('input[name="terms"]', 'can not continue it without check it'),
                    Validator.isRequired('#username', 'Pleses enter username'),
                    Validator.isRequired('#name', 'Pleses enter full name'),
                    Validator.isRequired('#email', 'Plese enter email'),
                    Validator.isEmail('#email', 'This is not email'),
                    Validator.isRequired('#pass', 'Please enter  Password'),
                   Validator.minLength('#pass', 6, 'Password must be at least 6 digits'),
                    Validator.isRequired('#repass', 'Please enter Repass'),

                    Validator.isConfirmed('#repass', function() {
                        return document.querySelector('#form-1 #pass').value;
                    }, 'Password is not the same!'),

                    Validator.checkNumber('#phone', 'Please do not enter characters'),
                    Validator.minLength('#phone', 10, 'Phone number must have 10 digits'),
                    Validator.maxLength('#phone', 10, 'Phone number must have 10 digits'),

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
    @if (Session::get('Error'))
        <script>
            window.alert("Password or Username is incorrect")
        </script>
    @endif

</body>

</html>
