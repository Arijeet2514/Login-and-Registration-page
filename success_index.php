<?php 
  session_start(); 
  if (!isset($_SESSION['success'])) {
    $_SESSION['msg'] = "You must log in first";
    header("location: index.php");
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: index.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <title>THE RANDOM REALM HOMEPAGE</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
                <img id="ico" src="img/favicon.png">  
                <h1>Hello <strong><?php echo $_SESSION['name']; ?></strong>!</h1> 
                <?php if (isset($_SESSION['success'])) : ?>
                <h3 style="color: white"><?php 
                  echo $_SESSION['success']; 
                  unset($_SESSION['success']);
                ?>
                </h3>
                <?php endif ?> 
                <h3 style="color: orange;">Your Details:-</h3>
                <div class="text-left">
                <p >Date of Birth: <?php echo $_SESSION['dob'];?></p>
                <p>Email: <?php echo $_SESSION['email'];?></p>
                <p>Roll: <?php echo $_SESSION['roll'];?></p>
                </div>
                <a href="index.php?logout='1'" class="log-out">Log Out</a>
        </div>
      </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="js/myScript.js"></script>

  </body>
</html>