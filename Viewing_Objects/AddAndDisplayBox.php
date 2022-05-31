<?php
require_once('../classes/TeamClass.php');
require_once('../classes/AfspraakClass.php');
require_once('../classes/AddDisplayLogic.php');
?>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="./css/AddAndDisplay.css">
  </head>

  <body>
    <div class="canvas"> <!-- the grey background -->


    <div class="header"> <!-- the title -->
    
    <h1> 
        <?php
         echo "Team";
        ?>
   </h1>

    <div id="button">

    </div>
    </div> 

    <div class="itemBox"> <!-- the input -->
     <?php
     $logic = new logic();
     $sqlCaller = new sqlCaller();

     if()
     for ($i = 0; $i < $logic->displayAmount; $i++) {
      echo '
      
      ';
     }
     
     

     ?>
    </div> 

    </div> 
  </body> 
</html> 
