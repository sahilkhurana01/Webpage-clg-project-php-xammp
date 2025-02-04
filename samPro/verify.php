<?php 

include 'connect.php';

if(isset($_POST['feedback'])){
    
    $nam = $_REQUEST["name"];
    $mail = $_REQUEST["email"];
    $sub = $_REQUEST["subject"];
    $msg = $_REQUEST["message"];

    // SQL query to insert data into the feeb table
    $query = "INSERT INTO `feeb` (`name`, `email`, `subject`, `message`, `Date`) VALUES ('$nam', '$mail', '$sub', '$msg', current_timestamp())";


    if ($conn) {
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: feedbackS.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    } else {
    echo "Connection failed: " . mysqli_connect_error();
    }
}
?>