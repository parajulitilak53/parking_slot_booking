<?php include('../../include/connect.php');

  if (isset($_POST['add'])) {
    
    $slot_no = $_POST['slot_no'];
    $slot_status = $_POST['slot_status'];

    $sql = "INSERT INTO slot_master 
     VALUES (null,'$slot_no','$slot_status')";
    //echo $sql; exit;
    $result = mysqli_query($conn, $sql);
    if ($result) {
    	header('location:../manage_slots.php');
    
    } else {
    	header('location:../add_parking_slot.php');
    
    }
}
 ?>