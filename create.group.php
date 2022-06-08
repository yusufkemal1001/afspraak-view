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
<body>
<div class="flex justify-center">
    <div class="w-3/4 p-5 rounded-md max-h-screen " >
        <div class="bg-gray-300 rounded-md" style="min-height: 400px;">
            <div class="text-4xl text-center  p-5 ">
                Groep Aanmaken
            </div>
            <div class="w-full overflow-scroll max-h-screen ">
                <div class="w-4/6 rounded-md min-h-60  bg-white flex items-center m-auto p-5 mb-5">
                    <div class="max-w-full">

                        <div class="w-5/5 max-h-full  ">
                            <div class="text-xl ">
                                <form action="add.group.php" method="post">

                                    <div class="flex p-2 ">
                                        <b><label>Groep Naam</label></b>&nbsp;&nbsp;
                                        <input type="text" class="bg-gray-300 rounded-md pl-2"  name="name" required /><br>
                                    </div>
                                    <div class="flex p-2">
                                        <b><label>Klas</label></b>&nbsp;&nbsp;
                                        <input class="bg-gray-300 rounded-md pl-2"  type="name" name="class" required /><br>
                                    </div>
                                    <div class="flex p-2">
                                        <b><label>Aantal Leden</label></b>&nbsp;&nbsp;
                                        <input type="number" min="1" class="rounded-md bg-gray-300 pl-2"name="members" required /><br>
                                    </div>
                                    <div class="flex p-2 items-center">
                                        <b><label>Afbeelding </label></b>&nbsp;&nbsp;
                                        <input type="file" class="pl-2"  name="image" required /><br>
                                    </div>
                                    <div class="text-xs m-2"><b>Belangrijk!</b> Alle afbeeldingen moeten in het mapje "groep-images" opgeslagen worden</div>
                                    <div class="w-full p-2 flex justify-between">
                                        <input type="submit" value="Verstuur"  name="submitGroup" class="bg-green-400 p-2 text-white rounded-md" >
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>




