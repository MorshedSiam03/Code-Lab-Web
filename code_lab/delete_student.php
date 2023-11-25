<?php
  include 'dbcon.php';
 if(isset($_GET['deletes_id']))
 {
    $s_id=$_GET['deletes_id'];

    $sql="delete from `student_registration` where s_id=$s_id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:manage_student.php');
    }
    else
    {
        echo "Something Went Wrong";
    }
 }
?>