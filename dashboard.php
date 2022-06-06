<?php
require 'login.class.php';

//require 'db.php';

$select = new Select();

if (isset($_SESSION["id"])){
    $user = $select->selectUserById($_SESSION["id"]);
}else{
    header("location: login.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a5e31d35c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-black">
<div class="container flex m-auto ">

    <div class="w-2/4 p-5 rounded-md">
        <div class="bg-gray-300 rounded-md">

            <div class="text-4xl text-center  p-5 ">
                Groepen
            </div>

            <div class="w-full overflow-scroll max-h-screen ">
                <?php include 'show.groups.php'?>
<!--                <div class="w-3/4 rounded-md max-h-80 bg-white h-40 m-auto p-5 mb-5">-->
<!--                    <div class="flex">-->
<!--                        <div class="w-2/5">-->
<!--                            <img src="--><?php //echo $row['image'];?><!--" alt="">-->
<!--                        </div>-->
<!--                        <div class="w-3/5">-->
<!--                            <div class="text-center text-2xl ">-->
<!--                                --><?php //echo $row['name'];?>
<!--                            </div>-->
<!--                            <div class="text-m">-->
<!--                                Klas : --><?php //echo $row['class'] ?>
<!--                            </div>-->
<!--                            <div class="text-m">-->
<!--                                Aantal leden : --><?php //echo $row['members'] ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div class="w-2/4 p-5 rounded-md max-h-screen">
        <div class="bg-gray-300 rounded-md">
            <div class="text-4xl text-center  p-5 ">
                Afspraken
            </div>
            <div class="w-full overflow-scroll max-h-screen ">
                <?php include 'show.events.php'?>
            </div>
        </div>
    </div>
    <div class="text-m"><a href="logout.php" class="flex  text-white items-center hover:text-gray-600"><i class="fa fa-sign-in mr-2" aria-hidden="true"></i>Uitloggen</a></div>
</div>



</body>
</html>