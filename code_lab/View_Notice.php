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
   <link rel="stylesheet" href="CSS_Student/notice.css">
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
    

    <div class="container">
        <h1>Notice Board</h1>
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
                echo "</div>";
            }
        } else {
            echo "<p>No notices available.</p>";
        }

        $conn->close();
        ?>
    </div>

<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>

</body>
</html>

