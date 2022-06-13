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
$frequency = $_POST['frequency'];
$startDate = $_POST['startTime'];
$endDate = $_POST['endDate'];
$endDate = date('Y-m-d H:i:s', strtotime($endDate . ' +1 day'));




if ($frequency == 'Dagelijks') {

//
//    Insert into frequency(type,end_date) values('Dagelijks','$_POST[endDate]')",
$sql = "Insert into frequency(type,end_date) values('Dagelijks','$_POST[endDate]');";

    while ($startDate <= $endDate ){
        $sql .= "insert into events (name,start_time,end_time,group_id,frequency_id) values('$_POST[name]','$startDate','$_POST[endTime]','$_POST[teams]',(SELECT frequency_id FROM frequency ORDER BY frequency_id DESC LIMIT 1));";
        $startDate = date('Y-m-d H:i:s', strtotime($startDate . ' +1 day'));
    }
//    if ($endDate < $startDate){
//        echo 'Wtf man! you arrogant piece of shit asking me to do everything. Why dont you do it on your own!';
//        header("location:dashboard.php");
//        die();
//
//    }
    if ($conn -> multi_query($sql)) {
        do {
            // Store first result set
            if ($result = $conn -> store_result()) {
                while ($row = $result -> fetch_row()) {
                    printf("%s\n", $row[0]);
                }
                $result -> free_result();
            }
            // if there are more result-sets, the print a divider
            if ($conn -> more_results()) {
                header("location:dashboard.php");
            }
            //Prepare next result set
        } while ($conn -> next_result());
    }


}
elseif ($frequency=='Wekelijks'){
    $sql = "Insert into frequency(type,end_date) values('Wekelijks','$_POST[endDate]');";

    while ($startDate <= $endDate){
        $sql .= "insert into events (name,start_time,end_time,group_id,frequency_id) values('$_POST[name]','$startDate','$_POST[endTime]','$_POST[teams]',(SELECT frequency_id FROM frequency ORDER BY frequency_id DESC LIMIT 1));";
        $startDate = date('Y-m-d H:i:s', strtotime($startDate . ' +1 week'));
    }

    if ($conn -> multi_query($sql)) {
        do {
            // Store first result set
            if ($result = $conn -> store_result()) {
                while ($row = $result -> fetch_row()) {
                    printf("%s\n", $row[0]);
                }
                $result -> free_result();
            }
            // if there are more result-sets, the print a divider
            if ($conn -> more_results()) {
                header("location:dashboard.php");
            }
            //Prepare next result set
        } while ($conn -> next_result());
    }

}
elseif ($frequency=='Maandelijks'){

    $sql = "Insert into frequency(type,end_date) values('Maandelijks','$_POST[endDate]');";

    while ($startDate <= $endDate){
        $sql .= "insert into events (name,start_time,end_time,group_id,frequency_id) values('$_POST[name]','$startDate','$_POST[endTime]','$_POST[teams]',(SELECT frequency_id FROM frequency ORDER BY frequency_id DESC LIMIT 1));";
        $startDate = date('Y-m-d H:i:s', strtotime($startDate . ' +1 month'));
    }
    if ($conn -> multi_query($sql)) {
        do {
            // Store first result set
            if ($result = $conn -> store_result()) {
                while ($row = $result -> fetch_row()) {
                    printf("%s\n", $row[0]);
                }
                $result -> free_result();
            }
            // if there are more result-sets, the print a divider
            if ($conn -> more_results()) {
                header("location:dashboard.php");
            }
            //Prepare next result set
        } while ($conn -> next_result());
    }

}






?>