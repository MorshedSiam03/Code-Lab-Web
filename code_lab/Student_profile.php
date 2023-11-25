<?php
session_start();
if(isset($_SESSION['uname']))
include 'dbcon.php'; 

$loggedInUser = $_SESSION['uname'];

$sql = "SELECT * FROM student_registration WHERE uname = '$loggedInUser'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $s_id = $row['s_id']; 
    $s_fname = $row['fname']; 
    $s_lname = $row['lname']; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>

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
         <a href="Student_profile.php" class="btn">view profile</a>
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
      <p class="role"><?php echo $_SESSION['uname']; ?></p>



      <a href="Student_profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
   <a href="student_homepage.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
      <a href="View_Notice.php"><i class="fas fa-question"></i><span>Notice Board</span></a>
      <a href="aboutSTU.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="contactSTU.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
   </nav>

</div>

<section class="user-profile">

   <h1 class="heading">your profile</h1>

   <div class="info">

      <div class="user">
         <img src="images/pic-1.jpg" alt="">
         <h3><?php echo $_SESSION['uname']; ?></h3>
         <p>Student</p>
         <?php
         if (isset($s_id)) 
         {
        echo '<a href="update.php?updates_id='.$s_id.'" class="inline-btn">Update Profile</a>';
         }
        ?>
         
      </div>
   
      <div class="box-container">
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-bookmark"></i>
               <div>
                  <span>4</span>
                  <p>saved playlist</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view playlists</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-heart"></i>
               <div>
                  <span>33</span>
                  <p>videos liked</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view liked</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-comment"></i>
               <div>
                  <span>12</span>
                  <p>videos comments</p>
               </div>
            </div>
            <a href="#" class="inline-btn">view comments</a>
         </div>
   
      </div>
   </div>

</section>




<footer class="footer">

   &copy; copyright @ 2023 by <span>Code Lab</span> | all rights reserved!

</footer>
<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>

   
</body>
</html>