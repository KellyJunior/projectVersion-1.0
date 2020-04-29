@extends('navbar')
@section('sidebar')
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
    @if(Auth::user()->role_id==1)
          <li class="nav-item has-treeview menu-open">
            <a href="/project/public/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DashBoard             
              </p>
            </a>
           
                
            
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fa fa-building-o" aria-hidden="true"></i>
              <!-- <i class="nav-icon fa fa-building-o" ></i> -->
              <p>
                Departments
                
              <i class="fas fa-angle-left right"></i> 
              
              </p>
            </a>

           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addDept" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Department</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="managDept" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Depatments</p>
                </a>
              </li>
              
             
            </ul>
          </li>
        
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Leave Type operations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addLeave" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Leave</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="managLeave" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Leaves</p>
                </a>
              </li>
              
            </ul>

          </li>
          
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
              <p>
               Employees
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="managEmpl" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Employees Details</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          
         

      <li class="nav-item has-treeview menu-open">
        <a href="emplInfo" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            My Personal Information             
          </p>
        </a>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
          <p>
           Employees Options
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="applLeave" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Apply for Leave</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="leavePerEmployee" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Status Of Leave Request</p>
            </a>
          </li>
       </ul>
      </li>
  @endif

  @if(Auth::user()->role_id==2)

              <li class="nav-item has-treeview">
                <a href="{{ url('managApplicationLeaveAdmin') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Leave Management Options                   
                  </p>
                </a>               
              </li>

          <li class="nav-item has-treeview menu-open">
            <a href="emplInfo" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                My Personal Information             
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
              <p>
               Employees Options
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="applLeave" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Apply for Leave</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="leavePerEmployee" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status Of Leave Request</p>
                </a>
              </li>
           </ul>
          </li>
  @endif

  @if(Auth::user()->role_id==3)
  <li class="nav-item has-treeview menu-open">
    <a href="emplInfo" class="nav-link ">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        My Personal Information             
      </p>
    </a>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
    <i class="fa fa-user-circle" aria-hidden="true"></i>
      <p>
       Employees Options
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="applLeave" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Apply for Leave</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="leavePerEmployee" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Status Of Leave Request</p>
        </a>
      </li>
     
   </ul>
  </li>

  @endif
         
         
          
          
       <!--Code for logging out from the application--!>
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