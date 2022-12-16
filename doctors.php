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

  <title>MedBay - Doctors</title>
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
    <div class="doc_homePage">
      <div class="text">
        <h1>Doctors</h1>
        <ul>
          <li>
            <a href="./index.html">Home <span>/</span> </a>
          </li>
          <li><a href="./doctor.html" class="active">Doctors</a></li>
        </ul>
      </div>
    </div>

    <!-- ------------------- -->

    <div class="doctor_about">
      <h2>Only Top Quality Services</h2>
      <div class="content">
        <p>
          As a hospital doctor, you'll apply your medical knowledge and skills to the diagnosis, prevention and management of disease.
          Work is predominantly found in the public sector (NHS) but you can also work in private hospitals. You'll spend time working on wards and in outpatient clinics.
          You can choose to work within a number of specialties.
        </p>
        <p>
          As well as treating patients, you'll refer them to a range of other healthcare professionals including nurses, radiographers, pharmacists and physiotherapists.
          Specific tasks depend on your specialty - for instance, the work surgeons carry out on a daily basis is completely different from the workload of an accident and emergency (A&E) doctor.
        </p>
      </div>
    </div>

    <!-- ------------------- -->

    <div class="specialization">
      <div class="container">
        <h2>Our Departments</h2>
        <section>
          <div class="items">
            <img src="./images/teeth.png" alt="" />
            <h4>Dentist</h4>
            <p>
              Dental Fillings, Scaling / Polishing, Dental Fillings, RCT - Root Canal Treatment and more.
            </p>
            <a href="./doctors.php?dentist#doc-display">Explore</a>
          </div>
          <div class="items">
            <img src="./images/bones.png" alt="" />
            <h4>Orthopedist</h4>
            <p>
              Joint Mobilization, Joint and Muscle Problems, Spine Mobilization, Joint Replacement Surgery and more.
            </p>
            <a href="./doctors.php?orthopedist#doc-display">Explore</a>
          </div>
          <div class="items">
            <img src="./images/glasses.png" alt="" />
            <h4>Ophthalmologist</h4>
            <p>
              Refractive Surgery, Eye Surgery, Eye Muscle Surgery, Retina Surgery and Lasik and more.
            </p>
            <a href="./doctors.php?ophthalmologist#doc-display">Explore</a>
          </div>

          <div class="items">
            <img src="./images/blood-donation-2.png" alt="" />
            <h4>Pediatrician</h4>
            <p>
              Skin Disease Treatment, Allergy Treatment, Diabetes Management, Cancer Treatment and more.
            </p>
            <a href="./doctors.php?pediatrician#doc-display">Explore</a>
          </div>
          <div class="items">
            <img src="./images/cardiogram.png" alt="" />
            <h4>Cardiologist</h4>
            <p>
              Cardiac Catheterisation, Chest Pain Treatment, Valvuloplasty, Echo, ECG and more.
            </p>
            <a href="./doctors.php?cardiologist#doc-display">Explore</a>
          </div>
          <div class="items">
            <img src="./images/scanner.png" alt="" />
            <h4>Neurologist</h4>
            <p>
              Paralysis, Spinal Disorders, Nerve and Muscle Disorders, Stroke Treatment and more.
            </p>
            <a href="./doctors.php?neurologist#doc-display">Explore</a>
          </div>

          <div class="items">
            <img src="./images/stomach.png" alt="" />
            <h4>Gastroenterologist</h4>
            <p>
              Skin Disease Treatment, Endocrine and metabolic diseases, Arthritis Management and more.
            </p>
            <a href="./doctors.php?gastroenterologist#doc-display">Explore</a>
          </div>
          <div class="items">
            <img src="./images/flask.png" alt="" />
            <h4>Psychiatrist</h4>
            <p>
              Family Counseling, Anger Management, Anxiety Disorders Treatment, DeAddiction Counselling and more.
            </p>
            <a href="./doctors.php?psychiatrist#doc-display">Explore</a>
          </div>
          <div class="items">
            <img src="./images/diet.png" alt="" />
            <h4>Dietitian</h4>
            <p>
              Diet Counselling, Coaching for Weight Loss, Thyroid Diet Counseling, High Cholesterol Diet Counselling and more.
            </p>
            <a href="./doctors.php?dietitian#doc-display">Explore</a>
          </div>
        </section>
      </div>
    </div>

    <!-- ------------------- -->

    <script>
      $(document).ready(function() {
        $url = window.location.href;
        $start = $url.indexOf("?") + 1;
        $end = $url.indexOf("#");
        console.log($start, $end);
        $type = $url.substring($start, $end);

        if ($start == 0) {
          $.ajax({
            url: "./php/docttop10.php",
            type: 'post',
            success: function(getdata) {
              $('#doc_details').html(getdata);
            }
          });
        } else {
          $.ajax({
            url: "./php/docType.php",
            type: 'post',
            data: {
              type: $type
            },
            success: function(getdata) {
              $('#doc_details').html(getdata);
            }
          });
        }
      });
    </script>

    <div class="doc-display" id="doc-display">
      <div class="doc-grid">
        <form action="" method="get">
          <input type="text" name="searching" id="searchBar" placeholder="Search A Doctor">
          <button id="search" type=button>Search</button>
          <span class="border"></span>
          <select name="areaDoct" id="areaDoct">
            <option value="">Select An Area</option>
            <option value="Andheri">Andheri</option>
            <option value="Mulund">Mulund</option>
            <option value="Powai">Powai</option>
            <option value="Ghatkopar">Ghatkopar</option>
            <option value="Chembur">Chembur</option>
            <option value="Malad">Malad</option>
            <option value="Peddar">Peddar</option>
          </select>
          <select name="departmentDoct" id="departmentDoct">
            <option value="">Select A Department</option>
            <option value="Cardiologist">Cardiologists</option>
            <option value="Dentist">Dentists</option>
            <option value="Dietitian">Dietitian</option>
            <option value="Gastroenterologist">Gastroenterologist</option>
            <option value="Neurologist">Neurologists</option>
            <option value="Ophthalmologist">Ophthalmologist</option>
            <option value="Orthopedist">Orthopedists</option>
            <option value="Pediatrician">Pediatrician</option>
            <option value="Psychiatrist">Psychiatrists</option>
          </select>
        </form>
      </div>

      <script>
        $(document).ready(function() {
          $("#search").click(function() {
            $('#doc_details').empty();
            $.ajax({
              url: "./php/doctsearch.php",
              type: 'post',
              data: {
                search: $("#searchBar").val()
              },
              success: function(getdata) {
                $('#doc_details').html(getdata);
              }
            });
          });

          $('select[name="areaDoct"]').change(function() {
            $('#doc_details').empty();
            $.ajax({
              url: "./php/doctFilter.php",
              type: 'post',
              data: {
                area: $('select[name="areaDoct"]').val(),
                dept: $('select[name="departmentDoct"]').val()
              },
              success: function(getdata) {
                $('#doc_details').html(getdata);
              }
            });
          });

          $('select[name="departmentDoct"]').change(function() {
            $('#doc_details').empty();
            $.ajax({
              url: "./php/doctFilter.php",
              type: 'post',
              data: {
                area: $('select[name="areaDoct"]').val(),
                dept: $('select[name="departmentDoct"]').val()
              },
              success: function(getdata) {
                $('#doc_details').html(getdata);
              }
            });
          });

        });
      </script>

      <div class="doc_details" id="doc_details">
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
<!-- <div class="doc_grid">
  <div class="photo">
    <img src="./images/docprofile.jfif" alt="" />
  </div>
  <div class="info">
    <h3>Dr. Arun P Mehra</h3>
    <p>MBBS, MD - General Medicine, DM - Cardiology</p>
    <p>Senior Consultant - Cardiology</p>
    <br />
    <p>Nanavati Hospital, Vile Parle, Mumbai</p>
    <span>Cardiologist</span>
    <br />
    <br />
    <span>48 Years of Practice </span>
  </div>
  <div class="details">
    <select name="hospitals" id="doc_hospital">
      <option value="222">
        Nanavati Hospital, Vile Parle, Mumbai
      </option>
      <option value="222">
        Nanavati Hospital, Vile Parle, Mumbai
      </option>
      <option value="222">
        Nanavati Hospital, Vile Parle, Mumbai
      </option>
    </select>
    <div class="price_avail">
      <strong>₹ 1200 Consult Fee</strong>
      <span>Available For Tele-Consult</span>
    </div>
    <button class="appointment">Book Appointment</button>
    <button class="teleConsult">Book Tele-Consult</button>
  </div>
</div> -->

</html>