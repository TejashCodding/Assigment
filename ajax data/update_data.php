<?php
$conn = mysqli_connect("localhost", "root", "", "tejashbasic") or die("connection faild");

if (isset($_POST['update_data'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    $sql1 = "UPDATE  ajax_table SET fname='$fname',lname='$lname',email='$email',password='$password',number='$number' WHERE id='$id'";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1) {
        echo "1";
    } else {
        echo "0";
    }
}
?>