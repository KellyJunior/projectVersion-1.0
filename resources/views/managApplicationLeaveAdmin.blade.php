@extends('footer')
  @section('body')
  
  <section class="content-header">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Of Departments</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Department(s)</th>  
                  <th>Reason(s)</th>  
                  <th>Status</th> 
                  <th>Update Option(s)</th>            
                </tr>
                </thead>
                <tbody>
                @foreach ($leaveInsert as $leaveInsert )
                    <tr>
                    <td>{{$leaveInsert->username}}</td>
                    <td>{{$leaveInsert->email}}</td>                  
                    <td>{{$leaveInsert->department}}</td>
                    <td>{{$leaveInsert->reason}}</td> 
                    <td>{{$leaveInsert->Status}}</td>
                    <td>                 
                    <li>
                    <a href="/project/public/respondRequest/{{$leaveInsert->id}}"><i class="fa fa-pencil" aria-hidden="true">Proceed</i></a>
                       <a href="#DeleteRequest"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                      </li>
                    </td>
                    </tr>                   
                    @endforeach
               
                </tbody>
                <tfoot>
                <tr>
                <th>Username</th>
                  <th>Email</th>
                  <th>Department(s)</th>  
                  <th>Reason(s)</th>   
                  <th>Status</th>
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