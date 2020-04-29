@extends('footer')
  @section('body')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Employee</h3>

<form role="form" action="{{ url('register') }}" method="POST">
        @csrf
          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Employee Code</label>
                  <input type="text" placeholder="Employee Code(Unique)" name="emplCode" class="form-control select2" style="width: 100%;">                  
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" placeholder="Employee first name" name="firstName" class="form-control select2" style="width: 100%;">                  
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" placeholder="Employee last name" name="lastName" class="form-control select2" style="width: 100%;">                  
                </div>
              </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" placeholder="Employee  email" class="form-control @error('email') is-invalid @enderror" style="width: 100%" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                 
                </div>
            </div>

              
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>
                        <input id="password"  placeholder="Employee  password" type="password" class="form-control @error('password') is-invalid @enderror" style="width: 100%" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
             </div>
             

             <div class="col-md-6">
                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>
                        <input id="password"  placeholder="confirm password" type="password" class="form-control @error('password') is-invalid @enderror" style="width: 100%" name="password_confirmation" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
             </div>
             

             

              <div class="col-md-6">
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control select2" name="gender" style="width: 100%;">
                    <option selected="selected">Masculin</option>
                    <option>Female</option>
                  </select>
                </div>
              </div>

              
                <!--- --->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Department</label>
                  <select class="form-control select2" name="department" style="width: 100%;">
                    <option selected="selected">Web Front End</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
                <!-- /.form-group -->

                <div class="col-md-6">
                <div class="form-group">
                  <label> Address</label>
                  <input type="text" placeholder="Employee  Address" name="address" class="form-control select2" style="width: 100%;">                  
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label> Mobile Number</label>
                  <input type="text" placeholder="Employee  Mobile Number" name="mobileNumber" class="form-control select2" style="width: 100%;">                  
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label> Date Of Birth</label><br>
              <input type="text" placeholder="yyyy/mm/dd" name="dateOfBirth" data-date-inline-picker="true" />
              </div>
              </div>

              <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>


                <!-- /.form-group -->
              </div>
              
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
</form>
          <!-- /.card-body -->
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->

@endsection

