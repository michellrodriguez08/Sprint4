<?php
    // set cookie for set name
    setcookie("set", $_POST["set"], time() + (86400 * 30), "/");
    
    // set cookie for date
    setcookie("date", $_POST["date"], time() + (86400 * 30), "/");


    if(isset($_COOKIE['fname'])){
    echo 'Thanks for booking with us '.$_COOKIE['fname']. '!<br>'; 
    
    } 
    
    


$set = $_POST["set"];
$date = $_POST["date"];
$packagePrice = 0;
?>

<?php
    require '/home/bluetea1/db.php';
    $item = $_POST['set'];
    $table = "reservations";
    $date = $_POST['date'];
    $count = checkItemDateOverlap($item,$table,$date);
   // echo "<p>$count reservations on $date.</p>";
    function checkItemDateOverlap($item, $table, $date) {
    global $cnxn;
    global $set;
    $start = date('Y-m-d', strtotime($date. ' - 2 days'));
    $finish = date('Y-m-d', strtotime($date. ' + 2 days'));
    $sql = "SELECT * FROM $table WHERE `setName` = '$set' AND (`reservation_date` BETWEEN '$start' AND 
    '$finish')";
    $result = @mysqli_query($cnxn, $sql);
    $howmany = mysqli_num_rows($result);
    // echo "<p>$howmany reservations on $date.</p>";
    return $howmany;
    }
    global $howmany;
    
     if($set == "Layered Arch" || $set == "Modern Round") {
        if($count != 0) {
            ?>
            <script type="text/javascript">
            alert("This set is not available on that date.");
            window.location.href = "https://blueteam2022.greenriverdev.com/Wedding_Website_Sprint_3/index.php";
            </script>
        <?php
        }
    }
    if($set == 'Dark Walnut' || $set == 'Rustic Wood' || $set == 'Vintage Mirror') {
        if( $count >= 2) {
            ?>
            <script type="text/javascript">
            alert("This set is not available on that date.");
            window.location.href = "https://blueteam2022.greenriverdev.com/Wedding_Website_Sprint_3/index.php";
            </script>
            
         
            <?php
        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Packages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="packageStyle.css">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>
<header>
    <a href="https://blueteam2022.greenriverdev.com/Wedding_Website/Main/">
        <img alt="logo img" id="theLogo" src="logo.png"></a>
  <div class="progress" style="height: 37px; width: 50%; ">
        <div style="width: 40%; background-color:#d6b6ae" class="progress-bar">STEP 2/5: <br>Pick your Package</div>
        </div>
        <br>

</header>


<div class="row">
    <div class="col-12">
        <h1>Packages</h1><br>
    </div>
</div>

<!--Layered Arch Package Info-->
<section id="layeredArch">
    <div id="rentalIntro">
        <h2><u>LAYERED ARCH RENTAL PACKAGES</u></h2>
        <p>Pricing includes delivery & tear down (30 mile radius of Orrville, OH)</p>
        <p>Delivery & tear down is available beyond the 30 miles for an additional fee.</p>
    </div>

    <h2>FULL SET Rental $849</h2>
    <ul>INCLUDES EACH OF THE FOLLOWING ITEMS
        <button type="button" class="collapsible">Contains All of These Items (click to view)</button>
        <div class="content">
            <li>Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)</li>
            <li>3 piece seating chart half arch set (print service for cards is available for a small additional fee)</li>
            <li>Table numbers 1-30</li>
            <li>Gold Card Terrarium with choice of “Gifts & Cards” sign</li>
            <li>5 “Reserved” signs</li>
            <li>Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Don't Mind if I Do,” “In Loving Memory”</li>
            <li>Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</li>
            <li>1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</li>
            <li>1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text)</li>
            <li>Unplugged Ceremony sign</li>
            <li>Hairpin Record Player Prop</li>
            <li>"Mr & Mrs" Custom Head Table Keepsake is a free gift in addition to the items above</li>
        </div>
    </ul>

    <h2>PICK 6 Rental $749</h2>
    <ul>CHOOSE 6 OF THE FOLLOWING ITEMS
        <button type="button" class="collapsible">Pick from the following (click to view)</button>
        <div class="content">
            <li>Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)</li>
            <li>3 piece seating chart half arch set (print service for cards is available for a small additional fee)</li>
            <li>Table numbers 1-30</li>
            <li>Gold Card Terrarium with choice of “Gifts & Cards” sign</li>
            <li>5 “Reserved” signs</li>
            <li>Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Don't Mind if I Do,” “In Loving Memory”)</li>
            <li>Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</li>
            <li>1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</li>
            <li>1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text)</li>
            <li>Unplugged Ceremony sign</li>
            <li>Hairpin Record Player Prop</li>
            <li>"Mr & Mrs" Custom Head Table Keepsake is a free gift in addition to the items above</li>
        </div>
    </ul>

    <h2>PICK 4 Rental $699</h2>
    <ul>CHOOSE 4 OF THE FOLLOWING ITEMS
        <button type="button" class="collapsible">Pick from the following (click to view)</button>
        <div class="content">
            <li>Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)
            </li>
            <li>3 piece seating chart half arch set (print service for cards is available for a small additional fee)
            </li>
            <li>Table numbers 1-30</li>
            <li>Gold Card Terrarium with choice of “Gifts & Cards” sign</li>
            <li>5 “Reserved” signs</li>
            <li>Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Don't Mind if I Do,” “In Loving Memory”)
            </li>
            <li>Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</li>
            <li>1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</li>
            <li>1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text)</li>
            <li>Unplugged Ceremony sign</li>
            <li>Hairpin Record Player Prop</li>
            <li>"Mr & Mrs" Custom Head Table Keepsake is a free gift in addition to the items above</li>
    </ul>
    </div>
</section>

<!--Dark Walnut Packages-->
<section id="darkWalnut">
    <section id="full_package">
        <h2><u>DARK WALNUT RENTAL PACKAGES</u></h2>
        <h2>Dark Walnut Full Package Rental</h2>
        <div class="row">
            <div class="col-12">
                <em>$299 plus tax</em>
                <ul>
                    <button type="button" class="collapsible">Contains All of These Items (click to view)</button>
                    <div class="content">
                        <li>“Welcome to Our Beginning” Round (24” diameter, with easel) or Rectangular (35.5” x 21” with easel)</li>
                        <li>“Find your Seat”  (35.5” x 21” organizer with 30 clips & easel)</li>
                        <li>Table Numbers, double-sided (Numbers 1-30, 3.5” x 9”)</li>
                        <li>Antique Jug with “Honeymoon Fund” (jug & mini-hanger, 4.75” x 10”) (2pc)</li>
                        <li>“Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</li>
                        <li>“We know that you would be here today if Heaven weren’t so far away”  (10” x 10.5” memorial sign or seat saver with small easel)</li>
                        <li>“Here comes the Bride” ring bearer carrier  (10.25” x 17.25” with cord)</li>
                        <li>“Better” & “Together” Chair Hangers (with cord 10.25” x 17.25”) (2pc)</li>
                        <li>“Please Sign our Guestbook” (self standing 7.25” x 16”)</li>
                        <li>“Just Married” & “Thank You” (reversible photo-shoot prop 7.25” x 31”)</li>
                        <li>“Take One” (7.25” x 7.25”)</li>
                        <li>“Programs” (7.25” x 16”)</li>
                        <li>“Enjoy the Moment, no photography please” 10.5” x 17” with small easel</li>
                        <li>8 Reserved signs (3.5” x 12”  4 with cord hanger option) (8pc)</li>
                        <li>Antique Leather and Wooden Trunk with “Cards” Banner</li>
                    </div>
                </ul>
            </div>
        </div>
    </section>

    <h2>Dark Walnut “No Seating” Rental</h2>
    <div class="row">
        <div class="col-12">
            <em> $245 plus tax</em>
            <ul>
                <button type="button" class="collapsible">Dark Walnut “No Seating” Rental (click to view)</button>
                <div class="content">
                    <li>“Welcome to Our Beginning” Round (24” diameter, with easel) or Rectangular (35.5” x 21” with easel)</li>
                    <li>Antique Jug with “Honeymoon Fund” (jug & mini-hanger, 4.75” x 10”) (2pc)</li>
                    <li>“Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</li>
                    <li>“We know that you would be here today if Heaven weren’t so far away”  (10” x 10.5” memorial sign or seat saver with small easel)</li>
                    <li>“Here comes the Bride” ring bearer carrier  (10.25” x 17.25” with cord)</li>
                    <li>“Better” & “Together” Chair Hangers (with cord 10.25” x 17.25”) (2pc)</li>
                    <li>“Please Sign our Guestbook” (self standing 7.25” x 16”)</li>
                    <li>“Just Married” & “Thank You” (reversible photo-shoot prop 7.25” x 31”)</li>
                    <li>“Take One” (7.25” x 7.25”)</li>
                    <li>“Programs” (7.25” x 16”)</li>
                    <li>“Enjoy the Moment, no photography please” 10.5” x 17” with small easel</li>
                    <li>8 Reserved signs (3.5” x 12”  4 with cord hanger option) (8pc)</li>
                    <li>Antique Leather and Wooden Trunk with “Cards” Banner</li>
                </div>
            </ul>
        </div>
    </div>

    <h2>Dark Walnut “You Pick Four” Rental</h2>
    <div class="row">
        <div class="col-12">
            <em>$199 plus tax</em>
            <ul>
                <button class="collapsible" type="button">SELECT ANY 4 OF THE FOLLOWING (click to view)</button>
                <div class="content">
                    <li>“Welcome to Our Beginning” Round (24” diameter, with easel) or Rectangular (35.5” x 21” with easel)</li>
                    <li>“Find your Seat”  (35.5” x 21” organizer with 30 clips & easel) </li>
                    <li>Table Numbers, double-sided (Numbers 1-30, 3.5” x 9”)</li>
                    <li>Antique Jug with “Honeymoon Fund” (jug & mini-hanger, 4.75” x 10”) (2pc)</li>
                    <li>“Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</li>
                    <li>“We know that you would be here today if Heaven weren’t so far away”  (10” x 10.5” memorial sign or seat saver with small easel)</li>
                    <li>“Here comes the Bride” ring bearer carrier  (10.25” x 17.25” with cord)</li>
                    <li>“Better” & “Together” Chair Hangers (with cord 10.25” x 17.25”) (2pc)</li>
                    <li>“Please Sign our Guestbook” (self standing 7.25” x 16”)</li>
                    <li>“Just Married” & “Thank You” (reversible photo-shoot prop 7.25” x 31”)</li>
                    <li>“Take One” (7.25” x 7.25”)</li>
                    <li>“Programs” (7.25” x 16”)</li>
                    <li>“Enjoy the Moment, no photography please” 10.5” x 17” with small easel</li>
                    <li>8 Reserved signs (3.5” x 12”  4 with cord hanger option) (8pc)</li>
                    <li>Antique Leather and Wooden Trunk with “Cards” Banner</li>
                </div>
            </ul>
        </div>
    </div>

    <section id="choose_welcome">
        <h2>Choose either “Welcome Sign” below when selecting your rental package…</h2>
        <h3>WELCOME SIGNS INCLUDE EASEL FOR DISPLAY</h3>

        <p>Choose from “Rectangular”</p>
        <p>or</p>
        <p>“Round”</p>
    </section>

    <section id="aisle">
        <div class="row">
            <div class="col-12">
                <br><h3> AISLE RUNNER ADD-ON</h3>
                <p>Six signs featuring phrases of the 1 Corinthians 13 “Love Chapter.”</p>
                <p >$99 with any rental package</p>
            </div>
        </div>
    </section>

    <section id="typewriter">
        <div class="row">
            <div class="col-12">
                <br><h3>VINTAGE TYPEWRITER WITH MESSAGE TO GUESTS</h3>
                <p>Travels in custom vintage</p>
                <p>Walnut Ridge shipping crate.</p>
                <p>$99 with any rustic wood rental package.</p>
            </div>
        </div>
    </section>
</section>

<!--Modern Round Package info-->
<section id="modernRound">
    <h2><u>MODERN ROUND RENTAL PACKAGES</u></h2>
    <h4 class="text-center"> Pricing Includes Delivery & Pick Up (30 mile radius)</h4>

    <h2>FULL SET Rental $799</h2>
    <ul id="full-set">
        <button type="button" class="collapsible">Contains All of These Items (click to view)</button>
        <div class="content">
            <li>Large Custom Welcome (round center becomes a keepsake)</li>
            <li>Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</li>
            <li>1-30 free standing table numbers</li>
            <li>rn Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</li>
            <li>Set of “Reserved” signs (5)</li>
            <li>2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</li>
            <li>2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</li>
            <li>1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</li>
            <li><em>All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</em></li>
        </div>
    </ul>

    <h2>PICK 6 Rental $699
    </h2>
    <ul id="pick6">
        <button type="button" class="collapsible">CHOOSE 6 OF THE FOLLOWING ITEMS (click to view)</button>
        <div class="content">
            <li>Large Custom Welcome (round center becomes a keepsake)</li>
            <li>Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</li>
            <li>1-30 free standing table numbers</li>
            <li>Modern Locking Card Box </li>
            <li>Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</li>
            <li>Set of “Reserved” signs (5)</li>
            <li>2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</li>
            <li>2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</li>
            <li>1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</li>
        </div>
    </ul>

    <h2>PICK 4 Rental $599</h2>
    <ul>
        <button type="button" class="collapsible">4 OF THE FOLLOWING ITEMS (click to view)</button>
        <div class="content">
            <li>Large Custom Welcome (round center becomes a keepsake)</li>
            <li>Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</li>
            <li>1-30 free standing table numbers</li>
            <li>Modern Locking Card Box </li>
            <li>Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</li>
            <li>Set of “Reserved” signs (5)</li>
            <li>1 Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</li>
            <li>1 Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</li>
            <li>1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</li>
        </div>
    </ul>

    <h2>A’ la Carte Modern Round Welcome Sign Rental $275 </h2>
    <li>Includes design fee and round center keepsake. This price does not include delivery. ($500 minimum order for delivery.)</li>
    <p>NOTE:  Welcome Sign Customization is included in all package pricing.  Additional Customization of Magnetic Headings or entire pieces will be subject to added design and supply fees.  </p>
</section>

<!-- Rustic Wood Package Info-->
<section id="rusticWood">
    <h2><u>RUSTIC WOOD RENTAL PACKAGES</u></h2>
    <h2>Rustic Wood Full Package Rental</h2>
    <div class="row">
        <div class="col-12">
            <em>$299 plus tax</em>
            <ul>
                <button type="button" class="collapsible">Contains All of These Items (click to view)</button>
                <div class="content">
                    <li>"Welcome to Our Beginning” (approximately 32” x 18 ”with easel) Your choice of white framed, or rustic stained</li>
                    <li>“Find your Seat” (32.5” x 18.5” framed organizer with 25 clips & easel)</li>
                    <li>Table Numbers (1-25 3.5”x 3.5” with mini easels) (50 pc)</li>
                    <li>Antique Glass Jug with “Honeymoon Fund” (jug & mini- hanger 4.75”x 10”) (2pc)</li>
                    <li>“Mr. & Mrs.” Head Table Blocks (3pc)</li>
                    <li>“We know that you would be here today if Heaven weren’t so far away” (9.75” x 16” framed memorial seat saver)</li>
                    <li>Here Comes Your Bride” ring bearer carrier (9.75 x 15” framed with cord)</li>
                    <li>“Mr. & Mrs.” Chair Hangers (with cord 9.75” x 15”) (2pc)</li>
                    <li>“Guestbook please sign” (self standing 5.5” x 20”)</li>
                    <li>“Just Married” & “Thank You” (Reversible photo-shoot prop 5.5” x 29.5”)</li>
                    <li>"Take One” (5.5” x 6”)</li>
                    <li>“Programs” (15.75” x 5.5”)</li>
                    <li>“In Loving Memory of those who are forever in our hearts” (6”x 5.5” self standing)</li>
                    <li>8 “Reserved” signs (2.75” x 10” 4 with cord hanger option) (8pc)</li>
                    <li>Antique Whitewashed Trunk with “Cards” Banner</li>
                </div>
            </ul>
        </div>
    </div>

    <h2>Rustic Wood “No Seating” Rental</h2>
    <div class="row">
        <div class="col-12">
            <em>$245 plus tax</em>
            <ul>
                <button type="button" class="collapsible">Contains All of These Items (click to view)</button>
                <div class="content">
                    <li>"Welcome to Our Beginning” (approximately 32” x 18 ”with easel) Your choice of white framed, or rustic stained</li>
                    <li>Antique Glass Jug with “Honeymoon Fund” (jug & mini- hanger 4.75”x 10”) (2pc)</li>
                    <li>“Mr. & Mrs.” Head Table Blocks (3pc)</li>
                    <li>“We know that you would be here today if Heaven weren’t so far away” (9.75” x 16” framed memorial seat saver)</li>
                    <li>Here Comes Your Bride” ring bearer carrier (9.75 x 15” framed with cord)</li>
                    <li>“Mr. & Mrs.” Chair Hangers (with cord 9.75” x 15”) (2pc)</li>
                    <li>“Guestbook please sign” (self standing 5.5” x 20”)</li>
                    <li>“Just Married” & “Thank You” (Reversible photo-shoot prop 5.5” x 29.5”)</li>
                    <li>"Take One” (5.5” x 6”)</li>
                    <li>“Programs” (15.75” x 5.5”)</li>
                    <li>“In Loving Memory of those who are forever in our hearts” (6”x 5.5” self standing)</li>
                    <li>8 “Reserved” signs (2.75” x 10” 4 with cord hanger option) (8pc)</li>
                    <li>Antique Whitewashed Trunk with “Cards” Banner</li>
                </div>
            </ul>
        </div>
    </div>

    <h2>Rustic Wood “You Pick Four” Rental</h2>
    <div class="row">
        <div class="col-12">
            <em>$199 plus tax</em>
            <ul id="all_options_set">
                <button type="button" class="collapsible">Pick Four of These Options (click to view)</button>
                <div class="content">
                    <li>"Welcome to Our Beginning” (approximately 32” x 18 ”with easel) Your choice of white framed, or rustic stained</li>
                    <li>“Find your Seat” (32.5” x 18.5” framed organizer with 25 clips & easel)</li>
                    <li>Table Numbers (1-25 3.5”x 3.5” with mini easels) (50 pc)</li>
                    <li>Antique Glass Jug with “Honeymoon Fund” (jug & mini- hanger 4.75”x 10”) (2pc)</li>
                    <li>“Mr. & Mrs.” Head Table Blocks (3pc)</li>
                    <li>“We know that you would be here today if Heaven weren’t so far away” (9.75” x 16” framed memorial seat saver)</li>
                    <li>Here Comes Your Bride” ring bearer carrier (9.75 x 15” framed with cord)</li>
                    <li>“Mr. & Mrs.” Chair Hangers (with cord 9.75” x 15”) (2pc)</li>
                    <li>“Guestbook please sign” (self standing 5.5” x 20”)</li>
                    <li>“Just Married” & “Thank You” (Reversible photo-shoot prop 5.5” x 29.5”)</li>
                    <li>"Take One” (5.5” x 6”)</li>
                    <li>“Programs” (15.75” x 5.5”)</li>
                    <li>“In Loving Memory of those who are forever in our hearts” (6”x 5.5” self standing)</li>
                    <li>8 “Reserved” signs (2.75” x 10” 4 with cord hanger option) (8pc)</li>
                    <li>Antique Whitewashed Trunk with “Cards” Banner</li>
                </div>
            </ul>
        </div>
    </div>
</section>

<!--Vintage Mirror Package Info-->
<section id="vintageMirror">
    <div id="package1Head">
        <h1><u>VINTAGE MIRROR RENTAL PACKAGES</u></h1>
        <h4 class="text-center"> Pricing Includes Delivery & Pick Up (30 mile radius)</h4>

        <h2>Vintage Mirror Platinum Package Rental $849</h2>
    </div>
    <ul id="package1">
        <button type="button" class="collapsible">INCLUDES EACH OF THE FOLLOWING 10 ITEMS (click to view)</button>
        <div class="content">
            <li>Welcome Sign with custom names & date & large wrought iron easel</li>
            <li>Antique Typewriter Rental with customized message (100 words or less)</li>
            <li>Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</li>
            <li>Table Numbers 1-30</li>
            <li>Leather Domed Trunk with “cards” mirror with stand</li>
            <li>“Enjoy the Moment- no photography please” mirror with stand</li>
            <li>“Guestbook” mirror with stand</li>
            <li>“Take One” small vanity mirror</li>
            <li>1 Large Full Custom Mirror (50 words or less) with large wrought iron easel</li>
            <li>1 Medium Full Custom Mirror (20 words or less)  with large wrought iron easel</li>
            <li>1 Small Custom Mirror (10 words or less) with wrought iron easel</li>
        </div>
    </ul>

    <hr>

    </div>
    <div id="package2Head">
        <h2>Vintage Mirror Gold Package Rental $799</h2>
    </div>
    <ul id="package2">
        <button type="button" class="collapsible">INCLUDES ALL OF THE FOLLOWING 8 ITEMS (click to view)</button>
        <div class="content">
            <li>Welcome Sign with custom names & date & large wrought iron easel</li>
            <li>Antique Typewriter Rental with customized message (100 words or less)</li>
            <li>Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</li>
            <li>Table Numbers 1-30</li>
            <li>Leather Domed Trunk with “cards” mirror with stand</li>
            <li>“Enjoy the Moment- no photography please” mirror with stand</li>
            <li>“Guestbook” mirror with stand</li>
            <li>“Take One” small vanity mirror</li>
        </div>
    </ul>

    <hr>

    <div id="package3Head">
        <h2>Vintage Mirror Pick 6 Rental Package $649</h2>
    </div>

    <ul id="package3">
        <button type="button" class="collapsible">CHOOSE 6 OF THE FOLLOWING ITEMS (click to view)</button>
        <div class="content">
            <li>Welcome Sign with custom names & date & large wrought iron easel</li>
            <li>Antique Typewriter Rental with customized message (100 words or less)</li>
            <li>Pair of 2 Linen Stringers with wrought iron easels </li>
            <li>Large Custom Mirror for gold seal application</li>
            <li>Table Numbers 1-30</li>
            <li>Leather Domed Trunk with “cards” mirror with stand</li>
            <li>“Enjoy the Moment- no photography please” mirror with stand</li>
            <li>“Guestbook” mirror with stand</li>
            <li>“Take One” small vanity mirror</li>
        </div>
    </ul>

    <hr>

    <div id="package4Head">
        <h2>Vintage Mirror Pick 4 Rental Package $599</h2>
    </div>

    <ul id="package4">
        <button type="button" class="collapsible">CHOOSE 4 OF THE FOLLOWING ITEMS (click to view)</button>
        <div class="content">
            <li>Welcome Sign with custom names & date & large wrought iron easel</li>
            <li>Antique Typewriter Rental with customized message (100 words or less)</li>
            <li>Pair of 2 Linen Stringers with wrought iron easels </li>
            <li>Large Custom Mirror for gold seal application</li>
            <li>Table Numbers 1-30</li>
            <li>Leather Domed Trunk with “cards” mirror with stand</li>
            <li>“Enjoy the Moment- no photography please” mirror with stand</li>
            <li>“Guestbook” mirror with stand</li>
            <li>“Take One” small vanity mirror</li>
        </div>
    </ul>

    <div id="package5">
        <h2>Additional Custom Mirrors</h2>
        <p>SMALL (up to 12 words) $40</p>
        <p>MEDIUM (up to 24 words) $60</p>
        <p>LARGE (up to 60 words) $80 </p>
        <p>More words may be added depending on the design.  Additional words may require an additional fee.</p>
    </div>
</section>

<form name = "f" action = "packages.php" method = "POST">

</form>

<script src="packScript.js"></script>



<?php
if ($_POST['set'] == "Layered Arch") {
    ?>
    <style type="text/css">
        #layeredArch {
            display: block;
        }
    </style>

    <form action = "extras.php" method = "POST">
        <h4>Please select the Package you would like: </h4>
        <input type="radio" id="layeredPack1" name="package" value="FULL SET Rental">
        <label for="layeredPack1">Full Set Rental - $849</label><br>
        <input type="radio" id="layeredPack2" name="package" value="PICK 6 Rental">
        <label for="layeredPack2">PICK 6 Rental - $749</label><br>
        <input type="radio" id="layeredPack3" name="package" value="PICK 4 Rental">
        <label for="layeredPack3">PICK 4 Rental - $699</label>
        <br>
        <input type = "submit" id = "submit" name = "submit">

        <?php
        echo '<input type = "hidden" name = "set" value = "'.$set.'">';
        echo '<input type = "hidden" name = "date" value = "'.$date.'">';
        ?>
    </form>
<?php }

if ($_POST['set'] == "Modern Round") {
    ?>
    <style type="text/css">
        #modernRound {
            display: block;
        }
    </style>

    <form action = "extras.php" method = "POST">
        <h4>Please select the Package you would like: </h4>
        <input type="radio" id="modPack1" name="package" value="FULL SET Rental">
        <label for="modPack1">FULL SET Rental - $799</label><br>
        <input type="radio" id="modPack2" name="package" value="PICK 6 Rental">
        <label for="modPack2">PICK 6 Rental - $699</label><br>
        <input type="radio" id="modPack3" name="package" value="PICK 4 Rental">
        <label for="modPack3">PICK 4 Rental - $599</label><br>
        <input type="radio" id="modPack4" name="package" value="A’ la Carte">
        <label for="modPack4">A’ la Carte Modern Round Welcome Sign Rental - $275</label>
        <br>
        <input type = "submit" id = "submit" name = "submit">

        <?php
        echo '<input type = "hidden" name = "set" value = "'.$set.'">';
        echo '<input type = "hidden" name = "date" value = "'.$date.'">';
        ?>
    </form>

<?php }
if ($_POST['set'] == "Vintage Mirror") {
    ?>
    <style type="text/css">
        #vintageMirror {
            display: block;
        }
    </style>

    <form action = "extras.php" method = "POST">
        <h4>Please select the Package you would like: </h4>
        <input type="radio" id="vintPack1" name="package" value="Platinum Package">
        <label for="vintPack1">Platinum Package Rental $849</label><br>
        <input type="radio" id="vintPack2" name="package" value="Gold Package">
        <label for="vintPack2">Gold Package Rental $799</label><br>
        <input type="radio" id="vintPack3" name="package" value="PICK 6 Package">
        <label for="vintPack3">PICK 6 Rental - $649</label><br>
        <input type="radio" id="vintPack4" name="package" value="PICK 4 Package">
        <label for="vintPack4">PICK 4 Rental - $599</label>
        <br>
        <h4>Additional Custom Mirrors</h4>
        <input type="radio" id="mirror1" name="mirror" value="SMALL (up to 12 words) $40">
        <label for="mirror1">SMALL (up to 12 words) - $40</label><br>
        <input type="radio" id="mirror2" name="mirror" value="MEDIUM (up to 24 words) $60">
        <label for="mirror2">MEDIUM (up to 24 words) - $60</label><br>
        <input type="radio" id="mirror3" name="mirror" value="LARGE (up to 60 words) $80">
        <label for="mirror3">LARGE (up to 60 words) - $80</label>
        <input type="radio" id="mirror4" name="mirror" value="No Additional Mirrors">
        <label for="mirror4">No Additional Mirrors</label>
        <br>
        <input type = "submit" id = "submit" name = "submit">

        <?php
        echo '<input type = "hidden" name = "set" value = "'.$set.'">';
        echo '<input type = "hidden" name = "date" value = "'.$date.'">';
        ?>
    </form>

<?php }
if ($_POST['set'] == "Dark Walnut") {
    ?>
    <style type="text/css">
        #darkWalnut {
            display: block;
        }
    </style>

    <form action = "extras.php" method = "POST">
        <h4>Please select the Package you would like: </h4>
        <input type="radio" id="darkPack1" name="package" value="FULL SET Rental">
        <label for="darkPack1">FULL SET Rental - $299</label><br>
        <input type="radio" id="darkPack2" name="package" value="PICK 6 Rental">
        <label for="darkPack2">PICK 6 Rental - $245</label><br>
        <input type="radio" id="darkPack3" name="package" value="PICK 4 Rental">
        <label for="darkPack3">PICK 4 Rental - $199</label><br>
        <br>
        <h4>Select Welcome Sign: </h4>
        <input type="radio" id="sign1" name="Sign" value="Rectangular">
        <label for="sign1">Rectangular</label><br>
        <input type="radio" id="sign2" name="Sign" value="Rounded">
        <label for="sign2">Rounded</label><br>
        <br>
        <h4>Would you like the Aisle Runner Add-on?</h4>
        <input type="radio" id="aisle1" name="aisleRunner" value="yes">
        <label for="aisle1">Yes - + $99</label><br>
        <input type="radio" id="aisle2" name="aisleRunner" value="no">
        <label for="aisle2">No</label><br>
        <br>
        <h4>Would you like the Vintage Typewriter Add-on?</h4>
        <input type="radio" id="Writer1" name="typeWriter" value="yes">
        <label for="Writer1">Yes - + $99</label><br>
        <input type="radio" id="Writer1" name="typeWriter" value="no">
        <label for="Writer1">No</label><br>
        <br>
        <input type = "submit" id = "submit" name = "submit">

        <?php
        echo '<input type = "hidden" name = "set" value = "'.$set.'">';
        echo '<input type = "hidden" name = "date" value = "'.$date.'">';
        ?>
    </form>

<?php }
if ($_POST['set'] == "Rustic Wood") {
?>
<style type="text/css">
    #rusticWood {
        display: block;
    }
</style>

<form action = "extras.php" method = "POST">
    <h4>Please select the Package you would like: </h4>
    <input type="radio" id="rustPack1" name="package" value="FULL SET Rental">
    <label for="rustPack1">Rustic Wood Full Package Rental - $299</label><br>
    <input type="radio" id="rustPack2" name="package" value="No Seating Rental">
    <label for="rustPack2">Rustic Wood “No Seating” Rental - $245</label><br>
    <input type="radio" id="rustPack3" name="package" value="PICK 4 Rental">
    <label for="rustPack3">Rustic Wood “You Pick Four” Rental - $199</label>
    <br>
    <h4>Select Welcome Sign: </h4>
    <input type="radio" id="sign1" name="Sign" value="Stained Wood">
    <label for="sign1">Stained Wood</label><br>
    <input type="radio" id="sign2" name="Sign" value="Framed White">
    <label for="sign2">Framed White</label><br>
    <br>
    <h4>Would you like the Aisle Runner Add-on?</h4>
    <input type="radio" id="aisle1" name="aisleRunner" value="yes">
    <label for="aisle1">Yes - + $99</label><br>
    <input type="radio" id="aisle2" name="aisleRunner" value="no">
    <label for="aisle2">No</label><br>
    <br>
    <h4>would you like the Vintage Typewriter Add-on?</h4>
    <input type="radio" id="Writer1" name="typeWriter" value="yes">
    <label for="Writer1">Yes - + $99</label><br>
    <input type="radio" id="Writer1" name="typeWriter" value="no">
    <label for="Writer1">No</label><br>
    <br>
    <input type = "submit" id = "submit" name = "submit">

    <?php }
    echo '<input type = "hidden" name = "set" value = "'.$set.'">';
    echo '<input type = "hidden" name = "date" value = "'.$date.'">';

    //echo var_dump($_POST);
    ?>
    


    
</form>
</body>
</html>

