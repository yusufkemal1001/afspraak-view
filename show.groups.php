<?php
$con = mysqli_connect("localhost","root","root");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db("afspraak_db", $con);

$result = mysqli_query("SELECT * FROM groups ORDER BY group_id DESC;");

while($row = mysqli_fetch_array($result))
{ ?>
<div class="w-3/4 rounded-md max-h-80 bg-white h-40 m-auto p-5 mb-5">
    <img src="<?php echo $row['image']?>" class="max-h-full w-1/5" alt="">
    <div class="w-4/5">
        <div class="text-2xl text-center"><?php echo $row['name'] ?></div>
        <div class="">Klas: <?php echo $row['class'] ?></div>
        <div class="">Aantal Leden: <?php echo $row['members'] ?></div>
    </div>
</div>

    <?php
}

mysqli_close($con);
?>