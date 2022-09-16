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
    <form method="post" action="{{ route('admin.product.frame.index')}}" enctype="multipart/form-data" id="form-1">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Product</h3>
            </div>
            <div class="card-body" id='cardBody'>
                <div class="form-group  ">
                    <label>Name:{{$product->name_product }}</label>
                   
                  
                </div>
              
                <div class="form-group  ">
                    <label>Featured:@if($product->featured_product==1) Hot @else Normal @endif</label>
                    
                </div>
                <div class="form-group  ">
                    <label>Content:{{$product->content_product}}<br>
                       
                    </label>
                   
                    <span class="form-message"></span>
                </div>
                <div class="form-group  ">
                    <label>Price:{{ $product->price_product }}</label>
                    
                    <span class="form-message"></span>
                </div>
                <div class="form-group  ">
                    <label>Sale:@if($DATA1->sale_product){{$DATA1->sale_product}}% @else 0% @endif</label>
                    
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label>Category:{{$product->name_category}}</label>
                   
                  </div>

                  <div class="form-group">
                    <label>Brand:{{$product->name_brand}}</label>
                    
                  </div>


                  <div class="form-group">
                    <label>Country:{{$product->name_country}}</label>
                   
                  </div>

               


                <div class="form-group  ">
                    <label>Material:{{ $properties->material }}</label>
                 
                    <span class="form-message"></span>
                </div>

                <div class="form-group  ">
                    <label>Extract:{{ $properties->extract }}</label>
                
                    <span class="form-message"></span>
                </div>
                <div class="form-group  ">
                    <label>Special:{{ $properties->special }}</label>
                
                    <span class="form-message"></span>
                </div>
                <div class="form-group  ">
                    <label>Coating:{{ $properties->coating }}</label>
                
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
                @foreach($image as $IMAGE)
                <div class="form-group" id="image1">
                     <label for="customFile">{{$IMAGE->category_image}}:
                    <br>
                    <img src="{{asset('admin/product/'.$IMAGE->name_image)}}" width="100px" height="100px" >                      
                    
                    </label>
                    
                       
                         
                  
                </div>
                              
                
                @endforeach


                <div id='newimage'>
                    </div>                
                  
               
            </div>
           
            <div class="card-footer">
                <div class="collapse mt-4" id="">
                    {{-- nơi để tên file ảnh cũ lưa vị trí lấy tối đa ảnh lấy ra --}}
                
                </div>
               

            </div>
            <table>
                <tr>
                    <td width="50%"><a href="{{ route('admin.product.frame.index') }}"
                            class="btn btn-block btn-success">Return Index</a></td>
                    
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
                    // Validator.isRequired('#name', 'Vui lòng nhập tên đầy đủ'),
                    // Validator.maxLength('#name', 40, 'bạn đã vượt quá số ký tự cho phép'),
                    Validator.isImage('#exampleInputFile','File ko phải file ảnh'),
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
