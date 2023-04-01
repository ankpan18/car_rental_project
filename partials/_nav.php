<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin=false;
}
echo '<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="index.php">CarRental</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
                    <a class="nav-link" href="cars.php">Cars</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
      </ul>';
      
      if(!$loggedin){
     echo '
     <ul class="nav navbar-nav navbar-right">
     <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>';
      }

      if($loggedin){
      echo '<ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>';
      }
       
      
    echo '</ul>
    
  </div>
</nav>';
?>