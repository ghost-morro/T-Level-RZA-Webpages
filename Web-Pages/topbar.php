<link rel="stylesheet" href="CSS/style.css">

<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="topnav">
  <a href="home.php" <?php echo ($current_page == 'home.php') ? 'class="active"' : ''; ?>>Home</a>
  <a href="education.php" class="<?php echo ($current_page == 'education.php') ? 'active right-align' : 'right-align'; ?>">Education</a>
  <a href="tickets.php"   <?php echo ($current_page == 'tickets.php') ? 'class="active"' : ''; ?>>Tickets</a>
  <a href="reserve.php"   <?php echo ($current_page == 'reserve.php') ? 'class="active"' : ''; ?>>Reservations</a>
  <a href="#news">Options</a>
  <a href="about.php"   <?php echo ($current_page == 'about.php') ? 'class="active"' : ''; ?>>About Us</a>
  <a href="index.php"   <?php echo ($current_page == 'index.php') ? 'class="active"' : ''; ?>>Account</a>
</div>


 