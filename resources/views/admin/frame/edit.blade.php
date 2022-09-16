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
     <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
 
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
    <form method="post" action="{{ route('admin.product.frame.update',['id'=>$product->id_product]) }}" enctype="multipart/form-data" id="form-1">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Frame</h3>
            </div>
            <div class="card-body" id='cardBody'>
                <div class="form-group  ">
                    <label>Name:</label>
                    <div class="input-group date" id="reservationdate" >
                        <input type="text" name="name_product" value="{{ $product->name_product }}"
                            class="form-control datetimepicker-input  "  id="name">

                    </div>
                    <span class="form-message">{{ $errors->first('name_product') }}</span>
                </div>
                
                <div class="form-group  ">
                    <label>featured:</label>
                    <div class="input-group date" id="reservationdate" >
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="featured_product" 
                            value='1' @if($product->featured_product==1) checked @endif>
                            <label class="custom-control-label" for="customSwitch1">Hot</label>
                        </div>

                    </div>
                    <span class="form-message"></span>
                </div>
                <div class="form-group  ">
                    <label>content:</label>
                    <div class="input-group date" id="reservationdate" >
                        <textarea name="content_product" 
                            class="form-control datetimepicker-input  "  id="content">{{$product->content_product}}</textarea>

                    </div>
                    <span class="form-message"></span>
                </div>
                <div class="form-group  ">
                    <label>price:</label>
                    <div class="input-group date" id="reservationdate" >
                        <input type="text" name="price_product" value="{{ $product->price_product }}"
                            class="form-control datetimepicker-input  "  id="price">

                    </div>
                    <span class="form-message"></span>
                </div>
                <div class="form-group  ">
                    <label>%Sale:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="number" name="sale_product" value="{{ old('sale_product') }}"
                            class="form-control datetimepicker-input  " data-target="#reservationdate" id="sale">

                    </div>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" style="width: 100%;" 
                    name="category_id" id="category">
                     
                     @foreach ($category as $CATEGORY)
                     <option value="{{$CATEGORY->id_category}}" @if($product->category_id == $CATEGORY->id_category) selected  @endif>{{$CATEGORY->name_category}}</option>
                     @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Minimal</label>
                    <select class="form-control select2" style="width: 100%;" name="brand_id"> 
                        @foreach ($brand as $BRAND)
                        <option value="{{$BRAND->id_brand}}" @if($product->brand_id==$BRAND->id_brand) selected  @endif>{{$BRAND->name_brand}}</option>
                        @endforeach
                    </select>
                  </div>


                  <div class="form-group">
                    <label>Country</label>
                    <select class="form-control select2" style="width: 100%;" name="country_id">
                        @foreach ($country as $COUNTRY)
                        <option value="{{$COUNTRY->id_country}}" @if($product->country_id==$COUNTRY->id_country) selected  @endif>{{$COUNTRY->name_country}}</option>
                        @endforeach
                    </select>
                  </div>

                


                <div class="form-group  ">
                    <label>material:</label>
                    <div class="input-group date" id="reservationdate" >
                        <input type="text" name="material" value="{{ $properties->material }}" class="form-control datetimepicker-input  "  id="material">
                
                    </div>
                    <span class="form-message"></span>
                </div>


                <div class="form-group  ">
                    <label>nose_pads:</label>
                    <div class="input-group date" id="reservationdate" >
                        <input type="text" name="nose_pads" value="{{ $properties->nose_pads }}" class="form-control datetimepicker-input  "  id="nose_pads">
                
                    </div>
                    <span class="form-message"></span>
                </div>

                <div class="form-group  ">
                    <label>size:</label>
                    <div class="input-group date" id="reservationdate" >
                        <input type="text" name="size" value="{{ $properties->size }}" class="form-control datetimepicker-input  "  id="size">
                
                    </div>
                    <span class="form-message"></span>
                </div>
                  
                  
                {{-- class image ở đây cần id để làm js --}}            
                {{-- <div class="form-group" id="image1">
                    <!-- <label for="customFile">Custom File</label> -->
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input"  name="image_product[]" onchange="changImage(1)" id="image2.1">
                        <label class="custom-file-label" for="image1">Choose File</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="addImage(1)" >+</span>
                        </div>
                        <div class="input-group-append" >
                            <input type="text" placeholder="category image" name="category_image[]" value="index" id="category_image1">
                         </div> 
                            <div class="input-group-append">
                            <span class="input-group-text" onclick=" minusImgae(1)" >-</span>
                        </div> 
                       
                         </div>
                    <span class="form-message"></span>
                </div> --}}
              
               {{-- chỗ này dùng để lưa trữ số liệu mệt ghê dể làm cái tự động tăng giảm--}}
               
                    {{-- nơi để tên file ảnh cũ --}}
                    {{-- chỗ chứa ảnh image mới tạo bằng javascript --}}
                    {{-- id=image3.??? tượng trưng cho file ảnh đã tạo và muốn thay đổi ảnh
                    id=image2.?? tượng trưng cho file ảnh cần thêm vào --}}
                @for($i=0;$i<$vitri;$i++)
                <div class="form-group" id="image1">
                     <label for="customFile"><input type="text" placeholder="category image" required  name="category_image[]" value="{{$image[$i]->category_image}}" id="{{'category_image'.($i+1)}}">
                    <br>
                    <img src="{{asset('admin/product/'.$image[$i]->name_image)}}" width="100px" height="100px" >                      
                    <div class="collapse mt-4" id="">
                        {{-- nơi để tên file ảnh cũ lưa vị trí lấy tối đa ảnh lấy ra --}}
                        <input type="text" name="old_image[]"  value="{{$image[$i]->name_image}}">
                    </div>
                    </label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input"  accept="image/png, image/jpeg"name="image_product[]"id="{{'image3.'.($i+1)}}">
                        <label class="custom-file-label" for="image1">Newfile</label>
                        </div>
                       
                        
                       
                         </div>
                    <span class="form-message"></span>
                </div>
                              
                
                @endfor


                <div id='newimage'>
                    </div>                
                  
               
            </div>
           
            <div class="card-footer">
                <div class="collapse mt-4" id="">
                    {{-- nơi để tên file ảnh cũ lưa vị trí lấy tối đa ảnh lấy ra --}}
                    <input type="text" name="vitri" value="{{$vitri}}" id="vitri">
                </div>
                <span class="input-group-text" onclick="met({{$vitri}})" >hhhhhhh</span>
                <br>
                <span class="input-group-text" onclick="addImage({{$vitri}})" >+</span>

            </div>
            <table>
                <tr>
                    <td width="50%"><a href="{{ route('admin.product.frame.index') }}"
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
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mong muốn của chúng ta
            Validator({
                form: '#form-1',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#name', 'Plese Enter Product Name'),
                    Validator.maxLength('#name', 40, 'Max 40 characters'),
                    Validator.isRequired('#intro', 'Please enter intro'),
                    Validator.isRequired('#content', 'Please enter fearured'),
                    Validator.isRequired('#price', 'Please enter intro'),
                    Validator.checkNumber('#price', 'Please enter Number'),
                 
                    Validator.isRequired('#material', 'Please enter intro'),
                    Validator.isRequired('#size', 'Please enter size'),
                    Validator.isRequired('#nose_pads', 'Please enter Nose Pads'),
                    Validator.checkNumber('#sale', 'Please enter Number'),
                    Validator.maxLength('#sale', 2, 'Sale can not be more than 100'),
                ],
                onSubmit: function(data) {
                    // Call API

                }
            });



        });

        $(function() {
            bsCustomFileInput.init();
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });      
    </script>
@endsection
