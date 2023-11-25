<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
      <!-- custom css file link  -->
      <link rel="stylesheet" href="CSS_Student/style.css">

</head>
<body>



<section class="form-container">

   <form action="student_registration.php" name="register_form" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
      <h3>register new student</h3>
      <p>First name <span>*</span></p>
      <input type="text" name="fname" onkeyup="showHint(this.value)"  placeholder="enter your first name" required maxlength="50" class="box">
      <span id="txtHint"></span></td>
      
      <p>Last name <span>*</span></p>
      <input type="text" name="lname" onkeyup="showHint1(this.value)" placeholder="enter your last name" required maxlength="50" class="box">
      <span id="txtHint1"></span></td>
      <p>User name <span>*</span></p>
      <input type="text" name="uname" onkeyup="showHint2(this.value)" placeholder="enter your user name" required maxlength="50" class="box">
      <span id="txtHint2"></span></td>
      <p>Date of birth <span>*</span></p>
      <input type="date" name="dob" placeholder="enter your date of birth" required maxlength="50" class="box">
      
      <p>Gender <span>*</span></p>
      <P><input type="radio" name="gender" value="Male" required> Male     
      <input type="radio" name="gender" value="Female" required> Female</p>

      <p>E-mail <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      
      <p>Phone <span>*</span></p>
      <input type="text" name="phone" placeholder="enter your user name" required maxlength="50" class="box">
      
      <p>Address <span>*</span></p>
      <input type="text" name="address" placeholder="enter your address" required maxlength="50" class="box">
      
      <p>Password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" required maxlength="20" class="box">
      <p>Confirm password <span>*</span></p>
      <input type="password" name="pass1" placeholder="confirm your password" required maxlength="20" class="box">
      <p>select profile <span>*</span></p>
      <input type="file" accept="image/*" required class="box">
      <input type="submit" value="register now" name="submit" class="btn">
      <center><button class="btn"><a href="manage_student.php" class="">Cancel
     </a></button></center>

   </form>

</section>






<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
  function validateForm() {
    var username = document.forms["register_form"]["uname"].value;
    var password = document.forms["register_form"]["password"].value;
    var pass1 = document.forms["register_form"]["pass1"].value;

    if (username === "") {
      alert("Username must be filled out");
      return false;
    }

    if (password === "") {
      alert("Password must be filled out");
      return false;
    }

    if (password !== pass1) {
      alert('Passwords do not match.');
      return false;
    }

    return true;
  }
</script>
<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>
</body>
</html>


   
</body>
</html>
<?php
@include 'dbcon.php';
if(isset($_POST['submit']))
{
   session_start();
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
		$sql = "INSERT INTO `student_registration`(`fname`, `lname`, `uname`, `DOB`, `gender`, `email`, `phone`, `address`, `password`)
       VALUES
        ('$fname',' $lname','$uname','$dob ','$gender','$email','$phone','$address','$password')";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
   $newUserId = $conn->s_id;
   header("Location: admin_added_student.php");
	}
	else
	{
		echo "<i>Password doesn't match</i>";
	}
}
}
?>

<?php
 if(isset($_POST['Back']))
 {
   header('location:manage_student.php');
 }
?>

  <script>
    function validateForm() {
    var username = document.querySelector('.register_form input[name="username"]').value;
    var password = document.querySelector('.register_form input[name="password"]').value;
    var pass1 = document.querySelector('.register_form input[name="pass1"]').value;

    if (username === "") {
        alert("Username must be filled out");
        return false;
    }

    if (password === "") {
        alert("Password must be filled out");
        return false;
    }
    if (password !== pass1) {
        alert('Passwords do not match.');
        return false;
    }

    return true;
  }
</script>
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