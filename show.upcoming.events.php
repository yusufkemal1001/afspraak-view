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

$sql = "SELECT events.name, frequency.type as frequency, teams.name as TeamName, events.end_time, cast(`start_time` as time) as time, events.start_time FROM teams
INNER JOIN events
ON  teams.group_id=events.group_id
INNER JOIN frequency 
ON events.frequency_id=frequency.frequency_id where DATE(`start_time`) = CURDATE() and current_timestamp < start_time ORDER BY start_time asc limit 1;
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
        <!--        echo "id: " . $row["name"]. " - Name: " . $row["name"]. " " . $row["name"]. "<br>";-->

        <div class="w-5/6 rounded-md max-h-40 bg-yellow-300 h-25 m-auto p-2 mb-5 flex justify-center">
            <div class="flex">
                <div class="w-5/5  max-h-full ">
                    <div class="text-center text-xl font-bold ">
                        <?php echo $row["name"];?>
                    </div>
                    <div class="text-xs ">
                        <b>Scrumteam :</b> <?php echo $row["TeamName"] ?><br>
                        <b>Begintijd :</b><?php echo $row["time"] ?><br>
                        <b>Eindtijd :</b><?php echo $row["end_time"] ?><br>
                        <b>Herhaling :</b> <?php echo $row["frequency"] ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

} else { ?>
    <div class="text-red-500 m-5 text-center"><b><?php echo "*Geen Afspraken*";?></b></div><?php
}
$conn->close();
?>