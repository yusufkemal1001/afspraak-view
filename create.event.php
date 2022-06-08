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
                                        <form action="add.event.php" method="post">
                                            <div class="flex p-2 ">
                                                <b><label>Afspraak Naam</label></b>&nbsp;&nbsp;
                                                <input type="text" class="bg-gray-300 rounded-md pl-2"  name="name" required /><br>
                                            </div>
                                            <div class="flex p-2">
                                                <b><label>Begintijd</label></b>&nbsp;&nbsp;
                                                <input class="bg-gray-300 rounded-md pl-2"  type="datetime-local" name="startTime" required /><br>
                                            </div>
                                            <div class="flex p-2">
                                                <b><label>Eindtijd</label></b>&nbsp;&nbsp;
                                                <input type="time" class="rounded-md bg-gray-300 pl-2"name="endTime" required /><br>
                                            </div>
                                            <div class="flex p-2">
                                                <b><label>Met Groep:</label></b>&nbsp;&nbsp;


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
                                            $sql = ("select * from teams "); // Run your query
                                            $result = $conn->query($sql);


                                                // output data of each row

                                                echo '<select name="teams" required class="bg-gray-300 rounded-md" >'; // Open your drop down box

                                                // Loop through the query results, outputing the options one by one
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row['group_id'] . '">' . $row['name'] . '</option>';

                                                }

                                                echo '</select>';// Close your drop down box

                                             // Open your drop down box

                                            ?>
                                            </div>
                                            <div class="flex p-2 items-center">
                                                <b><label>Herhaling: </label></b>&nbsp;&nbsp;
                                                <input type="radio" id="Dagelijks" name="frequency" required value="Dagelijks">&nbsp;
                                                <label for="Dagelijks">Dagelijks</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" id="wekelijks" name="frequency" required value="Wekelijks">&nbsp;
                                                <label for="Wekelijks">Wekelijks</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" id="Maandelijks" name="frequency" required value="Maandelijks">&nbsp;
                                                <label for="Maandelijks">Maandelijks</label>&nbsp;&nbsp;
                                            </div>
                                            <div class="flex p-2">
                                                <b><label>Wordt herhaald tot</label></b>&nbsp;&nbsp;
                                                <input type="date" id="endDate" required class="rounded-md bg-gray-300 pl-2" name="endDate"  /><br>
                                            </div>
                                            <div class="w-full p-2 flex justify-between">
                                                <input type="submit" value="Verstuur"  name="submit" class="bg-green-400 p-2 text-white rounded-md" >
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




