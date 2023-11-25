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
   <title>Student Homepage</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS_Student/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="student_homepage.php" class="logo">CodeLab</a>

      <form id="search-form" action="https://www.google.com/search" method="GET" target="_blank" class="search-form">

      <input type="text" name="q" onkeyup="showHint(this.value)"  required placeholder="Search Courses" maxlength="100">

      <span id="txtHint"></span></td>

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
         <h3 class="name"><?php echo $_SESSION['uname']; ?></h3>
         <p class="role">studentt</p>
         <a href="Student_profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">logout</a>
            
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

<section class="courses">

   <h1 class="heading">My Courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3>Kamil</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="playlistSTU.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>Tahmid</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="playlistSTU.php" class="inline-btn">view playlist</a>
      </div>

      

      
      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Rafid</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete SASS tutorial</h3>
         <a href="playlistSTU.php" class="inline-btn">view playlist</a>
      </div>

   </div>

   
</section>



<section class="courses">

   <h1 class="heading">Courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3>Kamil</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="https://i.ytimg.com/vi/GE2qnXC8UMg/maxresdefault.jpg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Advance HTML tutorial <br> $8.29</h3>
         <a href="PurchaseCourse.php" class="inline-btn">Purchase Now</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>Tahmid</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Advance CSS tutorial <br> $6.29</h3>
         <a href="PurchaseCourse.php" class="inline-btn">Purchase Now</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>Nabil</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Basic JS tutorial <br> $5.29</h3>
         <a href="PurchaseCourse.php" class="inline-btn">Purchase Now</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>Kamil</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial <br> $10.29</h3>
         <a href="PurchaseCourse.php" class="inline-btn">Purchase Now</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="info">
               <h3>Siam</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JQuery tutorial <br> $7.29</h3>
         <a href="PurchaseCourse.php" class="inline-btn">Purchase Now</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Rafid</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Advance SASS tutorial <br> $6.29</h3>
         <a href="PurchaseCourse.php" class="inline-btn">Purchase Now</a>
      </div>

   </div>

   
</section>


<section class="home-grid">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">likes and comments</h3>
         <p class="likes">total likes : <span>25</span></p>
         <a href="#" class="inline-btn">view likes</a>
         <p class="likes">total comments : <span>12</span></p>
         <a href="#" class="inline-btn">view comments</a>
         <p class="likes">saved playlists : <span>4</span></p>
         <a href="#" class="inline-btn">view playlists</a>
      </div>

      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
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

      xmlhttp.open("GET", "get_courses.php?q=" + str);

      xmlhttp.send();

      }

    }

    </script>