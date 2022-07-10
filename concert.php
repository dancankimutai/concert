<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = "concert";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn -> connect_error){
    die("connection failed".$conn->connect_error);
}
$concert_id = $_POST['concert_id'];
$conductor_id = $_POST['conductor_id'];
$Opening_Date = $_POST['Opening_Date'];
$concert_date = $_POST['concert_date'];
$sql = "INSERT INTO concertmain (`concert_id`,`concert_date`) VALUES ($concert_id,'$concert_date')";


$res=mysqli_query($conn,$sql);
if(!$res){
echo "not not not";
}
echo "added details";

echo "connect successfully";
echo "connection closed";
echo "added successful";
$conn->close();
?>

