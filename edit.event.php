<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "afspraak_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['id'])){

    $id = (int)$_GET['id'];

    $query_fetch = mysqli_query($conn,"SELECT events.name,frequency.frequency_id, events.event_id, events.start_time, events.end_time, frequency.type, frequency.end_date, teams.group_id,teams.name as groupName FROM events inner Join frequency on events.frequency_id=frequency.frequency_id inner join teams on events.group_id=teams.group_id WHERE event_id = $id");

    while($row = mysqli_fetch_array($query_fetch)){ ?>
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
        <div class="flex">
            <div class="w-2/4 p-5 rounded-md max-h-screen " >
                <div class="bg-gray-300 rounded-md" style="min-height: 420px;">
                    <div class="text-4xl text-center  p-5 ">
                        Geselecteerde Afspraak
                    </div>
                    <div class="w-full overflow-auto max-h-screen ">
                        <div class="w-3/4 rounded-md min-h-60  bg-white flex items-center m-auto p-5 mb-5">
                            <div class="">

                                <div class="w-5/5 max-h-full  ">
                                    <div class="text-xl ">
                                        <b>Afspraak Naam :</b> <?php echo $row["name"];?>
                                    </div>
                                    <div class="text-xl  p-1">
                                        <b>Begint op :</b> <?php echo $row["start_time"] ?><br>
                                        <b>Eindigt om :</b> <?php echo $row["end_time"] ?> uur<br>
                                        <b>Wordt herhaald: </b> <?php echo $row["type"] ?> <br>
                                        <b>Tot :</b> <?php echo $row["end_date"] ?> <br>
                                        <b>Met Groep : </b> <?php echo $row["groupName"] ?> <br>
                                    </div>
                                </div>
                                <div class="w-5/5 items-center text-xl ">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-2/4 p-5 rounded-md max-h-screen " >
                <div class="bg-gray-300 rounded-md" style="min-height: 400px;">
                    <div class="text-4xl text-center  p-5 ">
                        Afspraak Aanpassen
                    </div>
                    <div class="w-full overflow-auto max-h-screen ">
                        <div class="w-3/4 rounded-md min-h-60  bg-white  items-center m-auto p-5 mb-5">
                            <div class="max-w-full">

                                <div class="w-5/5 max-h-full  ">
                                    <div class="text-xl ">
                                        <form action="update.event.php" method="get">
<!--                                            <input type="hidden" name="id" value="--><?//= $row["event_id"]; ?><!--"-->
                                            <input type="hidden" name="id" value="<?= $row["event_id"]; ?>" />
                                            <input type="hidden" name="frequencyid" value="<?php  $row['frequency_id'];?>">
                                            <div class="flex p-2 ">
                                                <b><label>Afspraak Naam</label></b>&nbsp;&nbsp;
                                                <input type="text" class="bg-gray-300 rounded-md pl-2" value="<?php echo $row['name'];?>" name="name" required /><br>
                                            </div>
                                            <div class="flex p-2">
                                                <b><label>Begintijd</label></b>&nbsp;&nbsp;
                                                <input class="bg-gray-300 rounded-md pl-2"  type="datetime-local" name="startTime" required /><br>
                                            </div>
                                            <div class="flex p-2">
                                                <b><label>Eindtijd</label></b>&nbsp;&nbsp;
                                                <input type="time" class="rounded-md bg-gray-300 pl-2"name="endTime" required /><br>
                                            </div>
<!--                                            <div class="flex p-2">-->
<!--                                                <b><label>Herhaling</label></b>&nbsp;&nbsp;-->
<!--                                                <input class="bg-gray-300 rounded-md pl-2"  type="text" name="frequency"  /><br>-->
<!--                                            </div>-->
                                            <div class="flex p-2 items-center">
                                                <b><label>Herhaling: </label></b>&nbsp;&nbsp;
                                                <input type="radio" id="Dagelijks" name="frequency" value="Dagelijks">
                                                <label for="Dagelijks">Dagelijks</label>&nbsp;&nbsp;
                                                <input type="radio" id="wekelijks" name="frequency" value="Wekelijks">
                                                <label for="Wekelijks">Wekelijks</label>&nbsp;&nbsp;
                                                <input type="radio" id="Maandelijks" name="frequency" value="Maandelijks">
                                                <label for="Maandelijks">Maandelijks</label>&nbsp;&nbsp;
                                            </div>
                                            <div class="flex p-2">
                                                <b><label>Wordt herhaald tot</label></b>&nbsp;&nbsp;
                                                <input type="date" id="endDate"  class="rounded-md bg-gray-300 pl-2" name="endDate"  /><br>
                                            </div>
                                            <div class="w-full p-2 flex justify-between">
                                                <input type="submit" value="Verstuur"  name="submit" class="bg-green-400 p-2 text-white rounded-md" >
                                                <a href="delete.event.php?id=<?php echo $row['event_id'];?>" class="bg-red-400 p-2 text-white rounded-md float-right">Deze Afspraak Verwijderen</a>
                                                <a href="delete.frequency.php?id=<?php echo $row['frequency_id'];?>" class="bg-red-400 p-2 text-white rounded-md float-right">Alle Afspraken Verwijderen</a>
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
        </div>
        </body>
        </html>

        <?php
    } // while loop brace

} // isset brace

else{
    echo "It is not set.";
}



?>



