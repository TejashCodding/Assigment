<?php
$conn= mysqli_connect("localhost","root","","tejashbasic")or die("connection faild");

if(isset($_POST['checked_add'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];

    $sql ="INSERT INTO  ajax_table (fname,lname,email,password,number)VALUES('$fname','$lname','$email','$password','$number')";
    $result=mysqli_query($conn,$sql);
    if($result){
        
    }
}
?>
<!-- ON Duplicate key Update fname='$fname',lname='$lname',email='$email',password='$password',number='$number' WHERE id='$id'  -->