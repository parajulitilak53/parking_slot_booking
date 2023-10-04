<?php
include('../../include/connect.php');
$slot_id=$_GET['slot_id'];
$sql="DELETE FROM `parking_details` WHERE slot_id='$slot_id'";
$result=mysqli_query($conn,$sql);
//echo $sql;exit;
header('location:../parking_details.php');
if($result==true){
	echo "data deleted";
}
?>