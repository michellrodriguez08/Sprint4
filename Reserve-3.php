<?php
    
    // set cookie name
    if(isset($_COOKIE['fname'])){
    echo 'Thanks for booking with us '.$_COOKIE['fname']. '!<br>'; 
    
    
    } 
?>


<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Reservation Page - Walnut Ridge Wedding Rentals</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="reserve_styles.css">
    <meta name="robots" content="noindex, nofollow">
  </head>

  <body>
    <header>
      <a href="https://blueteam2022.greenriverdev.com/Wedding_Website/Main/">
      <img alt="logo img" id="theLogo" src="logo.png"></a>

      <div class="progress" style="height: 37px; width: 50%; ">
        <div style="width: 80%; background-color:#d6b6ae" class="progress-bar">STEP 4/5: <br> Reserve your Order</div>
        </div>
        <br>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Reservation Page</h1>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12">
          <section id="selected">
            <h3>
              <em>You have chosen the following:</em>
            </h3>

            
            <?php
           // echo $package_price;


            // CALCULATE TOTAL PRICE (without upgrade) including extras ---------
            // price variables
            $couch_price = 99.00;
            $wine_price = 20.00;
            $jugs_price = 4.00;
            $clearJar_price = 30.00;
            $blueJar_price = 30.00;
            $hexArbor_price = 350.00;
            
            if(isset($_POST['vintage_couch'])) {
              $total_price = $total_price + $couch_price;
              $extras .= '<li>'.$_POST['vintage_couch'].'</li>';
            }
            if(isset($_POST['gallon_jugs'])) {
              $total_price = $total_price + $jugs_price;
              $extras .= '<li>'.$_POST['gallon_jugs'].'</li>';
            }
            if(isset($_POST['wine_jugs'])) {
              $total_price = $total_price + $wine_price;
              $extras .= '<li>'.$_POST['wine_jugs'].'</li>';
            }
            if(isset($_POST['clear_ball_jars'])) {
              $total_price = $total_price + $clearJar_price;
              $extras .= '<li>'.$_POST['clear_ball_jars'].'</li>';
            }
            if(isset($_POST['blue_ball_jars'])) {
              $total_price = $total_price + $blueJar_price;
              $extras .= '<li>'.$_POST['blue_ball_jars'].'</li>';
            }
            if(isset($_POST['HexArbor'])) {
              $total_price = $total_price + $hexArbor_price;
              $extras .= '<li>'.$_POST['HexArbor'].'</li>';
            }



            // CALCULATE TOTAL PRICE (IF UPGRADE WAS SELECTED) including extras --------
            $package_price = $_POST["package_price"];
            $upgrade_total_price = 0.00;

            // layered arch
            // pick 6 - upgrade to full
            if ($_POST['yes_layered_6tofull'] == 'Yes')
                {
                // upgrade total price = package price (pick 6) + 100.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 100.00 + $total_price;

                // set package to full set
                $package = 'Full Set Rental';
                $upgrade_package = $package;

            }

            // pick 4 upgrade to full
            if ($_POST['yes_layered_4tofull'] == 'Yes'){
                // upgrade total price = package price (pick 4) + 150.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 150.00 + $total_price;
                // set package to full set
                $package = 'Full Set Rental';
                $upgrade_package = $package;

            }
            // pick 4 upgrade to pick 6
            if ($_POST['yes_layered_4to6'] == 'Yes'){
                // upgrade total price = package price (pick 4) + 50.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 50.00 + $total_price;
                // set package to full set
                $package = 'PICK 6 Rental';
                $upgrade_package = $package;
            }

            // modern round
            // pick 6 - upgrade to full
            if ($_POST['yes_modern_6tofull'] == 'Yes') {
                // upgrade total price = package price (pick 6) + 100.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 100.00 + $total_price;

                // set package to full set
                $package = 'Full Set Rental';
                $upgrade_package = $package;
            }
            // pick 4 - upgrade to full
            if ($_POST['yes_modern_4tofull'] == 'Yes') {
                $upgrade_total_price = $package_price + 200.00 + $total_price;

                // set package to full set
                $package = 'Full Set Rental';
                $upgrade_package = $package;
            }
            // pick 4 - upgrade to pick 6
            if ($_POST['yes_modern_4to6'] == 'Yes') {
                $upgrade_total_price = $package_price + 100.00 + $total_price;

                // set package to pick 6
                $package = 'PICK 6 Rental';
                $upgrade_package = $package;
            }

            // vintage mirror
            // pick 6 - upgrade to platinum
            if ($_POST['yes_mirror_6to_plat'] == 'Yes') {
                // upgrade total price = package price (pick 6) + 200.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 200.00 + $total_price;

                // set package to full set
                $package = 'Platinum Package';
                $upgrade_package = $package;
            }
            // pick 6 - upgrade to gold
            if ($_POST['yes_mirror_6to_gold'] == 'Yes') {
                // upgrade total price = package price (pick 6) + 150.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 150.00 + $total_price;

                // set package to full set
                $package = 'Gold Package';
                $upgrade_package = $package;
            }
            // pick 4 - upgrade to platinum
            if ($_POST['yes_mirror_4to_plat'] == 'Yes') {
                // upgrade total price = package price (pick 4) + 250.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 250.00 + $total_price;

                // set package to full set
                $package = 'Platinum Package';
                $upgrade_package = $package;
            }
            // pick 4 - upgrade to gold
            if ($_POST['yes_mirror_4to_gold'] == 'Yes') {
                // upgrade total price = package price (pick 4) + 100.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 100.00 + $total_price;

                // set package to full set
                $package = 'Gold Package';
                $upgrade_package = $package;
            }
            // pick 4 - upgrade to pick 6
            if ($_POST['yes_mirror_4to6'] == 'Yes') {
                // upgrade total price = package price (pick 4) +50.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 50.00 + $total_price;

                // set package to full set
                $package = 'PICK 6 Rental';
                $upgrade_package = $package;
            }

            // dark walnut
            // pick 6 - upgrade to full
            if ($_POST['yes_dark_6tofull'] == 'Yes') {
                // upgrade total price = package price (pick 6) + 54.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 54.00 + $total_price;

                // set package to full set
                $package = 'Full Set Rental';
                $upgrade_package = $package;
            }
            // pick 4 - upgrade to full
            if ($_POST['yes_dark_4tofull'] == 'Yes') {
                $upgrade_total_price = $package_price + 100.00 + $total_price;

                // set package to full set
                $package = 'Full Set Rental';
              $upgrade_package = $package;
            }
            // pick 4 - upgrade to pick 6
            if ($_POST['yes_dark_4to6'] == 'Yes') {
                $upgrade_total_price = $package_price + 46.00 + $total_price;

                // set package to pick 6
                $package = 'PICK 6 Rental';
                $upgrade_package = $package;
            }

            // rustic wood
            // no seating - upgrade to full
            if ($_POST['yes_rustic_no_seat_tofull'] == 'Yes') {
                // upgrade total price = package price (no seat) + 54.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 54.00 + $total_price;

                // set package to full set
                $package = 'Full Set Rental';
                $upgrade_package = $package;
            }
            // pick 4 - upgrade to full
            if ($_POST['yes_rustic_4to_full'] == 'Yes') {
                // upgrade total price = package price (pick4) + 46.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 100.00 + $total_price;

                // set package to full set
                $package = 'Full Set Rental';
                $upgrade_package = $package;
            }
            // pick 4 - upgrade to no seating rental
            if ($_POST['yes_rustic_4to_no_seat'] == 'Yes') {
                // upgrade total price = package price (pick4) + 46.00 (upgrade) + extras
                $upgrade_total_price = $package_price + 46.00 + $total_price;

                // set package to full set
                $package = 'No Seating Rental';
                $upgrade_package = $package;
            }

            // TEST (to print out total cost with upgrade) - REMOVE LATER
            //echo 'Total cost (with upgrade): $'.$upgrade_total_price.'<br>';

            // variable for if statement package upgrade ----
            $upgrade_if_statement =
                (isset($_POST['yes_layered_6tofull']) &&
                    $_POST['yes_layered_6tofull'] == 'Yes' ||
                    isset($_POST['yes_layered_4tofull']) &&
                    $_POST['yes_layered_4tofull'] == 'Yes' ||
                    isset($_POST['yes_layered_4to6']) &&
                    $_POST['yes_layered_4to6'] == 'Yes' ||
                    isset($_POST['yes_modern_6tofull']) &&
                    $_POST['yes_modern_6tofull'] == 'Yes' ||
                    isset($_POST['yes_modern_4tofull']) &&
                    $_POST['yes_modern_4tofull'] == 'Yes' ||
                    isset($_POST['yes_modern_4to6']) &&
                    $_POST['yes_modern_4to6'] == 'Yes' ||
                    isset($_POST['yes_mirror_6to_plat']) &&
                    $_POST['yes_mirror_6to_plat'] == 'Yes' ||
                    isset($_POST['yes_mirror_6to_gold']) &&
                    $_POST['yes_mirror_6to_gold'] == 'Yes' ||
                    isset($_POST['yes_mirror_4to_plat']) &&
                    $_POST['yes_mirror_4to_plat'] == 'Yes' ||
                    isset($_POST['yes_mirror_4to_gold']) &&
                    $_POST['yes_mirror_4to_gold'] == 'Yes' ||
                    isset($_POST['yes_mirror_4to6']) &&
                    $_POST['yes_mirror_4to6'] == 'Yes' ||
                    isset($_POST['yes_dark_6tofull']) &&
                    $_POST['yes_dark_6tofull'] == 'Yes' ||
                    isset($_POST['yes_dark_4tofull']) &&
                    $_POST['yes_dark_4tofull'] == 'Yes' ||
                    isset($_POST['yes_dark_4to6']) &&
                    $_POST['yes_dark_4to6'] == 'Yes' ||
                    isset($_POST['yes_rustic_no_seat_tofull']) &&
                    $_POST['yes_rustic_no_seat_tofull'] == 'Yes' ||
                    isset($_POST['yes_rustic_4to_full']) &&
                    $_POST['yes_rustic_4to_full'] == 'Yes' ||
                    isset($_POST['yes_rustic_4to_no_seat']) &&
                    $_POST['yes_rustic_4to_no_seat'] == 'Yes');

            ?>
            <?php

            echo '<b>Reservation Date: </b>';
            echo $_POST['date'].'</br>';
            
            echo '<b>Set: </b>';
            echo $_POST['set'].'</br>';
            
            echo '<b>Package: </b>';
            if ($upgrade_if_statement) {
                echo $upgrade_package.'</br>';
            } else {
                //echo $package. '</br>';
                echo $_POST['package'].'</br>';
            }
            
            echo '<b>Extras: </b>';
            echo $extras.'</br>';
            
            echo '<b>Delivery: </b>';
            echo $_POST["delivery_option"];
            ?>

            <div id="estimated"></div>
            <b>Total estimated price: </b>
            <?php

            // if customer chooses to upgrade - print out upgraded total price & update $total_price php variable to the
            // upgraded total price
            if ($upgrade_if_statement) {
                // print out (upgraded) total price
                echo '$'. number_format($upgrade_total_price, 2, '.', ',').'</br>';
                // set $total_price php variable to upgraded total price
                $total_price = $upgrade_total_price;
            }
            // if customer doesn't choose upgrades, print out original total price
            else{
                $total_price += $_POST["package_price"];

            // print out total cost
            echo '$'. number_format($total_price, 2, '.', ',').'</br>';
            }

            ?>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div id="reserve" ">
          <h3>
            <em>Please fill out the following to reserve your order:</em>
          </h3>

          <form class="center" id="myform" action="vardump.php"  onsubmit="return formValidation()" method="post">
            <label for="fname">First name*:</label><br>
            <input type="text" id="fname" name="fname" style="text-transform:capitalize;"  required placeholder="Please provide your first name"><br>
  
            <label for="lname">Last name*:</label><br>
            <input type="text" id="lname" name="lname" style="text-transform:capitalize;"  required placeholder="Please provide your last name"><br>
  
            <label for="email">Email*:</label><br>
            <input type="email" id="email" name="email" required  pattern=".+@*" placeholder="Please provide your email address"><br>
            
            <label for="email2">Secondary Email (in case you want anyone else to get a confirmation email!):</label><br>
            <input type="email" id="email2" name="email2"  pattern=".+@*" placeholder="Please provide your secondary email address"><br>
            
            <label for="phone">Phone*:</label><br>
            <input type="text" id="phone" onkeydown="formatPhoneNumber1()" name="phone" required placeholder="Please provide your phone number"><br>
  
            <div id="error_phone" class="error hidden">Please enter a valid phone number.</div><br>
  
            <input type="submit" name="submit" id="button">
  
            <?php
            $set = $_POST["set"];
            $date = $_POST["date"];
            $package = $_POST["package"];
            $package_price = $_POST["package_price"];
            $delivery = $_POST["delivery_option"];

            
            echo '<input type = "hidden" name = "set" value = "'.$set.'">';
            echo '<input type = "hidden" name = "date" value = "'.$date.'">';
            echo '<input type = "hidden" name = "extras" value = "'.$extras.'">';
            echo '<input type = "hidden" name = "package" value = "'.$package.'">';
            echo '<input type = "hidden" name = "package" value = "'.$upgrade_package.'">';
            echo '<input type = "hidden" name = "price" value = "'.$total_price.'">';
            echo '<input type = "hidden" name = "package_price" value = "'.$package_price.'">';
            echo '<input type = "hidden" name = "delivery" value = "'.$delivery.'">';
            ?>
          </form>
          </div>
        </div>
      </div>
    </div>

    <script src="reserve_scripts.js"></script>
      
  </body>
</html>


<?php
    
    require '/home/bluetea1/db.php';
    
    //begin date variable - currently hardcoded, not sure how to calculate this
    $beginDate = date("Y-m-d", strtotime("2022-11-11"));
    
    
    //end date variable - currently hardcoded, not sure how to calculate this
    $endDate = date("Y-m-d", strtotime("2022-11-15"));

    // generate random order number
    $length = 7;    
    $random= substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

    
    // $sql2 = "INSERT INTO reservations (SetName, Package, Status, Cost, beginDate, endDate, OrderNum, reservation_date) VALUES ('$set', '$package','confirmed', '$total_price', '$beginDate', '$endDate', '$random', '$date')";
    
    // $result2 = mysqli_query($cnxn, $sql2);
    
    
     echo '<input type = "hidden" name = "random" value = "'.$random.'">';

    // echo var_dump($_POST);

                

?>




