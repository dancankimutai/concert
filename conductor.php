<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = "concert";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn -> connect_error){
    die("connection failed".$conn->connect_error);
}
$conductor_id = $_POST['conductor_id'];
$conductor_name = $_POST['conductor_name'];

#mysqli_query($conn,"INSERT INTO user_data (name,address,phone,sex) VALUES ('Peter_Gregory', 'Griffin door',35897,'male')");
$sql = "INSERT Into conductor (`conductor_id`,`conductor_name`) VALUES ($conductor_id,'$conductor_name')";
$res=mysqli_query($conn ,$sql);
if(!$res){
echo "not not not";
}
echo "connect successfully";
echo "connection closed";
echo "added successful";
$conn->close();

?>
