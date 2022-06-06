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



$sql = "UPDATE events inner join frequency on frequency.frequency_id=events.frequency_id SET name='$_GET[name]', start_time='$_GET[startTime]', end_time='$_GET[endTime]', type='$_GET[frequency]',end_date='$_GET[endDate]' WHERE event_id='$_GET[id]';";




if (mysqli_query($conn,$sql)){
    header("location:dashboard.php");
}else{
    echo 'Er is een fout opgetreden';
}



?>