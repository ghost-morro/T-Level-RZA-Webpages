<?php
//include auth.php file on all secure pages
include 'topbar.php';
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p class="title">Welcome <?php echo $_SESSION['username']; ?>!</p>
<div class = "bodyy">   
<p><a style = "color:yellow" href = "index.php"><img src="images/flow.png" alt="arrow" height="300px" width="300px" style = "border:5px solid yellow; border-radius: 15px;"></a></p>



</div>
<div style="font-size: 25px;">
<p>This is a secure area.</p>

<a style="color: #f2ff00;" href="logout.php">Logout</a>
<br>
<br>
<br>
<br>
</div>
</div>
</body>
</html>