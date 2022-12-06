<?php
    if(isset($_COOKIE['fname'])){
        echo 'Thanks for booking with us '.$_COOKIE['fname']. '!<br>'; 
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Extras Page - Walnut Ridge Wedding Rentals</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="reserve_styles.css">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>
<?php
$set = $_POST['set'];
$package = $_POST["package"];
//CALCULATE PACKAGE PRICE
$package_price = 0.0;
if($_POST['set'] == "Layered Arch") {
    $full_set = 849.00;
    $pick_6 = 749.00;
    $pick_4 = 699.00;

    // price variables
    if($_POST["package"] == 'FULL SET Rental') {
        $package_price = $full_set;
    }
    else if($_POST["package"] == 'PICK 6 Rental') {
        $package_price = $pick_6;
    }
    else if($_POST["package"] == 'PICK 4 Rental') {
        $package_price = $pick_4;
    }
}
elseif($_POST['set'] == "Modern Round") {
    $full_set = 799.00;
    $pick_6 = 699.00;
    $pick_4 = 599.00;
    $ala = 275.00;

    // price variables
    if($_POST["package"] == 'FULL SET Rental') {
        $package_price = $full_set;
    }
    if($_POST["package"] == 'PICK 6 Rental') {
        $package_price = $pick_6;
    }
    if($_POST["package"] == 'PICK 4 Rental') {
        $package_price = $pick_4;
    }
    if($_POST["package"] == 'A’ la Carte') {
        $package_price = $ala;
    }
}
elseif($_POST['set'] == "Vintage Mirror") {
    $platinum = 849.00;
    $gold = 799.00;
    $pick_6 = 699.00;
    $pick_4 = 599.00;
    $small = 40.00;
    $medium = 60.00;
    $large = 80.00;

    // price variables
    if($_POST["package"] == 'Platinum Package') {
        $package_price = $platinum;
    }
    if($_POST["package"] == 'Gold Package') {
        $package_price = $gold;
    }
    if($_POST["package"] == 'PICK 6 Rental') {
        $package_price = $pick_6;
    }
    if($_POST["package"] == 'PICK 4 Rental') {
        $package_price = $pick_4;
    }
    if($_POST["mirror"] == 'SMALL (up to 12 words) $40') {
        $mirror = $small;
        $package_price += $small;
    }
    if($_POST["mirror"] == 'MEDIUM (up to 24 words) $60') {
        $mirror = $medium;
        $package_price += $medium;
    }
    if($_POST["mirror"] == 'LARGE (up to 60 words) $80') {
        $mirror = $large;
        $package_price += $large;
    }
    if($_POST["mirror"] == 'No Additional Mirrors') {
        $mirror = 0.00;
    }
    echo $package_price;
}
elseif($_POST['set'] == "Dark Walnut") {
    $full = 299.00;
    $pick_6 = 249.00;
    $pick_4 = 199.00;
    $signRectang = 'Rectangluar';
    $signRound = 'Rounded';

    // price variables
    if($_POST["package"] == 'FULL SET Rental') {
        $package_price = $full;
    }
    if($_POST["package"] == 'PICK 6 Rental') {
        $package_price = $pick_6;
    }
    if($_POST["package"] == 'PICK 4 Rental') {
        $package_price = $pick_4;
    }
    if($_POST["Sign"] == 'Rectangular') {
        $_POST["Sign"] == $signRectang;
    }
    if($_POST["Sign"] == 'Rounded') {
        $_POST["Sign"] == $signRound;
    }
    if($_POST["aisleRunner"] == 'yes') {
        $package_price += 99.00;
    }
    if($_POST["typeWriter"] == 'yes') {
        $package_price += 99.00;
    }
}
elseif($_POST['set'] == "Rustic Wood") {
    $full = 299.00;
    $no_seating = 245.00;
    $pick_4 = 199.00;
    $sign1 = 'Stained Wood';
    $sign2 = 'Framed White';

    // price variables
    if($_POST["package"] == 'FULL SET Rental') {
        $package_price = $full;
    }
    if($_POST["package"] == 'No Seating Rental') {
        $package_price = $no_seating;
    }
    if($_POST["package"] == 'PICK 4 Rental') {
        $package_price = $pick_4;
    }
    if($_POST["Sign"] == 'Stained Wood') {
        $_POST["Sign"] == $sign1;
    }
    if($_POST["Sign"] == 'Framed White') {
        $_POST["Sign"] == $sign2;
    }
    if($_POST["aisleRunner"] == 'yes') {
        $package_price += 99.00;
    }
    if($_POST["typeWriter"] == 'yes') {
        $package_price += 99.00;
    }
}
?>

<header>
    <a href="https://blueteam2022.greenriverdev.com/Wedding_Website/Main/">
        <img alt="logo img" id="theLogo" src="logo.png"></a>

    <div class="progress" style="height: 37px; width: 50%; ">
        <div style="width: 60%; background-color:#d6b6ae" class="progress-bar">STEP 3/5: <br>Add any Extras</div>
    </div>
    <br>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Extras Page</h1>
        </div>
    </div>

    <div id="Extras">
        <p class="text-center"><em>Please select any extras you would like in your package:</em></p>
    </div>

    <form class="center" id="extrasForm"  name="extrasForm" action="Reserve.php"  onsubmit="return formValidation()" method="post">
        <br>
        <div class="row">
            <div class="col">
                <input type="checkbox" name="vintage_couch" value="Vintage Couch">
                <label for="vintage_couch">Vintage Couch - $99 add on to any Delivered Rental<img src = "photos/DSC_3361.jpeg"  width = "100%" alt = "Vintage Couch" class="rounded-pill"></label>
            </div>

            <div class="col">
                <input type="checkbox" name="gallon_jugs" value="Antique Gallon Jugs">
                <label for="gallon_jugs">Antique Gallon Jugs - $4 each, 12<img src = "photos/DSC_3498.jpeg"  width = "100%" alt = "Antique Gallon Jugs" class="rounded-pill"></label>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col">
                <input type="checkbox" name="wine_jugs" value="XL Wine Jugs">
                <label for="wine_jugs">XL Wine Jugs - $20 each, 3 available<img src = "photos/DSC_3509.jpeg"  width = "80%" alt = "Vintage Couch" class="rounded-pill"></label>
            </div>

            <div class="col">
                <input type="checkbox" name="clear_ball_jars" value="Clear Antique Ball Jars">
                <label for="clear_ball_jars">Clear Antique Ball Jars - $30 for 50 Jars (Assorted Sizes)<img src = "photos/DSC_3508.jpeg"  width = "100%" alt = "Vintage Couch" class="rounded-pill"></label>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col">
                <input type="checkbox" name="blue_ball_jars" value="Blue Antique Ball Jars">
                <label for="blue_ball_jars">Blue Antique Ball Jars - $30 for 25 Jars (Assorted Sizes)<img src = "photos/DSC_3507.jpeg"  width = "100%" alt = "Vintage Couch" class="rounded-pill"></label>
            </div>

            <div class="col">
                <input type="checkbox" name="HexArbor" value="Hexagon Arbor">
                <label for="HexArbor">Hexagon Arbor - $350<img src = "photos/IMG_8110.jpg"  width = "100%" alt = "Vintage Couch" class="rounded-pill"</label>
            </div>
        </div>
        <br>

        <?php
        if ($_POST["set"] == "Layered Arch" && $_POST["package"] == 'PICK 6 Rental') {
            ?>
            <section class="container" id="LayeredArchFullSetUpgrade">
                <em>Upgrade to the Full Set for 0nly $100!</em>
                <br>
                <input type="radio" id="yes_layered_6tofull" name="yes_layered_6tofull" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_layered_6tofull" name="yes_layered_6tofull" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <?php
        if ($set == "Layered Arch" && $package == 'PICK 4 Rental') {
            ?>
            <section class="container" id="LayeredArchFullSetUpgrade">
                <p>Upgrade to the Full Set for 0nly $150!</p>
                <input type="radio" id="yes_layered_4tofull" name="yes_layered_4tofull" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_layered_4tofull" name="yes_layered_4tofull" value="No">
                <label for="no">No  </label>
            </section>

            <section class="container" id="LayeredArchPick6Upgrade">
                <p>Upgrade to the Pick 6 Set for 0nly $50!</p>
                <input type="radio" id="yes_layered_4to6" name="yes_layered_4to6" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_layered_4to6" name="yes_layered_4to6" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <?php
        if ($_POST["set"] == "Modern Round" && $_POST["package"] == 'PICK 6 Rental')
        {
            ?>
            <section class="container" id="ModernRoundFullSetUpgrade">
                <p>Upgrade to the Full Set for 0nly $100!</p>
                <input type="radio" id="yes_modern_6tofull" name="yes_modern_6tofull" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_modern_6tofull" name="yes_modern_6tofull" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>


        <?php
        if ($set == "Modern Round" && $package == 'PICK 4 Rental') {
            ?>
            <section class="container" id="ModernRoundFullSetUpgrade">
                <p>Upgrade to the Full Set for 0nly $200!</p>
                <input type="radio" id="yes_modern_4tofull" name="yes_modern_4tofull" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_modern_4tofull" name="yes_modern_4tofull" value="No">
                <label for="no">No  </label>
            </section>

            <section class="container" id="ModernRoundPick6">
                <p>Upgrade to the Pick 6 Set for 0nly $100!</p>
                <!--                 <br><input type="submit" id="button"> -->
                <input type="radio" id="yes_modern_4to6" name="yes_modern_4to6" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_modern_4to6" name="yes_modern_4to6" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <?php
        if ($_POST["set"] == "Vintage Mirror" && $_POST["package"] == 'Gold Package') {
            ?>
            <section class="container" id="VintageMirrorPlatinumSetUpgrade">
                <p>Upgrade to the Platinum Set for 0nly $50!</p>
                <input type="radio" id="yes_mirror_gold_to_plat" name="yes_mirror_gold_to_plat" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_mirror_gold_to_plat" name="yes_mirror_gold_to_plat" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <?php
        if ($_POST["set"] == "Vintage Mirror" && $_POST["package"] == 'PICK 6 Package') {
            ?>
            <section class="container" id="VintageMirrorPlatinumSetUpgrade">
                <p>Upgrade to the Platinum Set for 0nly $200!</p>
                <input type="radio" id="yes_mirror_6to_plat" name="yes_mirror_6to_plat" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_mirror_6to_plat" name="yes_mirror_6to_plat" value="No">
                <label for="no">No  </label>
            </section>

            <section class="container" id="VintageMirrorPlatinumSetUpgrade">
                <p>Upgrade to the Gold Set for 0nly $150!</p>
                <input type="radio" id="yes_mirror_6to_gold" name="yes_mirror_6to_gold" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_mirror_6to_gold" name="yes_mirror_6to_gold" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <?php
        if ($set == "Vintage Mirror" && $package == 'PICK 4 Package') {
            ?>
            <section class="container" id="VintageMirrorPlatinumSetUpgrade">
                <p>Upgrade to the Platinum Set for 0nly $250!</p>
                <input type="radio" id="yes_mirror_4to_plat" name="yes_mirror_4to_plat" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_mirror_4to_plat" name="yes_mirror_4to_plat" value="No">
                <label for="no">No  </label>
            </section>

            <section class="container" id="VintageMirrorGoldSetUpgrade">
                <p>Upgrade to the Gold Set for 0nly $100!</p>
                <input type="radio" id="yes_mirror_4to_gold" name="yes_mirror_4to_gold" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_mirror_4to_gold" name="yes_mirror_4to_gold" value="No">
                <label for="no">No  </label>
            </section>

            <section class="container" id="VintageMirrorPick6Upgrade">
                <p>Upgrade to the Pick 6 Set for 0nly $50!</p>
                <input type="radio" id="yes_mirror_4to6" name="yes_mirror_4to6" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_mirror_4to6" name="yes_mirror_4to6" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <?php
        if ($set == "Dark Walnut" && $package == 'PICK 6 Rental') {
            ?>
            <section class="container" id="DarkWalnutFullSetUpgrade">
                <p>Upgrade to the Full Set for 0nly $54!</p>
                <input type="radio" id="yes_dark_6tofull" name="yes_dark_6tofull" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_dark_6tofull" name="yes_dark_6tofull" value="No">
                <label for="no">No  </label>
            </section>
        <?php
        } ?>

        <?php
        if ($set == "Dark Walnut" && $package == 'PICK 4 Rental') {
            ?>
            <section class="container" id="DarkWalnutFullSetUpgrade">
                <p>Upgrade to the Full Set for 0nly $100!</p>
                <input type="radio" id="yes_dark_4tofull" name="yes_dark_4tofull" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_dark_4tofull" name="yes_dark_4tofull" value="No">
                <label for="no">No  </label>
            </section>

            <section class="container" id="DarkWalnutPick6Upgrade">
                <p>Upgrade to the Pick 6 Set for 0nly $46!</p>
                <input type="radio" id="yes_dark_4to6" name="yes_dark_4to6" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_dark_4to6" name="yes_dark_4to6" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <?php
        if ($set == "Rustic Wood" && $package == 'No Seating Rental') {
            ?>
            <section class="container" id="RusticWoodFullSetUpgrade">
                <p>Upgrade to the Full Set for 0nly $54!</p>
                <input type="radio" id="yes_rustic_no_seat_tofull" name="yes_rustic_no_seat_tofull" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_rustic_no_seat_tofull" name="yes_rustic_no_seat_tofull" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <?php
        if ($set == "Rustic Wood" && $package == 'PICK 4 Rental') {
            ?>
            <section class="container" id="RusticWoodFullSetUpgrade">
                <p>Upgrade to the Full Set for 0nly $100!</p>
                <input type="radio" id="yes_rustic_4to_no_seat" name="yes_rustic_4to_full" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_rustic_4to_no_seat" name="yes_rustic_4to_full" value="No">
                <label for="no">No  </label>
            </section>

            <section class="container" id="Rustic Wood No Seating Set Upgrade">
                <p>Upgrade to the "No Seating" Set for 0nly $46!</p>
                <input type="radio" id="yes_rustic_4to_no_seat" name="yes_rustic_4to_no_seat" value="Yes">
                <label for="yes">Yes  </label>
                <br>
                <input type="radio" id="no_rustic_4to_no_seat" name="yes_rustic_4to_no_seat" value="No">
                <label for="no">No  </label>
            </section>
        <?php } ?>

        <br><br>
        <section id="delivery">
            <em>Would you like delivery?</em>
            <br>
            <input type="radio" id="yes_delivery" name="delivery_option" value="Yes">
            <label for="yes">Yes  </label>
            <br>
            <input type="radio" id="no_delivery" name="delivery_option" value="No">
            <label for="no">No  </label>
        </section>

        <br><input type="submit" id="button">
        <br>
        <br>
        <?php

        $date = $_POST["date"];
        $extras = $_POST["extras"];
        $Sign = $_POST["Sign"];
        $aisleRunner = $_POST["aisleRunner"];
        $typeWriter = $_POST["typeWriter"];
        $delivery = $_POST["delivery_option"];
        $upgrade = $_POST['modern_package_option'];


        echo '<input type = "hidden" name = "set" value = "'.$set.'">';
        echo '<input type = "hidden" name = "date" value = "'.$date.'">';
        echo '<input type = "hidden" name = "extras" value = "'.$extras.'">';
        echo '<input type = "hidden" name = "package" value = "'.$package.'">';
        echo '<input type = "hidden" name = "package_price" value = "'.$package_price.'">';
        echo '<input type = "hidden" name = "Sign" value = "'.$Sign.'">';
        echo '<input type = "hidden" name = "aisleRunner" value = "'.$aisleRunner.'">';
        echo '<input type = "hidden" name = "typeWriter" value = "'.$typeWriter.'">';
        echo '<input type = "hidden" name = "delivery" value = "'.$delivery.'">';
        echo '<input type = "hidden" name = "upgrade" value = "'.$upgrade.'">';

        ?>
    </form>
</div>

<script src="extras.js"></script>

</body>
</html>
