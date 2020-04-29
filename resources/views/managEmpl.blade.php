@extends('footer')
@section('body')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Of Employees</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Employee Code</th>
                  <th>Username </th>
                  <th>Department(s)</th> 
                  <th>Email </th>     
                  <th>Update Option(s)</th>  
                           
                </tr>
                </thead>
                <tbody>
                @foreach ($employees as $empl )
                    <tr>
                    <td>{{$empl->emplCode}}</td>
                    <td>{{$empl->username}}</td>                  
                    <td>{{$empl->department}}</td>
                    <td>{{$empl->email}}</td>
                    <td>
                    <li>
                      <button type="button" class="btn btn-warning"><a href=""><i class="fa fa-pencil" style="color:black" aria-hidden="true">Edite</i></a></button>                                              
                       <button type="button" class="btn btn-secondary"><a href="deleteEmployee/{{ $empl->emplCode }}" ><i class="fa fa-trash-o" style="color:black" aria-hidden="true">Delete</i></a></button>
                    </li>
                    </td>
                    </tr>                   
                @endforeach

               
                </tbody>
                <tfoot>
                <tr>
                    <th>Employee Code</th>
                    <th>Username </th>
                    <th>Department(s)</th> 
                    <th>Email </th>     
                    <th>Update Option(s)</th>  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 @endsection