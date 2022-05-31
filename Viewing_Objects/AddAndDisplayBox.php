<?php
include('./classes/TeamClass.php');
include('./classes/AfspraakClass.php');
include('./classes/AddDisplayLogic.php');
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
        echo $Title
        ?>
   </h1>

    <div id="button">

    </div>
    </div> 

    <div class="itemBox"> <!-- the input -->
     <?php
     
     $item = new Team();

     
     foreach($itemArray as $item){
         echo '
         <div id="itemDiv" style="display: block"

         ';
     }

     ?>
    </div> 

    </div> 
  </body> 
</html> 
