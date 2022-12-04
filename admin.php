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
    <center><br><br>
    <form action='/clientQuery.php' method='GET' >
        <select name = 'view'>
            <option value='all'>View All Set Reservations</option>
            <option value='layered'>View Layered Arch Set Reservations</option>
            <option value='modern'>View Modern Round Set Reservations</option>
            <option value='vintage'>View Vintage Mirror Set Reservations</option>
            <option value='dark'>View Dark Walnut Set Reservations</option>
            <option value='rustic'>View Rustic Wood Set Reservations</option>
        </select>
    <input type='submit' value='Submit'>
    </form>
    </center>
</body>

";
}

?>
