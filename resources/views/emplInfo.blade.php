@extends('footer')
@section('body')


        <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h2>
            
                  <?php                      
                    $leaveInsert= \App\applicationLeaveModel::where('email',Auth::user()->email)->count();
                    echo($leaveInsert);                      
                  ?>
            </h2>

            <p>Total  Requested Leaves </p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="leavePerEmployee" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h2>
                  <?php
                  $email= \App\applicationLeaveModel::where('email',Auth::user()->email)->get();
                     if($email){
                      $acceptedLeave= \App\applicationLeaveModel::where('Status','Accepted')->count();
                      echo($acceptedLeave) ;
                     }
                     ?>
            </h2>
            

            <p>Total Number of Accepted Leaves </p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ url('managApplicationLeaveAdmin') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <!-- Php code to count the number of Acceped requests in the database-->
            <h4>
                 <?Php 
                    $email= \App\applicationLeaveModel::where('email',Auth::user()->email)->get();
                    $refusedLeaves=\App\applicationLeaveModel::where('Status','Refused')->count();
                    echo("Refused Leaves: ".$refusedLeaves);
                 
                 ?>

            </h4>

            <p> <?php echo"Date :".date('Y/m/d');  ?></p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h6>
              <?Php 
                    /* Here finding the number of active employees per day
                    totalactive= Totalemployee-totalAcceptedLeave*/
                    //The value  of totalactive SHould be + and calcualted per day.
                    $countEmpl = \App\Employee::all()->count();
                    $totalAccepted=\App\applicationLeaveModel::where('Status','accepted')->count();
                    $totalactive= $countEmpl-$totalAccepted;
                    echo("Active Number of Employees:".$totalactive);                                   
                 ?>
            </h6>

            <p><?php echo"Date :" .date('Y/m/d');  ?></p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div></div></div>
    
    <div class="card">
      <h5 class="card-header" style=""><i class="fas fa-user-cog"></i>  Welcome {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</h5>
      <div class="row">
        <div class="col-lg-12 col-md-6 ">
        <img src="{{asset('dist/img/user1-128x128.jpg') }}" alt="" class="img-circle img-fluid" style="float:right;">
        <div class="col-7">
         
          <ul class="ml-4 mb-0 fa-ul text-muted">
          <li class="small"><span class="fa-li"><i class="fas fa-user"></i></span><h5>  Username   : {{Auth::user()->username}}</h5></li>
            <br><li class="small"><span class="fa-li"><i class="fas fa-briefcase"></i></span><h5>Department: {{Auth::user()->department}}</h5></li>
            <br><li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <h5> Address: {{ Auth::user()->address }} </h5></li>
            <br><li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span><h5> Phone : {{ Auth::user()->mobileNumber }}</h5></li>
            <br><li class="small"><span class="fa-li"><i class="fa fa-envelope" aria-hidden="true"></i></span><h5> Email: {{ Auth::user()->email }}, {{ Auth::user()->address }}</h5></li>
            <br><li class="small"><span class="fa-li"><i class="fa fa-glide-g" aria-hidden="true"></i></span> <h5>Gender #: {{ Auth::user()->gender }}</h5></li>
          </ul>
        </div>       
      </div>   
      <div class="col-lg-6 col-md-6 col-sm-12">        
      </div>        
      </div>
      <div class="card-footer">
        <div class="text-right">
          <a href="#" class="btn btn-sm bg-teal">
            <i class="fas fa-comments"></i>
          </a>
          <a href="#" class="btn btn-sm btn-primary">
            <i class="fas fa-user"></i> View Profile
          </a>
        </div>
      </div>
    </div>
</section>
@endsection