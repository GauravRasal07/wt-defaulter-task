<?php
// Include config file
require_once "../config/config.php";

$name = $_POST["name"];
$uname = $_POST["uname"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$pwd = $_POST["password"];
$conf_p = $_POST["confirm-password"];

if($pwd != $conf_p){
    echo "Password and Confirm Password do not match";
    $conn->close();
    exit();
}
else{
    $sql = "INSERT INTO users VALUES ('$name', '$uname', '$pwd', '$email' , '$contact')";

    if($conn->query($sql) === TRUE){
        header("location: ../views/success.html");
        $conn->close();
        exit();
    }
    else{
        header("location: ../views/error.html");
        $conn->close();
        exit();
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>