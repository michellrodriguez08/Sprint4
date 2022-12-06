<?php

    if(isset($_COOKIE['fname'])){
    echo 'Thanks for booking with us '.$_COOKIE['fname']. '!<br>'; 
    
    
    } 
?>


<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Reservation Page - Walnut Ridge Wedding Rentals</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="setsStyles.css">
    <meta name="robots" content="noindex, nofollow">
  
  </head>

  <body>
    <header>
      <a href="https://blueteam2022.greenriverdev.com/Wedding_Website/Main/">
      <img alt="logo img" id="theLogo" src="logo.png"></a>

      <div class="progress" style="height: 37px; width: 50%; ">
        <div style="width: 20%; background-color:#d6b6ae" class="progress-bar">STEP 1/5: <br> Pick a Set</div>
        </div>
        <br>
      
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Please Pick Your Set</h1><br>
         <h4><center>Having trouble deciding which set to choose? </br> Check out our <a href="https://blueteam2022.greenriverdev.com/Wedding_Website_Sprint_3/reviews.php" target="_blank" rel="noopener noreferrer">love notes</a> (reviews) from previous  customers to get an idea.</center></h4><br><br>

          <!-- LINK TO GOOGLE REVIEWS
          https://www.google.com/search?q=walnut+ridge+wedding+rentals&rlz=1C5CHFA_enUS959US959&oq=&aqs=chrome.0.69i59i450l8.649477j0j15&sourceid=chrome&ie=UTF-8#lrd=0x883737f3a133cd9b:0xeba696626c42da9e,1,,,
          -->
          
        </div>
      </div>
  
      <div id="reserve" ">
        <em>Please fill out the following to reserve your order:</em>
      </div>


    <?php
    // IF LAYERED ARCH WAS SELECTED PREVIOUSLY (from cookie) pre-select Layered Arch ---------
    if (isset($_COOKIE['set']) && $_COOKIE['set'] == "Layered Arch") {
    ?>
    <div class="container">
        <form class="center" action="packages.php" method="post" id="setForm">
            <div class="row">
                <div class="col-4">
                    <input type="radio" checked id="lArch" name="set" value="Layered Arch">
                    <label for="lArch"><img src = "photos/JM1_5196.jpg"  width = "100%" alt = "Layered Arch"></label><br>
                    <p class="text-center">Layered Arch</p>
                </div>
                <div class="col-4">
                    <input type="radio" id="modernRound" name="set" value="Modern Round">
                    <label for="modernRound"><img src = "photos/IMG_7338.jpg"  width = "100%" alt = "Modern Round"></label><br>
                    <p class="text-center">Modern Round</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="radio" id="vintageMirror" name="set" value="Vintage Mirror">
                    <label for="vintageMirror"><img src = "photos/_DSC0756.jpg"  width = "100%" alt = "Vintage Mirror"></label><br>
                    <p class="text-center">Vintage Mirror</p>
                </div>
                <div class="col-4">
                    <input type="radio" id="DarkWalnut" name="set" value="Dark Walnut">
                    <label for="DarkWalnut" id="walnut"><img src = "photos/B98C3F0B-7C55-4FE1-A2ED-8698DA929605.jpg"  width = "140%" alt = "Dark Walnut"></label><br>
                    <p class="text-center">Dark Walnut</p>
                </div>
            </div>
            <div class="row-cols-4" id="rustic">
                <input type="radio" id="rusticWood" name="set" value="Rustic Wood">
                <label for="rusticWood"><img src = "photos/Donnie+Rosie+Photo-9449.jpg"  width = "200%" alt = "Rustic Wood"></label>            
                <br>
                <p class="text-center">Rustic Wood</p>
            </div>

        <?php }
        // IF MODERN ROUND WAS SELECTED PREVIOUSLY (from cookie) pre-select Modern round---------
        if (isset($_COOKIE['set']) && $_COOKIE['set'] == "Modern Round") { ?>

            <div class="container">
                <form class="center" action="packages.php" method="post" id="setForm">
                    <div class="row">
                    <div class="col-4">
                        <input type="radio"  id="lArch" name="set" value="Layered Arch">
                        <label for="lArch"><img src = "photos/JM1_5196.jpg"  width = "100%" alt = "Layered Arch"></label><br>
                        <p class="text-center">Layered Arch</p>
                    </div>
                <div class="col-4">
                    <input type="radio" checked id="modernRound" name="set" value="Modern Round">
                    <label for="modernRound"><img src = "photos/IMG_7338.jpg"  width = "100%" alt = "Modern Round"></label><br>
                    <p class="text-center">Modern Round</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="radio" id="vintageMirror" name="set" value="Vintage Mirror">
                    <label for="vintageMirror"><img src = "photos/_DSC0756.jpg"  width = "100%" alt = "Vintage Mirror"></label><br>
                    <p class="text-center">Vintage Mirror</p>
                </div>
                <div class="col-4">
                    <input type="radio" id="DarkWalnut" name="set" value="Dark Walnut">
                    <label for="DarkWalnut" id="walnut"><img src = "photos/B98C3F0B-7C55-4FE1-A2ED-8698DA929605.jpg"  width = "140%" alt = "Dark Walnut"></label><br>
                    <p class="text-center">Dark Walnut</p>
                </div>
            </div>
            <div class="row-cols-4" id="rustic">
                <input type="radio" id="rusticWood" name="set" value="Rustic Wood">
                <label for="rusticWood"><img src = "photos/Donnie+Rosie+Photo-9449.jpg"  width = "200%" alt = "Rustic Wood"></label>            <br>
                <p class="text-center">Rustic Wood</p>
            </div>

        <?php }
        // IF VINTAGE MIRROR WAS SELECTED PREVIOUSLY (from cookie) pre-select Vintage Mirror---------
        if (isset($_COOKIE['set']) && $_COOKIE['set'] == "Vintage Mirror") { ?>
            <div class="container">
                <form class="center" action="packages.php" method="post" id="setForm">
                    <div class="row">
                        <div class="col-4">
                            <input type="radio"  id="lArch" name="set" value="Layered Arch">
                            <label for="lArch"><img src = "photos/JM1_5196.jpg"  width = "100%" alt = "Layered Arch"></label><br>
                            <p class="text-center">Layered Arch</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" id="modernRound" name="set" value="Modern Round">
                            <label for="modernRound"><img src = "photos/IMG_7338.jpg"  width = "100%" alt = "Modern Round"></label><br>
                            <p class="text-center">Modern Round</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <input type="radio" checked id="vintageMirror" name="set" value="Vintage Mirror">
                            <label for="vintageMirror"><img src = "photos/_DSC0756.jpg"  width = "100%" alt = "Vintage Mirror"></label><br>
                            <p class="text-center">Vintage Mirror</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" id="DarkWalnut" name="set" value="Dark Walnut">
                            <label for="DarkWalnut" id="walnut"><img src = "photos/B98C3F0B-7C55-4FE1-A2ED-8698DA929605.jpg"  width = "140%" alt = "Dark Walnut"></label><br>
                            <p class="text-center">Dark Walnut</p>
                        </div>
                    </div>
                    <div class="row-cols-4" id="rustic">
                        <input type="radio" id="rusticWood" name="set" value="Rustic Wood">
                        <label for="rusticWood"><img src = "photos/Donnie+Rosie+Photo-9449.jpg"  width = "200%" alt = "Rustic Wood"></label>            <br>
                        <p class="text-center">Rustic Wood</p>
                    </div>


        <?php }
        // IF DARK WALNUT WAS SELECTED PREVIOUSLY (from cookie) pre-select DARK WALNUT---------
        if (isset($_COOKIE['set']) && $_COOKIE['set'] == "Dark Walnut") { ?>
            <div class="container">
            <form class="center" action="packages.php" method="post" id="setForm">
            <div class="row">
                <div class="col-4">
                    <input type="radio"  id="lArch" name="set" value="Layered Arch">
                    <label for="lArch"><img src = "photos/JM1_5196.jpg"  width = "100%" alt = "Layered Arch"></label><br>
                    <p class="text-center">Layered Arch</p>
                </div>
                <div class="col-4">
                    <input type="radio" id="modernRound" name="set" value="Modern Round">
                    <label for="modernRound"><img src = "photos/IMG_7338.jpg"  width = "100%" alt = "Modern Round"></label><br>
                    <p class="text-center">Modern Round</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="radio"  id="vintageMirror" name="set" value="Vintage Mirror">
                    <label for="vintageMirror"><img src = "photos/_DSC0756.jpg"  width = "100%" alt = "Vintage Mirror"></label><br>
                    <p class="text-center">Vintage Mirror</p>
                </div>
                <div class="col-4">
                    <input type="radio" checked id="DarkWalnut" name="set" value="Dark Walnut">
                    <label for="DarkWalnut" id="walnut"><img src = "photos/B98C3F0B-7C55-4FE1-A2ED-8698DA929605.jpg"  width = "140%" alt = "Dark Walnut"></label><br>
                    <p class="text-center">Dark Walnut</p>
                </div>
            </div>
            <div class="row-cols-4" id="rustic">
                <input type="radio" id="rusticWood" name="set" value="Rustic Wood">
                <label for="rusticWood"><img src = "photos/Donnie+Rosie+Photo-9449.jpg"  width = "200%" alt = "Rustic Wood"></label>            
                <br>
                <p class="text-center">Rustic Wood</p>
            </div>


            <?php }

            if (isset($_COOKIE['set']) && $_COOKIE['set'] == "Rustic Wood") { ?>
            <div class="container">
                <form class="center" action="packages.php" method="post" id="setForm">
                    <div class="row">
                        <div class="col-4">
                            <input type="radio"  id="lArch" name="set" value="Layered Arch">
                            <label for="lArch"><img src = "photos/JM1_5196.jpg"  width = "100%" alt = "Layered Arch"></label><br>
                            <p class="text-center">Layered Arch</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" id="modernRound" name="set" value="Modern Round">
                            <label for="modernRound"><img src = "photos/IMG_7338.jpg"  width = "100%" alt = "Modern Round"></label><br>
                            <p class="text-center">Modern Round</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <input type="radio" checked id="vintageMirror" name="set" value="Vintage Mirror">
                            <label for="vintageMirror"><img src = "photos/_DSC0756.jpg"  width = "100%" alt = "Vintage Mirror"></label><br>
                            <p class="text-center">Vintage Mirror</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" id="DarkWalnut" name="set" value="Dark Walnut">
                            <label for="DarkWalnut" id="walnut"><img src = "photos/B98C3F0B-7C55-4FE1-A2ED-8698DA929605.jpg"  width = "140%" alt = "Dark Walnut"></label><br>
                            <p class="text-center">Dark Walnut</p>
                        </div>
                    </div>
                    <div class="row-cols-4" id="rustic">
                        <input type="radio" checked id="rusticWood" name="set" value="Rustic Wood">
                        <label for="rusticWood"><img src = "photos/Donnie+Rosie+Photo-9449.jpg"  width = "200%" alt = "Rustic Wood"></label>            
                        <br>
                        <p class="text-center">Rustic Wood</p>
                    </div>


        <?php }
        // IF COOKIE['set'] IS NOT SET - NO PRE-SELECTED OPTIONS
        if (!isset($_COOKIE['set'])) { ?>
        <div class="container">
          <form class="center" action="packages.php" method="post" id="setForm">
            <div class="row">
              <div class="col-4">
                <input type="radio" id="lArch" name="set" value="Layered Arch">
                <label for="lArch"><img src = "photos/JM1_5196.jpg"  width = "100%" alt = "Layered Arch"></label><br>
                <p class="text-center">Layered Arch</p>
              </div>
              <div class="col-4">
                <input type="radio" id="modernRound" name="set" value="Modern Round">
                <label for="modernRound"><img src = "photos/IMG_7338.jpg"  width = "100%" alt = "Modern Round"></label><br>
                <p class="text-center">Modern Round</p>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <input type="radio" id="vintageMirror" name="set" value="Vintage Mirror">
                <label for="vintageMirror"><img src = "photos/_DSC0756.jpg"  width = "100%" alt = "Vintage Mirror"></label><br>
                <p class="text-center">Vintage Mirror</p>
              </div>
              <div class="col-4">
                <input type="radio" id="DarkWalnut" name="set" value="Dark Walnut">
                <label for="DarkWalnut" id="walnut"><img src = "photos/B98C3F0B-7C55-4FE1-A2ED-8698DA929605.jpg"  width = "140%" alt = "Dark Walnut"></label><br>
                <p class="text-center">Dark Walnut</p>
              </div>
            </div>
            <div class="row-cols-4" id="rustic">
              <input type="radio" id="rusticWood" name="set" value="Rustic Wood">
              <label for="rusticWood"><img src = "photos/Donnie+Rosie+Photo-9449.jpg"  width = "200%" alt = "Rustic Wood"></label>            
              <br>
              <p class="text-center">Rustic Wood</p>
            </div>

              <?php } ?>
        
         <!--pre-populated calendar date value based on cookie input, and made input min = today; that way user is unable to book date in the past -->
        <br><label for="date">Pick Your Date: </label><br>
        <input type="date" name="date" value="<?php echo date($_COOKIE['date']); ?>" min="<?= date('Y-m-d'); ?>">
        
        


        <br><br><input type="submit" id="button"><br><br>
        
   
      </form>
    </div>
    

  </body>
</html>
