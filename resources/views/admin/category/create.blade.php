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
    @if ($Success = Session::get('Success'))
        <div class="alert alert-success alert-dismissible">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>Success</h5>
            {{ $Success }}
        </div>
    @endif

    @if ($Errors = Session::get('Errors'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Errors!</h5>
            {{ $Errors }}
        </div>
        </div>
    @endif
    <form method="post" action="{{ route('admin.category.store') }}" enctype="multipart/form-data" id="form-1">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">New category</h3>

            </div>
            <div class="card-body">
                <div class="form-group  ">
                    <label>Name:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="name_category" placeholder="Category Name"value="{{ old('name_category') }}"
                            class="form-control datetimepicker-input  " data-target="#reservationdate" id="name">

                    </div>
                    <span class="form-message">{{ $errors->first('name_category') }}</span>


                </div>



                <div class="form-group ">
                    <label>Category</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <select name="parent_category">
                            <?php
                            SelectParent1($data1, old('parent_category'));
                            ?>
                        </select>
                    </div>

                    <span class="form-message"></span>
                </div>


            </div>
            <div class="card-footer">

            </div>
            <table>
                <tr>
                    <td width="50%"><a href="{{ route('admin.category.index') }}"
                            class="btn btn-block btn-success">Return Index</a></td>
                    <td width="50%"><button align="center" class="btn btn-block btn-primary">Save</button></td>
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
                    Validator.isRequired('#name', 'Plese Enter Category Name'),
                    Validator.maxLength('#name', 40, 'Max 40 characters'),
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
