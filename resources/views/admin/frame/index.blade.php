@extends('admin/master')
@section('head')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <!-- Theme style -->
  <script>
  function deletehay(){
    if(window.confirm('Are you sure you want to delete')== true ){
        return true;
    }
    return false;
}
</script>
@endsection

@section('body1')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          @if($success=Session::get('Success'))
          <div class="alert alert-success alert-dismissible">
           
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>Success</h5>
            {{$success}}
          </div>
          @endif

          @if($errors=Session::get('Errors'))
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Errors!</h5>
           {{$errors}}
            </div>
        </div>
        @endif
          <!-- /.card-header -->
         
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
           <table>
            <tr>
              <td width="90%"><h3 class="card-title">Frame</h3></td>
              <td width=""></td>        
              <td width="20%"> <a  href="{{route('admin.product.frame.create')}}" align="right"  class="btn btn-block btn-info">Create new</a></td>
            </tr>
           
           </table>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Image</th>
               
                <th>Featured</th>
             
            <th>Price</th>
            <th>Sale</th>
            <th>Created at</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Country</th>
            <th>Content</th>
              </tr>
              </thead>
              <tbody>
               @foreach($data1 as $DATA1)
                <tr>
                    <td>{{$DATA1->name_product}}<br>
                    <a onclick="return deletehay()" href="{{route('admin.product.frame.delete',['id'=>$DATA1->id_product])}}"><span class="badge bg-danger">Delete</span></a>
                    <a  href="{{route('admin.product.frame.edit',['id'=>$DATA1->id_product])}}"><span class="badge bg-primary">Edit</span></a>
                    <a  href="{{route('admin.product.frame.detail',['id'=>$DATA1->id_product])}}"><span class="badge badge-warning">Detail</span></a>
                    </td>
                    <td><img width="100px"   height="100px" src="{{asset('admin/product/'.$DATA1->name_image)}}"></td>
                   
                    <td>@if($DATA1->featured_product==1) Hot @else Normal @endif</td>
                    
                    <td>{{$DATA1->price_product}}</td>
                    <td>@if($DATA1->sale_product){{$DATA1->sale_product}}% @else 0% @endif</td>
                    <td>{{date('d/m/Y H:i:s',strtotime($DATA1->created_product))}}</td>
                    <td>{{$DATA1->name_category}}</td>
                    <td>{{$DATA1->name_brand}}</td>
                    <td>{{$DATA1->name_country}}</td>
                    <td>{{$DATA1->content_product}}</td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Name</th>
                <th>Image</th>
              
                <th>Featured</th>
              
            <th>Price</th>
            <th>Sale</th>
            <th>Created at</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Country</th>
             <th>Content</th>  
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
@endsection
@section('script')
<!-- Bootstrap 4 -->

<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection


