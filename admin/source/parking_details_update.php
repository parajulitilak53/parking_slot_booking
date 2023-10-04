<?php
include('../../include/connect.php');

$slot_id=$_GET['slot_id'];
if (isset($_POST['submit'])){
    $user_name=$_POST['user_name'];
    $user_vehicleno=$_POST['user_vehicleno'];
   // $user_id=$_POST['user_id'];
    $slot_date=$_POST['slot_date'];
    $start_time=$_POST['start_time'];
    $no_of_hr=$_POST['no_of_hr'];
    $exit_time=$_POST['exit_time'];
    $booking_code=$_POST['booking_code'];
    
$sql="UPDATE `parking_details` SET `user_name`='$user_name',`user_vehicleno`='$user_vehicleno',`slot_date`='$slot_date',`start_time`='$start_time',`no_of_hr`='$no_of_hr',`exit_time`='$exit_time',`booking_code`='$booking_code' WHERE `slot_id`='$slot_id'";
//echo $sql;exit;
$result=mysqli_query($conn,$sql);
}
if(($result) == 1){
    $status=1;
    header("location:../parking_details.php?status=".$status);
    ?>
<div class="alert alert-success" role="alert">Sucessfully Updated!</div>
<?php
    }
    else {
        $status=2;
        header("location:../parking_details.php?status=".$status); ?>
<?php
    }
?>
?>