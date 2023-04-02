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
        .c1 {
            text-align: center;
            align-items: center;
        }
        
        .con1 {
            padding-top: 200px;
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
        
        .inst {
            background-image: linear-gradient(rgb(12 202 233), rgb(112, 248, 241));
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: -32px;
        }
        
        .jumbotron {
            background-image: url("bmw.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 700px;
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
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">CarRental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cars.html">Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            </ul>
        </div>
    </nav> -->
    <?php require 'partials/_nav.php' ?>
    <div class="jumbotron c1">
        <div class="con1">
            <h1 style="color: rgb(255, 255, 255);">Get the best Cars</h1>
            <h2 style="color: rgb(255, 255, 255);">In Your Budget</h2>
            <a class="btn btn-primary" href="cars.php" role="button">Book Now</a>

        </div>
    </div>
    <div class="container-fluid inst">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="samp">5 Cars</h3>
                <p class="samp-t">Explore a variety of cars</p>
            </div>
            <div class="col-lg-4">
                <h3 class="samp">Best Support</h3>
                <p class="samp-t">Find the best car for your need.</p>
            </div>
            <div class="col-lg-4">
                <h3 class="samp">Exclusive Benefits</h3>
                <p class="samp-t">Enjoy our service</p>
            </div>
        </div>
    </div>
    <div class="ha">
        <h1>Book A Car Anytime Anywhere</h1>
        <h3> Rent a car in Dehradun with Savaari & get rid of all the hassles of self-drive car rentals</h3>
        <p>Dehradun, the capital of Uttarakhand is by the foothills of the mighty Himalayas and is a great place to spend a quick weekend to cool off. Known for the beautiful greenery surrounding the area, it is home to many different types of flora and
            fauna in the country. You could opt for a Dehradun car hire and enjoy driving through this pristine town. Local car hire in Dehradun ensures that you explore this quaint, little town at your own pace and also not have to worry about losing
            your way. Our drivers are experienced and will ensure you have a smooth ride throughout.</p>
    </div>
    <div class="footer">
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