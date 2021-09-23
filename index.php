<?php

$dbhost = "localhost";
$dbuser = "u772271968_vrushit";
$dbpass = "Vrushit123";
$db = "ajax";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Document</title>
</head>

<body>
  <header>
    <div class="top-head">
      <div class="logo">
        <img src="./images/Logo.png" alt="" />
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
        <li><a href="#">Home <span></span></a></li>
        <li><a href="./covid.html">Covid <span></span></a></li>
        <li><a href="./doctors.php">Doctors <span></span></a></li>
        <li><a href="./hospital.php">Hospital <span></span></a></li>
        <li><a href="">Blogs <span></span></a></li>
        <li><a href="">Discussion <span></span></a></li>
        <li><a href="">Contacts <span></span></a></li>
        <li>Img</li>
      </ul>
    </nav>
  </header>

  <!-- ------------------- -->

  <main>
    <!-- ------------------- -->

    <div class="homePage">
      <video preload="auto" loop muted autoplay>
        <source src="./images/Video/Fish tank.mp4" type="video/mp4" />
      </video>

      <div class="content">
        <h1><span> Lorem ipsum dolor sit </span> amet consectetur.</h1>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit
          accusantium, facilis voluptatum libero mollitia doloribus quia,
          exercitationem.
        </p>
        <div class="select-btn">
          <select name="" id="">
            <option value="">Select Area</option>
            <option value="">Malad</option>
            <option value="">Andheri</option>
            <option value="">Powai</option>
            <option value="">Bandra</option>
            <option value="">Vileparle</option>
          </select>
          <a href="./hospital.php#doc-display">Search Hospitals</a>
        </div>
      </div>
    </div>

    <!-- ------------------- -->

    <div class="openingGrid">
      <div class="container">
        <div class="grid-one">
          <h2>24<small>hrs</small> Blood Donations</h2>
          <ul class="">
            <li title="Navjivan Blood Bank">Bandra West <span><a href="https://www.google.com/maps/place/Navjivan+Blood+Bank+And+Lab/@19.1618779,72.7084,11z/data=!4m8!1m2!2m1!1snavjivan+blood+bank!3m4!1s0x3be7b0d7c2227985:0x8959dd4f92769eaa!8m2!3d19.2302091!4d72.852598" target="_blank">Direction</a></span></li>


            <li title="Sant Nirankari Satsang Bhawan">Vile Parle East <span><a href="https://www.google.com/maps/place/Sant+Nirankari+Satsang+Bhawan+Vile+Parle/@19.1041907,72.8525589,16.75z/data=!4m5!3m4!1s0x3be7c84af2a53d15:0x365a3c7c3b7dcdc8!8m2!3d19.1043576!4d72.8536453" target="_blank">Direction</a></span></li>


            <li title="Anviksha blood bank">Ghatkopar East<span><a href="https://www.google.com/maps/place/Anviksha+blood+bank/@19.0827261,72.9025995,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c7d1b4500001:0x93cc4c0aa6bec69b!8m2!3d19.0827261!4d72.9047882" target="_blank">Direction</a></span></li>


            <li title="Prabodhan Blood Bank">Goregaon West <span><a href="https://www.google.com/maps?q=prabodhan+blood+bank&rlz=1C1CHBF_enIN788IN788&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiQl4KFuMPsAhWjguYKHSlsB2wQ_AUoAXoECAUQAw" target="_blank">Direction</a></span></li>


            <li title="Bloodline">Thane West <span><a href="https://www.google.com/maps/place/Bloodline/@19.2008086,72.9732155,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7b93c84487735:0x587d5bbcf7f7c8a1!8m2!3d19.2008086!4d72.9754042" target="_blank">Direction</a></span></li>


          </ul>
        </div>

        <div class="grid-two">
          <h2>Emergency Numbers</h2>
          <div class="cb-one" id="cb-one">
            <div class="call-btn">
              <a class="emergency-no" href="tel:022-22027990"><img src="./images/Call.png" /> 022-22027990</a>
            </div>
            <div class="call-btn">
              <a class="emergency-no" href="tel:020-26127394"><img src="./images/Call.png" /> 020-26127394</a>
            </div>
            <p>
              Above are the MAHARASHTRA COVID HELPLINE Phone Numbers.
            </p>
          </div>

          <script src="./js/grid.js"></script>

          <div class="cb-two" id="cb-two">
            <p>For MUMBAI : </p>
            <div class="call-btn">
              <a class="emergency-no" href="tel:022-22664232"><img src="./images/Call.png" /> 022-22664232</a>
            </div>
            <p>For MUMBAI SUBURB : </p>
            <div class="call-btn">
              <a class="emergency-no" href="tel:022-26556799"><img src="./images/Call.png" /> 022-26556799</a>
            </div>

            <a href="https://mahainfocorona.in/index.php/mr/help" target="_blank">More Region</a>

          </div>

        </div>

        <div class="grid-three">
          <h2>Make an Appointment</h2>
          <form class="appointment-form">
            <select class="select">
              <option value="value1">Select Department</option>
              <option value="value2">Select Department 1</option>
              <option value="value3">Select Department 2</option>
            </select>
            <select class="select">
              <option>Select Area</option>
              <option>Select Area 1</option>
              <option>Select Area 2</option>
            </select>
            <select class="select">
              <option>Select Minimum Practice</option>
              <option>15 Years</option>
              <option>10 Years</option>
            </select>
            <select class="select">
              <option>Select Type</option>
              <option>Book an Appointment</option>
              <option>Book Tele Consult</option>
            </select>
            <input class="book-btn" type="submit" value="Boom Appoitnment" />
          </form>
        </div>
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
            <a href="">Explore</a>
          </div>
          <div class="items">
            <img src="./images/glasses.png" alt="" />
            <h4>Ophthalmologist</h4>
            <p>
              Refractive Surgery, Eye Surgery, Eye Muscle Surgery, Retina Surgery and Lasik and more.
            </p>
            <a href="">Explore</a>
          </div>

          <div class="items">
            <img src="./images/blood-donation-2.png" alt="" />
            <h4>Pediatrician</h4>
            <p>
              Skin Disease Treatment, Allergy Treatment, Diabetes Management, Cancer Treatment and more.
            </p>
            <a href="">Explore</a>
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
            <a href="">Explore</a>
          </div>

          <div class="items">
            <img src="./images/stomach.png" alt="" />
            <h4>Gastroenterologist</h4>
            <p>
              Skin Disease Treatment, Endocrine and metabolic diseases, Arthritis Management and more.
            </p>
            <a href="">Explore</a>
          </div>
          <div class="items">
            <img src="./images/flask.png" alt="" />
            <h4>Psychiatrist</h4>
            <p>
              Family Counseling, Anger Management, Anxiety Disorders Treatment, DeAddiction Counselling and more.
            </p>
            <a href="">Explore</a>
          </div>
          <div class="items">
            <img src="./images/diet.png" alt="" />
            <h4>Dietitian</h4>
            <p>
              Diet Counselling, Coaching for Weight Loss, Thyroid Diet Counseling, High Cholesterol Diet Counselling and more.
            </p>
            <a href="">Explore</a>
          </div>
        </section>
      </div>
    </div>

    <!-- ------------------- -->

    <div class="aboutus">
      <div class="photo">
        <img src="./images/about.jfif" alt="" />
      </div>
      <div class="content">
        <span>About Dr.Care</span>
        <h2>
          Medical specialty concerned with the care of acutely ill
          hospitalized patients
        </h2>
        <br />
        <p class="para">
          On her way she met a copy. The copy warned the Little Blind Text,
          that where it came from it would have been rewritten a thousand
          times and everything that was left from its origin would be the
          word. The copy warned the Little Blind Text, that where it came from
          it would have been rewritten a thousand times and everything that
          was left from its origin would be the word.
        </p>
        <br />
        <div class="aboutGrid">
          <div class="service">
            <div class="servicePhoto">
              <img src="./images/first-aid-kit.png" alt="" />
            </div>
            <div class="serviceContent">
              <h3>Primary Care</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi
                odio distinctio dolor.
              </p>
            </div>
          </div>

          <div class="service">
            <div class="servicePhoto">
              <img src="./images/first-aid-kit.png" alt="" />
            </div>
            <div class="serviceContent">
              <h3>Primary Care</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi
                odio distinctio dolor.
              </p>
            </div>
          </div>

          <div class="service">
            <div class="servicePhoto">
              <img src="./images/first-aid-kit.png" alt="" />
            </div>
            <div class="serviceContent">
              <h3>Primary Care</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi
                odio distinctio dolor.
              </p>
            </div>
          </div>

          <div class="service">
            <div class="servicePhoto">
              <img src="./images/first-aid-kit.png" alt="" />
            </div>
            <div class="serviceContent">
              <h3>Primary Care</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi
                odio distinctio dolor.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ------------------- -->

    <!-- <div class="covidSection">
        <section>
          <div class="gridCovid">
            <div class="text">
              <strong>90</strong>
              <span>Number Of Staff</span>
            </div>
          </div>
          <div class="gridCovid">
            <div class="text">
              <strong>90</strong>
              <span>Number Of Staff</span>
            </div>
          </div>
          <div class="gridCovid">
            <div class="text">
              <strong>90</strong>
              <span>Number Of Staff</span>
            </div>
          </div>
          <div class="gridCovid">
            <div class="text">
              <strong>90</strong>
              <span>Number Of Staff</span>
            </div>
          </div>
        </section>
      </div> -->

    <!-- ------------------- -->



    <div class="doctor_blog">
      <div class="slides-container-blog" id="slides-container-blog">

        <script>
          $(document).ready(function() {
            $.ajax({
              url: "./php/displayBlogs.php",
              type: 'post',
              success: function(getdata) {
                $('#slides-container-blog').html(getdata);
              }
            });
          });
        </script>
        <!-- <div class="blogs fading">
            <div class="header">
              <img src="./images/cardiogram.png" alt="" />
              <h3>Cardiology3</h3>
            </div>
            <div class="text">
              <p>
                Also made from. Give may saying meat there from heaven it lights
                face had is gathered god dea earth light for life may itself
                shall whales made they're blessed whales also made from give may
                saying meat. There from heaven it lights face had amazing place
              </p>
              <strong>Mosan Cameron,</strong>
              <span>Executive of fedex</span>
            </div>
          </div> -->
      </div>

      <div class="btn">
        <a href="">Read More</a>
      </div>
    </div>
    <script src="./js/blogs.js"></script>

    <!-- ------------------- -->

    <div class="provide">
      <div class="header">
        <span>DEPARTMENTS</span>
        <h2>What We Provide</h2>
        <p>
          Separated they live in. A small river named Duden flows by their
          place and supplies it with the necessary regelialia. It is a
          paradisematic country
        </p>
      </div>
      <script src="./js/provide.js"></script>
      <div class="menu">
        <div class="points">
          <li>
            <a href="" class="provide-list active-provide" id="provide-list1" onclick="changeActive('provide-list1', 'content-provide1');return false;">Covid</a>
          </li>

          <li>
            <a href="" class="provide-list" id="provide-list2" onclick="changeActive('provide-list2', 'content-provide2');return false;">Doctors</a>
          </li>

          <li>
            <a href="" class="provide-list" id="provide-list3" onclick="changeActive('provide-list3', 'content-provide3');return false;">Hospital</a>
          </li>

          <li>
            <a href="" class="provide-list" id="provide-list4" onclick="changeActive('provide-list4', 'content-provide4');return false;">Blogs</a>
          </li>

          <li>
            <a href="" class="provide-list" id="provide-list5" onclick="changeActive('provide-list5', 'content-provide5');return false;">Updates</a>
          </li>
        </div>
      </div>

      <div class="explain-provide">
        <div class="content-provide" id="content-provide1">
          <div class="text">
            <a href="./covid.html">
              <h2>Covid-19 Details</h2>
            </a>
            <p class="para">
              Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. <br>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment. Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette.
            </p>

            <div class="aboutGrid">

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P1-I1.png" alt="" />
                </div>
                <div class="serviceContent">
                  <h3>Symptoms</h3>
                  <p>
                    Most common symptoms: Fever, Dry Cough, Tiredness, Aches and Pains.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P1-I2.png" alt="" />
                </div>
                <div class="serviceContent">
                  <h3>Prevention</h3>
                  <p>
                    Wash your hands regularly with soap and water. Maintain Social Distancing
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="photo">
            <img src="./images/Provide-covid.png" alt="" />
          </div>
        </div>

        <div class="content-provide hideClass" id="content-provide2">
          <div class="text">
            <a href="./doctors.php">
              <h2>Best Doctors</h2>
            </a>
            <p class="para">
              When you or your family are facing a health problem you need clear, definitive answers and you need to know that the advice you are getting is the best available. <br><br>We provide access to the best medical minds in the world so you can be sure you have te right diagnosis and treatment plan. We also help you find specialists and get expert answers to medical questions.<br>It’s a value health benefit for our members obtaining an expert physician’s medical report and benefiting from the collaboration between the expert and the treating physician. The selected specialist will provideyou with a clear and comprehensive expert report that reviews and confirms both your diagnosis and your treatment plan.
            </p>

            <div class="aboutGrid">

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P2-I1.png" alt="" />
                </div>
                <div class="serviceContent">
                  <h3>Our Doctors</h3>
                  <p>
                    A high quality, impartial and personalised expert information resource.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P2-I2.png" alt="" />
                </div>
                <div class="serviceContent">
                  <h3>Our Services</h3>
                  <p>
                    Demonstrates innovation and customer care. Very high consumer satisfaction.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="photo">
            <img src="./images/Provide-doctor.png" alt="" />
          </div>
        </div>

        <div class="content-provide hideClass" id="content-provide3">
          <div class="text">
            <a href="./hospital.html">
              <h2>Best Hospitals</h2>
            </a>
            <p class="para">
              Our Hospitals provides a wide range of Facilities 24*7; Mediclaim and cashless facilities available. Patients and families know quality care when they experience it. A nurse's response time, a doctor's bedside manner, the hospital's atmosphere—all of these things affect how people feel about the quality of their healthcare. The standard & quality is maintained by regular use of controls with qualified & experienced staff.
            </p>

            <div class="aboutGrid">

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P3-I1.png" alt="" />
                </div>
                <div class="serviceContent">
                  <h3>Safety</h3>
                  <p>
                    Avoiding injuries to patients from the care that is intended to help them.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P3-I2.png" alt="" />
                </div>
                <div class="serviceContent">
                  <h3>Effective</h3>
                  <p>
                    Providing services based on scientific knowledge and best practice.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P3-I3.png" alt="" />
                </div>
                <div class="serviceContent">
                  <h3>Timely</h3>
                  <p>
                    Reducing waits & some- times harmful delays for the patients.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P3-I4.png" alt="" />
                </div>
                <div class="serviceContent">
                  <h3>Efficient</h3>
                  <p>
                    Avoiding waste, including waste of equipment, supplies, ideas and energy.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="photo">
            <img src="./images/Provide-hospital.png" alt="" />
          </div>
        </div>

        <div class="content-provide hideClass" id="content-provide4">
          <div class="text">
            <a href="./hospital.html">
              <h2>Our Blogs</h2>
            </a>
            <p class="para">
              We encourage our doctors to post blogs to help people. <br><br>To Doctors, medical blogging enhances your business.Blogging shows that you care about being a medical writer and that you have something interesting to offer. <br>It establishes you as a credible expert, and it showcases your writing skills to the rest of the community. Great bloggers encourage their audience to choose their services over someone else’s by posting excellent content and building trust with their readers.
              As a medical writer, you would know that medicine is an exciting industry for writers to be a part of: it’s ever-changing and controversial. <br><br>There’s massive potential for debate, discussion and education. <br><br>Health impacts everyone, and there’s always something to say about it. <br><br>If you’re blogging to grow your business, try to write about an area of medicine with good potential for dialogue that also relates to the services you offer.
            </p>

          </div>
          <div class="photo">
            <img src="./images/Provide-blog.png" alt="" />
          </div>
        </div>

        <div class="content-provide hideClass" id="content-provide5">
          <div class="text">
            <h2>Latest Updates</h2>
            <div class="aboutGrid">
              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P3-I1.png" alt="" />
                </div>
                <div class="serviceContent">
                  <p>
                    New Study Found 80% of COVID-19 Patients Were Vitamin D Deficient in their blood.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P5-I2.png" alt="" />
                </div>
                <div class="serviceContent">
                  <p>
                    The United States currently has the highest number of confirmed COVID-19 cases and related deaths.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P3-I2.png" alt="" />
                </div>
                <div class="serviceContent">
                  <p>
                    Candida auris, a fungus that can cause severe infections when it enters the bloodstream.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P5-I4.png" alt="" />
                </div>
                <div class="serviceContent">
                  <p>
                    Experts are worried about an exponential rise in COVID-19 cases in the United States.
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P5-I5.png" alt="" />
                </div>
                <div class="serviceContent">
                  <p>
                    More than 226,000 people in the United States have died from the disease (Covid-19).
                  </p>
                </div>
              </div>

              <div class="service">
                <div class="servicePhoto">
                  <img src="./images/P3-I2.png" alt="" />
                </div>
                <div class="serviceContent">
                  <p>
                    Clostridioides difficile, a bacteria that can cause severe diarrhea, fever, & nausea.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="photo">
            <img src="./images/Provide-news.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- ------------------- -->

    <div class="pat-reviews">
      <div class="container">
        <span>READ TESTIMONIALS</span>
        <h2>Our Patient Says</h2>
        <div class="grid-review">
          <section>
            <p>
              Far far away, behind the word mountains, far from the countries
              Vokalia
            </p>
            <div class="name">
              <h4>Jeff Freshamn</h4>
              <h6>Patients</h6>
            </div>
          </section>

          <section>
            <p>
              Far far away, behind the word mountains, far from the countries
              Vokalia
            </p>
            <div class="name">
              <h4>Jeff Freshamn</h4>
              <h6>Patients</h6>
            </div>
          </section>

          <section>
            <p>
              Far far away, behind the word mountains, far from the countries
              Vokalia
            </p>
            <div class="name">
              <h4>Jeff Freshamn</h4>
              <h6>Patients</h6>
            </div>
          </section>

        </div>
      </div>
    </div>

    <!-- ------------------- -->

    <div class="doctors">
      <h2>Our Qualified Doctors</h2>
      <div class="container">
        <div class="docts">
          <div class="photo"></div>
          <div class="text">
            <h3>Dr. Lloyd Wilson</h3>
            <span>NEUROLOGIST</span>
            <p>
              I am an ambitious workaholic, but apart from that, pretty simple
              person.
            </p>
            <a href="" class="btn">Read / Google</a>
          </div>
        </div>

        <div class="docts">
          <div class="photo"></div>
          <div class="text">
            <h3>Dr. Lloyd Wilson</h3>
            <span>NEUROLOGIST</span>
            <p>
              I am an ambitious workaholic, but apart from that, pretty simple
              person.
            </p>
            <a href="" class="btn">Read / Google</a>
          </div>
        </div>

        <div class="docts">
          <div class="photo"></div>
          <div class="text">
            <h3>Dr. Lloyd Wilson</h3>
            <span>NEUROLOGIST</span>
            <p>
              I am an ambitious workaholic, but apart from that, pretty simple
              person.
            </p>
            <a href="" class="btn">Read / Google</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ------------------- -->


  </main>
</body>

</html>