<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = "concert";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn -> connect_error){
    die("connection failed".$conn->connect_error);
}
$soloist_id = $_POST['soloist_id'];
$soloist_name = $_POST['soloist_name'];
$composition_id = $_POST['composition_id'];
$concert_id = $_POST['concert_id'];
#$sql = "INSERT Into meme (`number`,`age`) VALUES ($soloist_id,$soloist_id)";
$sql = "INSERT Into soloits(`soloist_id`,`soloist_name`) VALUES ($soloist_id,'$soloist_name')";
$res=mysqli_query($conn ,$sql);
if(!$res){
echo "not not not";
}
echo "connect successfully";
echo "connection closed";
echo "added successful";
$conn->close();

?>
