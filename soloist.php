<?php
$servername = "localhost";
$username = "root";
$password = "";
$table ="tbl_contact";
$db = "concert";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn -> connect_error){
    die("connection failed".$conn->connect_error);
}
$soloist_id = $_POST['soloist_id'];
$soloist_name = $_POST['soloist_name'];
$composition_id = $_POST['composition_id'];

$sql = "INSERT Into soloist(`soloist_id`, `soloist_name`,`composition_id`) VALUES ($soloist_id,$soloist_name,$composition_id) ";
$res=mysqli_query($conn ,$sql);
if(!$res){
echo "not not not";
}
echo "connect successfully";
echo "connection closed";
echo "added successful";
$conn->Close();

?>
