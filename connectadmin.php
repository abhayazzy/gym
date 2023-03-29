<?php
$email= $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '','gymmy');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into admin(email, password)
    values(?, ?)");
    $stmt->bind_param("ss" , $email, $password,);
    $stmt->execute();
    echo "login succesfull";
    $stmt->close();
    $conn->close();
}

?>