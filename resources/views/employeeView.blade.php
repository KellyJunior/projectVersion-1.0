@extends('footer')
@section('body')
   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->email }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="emplInfo" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                My Personal Inormation             
              </p>
            </a>
            
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fa fa-building-o" aria-hidden="true"></i>
              <!-- <i class="nav-icon fa fa-building-o" ></i> -->
              <p>
                Apply For Leave
                
              <i class="fas fa-angle-left right"></i> 
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="applLeave" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Application Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status Of Leave Request</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          
              
           
          
          </li>
          
         
        <!--- Logout code--->        
            <li class="nav-header">ACTION</li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        {{ __('Logout') }}
                                    
                                    </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
           </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
@endsection