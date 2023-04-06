<?php
// $con1=mysqli_connect("localhost","id16023371_info1","");
// $db=mysqli_select_db($con1,"id16023371_info");
include 'partials/_dbconnect.php';
$a=false;

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

if(isset($_POST['insert']))
{
    $id=$_SESSION['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$cars=$_POST['cars'];
$dur=$_POST['dur'];
$note=$_POST['note'];


$query="INSERT INTO `booking`(`user_id`,`Fname`, `Lname`, `Email`, `Phone` , `Address`,`Cars`,`Duration`, `Note`,`Time`) VALUES ('$id','$fname', '$lname',
 '$email', '$phone','$add','$cars','$dur','$note', current_timestamp());";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
    $a=true;
    echo " <script type='text/javascript'> alert('Data Saved $fname! You will be contacted shortly. ') </script>";

}
else{
    echo " <script type='text/javascript'> alert('Error! Data NOT Saved') </script>";
    printf("error: %s\n", mysqli_error($conn));
}

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
            <li class="breadcrumb-item active" aria-current="page">Booking</li>
        </ol>
    </nav>

    <div class="container">
        <h2 style="margin-bottom:5%;">Booking</h2>
        <?php
        if($a==true)
            echo "<p style='color: blueviolet;'>Thanks for submitting. We will contact you shortly.</p>";
        ?>
        <form action="booking.php" method="post">
            <p>Your Name</p>
            <div class="form-row">

                <div class="col">
                    <input type="text" class="form-control"  name="fname" id="fname" placeholder="First name" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12">
                    <label for="phone">Phone No.</label>
                    <input type="number" class="form-control" name="phone" id="number" placeholder="xxxxxxxxxx" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                </div>
            </div>
            <div class="form-row">
            <label for="add">Address</label>
                <input type="text" class="form-control" name="add" id="add" placeholder="Address" required>
            </div>
            <div class="form-group">
                <label for="cars">Your Preferred Car</label>
                <select class="form-control" id="cars" name="cars">
                <option value="">--Cars--</option>
                  <option value="Innova">Innova</option>
                  <option value="Alto">Alto</option>
                  <option value="WagonR">WagonR</option>
                  <option value="Amaze">Honda Amaze</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dur">Time Duration</label>
                <select class="form-control" id="dur" name="dur">
                <option value="">--Duration--</option>
                <option value="Within 1 Day">Within 1 Day</option>
                  <option value="1 Day">1 Day</option>
                  <option value="2 Days">2 Days</option>
                  <option value="3 Days">3 Days</option>
                  <option value="Within 1 Week">Within 1 Weeks</option>
                  <option value="Within 2 Weeks">Within 2 Weeks</option>
                </select>
            </div>
            <div class="form-group">
                <label for="note">Personalised Note</label>
                <textarea name='note' class="form-control" id="note" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-success" name="insert" value="Confirm Booking">
        </form>
        <!-- <script type="text/javascript">
            function message1() {
                alert('Thanks for booking. You will be contacted via Email and SMS');
            }
        </script> -->


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
