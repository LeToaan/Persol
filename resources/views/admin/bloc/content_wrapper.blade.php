<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1>{{Auth::user()->name_account}}</h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                   <li class="breadcrumb-item active"><a href="{{url('/')}}">Shop</a></li>
                </ol>
             </div>
          </div>
       </div>
       <!-- /.container-fluid -->
       {{-- chỗ đễ body1 --}}
    </section>
    @yield("body1")
    <section class="content">
       <!-- Default box -->
      
       <!-- /.card -->
    </section>
    <!-- /.content -->
 </div>