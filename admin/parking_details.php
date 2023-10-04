<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parking_details</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <style>
        .container-fluid {
            padding-top: 20px;
            padding-right: 20px;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="header-line"><strong>Parking details</strong></h4>
                </h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead class="thead-dark">
                            <tr>
                                <th>USER_ID</th>
                                <th>USER_NAME</th>
                                <th>USER_VEHICLE_NUMBER</th>
                                <th>SLOT_NUMBER</th>
                                <th>SLOT_DATE</th>
                                <th>START_TIME</th>
                                <th>NUMBER_OF_HOUR</th>
                                <th>EXIT_TIME</th>
                                <th>BOOKING_CODE</th>
                                <th>PAYMENT</th>
                                <th>ACTION(UPDATE_OR_DELETE)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = "SELECT * from parking_details";
                            $result = mysqli_query($conn, $sql);
                            $cnt = 1;
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $data['user_id']; ?></td>
                                    <td class="center"><?php echo strtoupper($data['user_name']); ?></td>
                                    <td class="center"><?php echo $data['user_vehicleno']; ?></td>
                                    <td class="center"><?php echo $data['slot_id']; ?></td>
                                    <td class="center"><?php echo ($data['slot_date']); ?></td>
                                    <td class="center"><?php echo $data['start_time']; ?></td>
                                    <td class="center"><?php echo $data['no_of_hr']; ?></td>
                                    <td class="center"><?php echo $data['exit_time']; ?></td>
                                    <td class="center"><?php echo $data['booking_code']; ?></td>
                                    <td class="center"><?php echo $data['price']; ?></td>
                                    <td><a class="btn btn-primary" href="update_parking_details.php?slot_id=<?php echo $data['slot_id']; ?>">UPDATE</a>&nbsp;
                                        <a class="btn btn-danger" href="source/delete_parking_details.php?slot_id=<?php echo $data['slot_id']; ?>">DELETE</a>
                                    </td>
                                <?php } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>