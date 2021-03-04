<?php

/**
 * Description of HappyEarthDisplay
 *
 * @author TaraDani
 */
class HappyEarthDisplay {
        
    function displayPageHeader(string $pageTitle)
    {
        $output = <<<ABC
        <!DOCTYPE html>
        <html>
           <head>
              <meta charset="UTF-8" />
              <title>Happy Earth Styles</title>
              <meta name="viewport" content="width=device-width, initial-scale=1" />  
              <link rel="stylesheet" href="NavbarStyles.css" type="text/css" />
              <link rel="stylesheet" href="MainStyles.css" type="text/css" />
              <script src="https://kit.fontawesome.com/6db76b0f22.js" crossorigin="anonymous"></script>
              <script src="PageStyles.js"></script>
           </head>
           <body>
              <header>
                    <div class="neonContainer">
                        <div class="neonText">
                            <h1 class="neon">Happy Earth 
                                <span id="line2"Styles</h1>
                        </div>
                        <div class="neonImage">
                            <img id="globe" src="GlobeLight.png" width ='310px' height="160px">
                        </div>
      
                    </div>
                    <div class="navbar">
                          <a href="Index.php"><i class="fas fa-igloo"></i> Home</a>
                          <a href="SignIn.php"><i class="fas fa-user-check"></i> Sign In/Sign Up</a>
                          <a href="Search.php"><i class="fas fa-search"></i> Search Inventory</a>
                          <a href="Sell.php"><i class="fas fa-hand-holding-usd"></i> Sell Goods</a>
                          <a href="Cart.php"><i class="fas fa-shopping-cart"></i> View Cart</a>
                    </div>
              </header>
        ABC;
        echo $output;
    }
 
        function displayPageFooter()
    {
       $year = date('Y');
       $output = <<<ABC
            <footer>
               <div class = "footer">
                     <div class="mission">
                        <a href="About.php"><span>Learn More About Our Mission</span></a>
                    <div class = "copyright">
                        &copy; $year MacGregor/Schoenherr Incorporated
                    </div>
               </div>
            </footer>   
          </body>
         </html>
         ABC;
        echo $output;
    }
}
