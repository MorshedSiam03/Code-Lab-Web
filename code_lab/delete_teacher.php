<?php
  include 'dbcon.php';
 if(isset($_GET['deletet_id']))
 {
    $t_id=$_GET['deletet_id'];

    $sql="delete from `teacher_registration` where t_id=$t_id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:manage_teacher.php');
    }
    else
    {
        echo "Something Went Wrong";
    }
 }
?>