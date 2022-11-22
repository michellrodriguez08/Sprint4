<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Query - Walnut Ridge Wedding Rentals</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="reserve_styles.css">
    <meta name="robots" content="noindex, nofollow">
    <!--- inline styles for table-->
    <style>
        body {
            max-width: 80%;
            margin: auto;
        }
        table, td, th {
          border: 1px solid black;
          text-align: center;
        }
        table {
          border-collapse: collapse;
          width: 100%;
        }
        th {
          height: 70px;
        }
        tr{
            height: 50px;
        }
    </style>
</head>

<body>

<?php
require '/home/bluetea1/db.php';

global $cnxn;

$allRes = "SELECT * FROM `reservations` ORDER BY beginDate ASC ";

$lArch = "SELECT * FROM `reservations` WHERE `setName` = 'Layered Arch' ORDER BY 'beginDate' ASC";
$modRnd = "SELECT * FROM `reservations` WHERE `setName` = 'Modern Round'";
$drkWal = "SELECT * FROM `reservations` WHERE `setName` = 'Dark Walnut'";
$vintMir = "SELECT * FROM `reservations` WHERE `setName` = 'Vintage Mirror'";
$rustWood = "SELECT * FROM `reservations` WHERE `setName` = 'Rustic Wood'";

// print out all reservations --------------
$result = @mysqli_query($cnxn, $allRes);
echo '<br>';
echo '<h1><center>Client Reservations</center></h1>';

// create table and table headers
echo '<table>
  <tr>
    <th><b>Set</b></th>
    <th><b>Package</b></th>
    <th><b>Extras</b></th>
    <th><b>Status</b></th>

    <th><b>Cost</b></th>
    <th><b>Date (beginning)</b></th>
    <th><b>Date (end)</b></th>
    <th><b>Order Number</b></th>
  </tr>';
  
while ($row = mysqli_fetch_assoc($result))
{
    $setName = $row['SetName'];
    $package = $row['Package'];
    $extras = $row['ExtrasReserved'];
    $status= $row['Status'];
    $cost = $row['Cost'];
    $begin = $row['beginDate'];
    $end = $row['endDate'];
    $ordernum = $row['OrderNum'];
    
    // table rows
    echo'
  <tr>
    <td>'.$setName.'</td>
    <td>'.$package.'</td>
    <td>'.$extras.'</td>
    <td>'.$status.'</td>
    <td>$'.$cost.'</td>
    <td>'.$begin.'</td>
    <td>'.$end.'</td>
    <td>'.$ordernum.'</td>

  </tr>';
 
    
    // echo '<br>Set: '.$setName;
    // echo '<br>Package: '.$package;
    // echo '<br>Status: '. $status;
    // echo '<br>Cost: '.$cost;
    // echo '<br>Date (beginning): '. $begin;
    // echo '<br>Date (end): '.$end;
    // echo '<br>Order Number: '.$ordernum;
    // echo '<br>Extras: '.$ordernum;

    // echo '<br>';
}
echo '</table>';
echo '<br>';


?>

</body>
</html>
