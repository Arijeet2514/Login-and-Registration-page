<?php
session_start();

$name="";
$email="";
$roll="";
$error_name = "";
$error_email= "";
$error_dob= ""; 
$error_roll= "";
$error_pass1="";
$error_pass2="";
$error_check="";
$errors=false;
$error_lemail="";
$error_lpass="";
$error_l="";
$errorsl=false;
$lemail="";


$db = mysqli_connect('localhost', 'root', '', 'login_manage');


if (isset($_POST['register'])) {
  $name = mysqli_real_escape_string($db, $_POST['Name']);
  $email = mysqli_real_escape_string($db, $_POST['Email']);
  $dob = date('Y-m-d', strtotime($_POST['Date']));
  $roll = mysqli_real_escape_string($db, $_POST['Roll']);
  $o_password = mysqli_real_escape_string($db, $_POST['Password']);
  $c_password = mysqli_real_escape_string($db, $_POST['Confirm_Password']);
  $checked=isset($_POST['tandc']);

  if (empty($name)) { $error_name="Name is required"; $errors=true; }
  elseif (strlen($name)<3) { $error_name="Name must be minimum of 3 characters";$errors=true;}
  elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {$error_name="Only letters and white spaces allowed";$errors=true;}

  if (empty($email)) { $error_email="Email is required"; $errors=true;}
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {$error_email="Email is invalid";$errors=true;}

  if (empty($dob)) { $error_dob="Date of Birth is required"; $errors=true;}

  if (empty($roll)) { $error_roll="Roll No. is required"; $errors=true;}

  if (empty($o_password)) { $error_pass1="Password is required"; $errors=true;}
  elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/",$o_password)) { $error_pass1="The password must contain atleast one lowercase, one uppercase, one numeric digit and one special character and should be of length between 8 to 20";$errors=true;}

  if ($o_password != $c_password) {
	$error_pass2="The two passwords do not match"; $errors=true;
  }

  if(!$checked) { $error_check="You must agree to terms and conditions";$errors=true;}


  $user_check_query = "SELECT * FROM users WHERE roll='$roll' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['roll'] === $roll) {
      $error_roll="Roll already exists";
      $errors=true;
    }

    if ($user['email'] === $email) {
      $error_email="Email already exists";
      $errors=true;
    }
  }

  
  if ($errors==false) {
  	$password = md5($o_password);

  	$query = "INSERT INTO users (name, email, dob, roll, password) 
  			  VALUES('$name', '$email', '$dob', '$roll', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
    $_SESSION['dob']=$dob;
    $_SESSION['email']=$email;
    $_SESSION['roll']=$roll;
  	$_SESSION['success'] = "You are now signed up";
  	header('location: success_index.php');
  }
}
elseif (isset($_POST['login'])) {
  $lemail = mysqli_real_escape_string($db, $_POST['lEmail']);
  $lpassword = mysqli_real_escape_string($db, $_POST['lPassword']);

  if (empty($lemail)) {
    $error_lemail="Email is required";
    $errorsl=true;
  }
  if (empty($lpassword)) {
    $error_lpass="Password is required";
    $errorsl=true;
  }

  if ($errorsl==false) {
    $password = md5($lpassword);
    $query = "SELECT * FROM users WHERE email='$lemail' AND password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $users = mysqli_fetch_assoc($results);

      $_SESSION['name'] = $users['name'];
      $_SESSION['dob']=$users['dob'];
      $_SESSION['email']=$lemail;
      $_SESSION['roll']=$users['roll'];
      $_SESSION['success'] = "You are now logged in";
      header('location: success_index.php');
    }else {
      $error_l="Wrong username/password combination";
    }
  }
}


?>