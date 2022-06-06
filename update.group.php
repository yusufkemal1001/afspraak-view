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


    $sql = "UPDATE teams SET name='$_GET[name]', class='$_GET[class]', members='$_GET[members]',image='group-images/$_GET[image]' WHERE group_id='$_GET[id]';";

    if (mysqli_query($conn,$sql)){
        header("location:dashboard.php");
    }else{
        echo 'Er is een fout opgetreden';
    }


?>