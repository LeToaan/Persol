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
          <div class="card-header">
            <h3 class="card-title">Category</h3>
          </div>
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
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <table>
              <tr>
                <td width="90%"><h3 class="card-title">Category</h3></td>
                <td width=""></td>        
                <td width="20%"> <a  href="{{route('admin.category.create')}}" align="right"  class="btn btn-block btn-info">Create new</a></td>
              </tr>
             
             </table>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Delete</th>
                <th>Edit</th>
              </tr>
              </thead>
              <tbody>
            <?php
            printparent($data1)
            ?>
              </tbody>
              <tfoot>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Delete</th>
                <th>Edit</th>
                
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



@endsection