@extends('footer')
@section('body')

<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Leave Application Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('applLeaveInsert') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="EmplCodeFirstname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                        <select class="form-control select2" name="department" style="width: 100%;">
                                @foreach ($departments as $dept )
                                  <option>{{$dept->departmentname}}</option>
                                @endforeach
                        </select>
                 </div>



                  <div class="form-group">
                    <label for="exampleInputPassword1">Type Of Leave</label>         
                        <select class="form-control select2" name="reason" style="width: 100%;">
                          @foreach ($leave as $leave )
                              <option>{{$leave->leaveType}}</option>
                            @endforeach
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file(justification)</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection