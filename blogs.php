<?php

$dbhost = "localhost";
$dbuser = "u772271968_vrushit";
$dbpass = "Vrushit123";
$db = "u772271968_medbay";

session_start();


$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/8c86c20e06.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="icon" href="./images//Logo/Title Bar.png" type="image/icon type">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>MedBay - Blogs</title>
</head>

<body>
  <header>
    <div class="top-head">
      <div class="logo">
        <img src="./images/Logo/F_Logo3.png" alt="" />
      </div>
      <div class="emergency">

        <p class="rightPara">
          <img src="./images/emergency-call.png" alt="">
          <li>
            <strong> Medical Emergency Number</strong>
            <ul class="leftEmerg">
              <li>
                <a href="tel:102">102</a>
              </li>
              <li>
                <a href="tel:1298">1298</a>
              </li>
              <li>
                <a href="tel:022-24308888">022-24308888</a>
              </li>
            </ul>
          </li>
        </p>

        <p class="rightPara">
          <img src="./images/ambulance.png" alt="Ambulance" class="ambulance">
        <ul>
          <li>
            <strong>Ambulance services </strong>
            <span><a href="tel:108">108</a></span>
          </li>
          <li>
            <strong>Blood Bank</strong>
            <span><a href="tel:104">104</a>, <a href="tel:1910">1910</a></span>
          </li>
          <li>
            <strong>AIDS Helpline</strong>
            <span><a href="tel:1097">1097</a></span>
          </li>
          <li>
            <strong>Road Accident Emergency Service</strong>
            <span><a href="tel:1072">1072</a>, <a href="tel:1073">1073</a></span>
          </li>
        </ul>
        </p>

      </div>
    </div>
    <script src="./js/navBar.js"></script>
    <nav class="navbar" id="navbar">
      <ul>
        <li><a href="./index.html">Home <span></span></a></li>
        <li><a href="./covid.html">Covid <span></span></a></li>
        <li><a href="./doctors.php">Doctors <span></span></a></li>
        <li><a href="./hospital.php">Hospital <span></span></a></li>
        <li><a href="./blogs.php">Blogs <span></span></a></li>
        <li><a href="./book.html">Book Now <span></span></a></li>
        <li><img src="./images/Logo/F_Logo2.jpg" alt=""></li>
      </ul>
    </nav>
  </header>

  <!-- ------------------- -->

  <main class="doc">
    <div class="doc_homePage blog_homePage">
      <div class="text">
        <h1>Blogs</h1>
        <ul>
          <li>
            <a href="./index.html">Home <span>/</span> </a>
          </li>
          <li><a href="./doctor.html" class="active">Blogs</a></li>
        </ul>
      </div>
    </div>

    <!-- ------------------- -->

    <script>
      $(document).ready(function() {
        var blog_count = 2;
        $(".blogsButton").click(function() {
          blog_count = blog_count + 2;
          $("#readblogs").load("./php/load-blog.php", {
            blog_new_count: blog_count
            // key : value,
          });
        });
      });
    </script>

    <div class="blog_news">
      <div class="blogGrid">
        <div class="readblogs" id="readblogs">
          <?php
          $sql = "SELECT * FROM `blogs` ORDER BY `blogs`.`ID` DESC LIMIT 2";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

          ?>
              <div class="grid">
                <div class="date">
                  <h3><?php echo substr($row['Date'], 0, 2)  ?></h3>
                  <p><?php echo substr($row['Date'], 3)  ?></p>
                </div>
                <div class="content_div">
                  <h3><?php echo $row['Heading']  ?></h3>
                  <p>
                    <?php echo $row['Content']  ?>
                  </p>

                  <h5 class="about"><?php echo $row['Name']  ?> | <?php echo $row['Dept']  ?></h5>


                  <div class="heart-btn">
                    <div class="content" onclick="likeFn('<?php echo 'heart-like' . $row['ID']  ?>')">
                      <span class="heart" id="<?php echo 'heart-like' . $row['ID']  ?>"></span>
                    </div>
                  </div>

                  <script>
                    function likeFn(id_name) {
                      let like = document.getElementById(id_name);
                      like.classList.toggle("heart-active");
                    }
                  </script>
                </div>
              </div>
          <?php
            }
          } else {
            echo "There is no comments!";
          }


          ?>

          <!-- <div class="grid">
              <div class="date">
                <h3>15</h3>
                <p>Jan</p>
              </div>
              <div class="content_div">
                <h3>Google inks pact for new 35-storey office</h3>
                <p>
                  That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.
                </p>

                <h5 class="about">Cardiology</h5>

                <div class="heart-btn">
                  <div class="content" onclick="likeFn('heart-like4')">
                    <span class="heart" id="heart-like4"></span>
                  </div>
                </div>

                <script>
                  function likeFn(id_name) {
                    let like = document.getElementById(id_name);
                    like.classList.toggle("heart-active");
                  }
                </script>
              </div>
            </div> -->
        </div>

        <div class="loginblogs" id="loginblogs">
          <?php
          if (isset($_SESSION["id"])) {
            include './php/writeABlog.php';
          } else {
            include './php/LoginForm.php';
          }
          ?>
        </div>
        <button class="blogsButton">Show More Blogs</button>
      </div>
    </div>
  </main>

  <!-- ------------------- -->

  <footer>
    <div class="one grido">
      <h2>Lets talk about</h2>
      <p>
        Got an inquiry for our Website or want to add your hospital in our site? <br />
        Feel free to contact me. I am happy to discuss your needs.
      </p>
      <div class="social">
        <a href="https://www.linkedin.com/in/vrushit-patel/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.instagram.com/vrushit_750/" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="two grido">
      <h2>Links</h2>
      <ul>
        <li><a href="./index.html">Home</a></li>
        <li><a href="./covid.html">Covid</a></li>
        <li><a href="./doctors.php">Doctors</a></li>
        <li><a href="./hospital.php">Hospital</a></li>
        <li><a href="./blogs.php">Blogs</a></li>
        <li><a href="./book.html">Book Now</a></li>
      </ul>
    </div>
    <div class="three grido">
      <h2>What We Provide?</h2>
      <!-- goes to projects link -->
      <ul class="serviceList">
        <li>Top Doctors In Mumbai</li>
        <li>Top Hospitals In Mumbai</li>
        <li>Doctors Filtered Accordingly</li>
        <li>Hospitals Filtered Accordingly</li>
        <li>Covid Information</li>
        <li>Doctors Can Post Daily Tips</li>
      </ul>
    </div>
    <div class="four grido">
      <h2>Have a Questions?</h2>
      <ul>
        <li class="phone-no">
          <a href="tel:+917506025868" style="transform: translateY(-8px)">+91 75060 25868</a>
        </li>
        <li class="whatsapp">
          <a href="https://api.whatsapp.com/send?phone=917977720603&text=Hi%20" target="_blank" style="transform: translateY(-6px)">+91 79777 20603</a>
        </li>
        <li class="mail">
          <a href="https://www.linkedin.com/in/vrushit-patel/" style="transform: translateY(-6px)">Vrushit Patel</a>
        </li>
      </ul>
    </div>
    <section>
      <p>
        Copyright ©2020 All rights reserved | This template is made with
        <i class="fas fa-heart"></i> by
        <a href="https://www.linkedin.com/in/vrushit-patel/" target="_blank">Vrushit</a>
      </p>
    </section>
  </footer>
</body>

</html>