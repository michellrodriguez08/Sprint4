<html>
  <head>
    <title>Confirmation Page - Walnut Ridge Wedding Styles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="vardump_styles.css">
    <meta name="robots" content="noindex, nofollow">
  </head>

  <body>
    <header>
      <a href="https://blueteam2022.greenriverdev.com/Wedding_Website/Main/">
      <img alt="logo img" id="theLogo" src="logo.png"></a>

      <div class="progress" style="height: 37px; width: 50%; ">
        <div style="width: 100%; background-color:#d6b6ae" class="progress-bar">Step 5/5: <br>Order Reserved!</div>
        </div>
        <br>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
          <?php echo '<h1>Confirmation Page</h1>'; ?>

          <?php
          echo '<br><p><strong>Thank you '.ucwords($_POST['fname']).' for your order!</strong><br>
The Walnut Ridge Wedding Rental Team will be confirming your order and sending you a copy of your receipt soon via email!</p>';
//could add a random number for order number if time
          echo '<p>The details of your order are listed below: </p>';
          ?>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12">
          <section id="selected">
            <h3>
                <em>Order Summary:</em>
            </h3>
            <?php

            echo '<b>Reservation Date: </b>';
            echo $_POST['date'].'</br>';

            echo '<b>Set: </b>';
            echo $_POST['set'].'</br>';

            echo '<b>Package: </b>';
            if ($upgrade_if_statement) {
                echo $upgrade_package.'</br>';
            } else {
                echo $_POST['package'].'</br>';
            }

            echo '<b>Extras: </b>';
            echo $_POST['extras'].'</br>';

            echo '<b>Delivery: </b>';
            echo $_POST["delivery"];
            ?>
          
            <div id="estimated"></div>
            <b>Total estimated price: </b>
            <?php

            // print out total cost
            echo '$'. number_format($_POST['price'], 2, '.', ',').'</br>';
            ?>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <section id="form">
            <h3>
              <em>Customer Contact Details:</em>
            </h3>
            <?php
            echo '<b>Name: </b>';
            echo ucwords($_POST['fname'].' ');
            echo ucwords($_POST['lname'].'</br>');
            echo "\n";
            echo '<b>Email: </b>';
            echo $_POST['email'].' '.'</br>';
            echo '<b>Phone Number: </b>';
            echo $_POST['phone'].' '.'</br>';
            ?>
          </section>
        </div>
      </div>
    </div>

    <?php
    $set = $_POST["set"];
    $date = $_POST["date"];
    $package = $_POST["package"];
    $delivery = $_POST["delivery_option"];
    $email = $_POST["email"];
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $total = $_POST["price"];
    $phone = $_POST["phone"];
    $extras = $_POST["extras"];


    echo '<input type = "hidden" name = "set" value = "'.$set.'">';
    echo '<input type = "hidden" name = "date" value = "'.$date.'">';
    echo '<input type = "hidden" name = "extras" value = "'.$extras.'">';
    echo '<input type = "hidden" name = "package" value = "'.$package.'">';
    echo '<input type = "hidden" name = "package_price" value = "'.$package_price.'">';
    echo '<input type = "hidden" name = "price" value = "'.$total_price.'">';
    echo '<input type = "hidden" name = "delivery" value = "'.$delivery.'">';
    echo '<input type = "hidden" name = "upgrade" value = "'.$upgrade_total_price.'">';
    echo '<input type = "hidden" name = "package" value = "'.$upgrade_package.'">';

    ?>


<!--- SEND CUSTOMER INFO AND RESERVATION TO DATABASE, there are issues with package not being sent and also reservations being sent twice  --->
<?php

    require '/home/bluetea1/db.php';

// generate random order number
    $length = 7;    
    $random= substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
    
        // insert into customer info table -------
      $sql3 = "INSERT INTO customer_info (FirstName, LastName, PhoneNumber, EmailAddress, OrderNum) VALUES ('$first_name', '$last_name', '$phone', '$email', '$random')";
    $result3 = mysqli_query($cnxn, $sql3);
    
    //begin date variable - hardcoded dummy date (don't delete this, reservation won't go through without it) this date is updated below in $sql4 variable
    $beginDate = date("Y-m-d", strtotime("2022-11-11"));

    
    //end date variable - hardcoded dummy date (don't delete this, reservation won't go through without it) this date is updated below in $sql5 variable
    $endDate = date("Y-m-d", strtotime("2022-11-15"));



    // insert into reservation table ------
    $sql2 = "INSERT INTO reservations (SetName, Package, Status, Cost, beginDate, endDate, OrderNum, reservation_date, ExtrasReserved) VALUES ('$set', '$package','confirmed', '$total', '$beginDate', '$endDate', '$random', '$date', '$extras')";
    
    $result2 = mysqli_query($cnxn, $sql2);

    
    // insert into reservation table if they upgrade ------
    $sql6 = "INSERT INTO reservations (SetName, Package, Status, Cost, beginDate, endDate, OrderNum, reservation_date, ExtrasReserved) VALUES ('$set', '$upgrade_package','confirmed', '$total', '$beginDate', '$endDate', '$random', '$date', '$extras')";
    
    $result6 = mysqli_query($cnxn, $sql6);
     
   
    
    // change hardcoded date into +/- 2 days
    //change begin date (reservation date - 2days)
    $sql4 = "UPDATE reservations 
    SET beginDate=DATE_ADD(reservation_date,INTERVAL -2 DAY);";
    $result4 = mysqli_query($cnxn, $sql4);
    //change end date (reservation date + 2days)
    $sql5 = "UPDATE reservations 
    SET endDate=DATE_ADD(reservation_date,INTERVAL 2 DAY);";
    $result5 = mysqli_query($cnxn, $sql5);


?>

  </body>
</html>

<?php
//if condition is met (customer submits email in reserve page), then send out the email
if(isset($email)) {
  
  $to = $email;
  $subject = "Walnut Ridge Wedding Rentals Order Confirmation";
  $headers = "From: Walnutridgeleathercompany@gmail.com" . "\r\n" .
  
  $message = "
  <html>
    <head>
      <style>
        html{
          font-family: 'Times New Roman', serif;
          color: black;
        }
        h1 {
            text-align: center;
            color: #d6b6ae;
          }
        p {
            text-align: center;
            color: black;
        }
        em {
            text-align: center;
            font-weight: bold;
            font-style: normal;
            text-decoration: underline;
        }
        #estimated {
             border-top-style: solid;
             border-top-color: #bdbdbd;
             width: 85%;
             display:block;
             margin: auto;
             margin-top: 10px;
             margin-bottom: 10px;
             color: black;   
  
        }
        #selected, #form {
              border: 1px solid;
              border-radius: 10px;
              padding: 30px 20px;
              display: block;
              margin-left: auto;
              margin-right: auto;
              margin-top: 30px;
              margin-bottom: 30px;
              width: 50%;
              color: black;   
        }
        #theLogo {
              width: 200px;
              height: 95px;
              text-align: center;
              align-content: center;
              margin-left: auto;
              margin-right: auto;
        }
        b {
            text-align: center;
        }
      </style>
    </head>
  
  <body>
  <header>
  <center>
    <a href='https://blueteam2022.greenriverdev.com/Wedding_Website/Main/'><img alt='logo img' id='theLogo' src='https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/4ee74135-1a9c-47a5-ad20-3c796b60ef0c/WRNEWLOGOnobkground.png?format=1500w'></a>
      <h1>Order Confirmation Receipt</h1>
  </center>
  </header>
  
  <p><strong>Dear ".ucwords($first_name)." ".ucwords($last_name).",</strong><br> </p>
  <p><strong>Thank you for your order!</strong></p>
  <p>The details of your order are listed below:</p>
            <section id='selected'>
              <h3>
                  <center><em>Order Summary:</em></center>
              </h3>
  
              <b>Reservation Date: </b>".$date."<br>
  
              <b>Set: </b>".$set."<br>
  
              <b>Package: </b>".$package."<br>
  
              <b>Extras: </b>".$_POST['extras'] ."<br>
  
              <b>Delivery: </b>".$_POST["delivery"]."
  
              <div id='estimated'></div>
              <b>Total estimated price: </b>
              " . '$' . number_format($_POST['price'], 2, '.', ',') . "</br>
            </section>
  
            <section id='form'>
              <h3>
                <center><em>Customer Contact Details:</em></center>
              </h3>
              <b>Name: </b>
              " . ucwords($_POST['fname']) . "
              " . ucwords($_POST['lname']) . "<br>
              <b>Email: </b>
              " . $_POST['email'] . " " . "<br>
              <b>Phone Number: </b>
              " . $_POST['phone'] . " " . "<br>
            </section>
        <p>In the mean time, hang tight ~ we're working on making your dream wedding come true!</p>
      <p>If you have any questions or concerns, feel free to <a href='https://www.walnutridgeweddingrentals.com/contact-us'>contact us</a>.</p><br>
  
      <p><strong>All the best,</strong></p>
      <p><strong>Walnut Ridge Wedding Rentals Team</strong></p>
    </body>
  </html>
  ";
  
  // TEST to show what email looks like - REMOVE LATER
  //echo $message;    
  
  
  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  // More headers
  $headers .= 'From: <Walnutridgeleathercompany@gmail.com>' . "\r\n";
  // $headers .= 'Cc: myboss@example.com' . "\r\n"; 
  
  mail($to,$subject,$message,$headers);
}
?>





