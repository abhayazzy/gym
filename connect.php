<?php
$name = $_POST['name'];
$weight = $_POST['weight'];
$subscription = $_POST['subscription'];
$mobile = $_POST['mobile'];

$conn = new mysqli('localhost', 'root', '','gymmy');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into login(name, weight, mobile, subscription)
    values(?, ?, ?, ?)");
    $stmt->bind_param("siii" , $name, $weight, $subscription, $mobile);
    $stmt->execute();
    echo "login succesfull";
    $stmt->close();
    $conn->close();
}

?>