<?php

$dbhost = "sql307.epizy.com";
$dbuser = "epiz_33155386";
$dbpass = "5s0kLWyCNp3";
$db = "epiz_33155386_Medbay";

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

  <title>MedBay - Hospitals</title>
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
    <div class="doc_homePage hosp_homePage">
      <div class="text">
        <h1>Hospitals</h1>
        <ul>
          <li>
            <a href="./index.html">Home <span>/</span> </a>
          </li>
          <li><a href="./hospital.html" class="active">Hospital</a></li>
        </ul>
      </div>
    </div>

    <!-- ------------------- -->

    <div class="doctor_about">
      <h2>We Choose Top Healthcare Providers</h2>
      <div class="content">
        <p>
          Everything that the Our Hospital Group does is always geared towards one primary goal – patient benefit. This applies to investments and acquisitions together with the establishment of uniform structures and processes, not to mention the accreditation of new affiliated doctors and the foundation of collaborations. A high patient benefit is comprised of first-class medical quality, a high level of patient satisfaction and the efficient provision of services.
        </p>
        <p>
          The organisation of the our hospitals is based on a clear division of tasks between common medical functions on one hand – such as internal medicine, emergency care, anaesthesia, radiology and intensive care – and increasingly focused specialities such as orthopaedics, cardiology and oncology on the other. Thanks to this division, specialists can count on all basic medical services being provided quickly and professionally at all times, thus ensuring the highest possible level of patient safety.
        </p>
      </div>
    </div>

    <!-- ------------------- -->



    <!-- ------------------- -->

    <div class="doc-display" id="doc-display">
      <div class="doc-grid">
        <form action="" method="get">
          <input type="text" name="searching" id="searchBar" placeholder="Search A Hospital">
          <button id="search" type=button>Search</button>
          <span class="border"></span>
          <select name="areaHosp" id="areaHosp">
            <option value="">Select An Area</option>
            <option value="Andheri">Andheri</option>
            <option value="Bandra">Bandra</option>
            <option value="Malad">Malad</option>
            <option value="Breach Candy">Breach Candy</option>
            <option value="Mahim">Mahim</option>
            <option value="Powai">Powai</option>
            <option value="Kandivali">Kandivali</option>
          </select>
          <select name="departmentHosp" id="departmentHosp">
            <option value="">Select An department</option>
            <option value="Ayurveda">Ayurvedas</option>
            <option value="Cardiologist">Cardiologists</option>
            <option value="Dentist">Dentists</option>
            <option value="Neurologist">Neurologists</option>
            <option value="Eye Doctor">Eye Doctors</option>
          </select>
        </form>
      </div>

      <script>
        $(document).ready(function() {
          $("#search").click(function() {
            $('#doc_details').empty();
            $.ajax({
              url: "./php/search.php",
              type: 'post',
              data: {
                search: $("#searchBar").val()
              },
              success: function(getdata) {
                $('#doc_details').html(getdata);
              }
            });
          });

          $('select[name="areaHosp"]').change(function() {
            $('#doc_details').empty();
            $.ajax({
              url: "./php/filter.php",
              type: 'post',
              data: {
                area: $('select[name="areaHosp"]').val(),
                dept: $('select[name="departmentHosp"]').val()
              },
              success: function(getdata) {
                $('#doc_details').html(getdata);
              }
            });
          });

          $('select[name="departmentHosp"]').change(function() {
            $('#doc_details').empty();
            $.ajax({
              url: "./php/filter.php",
              type: 'post',
              data: {
                area: $('select[name="areaHosp"]').val(),
                dept: $('select[name="departmentHosp"]').val()
              },
              success: function(getdata) {
                $('#doc_details').html(getdata);
              }
            });
          });

        });
      </script>

      <div class="doc_details" id="doc_details">
        <script>
          $(document).ready(function() {
            $.ajax({
              url: "./php/top10.php",
              type: 'post',
              success: function(getdata) {
                $('#doc_details').html(getdata);
              }
            });
          });
        </script>
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
          <a href="tel:+917506025868" style="transform: translateY(-8px)">+91 9876543210</a>
        </li>
        <li class="whatsapp">
          <a href="https://api.whatsapp.com/send?phone=919876543210&text=Hi%20" target="_blank" style="transform: translateY(-6px)">+91 9876543210</a>
        </li>
        <li class="mail">
          <a href="https://www.linkedin.com/in/vrushit-patel/" style="transform: translateY(-6px)">Vrushit Patel</a>
        </li>
      </ul>
    </div>

  </footer>
</body>

</html>

<!-- <div class="doc_grid">
  <div class="photo">
    <img src="./images/docprofile.jfif" alt="" />
  </div>
  <div class="info">
    <h3>Dr L H Hiranandani Hospital</h3>
    <p>Multi-SpecialityHospital</p>
    <p>11 Cardiologists (choosen department)</p>
    <br />
    <p>Mira Road, Mumbai</p>
    <span>Cardiologist</span>
    <br />
    <br />
    <span>48 Years of Practice </span>
  </div>
  <div class="details">
    <strong>Timings</strong>
    <p>Mon-Sat</p>
    <p>08:00 AM - 08:00 PM</p>
    <br>
    <p>Number of Beds - 244</p>
    <p>Number of Ambulances - 3</p>
    <br>
    <button class="appointment">Contact</button>
  </div>
</div> -->