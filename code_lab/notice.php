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
   <title>tutor profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS_Student/notice.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS_Student/style.css">
      

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="admin_homepage.php" class="logo">CodeLab</a>

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
         <img src="images/pic-6.jpg" class="image" alt="">
         <p class="role">Admin</p>
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
    <img src="images/pic-6.jpg" class="image" alt="">
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


<div class="container">
        <h1>Make Announcements</h1>
        <form action="teacher_send_notice.php" method="post">

        <h2>Title <span>*</span></h2><br>
            <input type="text" name="title" placeholder="Notice Title" class="notice" required><br><br>
            <h2>Description <span>*</span></h2><br>
            <textarea name="notice" placeholder="Enter your notice" class="notice" required></textarea><br><br>
            
            
            <button type="submit">Send Notice</button>
        </form>
    </div>




<footer class="footer">

&copy; copyright @ 2023 by <span>Code Lab</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>

   
</body>
</html>