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

$sql = "SELECT events.name, frequency.type as frequency, teams.name as TeamName, events.start_time	 
FROM teams
INNER JOIN events
ON  teams.group_id=events.group_id
INNER JOIN frequency 
ON events.frequency_id=frequency.frequency_id WHERE YEARWEEK(start_time)=YEARWEEK(now()) AND weekday(start_time)=0  ORDER BY start_time asc;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
        <!--        echo "id: " . $row["name"]. " - Name: " . $row["name"]. " " . $row["name"]. "<br>";-->

        <div class="w-3/4 rounded-md max-h-20 bg-white h-40 m-auto p-5 mb-5">
            <div class="flex">
                <div class="w-5/5 max-h-full m-auto ">
                    <div class="text-center font-bold ">
                        <?php echo $row["name"];?>
                    </div>
                    <div class="text-m text-center p-1">
                        Scrumteam : <?php echo $row["TeamName"] ?><br>
                        Datum : <?php echo $row["date"] ?><br>
                        Herhaling : <?php echo $row["frequency"] ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

} else {
    echo "0 results";
}
$conn->close();
?>