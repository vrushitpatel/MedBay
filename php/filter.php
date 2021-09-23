<?php

$dbhost = "localhost";
$dbuser = "u772271968_vrushit";
$dbpass = "Vrushit123";
$db = "u772271968_medbay";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$area = isset($_POST['area']) ? $_POST['area'] : '';
// echo $area;

$dept = isset($_POST['dept']) ? $_POST['dept'] : '';
// echo $dept;

$sql = "SELECT * FROM hospitals WHERE Address LIKE '%" . $area . "%' AND Dept LIKE '%" . $dept . "%' GROUP BY Name";
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
        <p><?php echo $row['Dept']  ?></p>
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