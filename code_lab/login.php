<?php
     @include 'dbcon.php';
    if(isset($_POST['login']))

    {
        session_start();
        $uname = $_POST['username'];
        $password = $_POST['password'];
        //SQL
        $sql1 = "SELECT * from student_registration where uname = '$uname' AND password = '$password'";
        $sql2 = "SELECT * from teacher_registration where uname = '$uname' AND password = '$password'";
        $sql3 = "SELECT * from admin_registration where uname = '$uname' AND password = '$password'";
        //Verify SQL with database connection
        $varify1 = mysqli_query($conn, $sql1);
        $varify2 = mysqli_query($conn, $sql2);
        $varify3 = mysqli_query($conn, $sql3);
        if(mysqli_num_rows($varify1) == 1) //1 row return
        {
            $_SESSION['uname'] = $uname;
            //print("<center>Login Successfull!</center>");
            //cookies implementation
            header("location: student_homepage.php");
        }
        elseif(mysqli_num_rows($varify2) == 1)
        {
            $_SESSION['uname'] = $uname;
            //print("<center>Login Successfull!</center>");
            //cookies implementation
            header("location: teacher_homepage.php");
        }
        elseif(mysqli_num_rows($varify3) == 1)
        {
            $_SESSION['uname'] = $uname;
            //print("<center>Login Successfull!</center>");
            //cookies implementation
            header("location: admin_homepage.php");
        }

        else
        {
                alert("Invalid Email or Password");
        }
    }

?>
<?php
@include 'dbcon.php';
if(isset($_POST['signup']))
{
	$uname = $_POST['username'];
	$password = $_POST['password'];
	$pass1 = $_POST['pass1'];
	if($password == $pass1)
	{
		
		$sql = "INSERT INTO student_registration(uname, password) VALUES ('$uname', '$password')";
		$result=mysqli_query($conn,$sql);
  if($result)
  {
        
	header('location:login.php');
  }
	}
	else
	{
                
		echo "<i>Password doesn't match</i>";
	}
}
?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLab Website</title>

    <!-- Swiper JS CSS-->
    <link rel="stylesheet" href="CSS_Home/swiper-bundle.min.css">

    <!-- Scroll Reveal -->
    <link rel="stylesheet" href="CSS_Home/scrollreveal.min.js">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        
    <!-- CSS -->
    <link rel="stylesheet" href="CSS_Home/style.css">
    <link rel="stylesheet" href="CSS_Student/style1.css" />
    

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>





<!-- Header -->
    <header class="header">
            <nav class="nav container flex">
                    <a href="#" class="logo-content flex">
                        <i class='bx bx-coffee logo-icon'></i>
                        <span class="logo-text">CodeLab</span>
                    </a>
                    
                    <div class="menu-content">
                            <ul class="menu-list flex">
                                    <li><a href="#home" class="nav-link active-navlink">home</a></li>
                                    <li><a href="#about" class="nav-link">about</a></li>
                                    <li><a href="#menu" class="nav-link">Courses</a></li>
                                    <li><a href="#review" class="nav-link">Reviews</a></li>
                            </ul>

                            <div class="media-icons flex">
                                    <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
                                    <a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter' ></i></a>
                                    <a href="https://www.instagram.com/accounts/login"><i class='bx bxl-instagram-alt' ></i></a>
                                    <a href="https://github.com/login"><i class='bx bxl-github'></i></a>
                                    <a href="https://www.youtube.com/login"><i class='bx bxl-youtube'></i></a>
                            </div>

                            <i class='bx bx-x navClose-btn'></i>
                        </div>
                        
                        <div class="contact-content flex">

                                <button class="button" id="form-open">Login</button>


                            <section class="home">

                                <div class="form_container">
                          
                                  <i class="uil uil-times form_close"></i>
                          
                                  <!-- Login From -->

                          
                                  <div class="form login_form">
                          
                                    <form method = "post" action ="login.php"   onsubmit="return validateForm1()">
                          
                                      <h2>Login</h2>
                          
                                      <div class="input_box">
                          
                                        <input type="text" name="username" placeholder="Enter your username" required />
                          
                                        <i class="uil uil-envelope-alt email"></i>
                          
                                      </div>
                          
                                      <div class="input_box">
                          
                                        <input type="password" name="password" placeholder="Enter your password" required />
                          
                                        <i class="uil uil-lock password"></i>
                          
                                        <i class="uil uil-eye-slash pw_hide"></i>
                          
                                      </div>
                          
                          
                                      <div class="option_field">
                          
                                        <span class="checkbox">
                          
                                          <input type="checkbox" id="check" />
                          
                                          <label for="check">Remember me</label>
                          
                                        </span>
                          
                                        <div class="login_signup"><a href="forget_password.php" id="forgot_pw">Forgot password?</a></div>
                          
                                      </div>
                          
                                      <button  class="button" name="login" value="Login">Login Now</button>
                          
                                      <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>

                                      
                                      
                          
                                    </form>
                          
                                  </div>
                          
                          
                                  <!-- Signup From -->
                          
                                  <div class="form signup_form">
                          
                                    <<form method = "post" action ="login.php"  onsubmit="return validateForm()">
                          
                                      <h2>Signup</h2>
                          
                                      <div class="input_box">
                          
                                        <input type="text" name="username" placeholder="Enter your usename" required />
                          
                                        <i class="uil uil-envelope-alt email"></i>
                          
                                      </div>
                          
                                      <div class="input_box">
                          
                                        <input type="password" name="password" placeholder="Create password" required />
                          
                                        <i class="uil uil-lock password"></i>
                          
                                        <i class="uil uil-eye-slash pw_hide"></i>
                          
                                      </div>
                                      <div class="input_box">
                          
                                        <input type="password" name="pass1" placeholder="Confirm password" required />
                          
                                        <i class="uil uil-lock password"></i>
                          
                                        <i class="uil uil-eye-slash pw_hide"></i>
                          
                                      </div>
                                      <button class="button" name="signup">Signup Now</button>

                                      <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
                                    </form>
                                  </div>
                                </div>
                              
                          
                          
                          </section>
                          
                          <script src="JavaScript_Student/script1.js"></script>

                        </div>

                        <i class='bx bx-menu navOpen-btn'></i>
                </nav>
        
    </header>

<!-- Home Section -->
    <main>
        <section class="home" id="home">
                <div class="home-content">
                        <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                                <img src="images/home2.jpg" alt="" class="home-img">

                                                <div class="home-details">
                                                        <div class="home-text">
                                                                
                                                                <h2 class="homeTitle">Empowering Tomorrow's <br> Innovators Today</h2>
                                                        </div>

                                                        <button class="button">Explore</button>
                                                </div>
                                        </div>

                                        <div class="swiper-slide">
                                                <img src="images/bg.jpg" alt="" class="home-img">

                                                <div class="home-details">
                                                        <div class="home-text">
                                                                
                                                                <h2 class="homeTitle">Unlock the Future  <br> with Code Lab</h2>
                                                        </div>

                                                        <button class="button">Explore</button>
                                                </div>
                                        </div>

                                        <div class="swiper-slide">
                                                <img src="images/home3.jpg" alt="" class="home-img">

                                                <div class="home-details">
                                                        <div class="home-text">
                                                                
                                                                <h2 class="homeTitle">Master Tech's Cutting  <br> Edge with Code Lab</h2>
                                                        </div>

                                                        <button class="button">Explore</button>
                                                </div>
                                        </div>
                                </div>

                                <div class="swiper-button-next swiper-navBtn"></div>
                                <div class="swiper-button-prev swiper-navBtn"></div>
                                <div class="swiper-pagination"></div>
                        </div>
                </div>
        </section>

    
<!-- About Section -->
        <section class="section about" id="about">
                <div class="about-content container">
                        <div class="about-imageContent">
                                <img src="https://miro.medium.com/v2/resize:fit:1024/1*ABEJI14pLzq5RXu1E2EqDA.png" alt="" class="about-img">

                                <div class="aboutImg-textBox">
                                        <i class='bx bx-heart heart-icon flex'></i>
                                        <p class="content-description">Thanks to 'Code Lab's web development course, I landed my first job as a web developer – truly life-changing!</p>
                                </div>
                        </div>

                        <div class="about-details">
                                <div class="about-text">
                                        <h4 class="content-subtitle"><i>Our Code Cab</i></h4>
                                        <h2 class="content-title">Fusing Timeless Wisdom with  <br> Contemporary Excellence</h2>
                                        <p class="content-description">We appreciate your trust greatly. 
                                                Our clients choose us and our courses because they know we are the best.</p>

                                        <ul class="about-lists flex">
                                                <li class="about-list">Web_Delelopment</li>
                                                <li class="about-list dot">.</li>
                                                <li class="about-list">Data_Structure</li>
                                                <li class="about-list dot">.</li>
                                                <li class="about-list">Algorithm</li>
                                        </ul>
                                </div>

                                <div class="about-buttons flex">
                                        <button class="button">About Us</button>
                                        <a href="#" class="about-link flex">
                                                <span class="link-text">see more</span>
                                                <i class='bx bx-right-arrow-alt about-arrowIcon'></i>
                                        </a>
                                </div>
                        </div>

                </div>
        </section>

    
<!-- Menu Section -->
        <section class="section menu" id="menu">
            <div class="menu-container container">
                    <div class="meu-text">
                            <h4 class="section-subtitle"><i>Our Courses</i></h4>
                            <h2 class="section-title">Our Popular Courses</h2>
                            <p class="section-description">
                            Our project unites experienced industry professionals and students to craft spaces that are thoughtfully designed to perfectly suit your needs.
                            </p>
                    </div>

                    <div class="menu-content">
                            <div class="menu-items">
                                    <div class="menu-item flex">
                                            <img src="https://ar.happyvalentinesday2020.online/pics/www.pngkey.com/png/detail/249-2496182_web-design-development-web-developer-logo-png.png" alt="" class="menu-img">

                                            <div class="menuItem-details">
                                                    <h4 class="menuItem-topic">Web Development</h4>
                                                    <p class="menuItem-des">Master the art of building stunning websites and web applications with our comprehensive web development course</p>
                                            </div>

                                            <div class="menuItem-price flex">
                                                    <span class="discount-price">$8.99</span>
                                                    <span class="real-price">$10.66</span>
                                            </div>
                                    </div>
                                    <div class="menu-item flex">
                                            <img src="https://images.credly.com/images/e4e5214a-e9f3-414c-9ebc-d10467a92816/Data_Structures_and_Algorithms.png" alt="" class="menu-img">

                                            <div class="menuItem-details">
                                                    <h4 class="menuItem-topic">Data Structures and Algorithms</h4>
                                                    <p class="menuItem-des">Unlock the world of efficient coding with our in-depth Data Structures and Algorithms course.</p>
                                            </div>

                                            <div class="menuItem-price flex">
                                                    <span class="discount-price">$8.99</span>
                                                    <span class="real-price">$10.66</span>
                                            </div>
                                    </div>
                                    <div class="menu-item flex">
                                            <img src="https://static.vecteezy.com/system/resources/previews/020/109/178/original/java-editorial-logo-free-download-free-vector.jpg" alt="" class="menu-img">

                                            <div class="menuItem-details">
                                                    <h4 class="menuItem-topic">Java</h4>
                                                    <p class="menuItem-des">Dive into the world of Java programming and unleash your software development potential.</p>
                                            </div>

                                            <div class="menuItem-price flex">
                                                    <span class="discount-price">$8.99</span>
                                                    <span class="real-price">$10.66</span>
                                            </div>
                                    </div>
                                    <div class="menu-item flex">
                                            <img src="https://wp-assets.highcharts.com/svg/net.svg" alt="" class="menu-img">

                                            <div class="menuItem-details">
                                                    <h4 class="menuItem-topic">.NET</h4>
                                                    <p class="menuItem-des">Discover the power of .NET for developing versatile and robust software solutions.</p>
                                            </div>

                                            <div class="menuItem-price flex">
                                                    <span class="discount-price">$8.99</span>
                                                    <span class="real-price">$10.66</span>
                                            </div>
                                    </div>
                            </div>

                            <div class="time-table">
                                    <span class="time-topic">Problem Solving Schedule</span>

                                    <ul class="time-lists">
                                            <li class="time-list flex">
                                                    <span class="open-day"> Sunday</span>
                                                    <span class="open-time">Closed</span>
                                            </li>
                                            <li class="time-list flex">
                                                    <span class="open-day"> Monday</span>
                                                    <span class="open-time">7.00am - 3.00pm</span>
                                            </li>
                                            <li class="time-list flex">
                                                    <span class="open-day"> Tuesday</span>
                                                    <span class="open-time">7.00am - 3.00pm</span>
                                            </li>
                                            <li class="time-list flex">
                                                    <span class="open-day"> Wednesday</span>
                                                    <span class="open-time">7.00am - 3.00pm</span>
                                            </li>
                                            <li class="time-list flex">
                                                    <span class="open-day"> Thursday</span>
                                                    <span class="open-time">7.00am - 3.00pm</span>
                                            </li>
                                            <li class="time-list flex">
                                                    <span class="open-day"> Friday</span>
                                                    <span class="open-time">7.00am - 3.00pm</span>
                                            </li>
                                            <li class="time-list flex">
                                                    <span class="open-day"> Saturday</span>
                                                    <span class="open-time">9.00am - 2.00pm</span>
                                            </li>
                                    </ul>
                            </div>
                    </div>
            </div>
        </section>

    
<!-- Brand Section -->
        <section class="section brand">
            <div class="brand-container container">
                    <h4 class="section-subtitle"><i>Our Trusted Partners</i></h4>

                    <div class="brand-images">
                            <div class="brand-image">
                                    <img src="https://c.na39.content.force.com/servlet/servlet.ImageServer?id=0150L00000APGxBQAX&oid=00DE0000000c48tMAA" alt="" class="brand-img">
                            </div>
                            <div class="brand-image">
                                    <img src="https://www.logosvgpng.com/wp-content/uploads/2021/03/therap-services-logo-vector.png" alt="" class="brand-img">
                            </div>
                            <div class="brand-image">
                                    <img src="https://cse.buet.ac.bd/nsyss2017-4th/wp-content/uploads/2017/11/tigerit-bangladesh-limited.png" alt="" class="brand-img">
                            </div>
                            <div class="brand-image">
                                    <img src="https://spreehabd.org/wp-content/uploads/2020/07/graphicpeople-squarelogo-1430144295339.png" alt="" class="brand-img">
                            </div>
                            <div class="brand-image">
                                    <img src="https://lh3.googleusercontent.com/dPDZ67XfqRlPXUv7TI5PPikVd5i58XEDDTSBbCau-MsFoQwXuU6pOTmupEhDApQGfwyx_yuAz1zzR5t_jbAxyA" alt="" class="brand-img">
                            </div>
                    </div>
            </div>
        </section>

    
<!-- Reviews Section -->
        <section class="section review" id="review">
            <div class="review-container container">
                    <div class="review-text">
                            <h4 class="section-subtitle"><i>Reviews</i></h4>
                            <h2 class="section-title">What Expert's Says</h2>
                            <p class="section-description">Our review section is a testament to the transformative experiences our customers have had. It's where their stories of success, growth, and newfound skills come to life, echoing the impact of our courses on their lives.</p>
                    </div>

                    <div class="tesitmonial swiper mySwiper">
                            <div class="swiper-wrapper">
                                    <div class="testi-content swiper-slide flex">
                                            <img src="https://yt3.googleusercontent.com/ytc/AOPolaSsvlrzNsLclGglrrQooLBBf4Szti60en3LA6BQJQ=s900-c-k-c0x00ffffff-no-rj" alt="" class="review-img">
                                            <p class="review-quote">was amazed by the thoughtful design of their courses. They truly feel tailor-made for me, and the collaboration between industry experts and students brings a unique blend of expertise and fresh perspectives.</p>
                                            <i class='bx bxs-quote-alt-left quote-icon'></i>

                                            <div class="testi-personDetails flex">
                                                    <span class="name">Anisul Isalm</span>
                                                    <span class="job">Web Developer</span>
                                            </div>
                                    </div>
                                    <div class="testi-content swiper-slide flex">
                                            <img src="https://media.licdn.com/dms/image/D4E03AQFcu1aYRRKKyA/profile-displayphoto-shrink_800_800/0/1674996318855?e=2147483647&v=beta&t=IRAGEqD2HEgoXevfh333RoLHOA741gl2p0Xq38A2Qhg" alt="" class="review-img">
                                            <p class="review-quote">I've never experienced courses that felt so attuned to my learning style and goals. The synergy between industry veterans and students is evident in the quality and depth of their content, making it a standout in personalized education.</p>
                                            <i class='bx bxs-quote-alt-left quote-icon'></i>

                                            <div class="testi-personDetails flex">
                                                    <span class="name">Zahid Sabur</span>
                                                    <span class="job">Principle Engineer</span>
                                            </div>
                                    </div>
                                    <div class="testi-content swiper-slide flex">
                                            <img src="https://pbs.twimg.com/profile_images/1158476343/sbn_pic_2_400x400.jpg" alt="" class="review-img">
                                            <p class="review-quote">The approach of combining the wisdom of experienced professionals with the creativity of students in developing their courses resulted in a learning experience that exceeded my expectations. It's not just informative; it's engaging!</p>
                                            <i class='bx bxs-quote-alt-left quote-icon'></i>

                                            <div class="testi-personDetails flex">
                                                    <span class="name">Tamim Shahriar Subeen</span>
                                                    <span class="job">Software Engineer </span>
                                            </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-navBtn"></div>
                                <div class="swiper-button-prev swiper-navBtn"></div>
                                <div class="swiper-pagination"></div>
                    </div>
            </div>
        </section>

    
<!-- Newsletter Section -->
        <section class="section newsletter">
            <div class="newletter-container container">
                <a href="#" class="logo-content flex">
                        <i class='bx bx-coffee logo-icon'></i>
                        <span class="logo-text">CodeLab</span>
                    </a>

                    <p class="section-description">Explore Code Lab through the lens of success stories, where dreams are realized, skills honed, and careers launched. Here, the transformative impact of our courses becomes the heartbeat of inspiration for aspiring learners.</p>

                    <div class="newsletter-inputBox">
                            <input type="email" placeholder="example@gmail.com" class="newletter-input">
                            <button class="button newsletter-button">Subscribe</button>
                    </div>

                    <div class="newsletter media-icons flex">
                        <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
                        <a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter' ></i></a>
                        <a href="https://www.instagram.com/accounts/login"><i class='bx bxl-instagram-alt' ></i></a>
                        <a href="https://github.com/login"><i class='bx bxl-github'></i></a>
                        <a href="https://www.youtube.com/login"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
        </section>
        
    
<!-- Footer Section -->
        <footer class="section footer">
            <div class="footer-container container">
                    <div class="footer-content">
                        <a href="#" class="logo-content flex">
                                <i class='bx bx-coffee logo-icon'></i>
                                <span class="logo-text">CodeLab</span>
                            </a>

                            <p class="content-description">Code Lab: Where dreams turn into careers. Join us and be inspired by the transformative impact of our courses.</p>

                            <div class="footer-location flex">
                                <i class='bx bx-map map-icon'></i>
                                
                                <div class="location-text">
                                408/1 (Old KA 66/1), Kuratoli, Khilkhet, Dhaka 1229, Bangladesh
                                </div>
                            </div>
                    </div>

                    <div class="footer-linkContent">
                            <ul class="footer-links">
                                    <h4 class="footerLinks-title">Facility</h4>

                                    <li><a href="#" class="footer-link">Problem Solving seasion</a></li>
                                    <li><a href="#" class="footer-link">Instant Solution</a></li>
                                    <li><a href="#" class="footer-link">Interview Prepration</a></li>
                                    <li><a href="#" class="footer-link">Programming Contest</a></li>
                                    <li><a href="#" class="footer-link">Event</a></li>
                            </ul>
                            <ul class="footer-links">
                                    <h4 class="footerLinks-title">Facility</h4>

                                    <li><a href="#" class="footer-link">Learning</a></li>
                                    <li><a href="#" class="footer-link">Teaching</a></li>
                                    <li><a href="#" class="footer-link">Internship</a></li>
                            </ul>
                            <ul class="footer-links">
                                    <h4 class="footerLinks-title">Support</h4>

                                    <li><a href="#" class="footer-link">About Us</a></li>
                                    <li><a href="#" class="footer-link">FAQs</a></li>
                                    <li><a href="#" class="footer-link">Private Policy</a></li>
                                    <li><a href="#" class="footer-link">Help Us</a></li>
                            </ul>
                    </div>
            </div>
            <div class="footer-copyRight">&#169; CodeLab. All rigths reserved</div>
        </footer>

<!-- Scroll Up -->
        <a href="#home" class="scrollUp-btn flex">
                <i class='bx bx-up-arrow-alt scrollUp-icon'></i>
        </a>

</main>

<!-- Swiper JS -->
<script src="JavaScript_Home/swiper-bundle.min.js"></script>

<!-- Scroll Reveal -->
<script src="JavaScript_Home/scrollreveal.js"></script>

<!-- JavaScript -->
    <script src="JavaScript_Home/script.js"></script>
    <script src="JavaScript_Student/script1.js"></script>
</body>
</html>

<script>

    function validateForm() {

    var username = document.querySelector('.signup_form input[name="username"]').value;

    var password = document.querySelector('.signup_form input[name="password"]').value;

    var pass1 = document.querySelector('.signup_form input[name="pass1"]').value;

 

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

    function validateForm1() {

    var username = document.querySelector('.login_form input[name="username"]').value;

    var password = document.querySelector('.login_form input[name="password"]').value;


 

    if (username === "") {

        alert("Username must be filled out");

        return false;

    }

 

    if (password === "") {

        alert("Password must be filled out");

        return false;

    }

    

 

    return true;

  }

</script>

