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
$composition_id = $_POST['composition_id'];
$movement_no= $_POST['movement_no'];
$movement_name = $_POST['movement_name'];

$sql = "INSERT Into composition(`composition_id`, `movement_no`,`movement_name`) VALUES ($composition_id,$movement_no,$movement_name ) ";
$res=mysqli_query($conn ,$sql);
if(!$res){
echo "not not not";
}
echo "connect successfully";
echo "connection closed";
echo "added successful";
$conn->Close();

?>
