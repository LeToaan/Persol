<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
    <img src="{{asset('admin/dist/img/images.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminPersol</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar user (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
             <img src="{{asset('admin/user/'.((!empty(Auth::user()->image_account))?Auth::user()->image_account:'user.png'))}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
             <a href="#" class="d-block">{{Auth::user()->username_account}}</a>
          </div>
       </div>
       <!-- SidebarSearch Form -->
       <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
             </div>
          </div>
       </div>
       <!-- Sidebar Menu -->
       <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
             <li class="nav-item">
                <a href="{{route('admin.home')}}" class="nav-link">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                      Home
                     
                   </p>
                </a>
               
             </li>
           
          
             <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user fa-fw" style="color: var(--fa-navy);"></i>
                   <p>
                      Account
                      <i class="right fas fa-angle-left"></i>
                   </p>
                </a>
                <ul class="nav nav-treeview">
                   <li class="nav-item">
                      <a href="{{route('admin.user.index')}}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Index</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{route('admin.user.create')}}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Create</p>
                      </a>
                   </li>
                  
                </ul>
             </li>
            
             <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="fab fa-product-hunt fa-fw" style="color: var(--fa-navy);"></i>
                  <p>
                     Product
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                      
                        <p>
                           Category
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{route('admin.category.index')}}" class="nav-link">
                              
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Index</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('admin.category.create')}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Create</p>
                           </a>
                        </li>
                       
                     </ul>
                  </li>


                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        
                        <p>
                           Brand
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{route('admin.brand.index')}}" class="nav-link">
                              
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Index</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('admin.brand.create')}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Create</p>
                           </a>
                        </li>
                       
                     </ul>
                  </li>



                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                       
                        <p>
                          Country
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{route('admin.country.index')}}" class="nav-link">
                           
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Index</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('admin.country.create')}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Create</p>
                           </a>
                        </li>
                       
                     </ul>
                  </li>




                  <li class="nav-item">
                     <a href="#" class="nav-link">
                       
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                         Frame
                         <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{route('admin.product.frame.index')}}" class="nav-link">
                              <p>     </p>
                              <i class="far fa-dot-circle nav-icon"></i>
                              
                              <p>Index</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('admin.product.frame.create')}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Create</p>
                           </a>
                        </li>
                       
                     </ul>
                  </li>




                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                       
                        <p>
                          Lenses
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{route('admin.product.lenses.index')}}" class="nav-link">
                              
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Index</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route("admin.product.lenses.create")}}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Create</p>
                           </a>
                        </li>
                       
                     </ul>
                  </li>


                  
               </ul>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="fas fa-trash fa-fw" style="color: var(--fa-navy);"></i>

                  <p>
                   Garbage
                   <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{route('admin.garbage.product.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>product</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('admin.garbage.member.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Account</p>
                     </a>
                  </li>
                 
               </ul>
            </li>

          </ul>
       </nav>
       <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>