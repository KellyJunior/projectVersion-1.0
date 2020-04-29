@extends('footer')
@section('body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Leave Management Session</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Leave Management Session</li>
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
                <h3 class="card-title">Add New Leave Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('addLeave')}}" method="POST">
              @csrf
                <div class="card-tools">
                  <div class="form-group">
                    <label for="departmentname">Leave Type</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="leaveType" placeholder="Type of The Leave">
                      @error('leaveType')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="departmentname">Leave's Duration (days)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="leaveDuration" placeholder="Duration Of the Leave">
                      @error('leaveDuration')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                 
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                        <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                    
                    <!-- /.card-header -->
                    <div class="card-body pad">
                    <div class="mb-3">
                        <textarea class="textarea"name="leaveDescription" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    
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

