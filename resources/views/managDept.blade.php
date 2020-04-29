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
              <h3 class="card-title">List Of Departments
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Departmment Name</th>
                  <th>Departmment Code</th>
                  <th>Head of Department(s)</th>
                  <th>Update Option(s)</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($departments as $dept )
                    <tr>
                    <td>{{$dept->departmentname}}</td>
                    <td>{{$dept->departmentcode}}</td>
                    <td>{{$dept->headofdept}}</td>
                    <td>
                    <button type="button" class="btn btn-warning"><a href='editDepartment/{{$dept->id}}'><i class="fa fa-pencil" aria-hidden="true">Edit</i></a></button>

                       <button type="button" class="btn btn-warning"><a href='deleteDep/{{ $dept->id }}'><i class="fa fa-trash-o" aria-hidden="true">Delete</i></a></button>
                    </td>
                    </tr>
                @endforeach


                </tbody>
                <tfoot>
                <tr>
                  <th>Departmment Name</th>
                  <th>Departmment Code</th>
                  <th>Head of Department(s)</th>
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
