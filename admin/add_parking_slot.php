<?php include('../include/connect.php');
 /* if (isset($_POST['add'])) {

    $slot_no = $_POST['slot_no'];
    $slot_status = $_POST['slot_status'];

    $sql = "INSERT INTO slot_master 
     VALUES (null,'$slot_no','$slot_status')";
    //echo $sql; exit;
    $result = mysqli_query($conn, $sql);
    if ($result) {
    
    } else {
    
    }
}*/
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add parking slot</title>
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
                        <h4>ADD PARKING SLOTS</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="source/parking_slot_add.php" method="post" enctype="multipart/form-data">
                                <small><b>Slot Number</b></small>
                                <input class="form-control" type="text" placeholder="Enter Slot Number" name="slot_no" required><br>
                                <small><b>Slot Status</b></small>
                                 <input class="form-control" type="number" value="0" placeholder="Enter Slot Status" name="slot_status" disabled><br>
                                 <button type="submit" name="add" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
</body>

</html>