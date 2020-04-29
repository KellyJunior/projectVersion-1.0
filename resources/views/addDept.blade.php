@extends('footer')
@section('body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Departments Session</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Departments Session</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Department Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('addDept')}}" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="departmentname">Department Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="departmentname" placeholder="Name of The Deaprtment">
                      @error('departmentname')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="departmentcode">Department Code</label>
                    <input type="text" class="form-control" name="departmentcode" id="exampleInputPassword1" placeholder="Code Of The Department">
                    @error('departmentcode')
                      <div>{{$message}}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                    <label for="headofdep">Head Of Department</label>
                    <input type="text" class="form-control" name="headofdept" id="exampleInputPassword1" placeholder="Name of the HOD">
                    @error('headofdep')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                 
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection

