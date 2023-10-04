<?php
	include('../include/connect.php');

	$checkOutTicketNo=$_GET['bookingID'];
	$Amount=$_POST['price'];

	$payload = $_POST['khalti'];

	$args = http_build_query(array(
	    'token' => $payload['token'],
	    'amount'  => $Amount*100 //always manipulate amount from server side 
	));

	$url = "https://khalti.com/api/v2/payment/verify/";

	# Make the call using API.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$headers = ['Authorization: Key test_secret_key_2cf50c6787244b51951556dfb095b934'];
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	// Response
	$response = curl_exec($ch);
	$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);

	if (isset($payload['idx']) && $status_code == 200){
		$qry=mysqli_query($conn,"UPDATE parking_details SET price='$Amount',status=1 WHERE booking_code='$checkOutTicketNo'");
		if($qry){
			$qry1=mysqli_query($conn,"SELECT * from parking_details WHERE booking_code='$checkOutTicketNo'");
			$result=$qry1->fetch_assoc();
			$slotValue=$result['slot_id'];
			$qry2=mysqli_query($conn,"UPDATE slot_master SET status=1 WHERE slot_id='$slotValue'");
		}
		echo "true";
	}else{
		echo "false";
	}
?>