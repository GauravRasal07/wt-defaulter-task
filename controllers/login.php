<?php
// Include config file
require_once "../config/config.php";

$uname = $_POST["uname"];
$pwd = $_POST["password"];

$sql = 'SELECT * FROM users WHERE username = "'.$uname.'" AND pwd = "'.$pwd.'"';
$result = $conn->query($sql);

if($result->num_rows > 0){
    header("location: ../views/success.html");
    $conn->close();
    exit();
}
else{
    header("location: ../views/error.html");
    $conn->close();
    exit();
}

?>