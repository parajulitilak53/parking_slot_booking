<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("location:user_login.php");
}
include('include/connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Search Parking Details!</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <style type="text/css">
      label{
        font-weight: bold;
      }
      input{
        background-color: white;
        border: white;
      }

      i.fa.fa-angle-double-right:hover {
        color: black;
      }
    </style>
  </head>
  <body>
   <?php include('header_user.php'); ?>
   <div class="container">
        <div class="col-md-12 tm-4">
            <div class="card">
                <div class="card-header">
                    <h4 align="center">Search Parking Details</h4>                  
                </div>             
              <div class="card-body">
                    <div class="col-md-6">
                        <form action="" method="POST">
                            <div class="form-group">
                             <input type="text" name="get_booking_code" class="form-control" placeholder="Enter Booking Code" required="">   
                            </div>
                            <button type="submit" class="btn btn-primary" name="search_by_booking_code">Search</button>
                        </form>
                    </div>
                    
                </div>
                <?php
                if (isset($_POST['search_by_booking_code'])) 
                {
                    $bookingCode = $_POST['get_booking_code'];
                    $query = "SELECT * FROM parking_details WHERE booking_code= '$bookingCode'";
                    $query_run = mysqli_query($conn, $query);

                ?>
               <div class="card-body">
                    <div class="col-md-12">
                        <form>
                            <?php
                             if (mysqli_num_rows($query_run)>0) 
                    {
                              while ($row = mysqli_fetch_array($query_run)) 
                              {

                            ?>

                            <div class="form-group">
                              
                              <div style='margin-top: 50px; color: black; border: 1px solid #8c8c8c;'>
                                 <div style='float: left; text-align:left; margin-top:20px;'>

                                      <label>Ticket Number:<span>
                                      <input name='ticketNumber' value='<?php  echo $row['booking_code'];?>' disabled></span></label><br>

                                      <label>User Name:<span>
                                      <input name='userName' value='<?php  echo $row['user_name'];?>' disabled></span></label><br>

                                      <label >Slot Number:<span>
                                      <input name='slotNumber' value="<?php  echo $row['slot_id'];?>" disabled></span></label><br>

                                      <label>Date: <span>
                                      <input name='date' value="<?php  echo $row['slot_date'];?>" disabled></span></label><br>
                 
                                      <label>Start Date: <span>
                                      <input name='startTime' value="<?php  echo $row['start_time'];?>" disabled></span></label><br>

                                      <label>Exit Date: <span>
                                      <input name='exitTime' value="<?php  echo $row['exit_time'];?>" disabled></span></label><br>

                                      <label>Vehicle Number: <span>
                                      <input name='vehicleNumber' value="<?php  echo $row['user_vehicleno'];?>" disabled></span></label><br>

                                      <label>Total Price: Rs.<span>
                                      <input name='price' value='<?php echo $row['no_of_hr'] * 10; ?>' size='5' disabled>(*Rs.10 per hour) </span> </label><br>

                                 </div>

                              </div>
                          </div>
                          <?php
                            }
                        }
                        else
                        {
                             ?>
                             <form>
                                 <input type="text" name="nodata" value="No Record Found" disabled>
                             </form>
                           
                           <?php

                        }
                          ?>
                        </form>
                    </div>
                    
                </div>
                <?php
                }
                ?>
                
            </div>
            
        </div>
   </div>
    <?php include('./footer.php')?>;
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>