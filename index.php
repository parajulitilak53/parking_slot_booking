<?php include('include/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {

            background-position: center;
            width: 100%;
            height: auto;
        }

        .container {
            text-align: center;
        }

        .card {
            margin-top: 10%;
            border-radius: 0 !important;
        }

        .list-group-item {
            padding: 20px !important;
            font-size: 1.5rem;
            transition: all 0.5s ease;
            color: black;
        }

        .list-group-item {
            border-radius: 0px !important;
        }

        .list-group-item:hover {
            background: black;
            color: white;
        }

        a {
            text-decoration: none !important;
        }

        .heading {
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="heading">
                    <img src="images/icon.jpg" height="100px" width="100px">
                    <h2>Online Parking Reservation System</h2>
                    <h4>Book Your Parking Slot in Advance</h4>
                </div>
                <div class="card">
                    <ul class=" list-group list-group-flush">
                        <a href="register.php" class="list-group-item">Register</a>
                        <a href="user_login.php" class="list-group-item">Login</a>
                        <a href="admin/admin_login.php" class="list-group-item">Admin</a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>