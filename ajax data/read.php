<?php 
$conn= mysqli_connect("localhost","root","","tejashbasic")or die("connection faild");
$sql = "SELECT * FROM ajax_table";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        echo json_encode($data);
}
?>