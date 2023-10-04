<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("location:user_login.php");
}
include('include/connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Search Parking Details!</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <style type="text/css">
      label{
        font-weight: bold;
      }
      input{
        background-color: white;
        border: white;
      }

      i.fa.fa-angle-double-right:hover {
        color: black;
      }
    </style>
  </head>
  <body>
   <?php include('header_user.php'); ?>
   <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 align="center">Search Parking Details</h4>                  
                </div>             
              <div class="card-body">
                    <div class="col-md-6">
                        <form method="GET">
                            <div class="form-group">
                             <input type="text" id="search" name="ticketNo" class="form-control" placeholder="Enter Booking Code" required="">   
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Search</button>
                        </form>
                    </div>
                    
                </div>
                <?php
                if (isset($_GET['submit'])) 
                {
                    $bookingCode = $_GET['ticketNo'];
                    $sqlqry=mysqli_query($conn,"SELECT * FROM parking_details where booking_code='$bookingCode'");
                    $output=$sqlqry->fetch_assoc();

                    if($output['status']==0){
                ?>
               <div class="card-body">
                    <div class="col-md-12">
                              
                              <div style='margin-top: 50px; color: black; border: 1px solid #8c8c8c;'>
                                 <div style='float: left; text-align:left; margin-top:20px;'>

                                      <label>Ticket Number:<span>
                                      <input name='paidTicket' value='<?=$bookingCode?>' disabled>
                                      <input name='paidTicket' id="TicketNo" value='<?=$bookingCode?>' type='hidden'></span></label><br>

                                      <label>User Name:<span>
                                      <input name='paidUserName' value="<?=$output['user_name']?>" disabled>
                                      <input name='paidUserName' value="<?=$output['user_name']?>" type='hidden'></span></label><br>

                                      <label >Slot Number:<span>
                                      <input name='paidSlotNumber' value="<?=$output['slot_id']?>" disabled>
                                      <input name='paidSlotNumber' value="<?=$output['slot_id']?>" type='hidden'></span></label><br>

                                      <label>Date: <span>
                                      <input name='paidDate' value="<?=$output['slot_date']?>" disabled>
                                      <input name='paidDate' value="<?=$output['slot_date']?>" type='hidden'></span></label><br>
                 
                                      <label>Start Date: <span>
                                      <input name='paidStartTime' value="<?=$output['start_time']?>"disabled>
                                      <input name='paidStartTime' value="<?=$output['start_time']?>" type='hidden'></span></label><br>

                                      <label>Exit Date: <span>
                                      <input name='paidExitDate' value="<?=$output['exit_time']?>" disabled>
                                      <input name='paidExitDate' value="<?=$output['slot_id']?>" type='hidden'></span></label><br>

                                      <label>Vehicle Number: <span>
                                      <input name='paidVehicleNumber' value="<?=$output['user_vehicleno']?>" disabled>
                                      <input name='paidVehicleNumber' value="<?=$output['user_vehicleno']?>" type='hidden'></span></label><br>

                                      <label>Total Price: Rs.<span>
                                      <input name='price' value="<?=$output['no_of_hr'] *10 ?>" size='5' disabled>(*Rs.10 per hour) 
                                     <input name='price' id="price" value="<?=$output['no_of_hr'] *10 ?>" type='hidden'></span> </label><br>

                                 </div>
                                 <div style='float: right;'>
                                    <button class='btn btn-primary p-3 px-5 py-4 mr-md-2'  id="payment-button" style='margin-top: 200px;' onclick="MyPayFunc()"> Pay
                                      <span>
                                        <i class='fa fa-angle-double-right' aria-hidden='true' style='color:white;'></i>
                                      </span>
                                    </button>

                              </div>
                          </div>
                          <?php
                        }
                        else
                        {
                             ?>
                <div class="card-body">
                     <div class="col-md-12">
                        <form>

                            <div class="form-group">
                              
                              <div style='margin-top: 50px; color: black; border: 1px solid #8c8c8c;'>
                                 <div style='float: left; text-align:left; margin-top:20px;'>

                                      <label>Ticket Number:<span>
                                      <input name='ticketNumber' value='<?=$bookingCode?>' disabled></span></label><br>

                                      <label>User Name:<span>
                                      <input name='userName' value="<?=$output['user_name']?>" disabled></span></label><br>

                                      <label >Slot Number:<span>
                                      <input name='slotNumber' value="<?=$output['slot_id']?>" disabled></span></label><br>

                                      <label>Date: <span>
                                      <input name='date' value="<?=$output['slot_date']?>" disabled></span></label><br>
                 
                                      <label>Start Date: <span>
                                      <input name='startTime' value="<?=$output['start_time']?>"disabled></span></label><br>

                                      <label>Exit Date: <span>
                                      <input name='exitTime' value="<?=$output['exit_time']?>" disabled></span></label><br>

                                      <label>Vehicle Number: <span>
                                      <input name='vehicleNumber' value="<?=$output['user_vehicleno']?>" disabled></span></label><br>

                                      <label>Total Price: Rs.<span>
                                      <input name='price' value="<?=$output['price']?>" size='5' disabled>(*Rs.10 per hour) </span> </label><br>

                                 </div>
                                  <div style='float: right;'>
                                    <button class='btn btn-danger p-3 px-5 py-4 mr-md-2 ' style='margin-top: 200px;' disabled>Paid
                                    </button>
                                  </div>


                              </div>
                          </div>
                        </form>
                           <?php
                            }

                        }
                          ?>
                    </div>
                    
                </div>
                <?php
                ?>
                
            </div>
            
        </div>
        <div class="col-lg-3"></div>
      </div>
   </div>
    <?php include('./footer.php')?>;
  <!-- Payment Scripting -->
    <script src="https://khalti.com/static/khalti-checkout.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script>
      function MyPayFunc(){
        var ticket=document.getElementById('TicketNo').value;
        var Tprice=document.getElementById('price').value;
        //console.log(ticket);
        var config = {
          // replace the publicKey with yours
          "publicKey": "test_public_key_32d13c330921416da9304c00c6cfa9b6",
          "productIdentity": "1234567890",
          "productName": "Dragon",
          "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
          "eventHandler": {
            onSuccess (payload) {
              // hit merchant api for initiating verfication
              console.log(payload);
              $.ajax({
                  method: "POST",
                  url: "./source/checkpayout.php?bookingID=<?=$bookingCode?>",
                  data: { khalti: payload, price: Tprice}
              })
              .done(function( msg ) {
                console.log("sss= "+msg);
                if (msg == "true") {
                  alert("payment success vayo!");
                  window.location.href="./source/paymentconfirm.php?ID=<?=$bookingCode?>";
                }
                else {
                  alert("payment success vayena!");
                }
              });

            },
            onError (error) {
              alert("khalti batai error vako ho!");
              console.log(error);
            },
            onClose () {
              console.log('widget is closing');
            }
          }
        };
        var checkout = new KhaltiCheckout(config);
       // var btn = getElementById('payment-button');
        checkout.show({amount: <?=$output['no_of_hr'] *10 ?>*100});
      }
    </script>

  <script src="./components/js/jquery.min.js"></script>
  <script src="./components/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./components/js/popper.min.js"></script>
  <script src="./components/js/bootstrap.min.js"></script>
  <script src="./components/js/jquery.easing.1.3.js"></script>
  <script src="./components/js/jquery.waypoints.min.js"></script>
  <script src="./components/js/jquery.stellar.min.js"></script>
  <script src="./components/js/owl.carousel.min.js"></script>
  <script src="./components/js/jquery.magnific-popup.min.js"></script>
  <script src="./components/js/aos.js"></script>
  <script src="./components/js/jquery.animateNumber.min.js"></script>
  <script src="./components/js/bootstrap-datepicker.js"></script>
  <script src="./components/js/jquery.timepicker.min.js"></script>
  <script src="./components/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="./components/js/google-map.js"></script>
  <script src="./components/js/main.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>