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

$sql = "SELECT events.name, frequency.type, teams.name as TeamName, DATE_FORMAT(start_time,'%a') as dayOfWeek ,teams.image, events.start_time ,events.event_id,events.end_time,frequency.end_date
FROM teams
INNER JOIN events
ON  teams.group_id=events.group_id 
INNER JOIN frequency 
ON events.frequency_id=frequency.frequency_id AND start_time Between CURDATE() AND date_add(date_add(curdate(), interval  -WEEKDAY(curdate())-2 day), interval 7 day)  ORDER BY start_time asc;";
//
$result = $conn->query($sql);


/* Result */


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
        <!--        echo "id: " . $row["name"]. " - Name: " . $row["name"]. " " . $row["name"]. "<br>";-->

        <div class="w-3/4 rounded-md max-h-80  bg-white  m-auto p-5 mb-5">
            <a href="edit.event.php?id=<?php echo $row['event_id'];?>"><i class="fa-solid text-l fa-pen-to-square p-2"></i></a>
            <div class="flex">
                <div class="w-2/5 m-auto">
                    <img src="<?php echo $row["image"];?>"  alt="">
                </div>
                <div class="w-3/5 max-h-full m-auto ">
                    <div class="text-center text-2xl ">
                        <?php echo $row["name"];?>
                    </div>
                    <div class="text-m text-center  p-1">
                        Scrumteam : <?php echo $row["TeamName"] ?><br>
                        Datum : <?php echo $row["start_time"];?><br>
                        Herhaling : <?php echo $row["type"] ?>

                    </div>
                </div>
            </div>
        </div>
        <?php
    }

} else {
    ?>
    <div class="bg-red-400 w-3/4 m-auto p-2 rounded-md mb-5">
        <div class="text-center text-white text-2xl"><?php echo "Geen afspraken deze week";?></div>
    </div>
    <?php
}
$conn->close();
?>