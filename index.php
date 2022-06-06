<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a5e31d35c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <meta http-equiv="refresh" content="60">
    <link href="/css/style.css" rel="stylesheet">

    <title>Homepage</title>
</head>
<body>
    <div class="w-full overflow-x-hidden ">


        <div class="mainContainer flex m-auto ">
            <div class="w-1/6 border-r-2 border-l-2 border-b-2 border-black">
                <div id="currentTime" class="text-3xl text-center p-5 border-b border-black  h-20">
                    <script>
                        var today = new Date();
                        var time = (('0'+today.getHours()).slice(-2)) + ":" + (('0'+today.getMinutes()).slice(-2));
                        document.getElementById("currentTime").innerHTML = time;
                    </script>
                </div>
                <div>
                    <div class="text-4xl text-center mt-5 mb-5">Bezig</div>

                    <div class="w-3/4 rounded-md max-h-80 h-40 bg-red-100 m-auto p-5 mb-5">sup</div>
                </div>
            </div>
            <div class="w-1/6 border-r-2  border-b-2 border-black">
                <div>
                    <div class="text-2xl text-center p-4 mb-5 h-20 border-b border-black  ">Volgende afspraken</div>
                    <div class="w-3/4 rounded-md max-h-80 h-40 bg-red-100 m-auto p-5 mb-5">sup</div>
                </div>
            </div>
            <div class="w-4/6 max-h-full border-b-2 border-black">
                <div class="w-full border-black border-b h-20 ">
                    <div class="text-3xl pr-4 max-w-xs float-right pr-2">
                        <a href="login.php"><i class="fa fa-sign-in hover:text-gray-600" aria-hidden="true"></i></a>
                    </div>
                    <div class="text-4xl text-center p-5 ">Week Rooster</div>
                </div>
                <div class="w-5/5 h-full border-black flex">
                    <div class="w-1/5 border-r-2  border-black">
                        <div class="text-2xl text-center">
                            Maandag
                        </div>
                        <?php include 'show.monday.php'?>
                    </div>
                    <div class="w-1/5 border-r-2 border-black">
                        <div class="text-2xl text-center">
                            Dinsdag
                        </div>
                    </div>
                    <div class="w-1/5 border-r-2 border-black">
                        <div class="text-2xl text-center">
                            Woensdag
                        </div>
                    </div>
                    <div class="w-1/5 border-r-2 border-black">
                        <div class="text-2xl text-center">
                            Donderdag
                        </div>
                    </div>
                    <div class="w-1/5">
                        <div class="text-2xl text-center">
                            Vrijdag
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>