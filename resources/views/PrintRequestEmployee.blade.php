@extends('footer')
@section('body')


<section class="content-header">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Welcome Mr/Ms   {{ Auth::user()->firstName }}    {{ Auth::user()->lastName}} To Yours activities Backup</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>               
                <th>Email</th>
                <th>Department(s)</th>  
                <th>Reason(s)</th>  
                <th>Status</th> 
                <th>Date </th>
                <th>Update Options</th>            
              </tr>
              </thead>
            
              <tbody>
              
                @foreach ($leaveInsert as $leaveInsert )
                    <tr>
                    <td>{{$leaveInsert->email}}</td> 
                    <td>{{$leaveInsert->department}}</td>
                    <td>{{$leaveInsert->reason}}</td>
                    <td>{{$leaveInsert->Status}}</td>
                    <td>{{$leaveInsert->created_at}}</td>
                    <td>
                      <li>
                        <button type="button" class="btn btn-warning"><a href="#"><i class="fas fa-edit">Edit</i></a></button>
                        <button type="button" class="btn btn-warning"><a href="deleteRequestUser/{{ $leaveInsert->id }}"><i class="far fa-trash-alt">Delete</i></a></button>                       
                      </li>                   
                    </td>              
              @endforeach
            </tbody>
              <tfoot>
              <tr>             
                <th>Email</th>
                <th>Department(s)</th>  
                <th>Reason(s)</th>   
                <th>Status</th>
                <th>Date</th>
                <th>Update Options</th>  
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