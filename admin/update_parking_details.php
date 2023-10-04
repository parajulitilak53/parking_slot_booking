<?php
include('../include/connect.php');
$slot_id=$_GET['slot_id'];
$sql1="SELECT * FROM `parking_details` WHERE slot_id='$slot_id'";
//echo $sql;exit;
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update_parking_details</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <style>
    .card {
        border-radius: 0px;
        padding-bottom: 5px;
    }

    .form-control,
    .btn {
        border-radius: 0px;
        border-left: 0px;
        border-right: 0px;
        border-top: 0px;
    }

    .form-control:focus {
        border-color: inherit;
        box-shadow: none;
    }

    .container-fluid {
        padding-top: 20px;
    }
    </style>
</head>

<body>
    <?php include('header.php');?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>UPDATE DETAILS</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="source/parking_details_update.php?slot_id=<?php echo $slot_id?>" method="post">
                                <small><b>User Name</b></small>
                                <input class="form-control" type="text" value="<?php echo $row1['user_name'];?>"
                                    name="user_name" required><br>
                                  <small><b>User Vehicle No.</b></small>
                                <input class="form-control" type="text" name="user_vehicleno"
                                    value="<?php echo $row1['user_vehicleno'];?>" required><br>
                                <small><b>Slot Date</b></small>
                                <input class="form-control" type="text" value="<?php echo $row1['slot_date'];?>"
                                   name="slot_date" required><br>
                                <small><b>Start Time [hh:mm:AM/PM]</b></small>
                                <input class="form-control" type="time" value="<?php echo $row1['start_time'];?>" 
                                 name="start_time" required><br>
                                <small><b>Number Of Hour</b></small>
                                <input class="form-control" type="text" value="<?php echo $row1['no_of_hr'];?>" 
                                     name="no_of_hr" required><br>
                                <small><b>Exit Time [hh:mm:AM/PM]</b></small>
                                <input class="form-control" type="time" value="<?php echo $row1['exit_time'];?>" 
                                 name="exit_time" required><br>
                                <small><b>Booking Code</b></small>
                                <input class="form-control" type="text" name="booking_code"
                                    value="<?php echo $row1['booking_code'];?>" required><br>
                              
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
</body>

</html>