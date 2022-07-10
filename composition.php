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
$Movement_Number = $_POST['Movement_Number'];
$Movement_Name= $_POST['Movement_Name'];
$Composer_Name = $_POST['Composer_Name'];
$Composition_Name = $_POST['Composition_Name'];

$sql = "INSERT Into composition (`Movement_Number`,`Movement_Name`,`Composer_Name`,`Composition_Name`) VALUES ($Movement_Number,'$Movement_Name','$Composer_Name','$Composition_Name')";
$res=mysqli_query($conn ,$sql);
if(!$res){
echo "not not not";
}
echo "connect successfully";
echo "connection closed";
echo "added successful";
$conn->Close();

?>
