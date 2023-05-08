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
?>