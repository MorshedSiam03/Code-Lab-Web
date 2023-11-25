<?php
session_start();
if(isset($_SESSION['uname']))
?>

<?php
@include 'dbcon.php';
$s_id=$_GET['updates_id'];
$sql1="SELECT * FROM `student_registration` WHERE s_id=$s_id";
$result1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result1);
$fname=$row['fname'];
$lname=$row['lname'];
$dob=$row['DOB'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
$password=$row['password'];

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $dob = $_POST['dob'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
	$password = $_POST['password'];
	$pass1 = $_POST['pass1'];
		
		$sql = "UPDATE `student_registration` SET 
        `fname`='$fname',`lname`='$lname',`DOB`='$dob',`email`='$email',`phone`=' $phone',`address`='$address',`password`='$password'
         WHERE  s_id=$s_id ";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
   header('location:Student_profile.php');
  }
	
	else
	{
		echo "<i>Password doesn't match</i>";
	}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS_Student/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="student_homepage.php" class="logo">CodeLab</a>

      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <p class="role"><?php echo $_SESSION['uname']; ?></p>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="student_homepage.php" class="option-btn">Logout</a>
            
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <p class="role"><?php echo $_SESSION['uname']; ?></p>
      <a href="Student_profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="student_homepage.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="aboutSTU.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="contactSTU.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="form-container_Update">

<form method = "post"  enctype="multipart/form-data">
      <h3>Update Student</h3>
      <p>First name </p>
      <input type="text" name="fname" placeholder="enter your first name" value=<?php echo $fname;?> required  class="box">
      
      <p>Last name </p>
      <input type="text" name="lname" placeholder="enter your last name" value=<?php echo $lname;?> required class="box">

      <p>Date of birth </p>
      <input type="date" name="dob" placeholder="enter your date of birth"value=<?php echo $dob;?>  class="box">

      <p>E-mail </p>
      <input type="email" name="email" placeholder="enter your email" value=<?php echo $email;?> required class="box">
      
      <p>Phone </p>
      <input type="text" name="phone" placeholder="enter your phone number" value=<?php echo $phone;?> required  class="box">
      
      <p>Address </p>
      <input type="text" name="address" placeholder="enter your address"  value=<?php echo $address;?> required class="box">
      
      <p> Old Password </p>
      <input type="password" name="password" placeholder="enter your password" value=<?php echo $password;?> required  class="box">

      <p>New password </p>
      <input type="password" name="password" placeholder="your new password"  required class="box">

      <p>Confirm password </p>
      <input type="password" name="pass1" placeholder="Confirm your password"  required class="box">

      <p>select profile </p>
      <input type="file" accept="image/*"  class="box">
      <input type="submit" value="Update" name="submit" class="btn">
   </form>

</section>


<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>

   
</body>
</html>



