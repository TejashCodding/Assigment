<?php 
include 'server.php';
$id=$_GET['deleteid'];

$sql = "DELETE FROM assigment_table WHERE id='$id'";
$result= mysqli_query($conn,$sql);
if($result){
    header("location:admin.php");
}
?>