<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = "concert";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn -> connect_error){
    die("connection failed".$conn->connect_error);
}
$Opening_Date  = $_POST['Opening_Date'];

$sql = "INSERT Into concertseason(`Opening_Date`) VALUES ('$Opening_Date') ";
$res=mysqli_query($conn ,$sql);
if(!$res){
echo "not not not";
}
echo "connect successfully";
echo "connection closed";
echo "added successful";
$conn->close();


?>
