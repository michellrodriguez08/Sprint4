<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administration Page - Walnut Ridge Wedding Rentals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="reserve_styles.css">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>
<br>
<h1>Walnut Ridge Administration Page</h1>

<?php
$uname = $_POST["uname"];
$pword = $_POST["password"];


echo '<input type = "hidden" name = "uname" value = "'.$uname.'">';
echo '<input type = "hidden" name = "pword" value = "'.$pword.'">';


// mySQLi -------
// if condition is met (admin login form submits username and username is not empty) display administration page
if(isset($uname) & $uname != "") {
echo "
    <br>
    <br>
    <button type='button' onclick='window.location.href=`https://blueteam2022.greenriverdev.com/clientQuery.php`;' id= 'showAll'>Show All Reservations</button><br><br>
    <button type='button' onclick='window.location.href=`https://blueteam2022.greenriverdev.com/clientQuery.php`;' id= 'layeredArch'>Layered Arch Reservations</button><br><br>
    <button type='button' onclick='window.location.href=`https://blueteam2022.greenriverdev.com/clientQuery.php`;' id= 'modernRound'>Modern Round Reservations</button><br><br>
    <button type='button' onclick='window.location.href=`https://blueteam2022.greenriverdev.com/clientQuery.php`;' id= 'rusticWood'>Rustic Wood Reservations</button><br><br>
    <button type='button' onclick='window.location.href=`https://blueteam2022.greenriverdev.com/clientQuery.php`;' id= 'darkWalnut'>Dark Walnut Reservations</button><br><br>
    <button type='button' onclick='window.location.href=`https://blueteam2022.greenriverdev.com/clientQuery.php`;' id= 'vintageMirror'>Vintage Mirror Reservations</button>
    <br>
    <br>
<label>
    <h4>Choose by Date</h4>
    <input type='date' name='date'>
    <button type='button' onclick='window.location.href='https://blueteam2022.greenriverdev.com/clientQuery.php';' id='date'>Search by Date</button>

</label>

</body>

";
}

?>
