<?php
session_start();
include('include/connect.php');
if (isset($_SESSION['user_id']) || !empty($_SESSION['user_id'])) {
    header("location:user_dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .input-container {
            display: flex;
        }

        .icon {
            border: 1px solid black;
            padding: 10px;
            min-width: 50px;
            text-align: center;
        }

        .card {
            border-radius: 0px !important;
            height: 290px;
            top: 50%;
        }

        .alert {
            border-radius: 0px !important;
        }

        .form-control,
        .btn {
            border-radius: 0px !important;
        }

        .form-control:focus {
            border-color: inherit;
            box-shadow: none;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <div class="container">
        <?php
        //sucessfully registered message
        if (isset($_GET['status']) && $_GET['status'] == 1) {
        ?>
            <div class="alert alert-success" role="alert">
                Sucessfully registered!
            </div>
        <?php  } else 
                    if (isset($_GET['status']) == 2) {
        ?>
            <div class="alert alert-danger" role="alert">
                Invalid User!
            </div>
        <?php
        } ?>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>User Login</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="source/login_user.php" method="post">
                                <div class="input-container">
                                    <i class="fa fa-envelope icon"></i>
                                    <input type="text" class="form-control" name="user_email" placeholder="Enter Username" required></div>
                                <br>
                                <div class="input-container">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" class="form-control" name="user_password" placeholder="Enter Password" required></div>
                                <br>
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Login</button>
                                <p>New user? <a href="register.php">Register</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    <?php //include('footer.php'); ?>
</body>

</html>