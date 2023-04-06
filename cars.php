<?php
require 'partials/_dbconnect.php';
if($che==false)
{
session_start();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>CAR RENTAL</title>
    <style>
        .jumbotron {
            height: 100%;
            width: 100%;
            background-image: url("./images/landscape.png");
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            text-align: center;
            justify-content: center;
        }
        
        .breadcrumb {
            background-color: white;
        }
        
        .social {
            padding: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            list-style: none;
            margin-bottom: 1rem;
        }
        
        .social li a {
            margin-left: 50px;
        }
        
        .ha {
            margin-left: 30px;
            margin-right: 30px;
        }
        
        .footer {
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
<?php require 'partials/_nav.php' ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>We are here to take you there.</h1>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cars</li>
        </ol>
    </nav>

    <div class="container">
        <h2 style="margin-bottom:5%;">Why Us?</h2>
        <p>Travel with us and enjoy your precious time. A never before experience and rates that justify all-from budget to luxury. CarRental is poised to take advantage of this growth and moderate competition in the city travel portion of the industry,
            with a dedicated and experienced staff, excellent networking, and effective management and marketing. </p>
        <p>Services and products provided by US will be according to clients specifications, travel consultation, and as time progresses making reservations for lodging. CarRental seeks to differentiate itself as the premier adventure travel partner in this
            valley area. We have 4 cars in our catalogue.
        </p>
        <h2>Cars</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="./images/maruti-suzuki-alto-800-silky-silver.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Alto 800</h5>
                        <p class="card-text">Car Rate-Rs6/km</p>
                        <p class="card-text">Type:HatchBack</p>
                        <a href="booking.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="./images/wagonr.jpg" class="card-img-top" alt="..." width="50%;">
                    <div class="card-body">
                        <h5 class="card-title">WagonR</h5>
                        <p class="card-text">Car Rate-Rs7/km</p>
                        <p class="card-text">Type:HatchBack</p>
                        <a href="booking.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="./images/Honda-Amaze.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Honda Amaze</h5>
                        <p class="card-text">Car Rate-Rs8/km</p>
                        <p class="card-text">Type:HatchBack</p>
                        <a href="booking.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="./images/innova_crysta.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Innova</h5>
                        <p class="card-text">Car Rate-Rs9/km</p>
                        <p class="card-text">Type:HatchBack</p>
                        <a href="booking.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="footer py-4">
        <ul style="list-style: none;">
            <li>About Us</li>
            <li>Contact</li>
            <li>Help</li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <ul class="social">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>