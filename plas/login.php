<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
include 'topbar.php';
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con, stripslashes($_POST['username']));
 
    $password = mysqli_real_escape_string($con, stripslashes($_POST['password']));
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
	    exit();
         }else{
	echo "<div class='form'>
<h3 style='color: yellow; font-size: 30px;'>Username/Password is incorrect.</h3>
<br/><p style='font-size: 30px;'>Click here to <a href='login.php'>Try Again</a></p></div>";
	}
    }else{
?>
<div class="form">
<h1 class="title">Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p style="font-size: 25px;">Not registered yet? <br><a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>