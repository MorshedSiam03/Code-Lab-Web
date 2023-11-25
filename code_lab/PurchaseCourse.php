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
   <title>video playlist</title>

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
         <p class="role">studentt</p>
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
      <a href="aboutSTU.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="contactSTU.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
   </nav>

   
</div>

<section class="playlist-details">

   <h1 class="heading">playlist details</h1>

   <div class="row">

      <div class="column">
         <form action="" method="post" class="save-playlist">
            <button type="submit"><i class="far fa-bookmark"></i> <span>save playlist</span></button>
         </form>
   
         <div class="thumb">
            <img src="https://i.ytimg.com/vi/GE2qnXC8UMg/maxresdefault.jpg" alt="">
            <span>10 videos</span>
         </div>
      </div>
      <div class="column">
         
   
         <div class="details">
            <h3>Advance HTML tutorial</h3>
            <p>This two-day advanced HTML training course combines learning new techniques with 
               practicing them using hands-on exercises for building and maintaining websites with modern HTML5 and CSS3. 
               This advanced HTML course covers sectioning elements and styling with CSS3.</p>
            
            <h1><p>$8.29/Full Course (Validation: 1Year)</p></h1>
            

            <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <h3>Course Instructor</h3>
            <div>
               <h3>Kamil</h3>
               <span>B.Sc in Computer science and engineering</span>
            </div>
         </div>

         <a href="Purchase.php" class="inline-btn">Buy now</a>
         </div>
      </div>
   </div>

</section>





<section class="playlist-videos">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

      <a class="box" href="">
         <i class="fas fa-play"></i>
         <img src="https://i.ytimg.com/vi/GE2qnXC8UMg/maxresdefault.jpg" alt="">
         <h3>Advance HTML tutorial (part 01)</h3>
      </a>

      <a class="box" href="">
         <i class="fas fa-play"></i>
         <img src="https://i.ytimg.com/vi/GE2qnXC8UMg/maxresdefault.jpg" alt="">
         <h3>Advance HTML tutorial (part 02)</h3>
      </a>

      <a class="box" href="">
         <i class="fas fa-play"></i>
         <img src="https://i.ytimg.com/vi/GE2qnXC8UMg/maxresdefault.jpg" alt="">
         <h3>Advance HTML tutorial (part 03)</h3>
      </a>

      <a class="box" href="">
         <i class="fas fa-play"></i>
         <img src="https://i.ytimg.com/vi/GE2qnXC8UMg/maxresdefault.jpg" alt="">
         <h3>Advance HTML tutorial (part 04)</h3>
      </a>

      <a class="box" href="">
         <i class="fas fa-play"></i>
         <img src="https://i.ytimg.com/vi/GE2qnXC8UMg/maxresdefault.jpg" alt="">
         <h3>Advance HTML tutorial (part 05)</h3>
      </a>

      <a class="box" href="">
         <i class="fas fa-play"></i>
         <img src="https://i.ytimg.com/vi/GE2qnXC8UMg/maxresdefault.jpg" alt="">
         <h3>Advance HTML tutorial (part 06)</h3>
      </a>

   </div>

</section>


<footer class="footer">

   &copy; copyright @ 2023 by <span>Code Lab</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>

   
</body>
</html>