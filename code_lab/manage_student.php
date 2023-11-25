<?php
session_start();
if(isset($_SESSION['uname']))
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <title>Show Student Info</title>
  </head>
  <body>



</div>




     <center><h2 style="-webkit-text-fill-color:hsl(234, 92%, 33%);font-family:sans-serif ;"><b>Student Information</b></h2></center>
    <div class="container my-5">
     <button class="btn btn-primary"><a href="student_registration.php" class="text-light"> Add Student</a></button>
     <button class="btn btn-primary"><a href="admin_homepage.php" class="text-light"> Back</a></button><br>
    <table class="table table-striped table-hover  my-5" border= "3">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Gender</th>

      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
     @include 'dbcon.php';
      $sql=" SELECT *FROM student_registration";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        while($row=mysqli_fetch_assoc($result))
        {
            $s_id=$row['s_id'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $uname=$row['uname'];
            $gender=$row['gender'];

            $phone=$row['phone'];
            $address=$row['address'];
            $password=$row['password'];

            echo '<tr>
            <th scope="row">'.$s_id.'</th>
            <td>'. $fname.'</td>
            <td>'. $lname.'</td>
            <td>'. $uname.'</td>
            <td>'. $gender.'</td>

            <td>'. $phone.'</td>
            <td>'. $address.'</td>
            <td>'. $password.'</td>
            <td>
            
            <button class="btn btn-primary"><a href="update_student.php?updates_id='.$s_id.' " class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete_student.php?deletes_id='.$s_id.' " class="text-light">Delete</a></button>
            
            </td>
          </tr>';
        }
      }
    ?>
  </tbody>
</table>
</div>

<footer class="footer">

   <center>&copy; copyright @ 2023 by <span>Code Lab</span> | all rights reserved!</center>

</footer>

  </body>
</html>