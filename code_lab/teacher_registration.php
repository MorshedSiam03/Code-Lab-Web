<?php
session_start();
if(isset($_SESSION['uname']))
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Teacher Registration</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS_Student/style.css">

</head>
<body>


<section class="form-container">

   <form method = "post" action ="teacher_registration.php" enctype="multipart/form-data">
      <h3>Register New Teacher</h3>
      <p>First name <span>*</span></p>
      <input type="text" name="fname" onkeyup="showHint(this.value)" placeholder="enter your first name" required maxlength="50" class="box">
      <p><span id="txtHint"></span></p></td>
      <p>Last name <span>*</span></p>
      <input type="text" name="lname" onkeyup="showHint1(this.value)" placeholder="enter your last name" required maxlength="50" class="box">
      <p><span id="txtHint1"></span></p></td>
      <p>User name <span>*</span></p>
      <input type="text" name="uname" onkeyup="showHint2(this.value)" placeholder="enter your user name" required maxlength="50" class="box">
      <p><span id="txtHint2"></span></p></td>
      <p>Date of birth <span>*</span></p>
      <input type="date" name="dob" placeholder="enter your date of birth" required maxlength="50" class="box">
      
      <p>Gender <span>*</span></p>
      <P><input type="radio" name="gender" value="Male" required> Male     
      <input type="radio" name="gender" value="Female" required> Female</p>

      <p>E-mail <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      
      <p>Phone <span>*</span></p>
      <input type="text" name="phone" placeholder="enter your phone number" required maxlength="50" class="box">
      
      <p>Address <span>*</span></p>
      <input type="text" name="address" placeholder="enter your address" required maxlength="50" class="box">
      
      <p>Password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" required maxlength="20" class="box">
      <p>Confirm password <span>*</span></p>
      <input type="password" name="pass1" placeholder="confirm your password" required maxlength="20" class="box">
      <p>select profile <span>*</span></p>
      <input type="file" accept="image/*"  class="box">
      <input type="submit" value="register new" name="submit" class="btn">
      <center><button class="btn"><a href="manage_teacher.php" class="">Cancel
     </a></button></center>
   </form>

</section>

<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>
   
</body>
</html>

<?php
@include 'dbcon.php';
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $uname = $_POST['uname'];
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
	$password = $_POST['password'];
	$pass1 = $_POST['pass1'];

   $_SESSION['fname'] = $fname;
   $_SESSION['lname'] = $lname;
   $_SESSION['uname'] = $uname;
   $_SESSION['dob'] = $dob;
   $_SESSION['gender'] = $gender;
   $_SESSION['email'] = $email;
   $_SESSION['phone'] = $phone;
   $_SESSION['address'] = $address;
   $_SESSION['password'] = $password;

	if($password == $pass1)
	{
		
		$sql = "INSERT INTO `teacher_registration`(`fname`, `lname`, `uname`, `DOB`, `gender`, `email`, `phone`, `address`, `password`)
       VALUES
        ('$fname',' $lname','$uname','$dob ','$gender','$email','$phone','$address','$password')";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
   $newUserId = $conn->t_id;
   header("Location: admin_added_teacher.php");
  }
	}
	else
	{
		echo "<i>Password doesn't match</i>";
	}
}
?>
<?php
 if(isset($_POST['Back']))
 {
   header('location:admin_homepage.php');
 }
?>
<script>
    function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      xmlhttp.open("GET", "get_fname.php?q=" + str);
      xmlhttp.send();
      }
    }
 </script>
 <script>
    function showHint1(str) {
      if (str.length == 0) {
        document.getElementById("txtHint1").innerHTML = "";
        return;
      } else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
          document.getElementById("txtHint1").innerHTML = this.responseText;
        }
      xmlhttp.open("GET", "get_lname.php?q=" + str);
      xmlhttp.send();
      }
    }
 </script>
 <script>
    function showHint2(str) {
      if (str.length == 0) {
        document.getElementById("txtHint2").innerHTML = "";
        return;
      } else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
          document.getElementById("txtHint2").innerHTML = this.responseText;
        }
      xmlhttp.open("GET", "get_uname.php?q=" + str);
      xmlhttp.send();
      }
    }
 </script>
