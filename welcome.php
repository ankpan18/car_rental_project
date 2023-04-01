<?php
session_start();
require 'partials/_dbconnect.php';
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Welcome -
    <?php echo $_SESSION['username']?>
  </title>
</head>

<body>
  <?php require 'partials/_nav.php' ?>
  <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome <?php echo $_SESSION['username']?></h4>
      <p>Hey, how are you doing? Welcome to CarRental Dashboard. You are logged in as <?php echo $_SESSION['username']?></p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php">using this link.</a></p>
    </div>
    <br>
</div>
    <div class="container contactCon my-3">
    <h2>Contacts Saved</h2>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S No.</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
    <?php
    $id=$_SESSION['id'];
    $sql = "Select * from contact where user_id='$id'";
    $result = mysqli_query($conn, $sql);
    $_SESSION['count'] = 1;
    while($row=mysqli_fetch_assoc($result)){
      echo '
      <tbody>
        <tr>
          <th scope="row">'.$_SESSION['count'].'</th>
          <td>'.$row['Name']. '</td>
          <td>'.$row['Gender'].'</td>
          <td>'.$row['Age'].'</td>
          <td>'.$row['Email'].'</td>
          <td>'.$row['Phone'].'</td>
          <td>'.$row['Other'].'</td>
          <td>'.$row['Date'].'</td>';
        
          $_SESSION['count']+= 1;  
      }
    ?>
    </tbody>
</table>
    </div>

    <div class="container contactCon my-3">
    <h2>All Bookings</h2>
    <br>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">S No.</th>
      <th scope="col">Fname</th>
      <th scope="col">Lname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Cars</th>
      <th scope="col">Dur</th>
      <th scope="col">Note</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
    <?php
    $id=$_SESSION['id'];
    $sql = "Select * from booking where user_id='$id'";
    $result = mysqli_query($conn, $sql);
    $_SESSION['count'] = 1;
    while($row=mysqli_fetch_assoc($result)){
      echo '
      <tbody>
        <tr>
          <th scope="row">'.$_SESSION['count'].'</th>
          <td>'.$row['Fname']. '</td>
          <td>'.$row['Lname']. '</td>
          <td>'.$row['Email'].'</td>
          <td>'.$row['Phone'].'</td>
          <td>'.$row['Address'].'</td>
          <td>'.$row['Cars'].'</td>
          <td>'.$row['Duration'].'</td>
          <td>'.$row['Note'].'</td>
          <td>'.$row['Time'].'</td>';
          $_SESSION['count']+= 1;  
      }
    ?>
    </tbody>
</table>
    </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>