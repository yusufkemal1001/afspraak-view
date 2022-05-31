<?php
$con = mysqli_connect("localhost","root","root");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db("afspraak_db", $con);

$result = mysqli_query("SELECT * FROM groups ORDER BY group_id DESC;");

while($row = mysqli_fetch_array($result))
{
    echo $row['Player'];
    echo $row['Team'];

}

mysqli_close($con);
?>