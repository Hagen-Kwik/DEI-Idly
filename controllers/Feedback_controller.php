<?Php
include_once("main_controller.php");

function createFeedback($nama,$email,$message)
{
    $conn = my_connectDB();

    if ($conn != null) {
        $sql_query = "INSERT INTO `feedback` (`id`, `nama`, `email`, `message`, `hasbeenread`) VALUES (NULL, '$nama', '$email', '$message', '0');";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
    }
}

function readallFeedback()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != null) {
        $sql_query = "SELECT * FROM `feedback`";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["id"];
                $data['nama'] = $row["nama"];
                $data['email'] = $row["email"];
                $data['message'] = $row["message"];
                $data['hasbeenread'] = $row["hasbeenread"];

                array_push($allData, $data);
            }
        }
    }
    return $allData;
}
?>