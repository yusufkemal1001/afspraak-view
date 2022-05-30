<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a079e7f0c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <meta http-equiv="refresh" content="60">
    <link href="/css/style.css" rel="stylesheet">

    <title>Homepage</title>
</head>
<body>
    <div class="w-full overflow-x-hidden ">
        <div class="w-full flex border-b-1 p-5 border-b-4 border-black">
            <div id="currentTime" class="text-3xl pl-4 max-w-xs">
                <script>
                    var today = new Date();
                    var time = today.getHours() + ":" + today.getMinutes();
                    document.getElementById("currentTime").innerHTML = time;
                </script>
            </div>

            <div class="text-4xl text-center m-auto pr-16">
                <div>
                Software Developer Rooster
                </div>
            </div>
            <div class="text-3xl pl-4 max-w-xs">
                <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>

            </div>
        </div>
        <div class="mainContainer flex m-auto ">

            <div class="w-2/6 border-r-2 border-l-2 border-b-2 border-black">
                <div class="w-full">
                    <div class="text-4xl text-center mb-5">Bezig</div>

                    <div class="w-3/4 max-h-80 h-40 bg-red-100 m-auto p-5 mb-5">sup</div>
                </div>
            </div>
            <div class="w-4/6">
                <div class="w-full border-r-2 border-black border-b-2 ">
                    <div class="text-4xl text-center mb-5">Week Rooster</div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>