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

      <a href="teacher_homepage.php" class="logo">CodeLab</a>


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
         <img src="images/pic-2.jpg" class="image" alt="">
         <h3 class="name"><?php echo $_SESSION['uname']; ?></h3>
         <p class="role">Teacher</p>
         <a href="" class="btn">view profile</a>
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
      <img src="images/pic-2.jpg" class="image" alt="">
      <p class="role"><?php echo $_SESSION['uname']; ?></p>
      <a href="" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="teacher_homepage.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="notice.php"><i class="fas fa-headset"></i><span>Add Notice</span></a>
      <a href=""><i class="fas fa-question"></i><span>About</span></a>
      <a href=""><i class="fas fa-headset"></i><span>Contact us</span></a>
   </nav>

</div>

<section class="teacher-profile">

   <h1 class="heading">profile details</h1>

   <div class="details">
      <div class="tutor">
         <img src="images/pic-2.jpg" alt="">
         <h3><?php echo $_SESSION['uname']; ?></h3>
         <span>Developer</span>
      </div>
      <div class="flex">
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <p>total comments : <span>52</span></p>
      </div>
   </div>

</section>

<section class="courses">

   <h1 class="heading">Notice board</h1>


   <div class="container">
        <?php
        @include 'dbcon.php';

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve notices from the database
        $sql = "SELECT * FROM notices";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='notice'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["notice"] . "</p>";
                echo "<button><a href='edit_notice.php?id=" . $row["id"] . "'>Edit</a></button>";
                echo "<button class='secondary'><a href='delete_notice.php?id=" . $row["id"] . "'>Delete</a></button>";
                echo "</div>";
            }
        } else {
            echo "<p>No notices available.</p>";
        }

        $conn->close();
        ?>
    </div>
    <?php
     ?>

   
      

   
</section>



<section class="courses">

   <h1 class="heading">Courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete javascript tutorial</h3>
         <a href="" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial</h3>
         <a href="" class="inline-btn">view playlist</a>
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