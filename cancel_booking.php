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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <title>View Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style type="text/css">
      label{
        font-weight: bold;
      }
      input{
        background-color: white;
        border: white;
        font: bold;
      }

      i.fa.fa-angle-double-right:hover {
        color: black;
      }
    </style>
    
  </head>
  <body>
    <?php include('header_user.php'); ?>
    <?php

    $user_id=$_GET['user_id'];
        $sql="SELECT * FROM parking_details WHERE user_id='$user_id'";
        //echo $sql;exit;
        $result=mysqli_query($conn,$sql);
        if (!$result) {
             echo( mysqli_error($connection));
             echo "No Data Found";
            exit();
        }else{
        while($row=mysqli_fetch_array($result)){
            ?>
        <div class="container">
        <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 align="center">Booking Details</h4>                  
                </div>             
                 <div class="card-body">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">

                                      <label>Ticket Number:<span>
                                      <input name='ticketNumber' value="<?php echo $row['booking_code']; ?>" disabled></span></label><br>

                                      <label>User Name:<span>
                                      <input name='userName' value="<?php echo $row['user_name']; ?>" disabled></span></label><br>

                                      <label >Slot Number:<span>
                                      <input name='slotNumber' value="<?php echo $row['slot_id']; ?>" disabled></span></label><br>

                                      <label>Date: <span>
                                      <input name='date' value="<?php echo $row['slot_date']; ?>" disabled></span></label><br>
                 
                                      <label>Start Date: <span>
                                      <input name='startTime' value="<?php echo $row['start_time']; ?>"disabled></span></label><br>

                                      <label>Exit Date: <span>
                                      <input name='exitTime' value="<?php echo $row['exit_time']; ?>" disabled></span></label><br>

                                      <label>Vehicle Number: <span>
                                      <input name='vehicleNumber' value="<?php echo $row['user_vehicleno']; ?>"disabled></span></label><br>

                                      <label>Total Price: Rs.<span>
                                      <input name='price' value="<?php echo $row['no_of_hr'] *10; ?>" size='5' disabled>(*Rs.10 per hour) </span> </label><br>

                                       <form>
                                          <center>   
                                                <a href="source/confirm_cancel_booking.php?user_id=<?php echo $user_id;?>" class="btn btn-danger">Cancel</a>
                                            </center>
                                        </form>
                                   </div>

                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3"></div>
             </div>
                    
        </div>
        <?php

    }
}
?>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

  </body>
   <?php include('footer.php'); ?>

</html>