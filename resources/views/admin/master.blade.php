<!DOCTYPE html>
<html lang="en">
   @include('admin/bloc/head')
   <body class="hold-transition sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Navbar -->
        @include('admin/bloc/main_header')
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         @include('admin/bloc/main_sidebar')
         <!-- Content Wrapper. Contains page content -->
         {{-- chỗ đễ @yilde('body1') --}}
         @include('admin/bloc/content_wrapper')
         <!-- /.content-wrapper -->
         @include('admin/bloc/main_footer')
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
           
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      @include('admin/bloc/script')
   </body>
</html>
