<?php 
$conn= mysqli_connect("localhost","root","","tejashbasic")or die("connection faild");
$id=$_POST['id'];

$sql ="DELETE FROM ajax_table WHERE id=$id ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "success";
}else{
    echo "not success";
}
?>