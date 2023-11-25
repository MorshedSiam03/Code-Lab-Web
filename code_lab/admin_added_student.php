<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Print Page</title>
	<style>
		body {
			background-color:#280137;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		.print-container {
			background-color: white;
			border: 1px solid #ccc;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			max-width: 100%;
			width: 21cm;
			margin: 0 auto;
		}
		.logo img {
			width: 250px; /* Adjust the size as needed */
		}

		footer {
			background-color: #333;
			color: white;
			padding: 10px;
			text-align: center;
		}


		.button-container {
			text-align:left;
			margin-top: 20px;
		}

		button {
			padding: 10px 20px;
			background-color: #4caf50;
			color: white;
			border: none;
			cursor: pointer;
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<div class="print-container">
	<div class="logo">
	<img src="default.png" alt="Logo">
	</div>
	<legend><b>REGISTERED INFORMATION (STUDENT COPY)</b></legend>
		<fieldset>
			<?php
			session_start();
			if(isset($_SESSION['fname']) &&
				isset($_SESSION['lname']) && 
				isset($_SESSION['uname']) &&
				isset($_SESSION['dob']) &&
				isset($_SESSION['gender']) &&
				isset($_SESSION['email']) &&
				isset($_SESSION['phone'])&&
				isset($_SESSION['address'])&&
				isset($_SESSION['password'])
			)
			{
				echo "First Name:".$_SESSION['fname'];
				echo "<br>";
				echo "Last Name:".$_SESSION['lname'];
				echo "<br>";
				echo "Userame:".$_SESSION['uname'];
				echo "<br>";
				echo "Date of Birth:".$_SESSION['dob'];
				echo "<br>";
				echo "Gender:".$_SESSION['gender'];
				echo "<br>";
				echo "Email:".$_SESSION['email'];
				echo "<br>";
				echo "Phone:".$_SESSION['phone'];
				echo "<br>";
				echo "Address:".$_SESSION['address'];
				echo "<br>";
				echo "Temporary Password:".$_SESSION['password'];
				echo"(User must create a new password)";
				echo "<br>";
			}
			else
			{
				echo "Fill up the form again!";
			}
			?>
		</fieldset>
		<br><br>
		<legend><b>REGISTERED INFORMATION (ADMIN COPY)</b></legend>
		<fieldset>
			<?php
			if(isset($_SESSION['fname']) &&
				isset($_SESSION['lname']) && 
				isset($_SESSION['uname']) &&
				isset($_SESSION['dob']) &&
				isset($_SESSION['gender']) &&
				isset($_SESSION['email']) &&
				isset($_SESSION['phone'])&&
				isset($_SESSION['address'])&&
				isset($_SESSION['password'])
			)
			{
				echo "First Name:".$_SESSION['fname'];
				echo "<br>";
				echo "Last Name:".$_SESSION['lname'];
				echo "<br>";
				echo "Userame:".$_SESSION['uname'];
				echo "<br>";
				echo "Date of Birth:".$_SESSION['dob'];
				echo "<br>";
				echo "Gender:".$_SESSION['gender'];
				echo "<br>";
				echo "Email:".$_SESSION['email'];
				echo "<br>";
				echo "Phone:".$_SESSION['phone'];
				echo "<br>";
				echo "Address:".$_SESSION['address'];
				echo "<br>";
				echo "Temporary Password:".$_SESSION['password'];
				echo "<br>";
			}
			else
			{
				echo "Fill up the form again!";
			}
			?>
		</fieldset>
		<div class="button-container">
			<button onclick="window.location.href='manage_student.php'">Back</button>
			<button onclick="window.print()">Print</button>
		</div>
	</div>
	<footer>
		<p>&copy; 2023 Code Lab. All rights reserved.</p>
	</footer>
</body>
</html>
