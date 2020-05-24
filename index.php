<?php include('server.php') ?>
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


    <title>THE RANDOM REALM</title>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-6" style="margin-top: 200px">
    			<h1 class="text-left">Welcome to the Random Realm</h1>
    			<p class="text-left">Are to lucky enough to enter the world of randomness? This is a kind of world where every decision is taken by random. Every random outcome of an event is treated fair and legal. So to stand out in such a place, you have to be lucky and by lucky, it doesn't mean that you just have to lie there lazy and do nothing. You have to make your mind at work to choose your own path. Although every path is uncertain, you have to work out the probabilities to choose the best possible path which is on your favor. Wish you a good luck and let's get started.</p>
    		</div>
    		<div class="col-md-1"></div>
    		<div class="col-md-5">
                <img id="ico" src="img/favicon.png">
                <div class="row">
                    <div class="button-box">
                        <div id="btn1"></div>
                        <button id="signUp" class="toggle-btn">Log In</button>
                        <button id="logIn" class="toggle-btn">Register</button>
                    </div>
                </div>
                <div class="social-icons">
                    <img src="img/fb.png">
                    <img src="img/gg.png">
                    <img src="img/in.png">
                </div>
   				<hr>
                <div class="register-form">
                <form method="post" action="index.php">    
    				<div class="row">
    					<label class="label col-md-2 control-label">Name</label>
    					<div class="col-md-10">
    						<input type="text" id="rname" class="form-control" name="Name" placeholder="Name" value="<?php echo $name; ?>">
    					</div>
                    </div>    
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_name.php'); ?>
                        <div id="rname-error" class="col-md-10 error-message"></div>
                    </div>
    				<div class="row">
    					<label class="label col-md-2 control-label">E-mail</label>
    					<div class="col-md-10">
    						<input type="text" id="remail" class="form-control" name="Email" placeholder="E-mail" value="<?php echo $email; ?>">
    					</div>
    				</div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_email.php'); ?>
                        <div id="remail-error" class="col-md-10 error-message"></div>
                    </div>
    				<div class="row">
    					<label class="label col-md-2 control-label">DOB</label>
    					<div class="col-md-10">
    						<input type="date" id="rdob" class="form-control" name="Date" placeholder="Date">
    					</div>
    				</div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_dob.php'); ?>
                    </div>
    				<div class="row">
    					<label class="label col-md-2 control-label">Roll</label>
    					<div class="col-md-10">
    						<input type="text" id="rroll" class="form-control" name="Roll" placeholder="Roll" value="<?php echo $roll; ?>">
    					</div>
    				</div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_roll.php'); ?>
                    </div>
    				<div class="row">
    					<label class="label col-md-2 control-label">Password</label>
    					<div class="col-md-10">
    						<input type="password" id="rpass" class="form-control" name="Password" placeholder="Password">
    					</div>  
    				</div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_pass1.php'); ?> 
                        <div id="rpass-error" class="col-md-10 error-message"></div>
                    </div>
    				<div class="row">
    					<label class="label col-md-2 control-label">Confirm Password</label>
    					<div class="col-md-10">
    						<input type="password" id="rcpass" class="form-control" name="Confirm_Password" placeholder="Confirm Password" style="margin-top: 15px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_pass2.php'); ?>
                        <div id="rcpass-error" class="col-md-10 error-message"></div>
                    </div>
                    <div class="row">    
                        <div class="col-md-12">       
                            <input type="checkbox" id="cbox" name="tandc" class="chech-box"><span>I agree to the terms & conditions</span>
    					</div>
                        
    				</div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_check.php'); ?>
                    </div>
    			    <input type="submit" id="rsubmit" name="register" class="btn btn-info" value="Submit" disabled="disabled"></a>
    			    <input type="submit" id="rcancel" name="reset" class="btn btn-warning" value="Cancel">
                </form>
				</div>
				<div class="login-form">
                <form method="post" action="index.php">    
    				<div class="row">
    					<label class="label col-md-2 control-label">E-mail</label>
    					<div class="col-md-10">
    						<input type="email" id="lemail" class="form-control" name="lEmail" placeholder="E-mail" value="<?php echo $lemail; ?>">
    					</div>
    				</div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_lemail.php'); ?>
                        <div id="lemail-error" class="col-md-10 error-message"></div>
                    </div>
    				<div class="row">
    					<label class="label col-md-2 control-label">Password</label>
    					<div class="col-md-10">
    						<input type="password" id="lpass" class="form-control" name="lPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <?php include('error_lpass.php'); ?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">    
                            <input type="checkbox" id="rpbox" name="remember-pass" class="chech-box"><span>Remember Password</span>
    					</div>
    				</div>
                    <div class="row">
                        <?php include('error_l.php'); ?>
                    </div>
    				<input type="submit" id="llogin" name="login" class="btn btn-info" value="Login" disabled="disabled"></a>
    				<input type="submit" id="lcancel" name="cancel" class="btn btn-warning" value="Cancel">
                </form>
				</div>
    		</div>
    	</div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="js/myScript.js"></script>

  </body>
</html>