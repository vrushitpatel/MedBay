<?php

$dbhost = "sql307.epizy.com";
$dbuser = "epiz_33155386";
$dbpass = "5s0kLWyCNp3";
$db = "epiz_33155386_Medbay";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$search = isset($_POST['search']) ? $_POST['search'] : '';

$sql = "SELECT * FROM hospitals WHERE Name LIKE '%" . $search . "%' GROUP BY Name";
// echo $sql;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>

    <div class="doc_grid">
      <div class="photo">
        <img src="<?php echo $row['Image']  ?>" alt="" />
      </div>
      <div class="info">
        <h3><?php echo $row['Name']  ?></h3>
        <p id="speacial"><?php echo $row['Speaciality']  ?></p>
        <br />
        <p><?php echo $row['Address']  ?></p>
        <br />
        <br />
        <a href="tel:+<?php echo $row['Contanct']  ?>" class="appointment">Contact</a>
      </div>
      <div class="details">
        <strong>Timings</strong>
        <p>Mon-Sun</p>
        <p class="timings"><?php echo $row['Timing']  ?></p>
        <br>
        <p>Number of Beds - <?php echo $row['Beds']  ?></p>
        <p>Number of Ambulances - <?php echo $row['Ambulances']  ?></p>
        <br>
      </div>
    </div>


<?php
  }
}
?>