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

$sql = "SELECT * FROM teams ORDER BY group_id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
<!--        echo "id: " . $row["name"]. " - Name: " . $row["name"]. " " . $row["name"]. "<br>";-->

<div class="w-3/4 rounded-md  bg-white max-h-80 m-auto p-5 mb-5">
    <a href="edit.group.php?id=<?php echo $row['group_id'];?>"><i class="fa-solid text-l fa-pen-to-square p-2"></i></a>
    <div class="flex max-h-full items-center">

        <div class="w-2/5 m-auto ">

            <div class="flex justify-center">
            <img src="<?php echo $row["image"];?>"  alt="">
            </div>
        </div>
        <div class="w-3/5 m-auto">
            <div class="text-center text-2xl ">
                <?php echo $row["name"];?>
            </div>
            <div class="text-m text-center p-1">
                Klas : <?php echo $row["class"] ?><br>
                Aantal leden : <?php echo $row["members"] ?>
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