<?php
include_once("Main_controller.php");

function createBetaUser($email)
{
    $conn = my_connectDB();

    if ($conn != null) {
        $sql_query = "INSERT INTO `registered_user` (`ID`, `sent_status`, `email`) VALUES (NULL, '0', '$email');";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
}

function readallUser()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != null) {
        $sql_query = "SELECT * FROM `registered_user`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["ID"];
                $data['sent_status'] = $row["sent_status"];
                $data['email'] = $row["email"];
                array_push($allData, $data);
            }
        }
    }
    return $allData;
}

function readnumberBetaUser(){
    $allData = array();
    $conn = my_connectDB();
    $sql_query = "SELECT COUNT(*) FROM `registered_user`;";
    $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data['id'] = $row["id"];
            $data['jumlah'] = $row["COUNT(*)"];
            array_push($allData, $data);
        }
    }
    my_closeDB($conn);
    return $data;
}

function readBetaUser($ID){
    $allData = array();
    if ($ID > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM registered_user WHERE id =$ID";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["ID"];
                $data['sent_status'] = $row["sent_status"];
                $data['email'] = $row["email"];
                array_push($allData, $data);
            }
        }
        my_closeDB($conn);
        return $data;
    }
}
?>