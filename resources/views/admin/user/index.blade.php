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
              <td width="90%"><h3 class="card-title">Account</h3></td>
              <td width=""></td>        
              <td width="20%"> <a  href="{{route('admin.user.create')}}" align="right"  class="btn btn-block btn-info">Create new</a></td>
            </tr>
           
           </table>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Adress</th>
                <th>Email</th>
               
                <th>Phone</th>
                <th>Gender</th>
                <th>Image</th>
                <th>BirthDay</th>
                <th>Rank</th>
                <th>Pass</th>
              </tr>
              </thead>
              <tbody>
               @foreach($data1 as $DATA1)
                <tr>
                    <td>{{$DATA1->name_account}}<br>
                    <a onclick="return deletehay()" href="{{route('admin.user.delete',['id'=>$DATA1->id])}}"><span class="badge bg-danger">Delete</span></a>
                    <a  href="{{route('admin.user.edit',['id'=>$DATA1->id])}}"><span class="badge bg-primary">Edit</span></a>
                    </td>
                    <td>{{$DATA1->username_account}}</td>
                    <td>{{$DATA1->adress_account}}</td>
                    <td>{{$DATA1->email_account}}</td>                   
                    <td>{{$DATA1->phone_account}}</td>
                    <td>@if($DATA1->gender_account==0) Male @elseif ($DATA1->gender_account==1) Felmale @else Other @endif </td>
                    <td><img src="{{asset('admin/user/'.((!empty($DATA1->image_account))?$DATA1->image_account:'user.png'))}}" width="100px" height="100px"></td>
                    <td>{{date('d/m/Y',strtotime($DATA1->dob_account))}}</td>
                    <td>@if($DATA1->rank_account==1) Supperadmin @elseif ($DATA1->rank_account==2) Admin @else User @endif </td>
                    <td>{{$DATA1->pass_account}}</td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>name</th>
                <th>Adress</th>
                <th>Email</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Image</th>
                <th>BirthDay</th>
                <th>Rank</th>
                <th>Pass</th>
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