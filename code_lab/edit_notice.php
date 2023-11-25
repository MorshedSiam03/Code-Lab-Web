<?php
session_start();
if(isset($_SESSION['uname']))
?>



<!DOCTYPE html>
<html>
<head>
    <title>Edit Notice</title>
    <link rel="stylesheet" type="text/css" href="CSS_Student/notice.css">

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
         <img src="images/pic-6.jpg" class="image" alt="">
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
        <h1>Edit Notice</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];

            // Create a database connection (replace with your database credentials)
            @include 'dbcon.php';

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve the notice from the database
            $sql = "SELECT * FROM notices WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                echo "<form action='update_notice.php' method='post'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<h3>Update Title</h3>";
                echo "<input type='text' name='title' value='" . $row["title"] . "' required>";
                echo "<br><br>";
                echo "<h3>Update Notice</h3>";
                echo "<textarea name='notice' required>" . $row["notice"] . "</textarea>";
                echo "<br><br>";
                echo "<button type='submit'>Update Notice</button>";
                echo "</form>";
            } else {
                echo "<p>Notice not found.</p>";
            }

            $conn->close();
        } else {
            echo "<p>Invalid request.</p>";
        }
        ?>
    </div>
    <?php
     ?>




<!-- custom js file link  -->
<script src="JavaScript_Student/script.js"></script>

</body>
</html>
