<?php
include('./config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vechicle Parking Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="./components/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./components/css/animate.css">

    <link rel="stylesheet" href="./components/css/font-awesome.min.css">

    <link rel="stylesheet" href="./components/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./components/css/jquery.timepicker.css">
     <link rel="stylesheet" href="./components/css/main.css">


    
    <link rel="stylesheet" href="./components/css/icomoon.css">
    <link rel="stylesheet" href="./components/css/style.css">
    <style type="text/css">
      label{
        font-weight: bold;
      }
      input{
        background-color: white;
      }

      i.fa.fa-angle-double-right:hover {
        color: black;
      }
    </style>
  </head>
  <body>
    <?php include('./header.php'); ?>
    <!-- END nav -->

    <section class="hero-wrap" style="height: auto;" > 
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-10 ftco-animate text-center">

               <div class="s130 ">
                
      <form method="GET">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" type="text" name="ticketNo" placeholder="Your ticket number?" />
          </div>
          <div class="input-field second-wrap">
            <button class="btn-search" type="submit" name="submit">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
        
        <div style="margin-top: 30px;"> <p>
              <a href="./carparkingslot.php" class="btn btn-primary p-3 px-5 py-4 mr-md-2">
             <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#000000;"><g transform="translate(4.73,4.73) scale(0.945,0.945)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g id="original-icon 1" fill="#009451" stroke="#fffbfb" stroke-width="10" stroke-linejoin="round"><path d="M118.465,31.175c5.81844,1.66625 13.77344,4.63594 16.6625,11.18c1.26313,2.88906 5.21375,12.95375 9.245,23.3275c0.04031,0.1075 0.05375,0.215 0.1075,0.3225c4.85094,12.48344 9.74219,25.2625 10.105,26.23l0.215,0.645v41.28c0,5.68406 -4.63594,10.32 -10.32,10.32h-13.76c-5.68406,0 -10.32,-4.63594 -10.32,-10.32v-3.44h-68.8v3.44c0,5.68406 -4.63594,10.32 -10.32,10.32h-13.76c-5.68406,0 -10.32,-4.63594 -10.32,-10.32v-41.28l0.215,-0.645c1.73344,-4.6225 17.02531,-45.35156 19.35,-49.88c3.42656,-6.65156 11.32781,-9.36594 16.6625,-11.18c1.58563,-0.68531 9.87656,-3.655 32.5725,-3.655c22.29281,0 30.67781,2.91594 32.465,3.655zM56.115,37.5175l-0.3225,0.1075c-4.28656,1.45125 -10.70969,3.70875 -12.9,7.955c-0.86,1.66625 -4.28656,10.33344 -8.2775,20.7475l-0.3225,0.645c-0.83312,2.0425 -2.58,6.31563 -0.9675,8.7075c1.37063,2.05594 5.53625,3.44 11.395,3.44h82.56c5.85875,0 9.79594,-1.075 11.18,-3.1175c1.34375,-2.00219 0.41656,-5.30781 -0.43,-7.525c-0.09406,-0.24187 -0.22844,-0.51062 -0.3225,-0.7525c-0.06719,-0.16125 -0.05375,-0.29562 -0.1075,-0.43l-0.3225,-0.645c-3.77594,-9.72875 -7.33687,-18.87969 -8.4925,-21.5c-1.94844,-4.43437 -9.87656,-6.67844 -12.47,-7.4175l-0.5375,-0.215c-0.02687,-0.01344 -7.24281,-3.1175 -29.7775,-3.1175c-22.53469,0 -29.81781,3.09063 -29.885,3.1175zM20.21,65.36c-2.795,7.32344 -5.57656,14.79469 -7.74,20.5325c-7.72656,-0.59125 -9.03,-5.2675 -9.03,-8.17c0,-5.96625 3.68188,-12.3625 14.0825,-12.3625zM154.4775,65.36c10.40063,0 14.0825,6.39625 14.0825,12.3625c0,2.91594 -1.27656,7.59219 -9.03,8.17c-1.76031,-4.56875 -4.8375,-12.48344 -7.955,-20.5325zM30.96,99.76c0,4.50156 3.21156,6.665 7.2025,8.9225c5.96625,3.37281 7.67281,4.8375 13.4375,4.8375c5.6975,0 10.32,-4.6225 10.32,-10.32c0,-5.6975 -4.6225,-10.32 -10.32,-10.32h-13.76c-3.80281,0 -6.88,3.07719 -6.88,6.88zM110.08,103.2c0,5.6975 4.6225,10.32 10.32,10.32c5.76469,0 7.48469,-1.46469 13.4375,-4.8375c3.99094,-2.2575 7.2025,-4.42094 7.2025,-8.9225c0,-3.80281 -3.07719,-6.88 -6.88,-6.88h-13.76c-5.6975,0 -10.32,4.6225 -10.32,10.32z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g id="original-icon" fill="#009451" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M86,27.52c-22.69594,0 -30.98687,2.96969 -32.5725,3.655c-5.33469,1.81406 -13.23594,4.52844 -16.6625,11.18c-2.32469,4.52844 -17.61656,45.2575 -19.35,49.88l-0.215,0.645v41.28c0,5.68406 4.63594,10.32 10.32,10.32h13.76c5.68406,0 10.32,-4.63594 10.32,-10.32v-3.44h68.8v3.44c0,5.68406 4.63594,10.32 10.32,10.32h13.76c5.68406,0 10.32,-4.63594 10.32,-10.32v-41.28l-0.215,-0.645c-0.36281,-0.9675 -5.25406,-13.74656 -10.105,-26.23c-0.05375,-0.1075 -0.06719,-0.215 -0.1075,-0.3225c-4.03125,-10.37375 -7.98187,-20.43844 -9.245,-23.3275c-2.88906,-6.54406 -10.84406,-9.51375 -16.6625,-11.18c-1.78719,-0.73906 -10.17219,-3.655 -32.465,-3.655zM86,34.4c22.53469,0 29.75063,3.10406 29.7775,3.1175l0.5375,0.215c2.59344,0.73906 10.52156,2.98313 12.47,7.4175c1.15563,2.62031 4.71656,11.77125 8.4925,21.5l0.3225,0.645c0.05375,0.13438 0.04031,0.26875 0.1075,0.43c0.09406,0.24188 0.22844,0.51063 0.3225,0.7525c0.84656,2.21719 1.77375,5.52281 0.43,7.525c-1.38406,2.0425 -5.32125,3.1175 -11.18,3.1175h-82.56c-5.85875,0 -10.02437,-1.38406 -11.395,-3.44c-1.6125,-2.39187 0.13438,-6.665 0.9675,-8.7075l0.3225,-0.645c3.99094,-10.41406 7.4175,-19.08125 8.2775,-20.7475c2.19031,-4.24625 8.61344,-6.50375 12.9,-7.955l0.3225,-0.1075c0.06719,-0.02687 7.35031,-3.1175 29.885,-3.1175zM17.5225,65.36c-10.40062,0 -14.0825,6.39625 -14.0825,12.3625c0,2.9025 1.30344,7.57875 9.03,8.17c2.16344,-5.73781 4.945,-13.20906 7.74,-20.5325zM151.575,65.36c3.1175,8.04906 6.19469,15.96375 7.955,20.5325c7.75344,-0.57781 9.03,-5.25406 9.03,-8.17c0,-5.96625 -3.68187,-12.3625 -14.0825,-12.3625zM37.84,92.88h13.76c5.6975,0 10.32,4.6225 10.32,10.32c0,5.6975 -4.6225,10.32 -10.32,10.32c-5.76469,0 -7.47125,-1.46469 -13.4375,-4.8375c-3.99094,-2.2575 -7.2025,-4.42094 -7.2025,-8.9225c0,-3.80281 3.07719,-6.88 6.88,-6.88zM120.4,92.88h13.76c3.80281,0 6.88,3.07719 6.88,6.88c0,4.50156 -3.21156,6.665 -7.2025,8.9225c-5.95281,3.37281 -7.67281,4.8375 -13.4375,4.8375c-5.6975,0 -10.32,-4.6225 -10.32,-10.32c0,-5.6975 4.6225,-10.32 10.32,-10.32z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>
<span style="margin-left: 5px;"></span>Car</a>
             
              <a href="./bikeparkingslot.php" class="btn btn-primary p-3 px-5 py-4 ml-md-2">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="26" height="26"
viewBox="0 0 172 172"
style=" fill:#000000;"><g transform="translate(4.73,4.73) scale(0.945,0.945)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#009451" stroke="#ffffff" stroke-width="10" stroke-linejoin="round"><path d="M110.60096,26.66827c0,0 0.87861,3.1268 2.06731,7.02885h7.64904c0,0 4.6256,0.07753 6.61538,5.375c1.31791,3.30769 4.13462,11.93871 4.13462,15.91827c0.4393,4.90986 -4.78065,5.45253 -8.26923,5.375c2.27404,5.14243 4.72897,10.33654 7.64904,15.71154c3.30769,-1.62801 7.08053,-2.6875 11.16346,-2.6875c20.51803,0 24.52344,11.99038 22.53365,11.99038c-1.39543,0 -2.92007,-0.12921 -4.34135,-0.20673c6.56371,4.54808 10.95673,12.09375 10.95673,20.67308c0,13.90265 -11.31851,25.22115 -25.22115,25.22115c-13.90264,0 -25.22115,-11.31851 -25.22115,-25.22115c0,-2.6875 0.67188,-5.21995 1.44712,-7.64904c-2.42908,4.05709 -2.42908,7.02885 -5.375,7.02885c-3.30769,0 -2.60997,-7.93329 -0.62019,-13.23077c1.44712,-3.35937 3.69531,-6.58954 6.40865,-9.50962c-2.6875,-4.78065 -5.16827,-9.50962 -7.23558,-14.05769c-4.05709,8.32092 -9.07031,22.14603 -7.85577,38.03846c0.62019,6.92548 -29.30408,10.33654 -38.45192,2.06731h-10.95673c-2.6875,12.94651 -14.08353,22.53365 -27.90865,22.53365c-15.86658,0 -28.52885,-12.66226 -28.52885,-28.52885c0,-15.86658 12.66226,-28.52885 28.52885,-28.52885c8.96695,0 16.71935,4.21214 21.91346,10.54327l6.82212,-3.92788c-1.08533,-1.24038 -2.22235,-2.35156 -3.51442,-3.30769c-7.93329,-5.94351 -17.23618,-10.54327 -45.6875,-10.54327c-7.28726,0 -8.0625,-5.99519 -8.0625,-5.99519c0,0 2.73919,-7.23558 25.22115,-7.23558c15.86659,0 12.5589,2.6875 16.53846,9.30288c2.63582,4.6256 7.98497,3.92788 22.53365,3.92788c5.94351,0 -1.36959,-19.84615 40.3125,-19.84615c0.33594,0 0.54267,-0.12921 0.82692,-0.20673c-1.75721,-5.45253 -2.94591,-9.56129 -3.51442,-11.78365c-2.92007,1.24038 -6.22776,2.27404 -10.75,5.99519c-1.31791,1.39544 -3.33353,1.88642 -5.16827,1.26622c-1.80889,-0.62019 -3.1268,-2.22235 -3.33353,-4.13462c-0.23257,-1.91226 0.67187,-3.77283 2.29988,-4.78065c8.16587,-6.69291 17.98558,-10.12981 17.98558,-10.12981c0.38762,-0.18089 0.80108,-0.33594 1.24038,-0.41346c2.45493,-0.15504 4.65144,1.52464 5.16827,3.92788zM13.23077,103.15865c0,9.25121 7.28726,16.53846 16.53846,16.53846c7.41647,0 13.56671,-4.54808 15.71154,-11.16346c-0.12921,0 -15.58233,0 -15.71154,0c-0.20673,0 -0.41346,0 -0.62019,0c-0.07753,0 -0.12921,0 -0.20673,0c-0.28426,-0.05168 -0.56851,-0.10337 -0.82692,-0.20673c-0.07753,0 -0.12921,0 -0.20673,0c-0.28426,-0.05168 -0.56851,-0.10337 -0.82692,-0.20673c-0.07753,0 -0.12921,0 -0.20673,0c-0.07753,-0.12921 -0.15504,-0.28426 -0.20673,-0.41346c-0.07753,0 -0.12921,0 -0.20673,0c-0.07753,-0.07753 -0.12921,-0.12921 -0.20673,-0.20673c-0.07753,0 -0.12921,0 -0.20673,0c-0.07753,-0.12921 -0.15504,-0.28426 -0.20673,-0.41346c-0.07753,0 -0.12921,0 -0.20673,0c-1.39543,-1.42128 -1.86058,-3.48858 -1.24038,-5.375c0.07753,-0.4393 0.23257,-0.85276 0.41346,-1.24038c0.07753,-0.07753 0.12921,-0.12921 0.20673,-0.20673c0,-0.07753 0,-0.12921 0,-0.20673c0.25842,-0.23257 0.54267,-0.4393 0.82692,-0.62019c0.36178,-0.33594 0.80108,-0.62019 1.24038,-0.82692c0.3101,-0.23257 0.67188,-0.46514 1.03365,-0.62019l12.61058,-7.23558c-2.89423,-2.55829 -6.71875,-4.13462 -10.95673,-4.13462c-9.2512,0 -16.53846,7.28726 -16.53846,16.53846zM56.85096,93.85577c0.41346,1.34375 0.80108,2.71334 1.03365,4.13462h8.47596c-0.59435,-2.84254 -1.65385,-5.50421 -2.6875,-8.0625zM140.78365,92.82212c2.63582,3.64363 5.47837,7.10637 8.47596,10.33654c1.88642,2.06731 1.75721,5.24579 -0.3101,7.13221c-2.06731,1.88642 -5.24579,1.75721 -7.13221,-0.3101c-3.15264,-3.38522 -6.17608,-6.92548 -8.88942,-10.54327c-1.1887,2.11899 -1.86058,4.47055 -1.86058,7.02885c0,7.93329 6.53786,14.67788 14.47115,14.67788c7.93329,0 14.47115,-6.74459 14.47115,-14.67788c0,-7.93329 -6.53786,-14.47115 -14.47115,-14.47115c-1.67969,0 -3.23017,0.28426 -4.75481,0.82692z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#009451" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M105.43269,22.74038c-0.4393,0.07753 -0.85276,0.23257 -1.24038,0.41346c0,0 -9.81971,3.4369 -17.98558,10.12981c-1.62801,1.00781 -2.53245,2.86839 -2.29988,4.78065c0.20673,1.91226 1.52464,3.51442 3.33353,4.13462c1.83474,0.62019 3.85036,0.12921 5.16827,-1.26622c4.52224,-3.72115 7.82993,-4.75481 10.75,-5.99519c0.56851,2.22236 1.75721,6.33113 3.51442,11.78365c-0.28426,0.07753 -0.49099,0.20673 -0.82692,0.20673c-41.68209,0 -34.36899,19.84615 -40.3125,19.84615c-14.54868,0 -19.89783,0.69772 -22.53365,-3.92788c-3.97956,-6.61538 -0.67187,-9.30288 -16.53846,-9.30288c-22.48197,0 -25.22115,7.23558 -25.22115,7.23558c0,0 0.77524,5.99519 8.0625,5.99519c28.45132,0 37.75421,4.59976 45.6875,10.54327c1.29207,0.95613 2.42909,2.06731 3.51442,3.30769l-6.82212,3.92788c-5.19411,-6.33113 -12.94651,-10.54327 -21.91346,-10.54327c-15.86658,0 -28.52885,12.66226 -28.52885,28.52885c0,15.86659 12.66226,28.52885 28.52885,28.52885c13.82512,0 25.22115,-9.58714 27.90865,-22.53365h10.95673c9.14784,8.26923 39.07212,4.85817 38.45192,-2.06731c-1.21454,-15.89243 3.79868,-29.71754 7.85577,-38.03846c2.06731,4.54808 4.54808,9.27704 7.23558,14.05769c-2.71334,2.92007 -4.96154,6.15024 -6.40865,9.50962c-1.98978,5.29747 -2.6875,13.23077 0.62019,13.23077c2.94592,0 2.94592,-2.97176 5.375,-7.02885c-0.77524,2.42909 -1.44712,4.96154 -1.44712,7.64904c0,13.90265 11.31851,25.22115 25.22115,25.22115c13.90265,0 25.22115,-11.31851 25.22115,-25.22115c0,-8.57933 -4.39303,-16.125 -10.95673,-20.67308c1.42128,0.07753 2.94592,0.20673 4.34135,0.20673c1.98978,0 -2.01562,-11.99038 -22.53365,-11.99038c-4.08293,0 -7.85577,1.05949 -11.16346,2.6875c-2.92007,-5.375 -5.375,-10.56911 -7.64904,-15.71154c3.48858,0.07753 8.70853,-0.46514 8.26923,-5.375c0,-3.97956 -2.81671,-12.61058 -4.13462,-15.91827c-1.98978,-5.29747 -6.61538,-5.375 -6.61538,-5.375h-7.64904c-1.1887,-3.90204 -2.06731,-7.02885 -2.06731,-7.02885c-0.51683,-2.40324 -2.71334,-4.08293 -5.16827,-3.92788zM29.76923,86.62019c4.23798,0 8.0625,1.57632 10.95673,4.13462l-12.61058,7.23558c-0.36178,0.15505 -0.72356,0.38762 -1.03365,0.62019c-0.4393,0.20673 -0.8786,0.49099 -1.24038,0.82692c-0.28426,0.18089 -0.56851,0.38762 -0.82692,0.62019c0,0.07753 0,0.12921 0,0.20673c-0.07753,0.07753 -0.12921,0.12921 -0.20673,0.20673c-0.18089,0.38762 -0.33594,0.80108 -0.41346,1.24038c-0.62019,1.88642 -0.15504,3.95372 1.24038,5.375c0.07753,0 0.12921,0 0.20673,0c0.05169,0.12921 0.12921,0.28426 0.20673,0.41346c0.07753,0 0.12921,0 0.20673,0c0.07753,0.07753 0.12921,0.12921 0.20673,0.20673c0.07753,0 0.12921,0 0.20673,0c0.05169,0.12921 0.12921,0.28426 0.20673,0.41346c0.07753,0 0.12921,0 0.20673,0c0.25842,0.10337 0.54267,0.15505 0.82692,0.20673c0.07753,0 0.12921,0 0.20673,0c0.25842,0.10337 0.54267,0.15505 0.82692,0.20673c0.07753,0 0.12921,0 0.20673,0c0.20673,0 0.41346,0 0.62019,0c0.12921,0 0.28426,0 0.41346,0h15.29808c-2.14483,6.61538 -8.29507,11.16346 -15.71154,11.16346c-9.2512,0 -16.53846,-7.28726 -16.53846,-16.53846c0,-9.2512 7.28726,-16.53846 16.53846,-16.53846zM63.67308,89.92788c1.03365,2.55829 2.09315,5.21996 2.6875,8.0625h-8.47596c-0.23257,-1.42128 -0.62019,-2.79087 -1.03365,-4.13462zM145.53846,91.99519c7.93329,0 14.47115,6.53786 14.47115,14.47115c0,7.93329 -6.53786,14.67788 -14.47115,14.67788c-7.93329,0 -14.47115,-6.74459 -14.47115,-14.67788c0,-2.55829 0.67188,-4.90985 1.86058,-7.02885c2.71334,3.61779 5.73678,7.15805 8.88942,10.54327c1.88642,2.06731 5.0649,2.19651 7.13221,0.3101c2.06731,-1.88642 2.19651,-5.0649 0.3101,-7.13221c-2.9976,-3.23017 -5.84014,-6.69291 -8.47596,-10.33654c1.52464,-0.54267 3.07512,-0.82692 4.75481,-0.82692z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>
<span style="margin-left: 5px;"></span>Bike</a>
</p>



<?php 
if(isset($_GET['submit'])){
  $displayTicket=$_GET['ticketNo'];

  $sqlqry=mysqli_query($con,"SELECT * FROM ticket_db where ticket_no='$displayTicket'");
  $output=$sqlqry->fetch_assoc();

  //to get current time
  date_default_timezone_set('Asia/Kathmandu');
  $dt = new DateTime(); 
  $currDate= $dt->format('Y-m-d H:i:s');
  $entryDate=$output['entry_dt'];
  $slotID=$output['slot_id'];

  //getting time difference
  $qrysql=mysqli_query($con,"select timestampdiff(minute,'$entryDate','$currDate') as dateDifference");
  $output1=$qrysql->fetch_assoc();
  $totalMinute=$output1['dateDifference'];
  //echo $totalMinute;
  if($totalMinute<=60){
    if($slotID[0]=='C'){
        $totalPrice=20;
        $vehicleType="Car";
        $parkPrice="(*Rs.0.5 per min for Car)";
      }
      else{
        $totalPrice=10;
        $vehicleType="Bike";
        $parkPrice="(*Rs.0.3 per min for Bike)";
      }
  }else{
    if($slotID[0]=='C'){
      $totalPrice=$totalMinute*0.5;
      $vehicleType="Car";
      $parkPrice="(*Rs.0.5 per min for Car)";
    }
    else{
      $totalPrice=$totalMinute*0.3;
      $vehicleType="Bike";
      $parkPrice="(*Rs.0.3 per min for Bike)";
    }
  }
  

  if($output['status']==1){
?>
      <div style='margin-top: 50px; color: black; border: 1px solid #8c8c8c;'>
        <div style='float: left; text-align:left; margin-top:20px;'>
          <label>Ticket Number:<span>
           <input name='paidTicket' value='<?=$displayTicket?>' disabled>
           <input name='paidTicket' id="TicketNo" value='<?=$displayTicket?>' type='hidden'></span></label><br>

          <label>Vehicle Type:<span>
            <input name='vehicleType' value='<?=$vehicleType?>' disabled>
            <input name='vehicleType' value='<?=$vehicleType?>' type='hidden'></span></label><br>

          <label >Vehicle Number:<span>
            <input name='paidVehicleNo' value="<?=$output['vehicle_no']?>" disabled>
            <input name='paidVehicleNo' value="<?=$output['vehicle_no']?>" type='hidden'></span></label><br>

          <label>Entry Date: <span>
            <input name='paidEntryDate' value="<?=$output['entry_dt']?>" disabled>
            <input name='paidEntryDate' value="<?=$output['entry_dt']?>" type='hidden'></span></label><br>

            <input name='paidExitDate' type='hidden' value="<?=$currDate?>"></span></label>

          <label>Price: Rs.<span>
            <input name='price' value='<?=$totalPrice?>' size='5' disabled><?=$parkPrice?>
            <input name='price' id="price" value='<?=$totalPrice?>' size='5' type='hidden'></span> </label><br>
        </div>
        <div style='float: right;'>
          <button class='btn btn-primary p-3 px-5 py-4 mr-md-2' style='margin-top: 150px;' onclick="MyPayFunc()"> Pay
            <span>
              <i class='fa fa-angle-double-right' aria-hidden='true' style='color:white;'></i>
            </span>
          </button>

        </div>
      </div>
    </div>

<?php
  }
  else{
  ?>
  <form>
      <div style='margin-top: 50px; color: black; border: 1px solid #8c8c8c;'>
        <div style='float: left; text-align:left; margin-top:20px;'>

          <label>Ticket Number:<span>
           <input name='paidTicket' value='<?=$displayTicket?>' disabled></span></label><br>

          <label>Vehicle Type:<span>
         <input name='vehicleType' value='<?=$vehicleType?>' disabled></span></label><br>

        <label >Vehicle Number:<span>
         <input name='paidVehicleNo' value="<?=$output['vehicle_no']?>" disabled></span></label><br>

         <label>Entry Date: <span>
         <input name='paidEntryDate' value="<?=$output['entry_dt']?>" disabled></span></label><br>
        
         <label>Exit Date: <span>
         <input name='paidExitDate' value="<?=$output['exit_dt']?>" disabled></span></label><br>

    <label>Price: Rs.<span>
     <input name='price' value='<?=$output['price']?>' size='5' disabled><?=$parkPrice?></span> </label><br>
    </div>

    <div style='float: right;'>
  <button class='btn btn-danger p-3 px-5 py-4 mr-md-2 ' style='margin-top: 150px;' disabled>Paid
    </button>

</div>


</div>
</form>
<?php
  }
}
?>
</div>
</div>
</div>
</div>

</section>
		

    
  <?php include('./footer.php')?>;

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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
        // console.log(ticket);
        var config = {
          // replace the publicKey with yours
          "publicKey": "test_public_key_87e5d4271f934864848973561adbfcf2",
          "productIdentity": "1234567890",
          "productName": "Dragon",
          "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
          "eventHandler": {
            onSuccess (payload) {
              // hit merchant api for initiating verfication
              console.log(payload);
              $.ajax({
                  method: "POST",
                  url: "./controller/checkoutController.php?ticketID=<?=$displayTicket?>",
                  data: { khalti: payload, price: Tprice}
              })
              .done(function( msg ) {
                console.log("sss= "+msg);
                if (msg == "true") {
                  alert("payment success vayo!");
                  window.location.href="./checkout.php?ID=<?=$displayTicket?>";
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
        checkout.show({amount: <?=$totalPrice?>*100});
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
  
    
  </body>
</html>