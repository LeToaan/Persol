@extends('admin/master')
@section('head')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Theme style -->
    <script>
        function deletehay() {
            if (window.confirm('Are you sure you want to delete') == true) {
                return true;
            }
            return false;
        }
    </script>
@endsection

@section('body1')
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$MonthUser}}</h3>
                    <p>Month User</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                   
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$product}}</h3>
                    <p>Product</p>
                </div>
                <div class="icon">
                    <i class="fab fa-product-hunt fa-fw" style="color: var(--fa-navy);"></i>
                </div>
                <a href="#" class="small-box-footer">
               
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$user}}</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                   
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$admin}}</h3>
                    <p>Admin</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-tie fa-fw" style="color: var(--fa-navy);"></i>
                </div>
                <a href="#" class="small-box-footer">
                   
                </a>

                </a>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <!-- Bootstrap 4 -->

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->

    <!-- AdminLTE for demo purposes -->

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
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
