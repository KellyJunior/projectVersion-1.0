@extends('footer')
  @section('body')

  
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Leave Application Form</h3>
          </div>
          @if(count($errors)>0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($erroros->all() as $error)
              <li>{{$errors}}</li>                      
                  @endforeach
              </ul>
          </div>

          @endif

          
          <!-- /.card-header -->
          <!-- form start -->
        <form role="form" action="/project/public/respondRequest/<?php echo $users[0]->id; ?>" method="POST">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" name="username"  value="<?php echo $users[0]->username; ?>" id="exampleInputEmail1" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $users[0]->email; ?>" id="exampleInputPassword1" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Department</label>
                <input type="text" class="form-control" name="department" value="<?php echo $users[0]->department; ?>" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Type Of Leave</label>
              <input type="text" class="form-control" name="reason" value="<?php echo $users[0]->reason; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Status</label>
            
              <select id="inputState" name="Status" value="<?php echo $users[0]->Status; ?>" class="form-control">
                <option>...Loading</option>
                <option selected>Accepted</option>
                <option>Refused</option>
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
            
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
  </div>
      
  @endsection
 