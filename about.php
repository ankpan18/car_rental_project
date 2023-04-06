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
        
        .form-row input,
        .form-group select,
        .form-group textarea {
            border: solid 2px #1933ae;
            border-radius: 12px;
            outline: none;
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
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>

    <div class="container">
        <p>
            Welcome to CarRental, your number one source for all things- regarding renting cars. We're dedicated to giving you the very best of Cars, with a focus on high mileage, build quality, speed, reliability and affordability .</p>
        <p> Founded in 2022, by CarRental has come a long way from its beginnings in Dehradun. When we first started out, our passion for "budget affordable vehicles" drove them to do tons of research, so that CarRental can offer you best experience in the
            local market. We now serve customers all over Uttarakhand, and are thrilled that we're able to turn our passion into our own website. </p>

        <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.

        </p>
        <h2>Our Team</h2>
        <h4>Ankur Panthri </h4>
    <!--    <p>
            To Be Continued..........................................................................................
        </p>-->
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