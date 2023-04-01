<! -- session_start();
 $_SESSION() -->

<?php
session_start();
// echo $_SESSION['id'];
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
    
}

$insert=false;
if(isset($_POST['name'])){
//Set connection variables

// $server="localhost";
// $username="id16023371_info1";
// $password="";
// $dbname="id16023371_info";

// //Create a database connection
// $con=mysqli_connect($server,$username,$password,$dbname);
// //Check for connection issue
// if(!$con){
//     die("Connection to this database failed due to".mysqli_connect_error());
// }
// echo "Success connecting to the DB.";

//Collect Post Variables

include 'partials/_dbconnect.php'; 
$id=$_SESSION['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql="INSERT INTO `id16023371_info`.`contact` (`user_id`,`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$id','$name', 
'$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

//Execute the Query
if(mysqli_query($conn,$sql)){
    // echo "Successfully Inserted";

    //Flag for successful insertion
    $insert=true;
}
else {
    echo "Error: $sql <br>",mysqli_error($conn);
}
// Close the database connection
mysqli_close($conn);
// $conn->close();
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
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader&family=Reggae+One&display=swap" rel="stylesheet">
    <title>CAR RENTAL</title>
    <style>
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
        
        .jumbotron {
            height: 100%;
            width: 100%;
            background-image: url("landscape.png");
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            text-align: center;
            justify-content: center;
        }
        
        .breadcrumb {
            background-color: white;
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
            <h1>We would love to hear from you.</h1>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>


    <img class="build" src="bg.jpg" alt="">
    <div class="container container1">
        <h1>Welcome to Car Rental</h1>
        <p>Enter your details and submit this form to connect with us.</p>
        <?php
        if($insert==true)
            echo "<p class='SubmitMsg'>Thanks for submitting and joining us in the journey.</p>";
            ?>
        <form action="contact.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn btn1">Submit</button>

        </form>

    </div>
    <!-- <div class="container1">
        <form>
            <div class="row" style="width: 80%;">
                <div class="col-md-12">
                    <h2><strong>Connect on </strong>Social Media</h2>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook"></i>Like us on facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i>Follow us on twitter</a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i>Subscribe us on youtube</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i>Follow us on instagram</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div> -->




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