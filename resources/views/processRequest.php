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
              <form role="form" action="/edit/<?php echo $leaveInsert[0]->id; ?>" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" value="{{$leaveInsert->username}}" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$leaveInsert->email}}" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                    <input type="text" class="form-control" name="department" value="{{$leaveInsert->department}}" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Department</label>
                    <input type="text" class="form-control" name="department" value="{{$leaveInsert->reason}}" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group">
                   <label for="exampleInputPassword1">Status</label>
                   
                   <select id="inputState" class="form-control" name="Status" value="Status">
                            <option value="">In Process</option>
                            <option selected>Refused</option>
                            <option>Accepted</option>
                   </select>

                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection