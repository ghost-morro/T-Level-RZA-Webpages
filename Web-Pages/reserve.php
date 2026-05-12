<?php include("topbar.php");
require('auth.php');
include('db.php') ?>
<!DOCTYPE html>
<html>
<head>

<title>Reservations</title>


</head>

<body>
<div class="main">

    <div class="tickets">



        <h1 class="title">
            Reservations
        </h1>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

            <div style="display: table; border-spacing: 30px;">
                <div style="display: table-row">

                <div style = "centre">


                    <div class="boxx">
                        Quantity
                        

                        <input type="number" name="quantity" placeholder="0" required/>
                    </div>

                    <br>


                    <div class="boxx">


                        Age group

                        


                        <input type="radio" value="3+" name="age" id="3+" required/>
                        <label for="3+">3+</label>

                        


                        <input type="radio" value="4-18" name="age" id="4-18" required/>
                        <label for="4-18">4-18</label>

                        


                        <input type="radio" value="18+" name="age" id="18+" required/>
                        <label for="18+">18+</label>


                    </div>

                    
<br>

                    <div class="boxx">


                        Duration

                        


                        <input type="radio" value="Half day" name="duration" id="Half day" required/>
                        <label for="Half day">Half day</label>

                        


                        <input type="radio" value="Full day" name="duration" id="Full day" required/>
                        <label for="Full day">Full day</label>

                        


                        <input type="radio" value="Month pass" name="duration" id="Month Pass" required/>
                        <label for="Month Pass">Month Pass</label>

                        


                        <input type="radio" value="Year pass" name="duration" id="Year Pass" required/>
                        <label for="Year Pass">Year Pass</label>


                    </div>
                    <br>



                        <div class="boxx">

                        Date to start ticket:

                        <form action="/action_page.php">

                        <input type="date" id="Date" name="Date"min="<?php echo date('Y-m-d'); ?>"
                        required >


                    </div>

                </div>

                <div class="">

                    
                </div>



                </div>



            </div>
            <p class="centre"><input type="submit" name="submit" value="Submit" /></p>
            <?php

            // If form submitted, insert values into the database.
            if (isset($_POST['age'])) {
                $agegroup = $_POST['age'];
                $qty = $_POST['quantity'];
                $duration = $_POST['duration'];
                $date = $_POST['Date'];
                $trn_date = date("Y-m-d H:i:s");
                $username = $_SESSION['username'];
                $query = $con->prepare("INSERT INTO tickets (user, trn_date, age, duration, bookeddate, qty) VALUES (?, ?, ?, ?, ?, ?)");
                $query->bind_param("ssssss", $username, $trn_date, $agegroup, $duration, $date, $qty);
            if ($query->execute()) {
                echo "<div class='form'>
                <h3 class='center'>You have booked sucessfully</h3>";
            }
            }
            ?>
        </form>


    </div>
</div>




</body>