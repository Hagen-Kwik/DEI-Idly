<?php
include_once("main_controller.php");
function login($username, $password){
    $conn = my_connectDB();
    
    $teslogin = loginuser($username, $password);

    if($teslogin['jumlah'] != 0){
        session_start();
        $_SESSION["role"] = "admin";
        $_SESSION['id'] = $teslogin['id'];
        $_SESSION['username'] = $teslogin['username'];
        $_SESSION['password'] = $teslogin['password'];
        header("Location: index.php");
    }

    
}
function loginuser($username, $password){
    $allData = array();
    $conn = my_connectDB();
    $sql_query = "SELECT id, username, password, COUNT(*) FROM `user` WHERE `user`.`username` = '$username' AND `user`.`password` = '$password';";
    $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data['id'] = $row["id"];
            $data['username'] = $row["username"];
            $data['password'] = $row["password"];
            $data['jumlah'] = $row["COUNT(*)"];
            array_push($allData, $data);
        }
    }
    my_closeDB($conn);
    return $data;
}
function getUser($ID){
    $ID = 1;
    $allData = array();
    if ($ID > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM user WHERE id =$ID";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["id"];
                $data['username'] = $row["username"];
                $data['password'] = $row["password"];
                array_push($allData, $data);
            }
        }
        my_closeDB($conn);
        return $data;
    }
}


function updateusername($id, $name)
{
    if ($id != "" && $name != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `user` SET `username` = '$name' WHERE `user`.`id` = $id;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        my_closeDB($conn);
    }
}

function updatepassword($id, $psw)
{
    if ($id != "" && $psw != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE `user` SET `password` = '$psw' WHERE `user`.`id` = $id;";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        my_closeDB($conn);
    }
}
?>