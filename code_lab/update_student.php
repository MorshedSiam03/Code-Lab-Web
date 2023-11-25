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
$uname=$row['uname'];
$dob=$row['DOB'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
$password=$row['password'];

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $uname = $_POST['uname'];
   $dob = $_POST['dob'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
	$password = $_POST['password'];
	$pass1 = $_POST['pass1'];
	if($password == $pass1)
	{
		
		$sql = "UPDATE `student_registration` SET 
        `fname`='$fname',`lname`='$lname',`uname`='$uname',`DOB`='$dob',`email`='$email',`phone`=' $phone',`address`='$address ',`password`='$password'
         WHERE  s_id=$s_id ";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
   echo "<i>Registration Updated Successfully!</i>";
   header('location:manage_student.php');
  }
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
   <title>Student Registration</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS_Student/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="login.php" class="logo">CodeLab</a>

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
         <a href="admin_homepage.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Logout</a>
            
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
    <p class="role">Admin</p>
    <a href="admin_homepage.php" class="btn">view profile</a>
 </div>

 <nav class="navbar">
    <a href="admin_homepage.php"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="manage_student.php"><i class="fas fa-chalkboard-user"></i><span>Manage Student</span></a>
    <a href="manage_teacher.php"><i class="fas fa-question"></i><span>Manage Teacher</span></a>
    <a href="notice.php"><i class="fas fa-headset"></i><span>Add Notice</span></a>
 </nav>


</div>

<section class="form-container">

   <form method = "post"  enctype="multipart/form-data">
      <h3>Register New Student</h3>
      <p>First name <span>*</span></p>
      <input type="text" name="fname" placeholder="enter your first name" value=<?php echo $fname;?> required maxlength="50" class="box">
      
      <p>Last name <span>*</span></p>
      <input type="text" name="lname" placeholder="enter your last name" value=<?php echo $lname;?> required maxlength="50" class="box">

      <p>User name <span>*</span></p>
      <input type="text" name="uname" placeholder="enter your user name" value=<?php echo $uname;?> required maxlength="50" class="box">

      <p>Date of birth <span>*</span></p>
      <input type="date" name="dob" placeholder="enter your date of birth"value=<?php echo $dob;?> required maxlength="50" class="box">

      <p>E-mail <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" value=<?php echo $email;?> required maxlength="50" class="box">
      
      <p>Phone <span>*</span></p>
      <input type="text" name="phone" placeholder="enter your phone number" value=<?php echo $phone;?> required maxlength="50" class="box">
      
      <p>Address <span>*</span></p>
      <input type="text" name="address" placeholder="enter your address" value=<?php echo $address;?> required maxlength="50" class="box">
      
      <p>Password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" value=<?php echo $password;?> required maxlength="20" class="box">
      <p>Confirm password <span>*</span></p>
      <input type="password" name="pass1" placeholder="confirm your password" required maxlength="20" class="box">
      <p>select profile <span>*</span></p>
      <input type="file" accept="image/*" required class="box">
      <input type="submit" value="Update" name="submit" class="btn">
   </form>

</section>

<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>
   
</body>
</html>

