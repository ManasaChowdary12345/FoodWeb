<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$items=$_POST['items'];
$location=$_POST['location'];
$pincode=$_POST['pincode'];

$conn=new mysqli("localhost","root","","website");
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("INSERT INTO user2(name,email,mobile,items,location,pincode)VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("ssissi",$name, $email, $mobile, $items, $location, $pincode);
    $stmt->execute();
    echo "Order Register Sucessfully";
    $stmt->close();
    $conn->close();
}
?>