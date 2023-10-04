<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
	header("location:user_login.php");
}

include('include/connect.php');

require_once __DIR__ . '/vendor/autoload.php';

$booking_code = $_GET['ID'];
$sql = "SELECT * FROM parking_details WHERE booking_code=$booking_code";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//create new PDF instance
$mpdf = new \Mpdf\Mpdf();
//create pdf
$data = '';

$data .= '
    <style>
    .container {
        padding-top: 20px;
    }

    .card {
        border-radius: 0px;
	}
	h2,h3 {
		text-align:center;
	}
	</style>
	<body>
	<div style="text-align:center;border:3px solid black;">
	<h2>ONLINE PARKING BOOKING</h2>

		<div class="card" style="padding:3px;border: 2px solid black;border-left:none; border-right:0px;border-radius:0px;">
		
		TICKET NUMBER : ' . $row['booking_code'] . '
		</div><br>
        USER NAME :  '.$row['user_name'] . '<br><hr>
        SLOT NUMBER : ' . $row['slot_id'] . '<br><hr>
        DATE : ' . $row['slot_date'] . '<br><hr>
        START TIME : ' . $row['start_time'] . '<br><hr>
        EXIT TIME : ' . $row['exit_time'] . '<br><hr>
		VEHICLE NUMBER : ' . $row['user_vehicleno'] . '<br><hr>
		TOTAL PRICE : Rs' . $row['no_of_hr'] * 10 . '<br><hr>
		<b>PLEASE SHOW THIS DETAILS DURING ENTRY & EXIT</b><br>
		</div>
		</body>';



$mpdf->WriteHTML($data);
$mpdf->Output('parking_booking_reciept.pdf', 'D');
		
	header('location:user_dashboard.php');
