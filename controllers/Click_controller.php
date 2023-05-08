<?php
include_once("main_controller.php");

function readClick($ID){
    $ID = 1;
    $allData = array();
    if ($ID > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM clicks WHERE id =$ID";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["id"];
                $data['jumlah'] = $row["jumlah"];
                array_push($allData, $data);
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

function updateClick(){
    $datarow = readClick(1); 
    $number = $datarow['jumlah'] + 1;

    $conn = my_connectDB();
    $sql_query = "UPDATE `clicks` SET `jumlah` = $number WHERE `clicks`.`id` = 1;";
    $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
}
?>