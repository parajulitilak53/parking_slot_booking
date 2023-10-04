<?php
include('../include/connect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .input-container {
        display: flex;
        width: 100%;
    }

    .icon {
        border: 1px solid black;
        padding: 10px;
        min-width: 50px;
        text-align: center;
    }

    .card {
        border-radius: 0px;
        padding-bottom: 5px;
    }

    .form-control,
    .btn {
        border-radius: 0px;
    }

    .form-control:focus {
        border-color: inherit;
        box-shadow: none;
        border: 1px solid black;
    }

    .center {
        max-width="1000px";
        margin: auto;
        left: 1%;
        right: 1%;
        position: absolute;
    }
    </style>
</head>

<body>
    <?php
include('header2.php');
?>
    <div class="container">
        <hr>
        <div class="center">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Admin Login</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <form action="source/login_admin.php" method="post">
                                    <div class="input-container">
                                        <i class="fa fa-envelope icon"></i>
                                        <input type="text" class="form-control" name="admin_email"
                                            placeholder="Enter Username" required></div>
                                    <br>
                                    <div class="input-container">
                                        <i class="fa fa-key icon"></i>
                                        <input type="password" class="form-control" name="admin_password"
                                            placeholder="Enter Password" required></div>
                                    <br>
                                    <button type="submit" class="btn btn-success btn-lg btn-block"
                                        name="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
</body>

</html>