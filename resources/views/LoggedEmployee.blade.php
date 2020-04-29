@extends('footer')
@section('body')
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
                        $countEmpl = \App\Employee::all()->count();
                        echo($countEmpl);                      
                      ?>
                </h2>

                <p>Total Number Of Requested Leaves </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="managEmpl" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h2>
                      <?php
                          $totalDepartment =\App\department::all()->count();
                        echo($totalDepartment) ; ?>
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
                     
                        $totalAcceptedLeaves=\App\applicationLeaveModel::all()->count();
                        echo("Refused Leaves: ".$totalAcceptedLeaves);
                     
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
          </div>
          
          <!-- ./col -->
       
          </section>           
@endsection
    
