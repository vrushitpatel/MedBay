<?php

$dbhost = "localhost";
$dbuser = "u772271968_vrushit";
$dbpass = "Vrushit123";
$db = "u772271968_medbay";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$search = isset($_POST['search']) ? $_POST['search'] : '';

$sql = "SELECT * FROM doctors WHERE Name LIKE '%" . $search . "%' GROUP BY Name";
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
        <p><?php echo $row['Deg']  ?></p>
        <p><?php echo $row['Speaciality']  ?></p>
        <br />
        <span><?php echo $row['Tag']  ?></span>
        <br />
        <br />
        <p>
          <?php
          if ($row['Contact'] == 0) {
            echo "Contact Number Not Available";
          } else {
          ?>
            <a href="tel:+<?php echo $row['Contact'] ?>">
              Call Doctor
            </a>
          <?php
          }
          ?>
        </p>
        <span><?php echo $row['Exp']  ?> Years of Practice </span>
      </div>
      <div class="details">
        <select name="hospitals" id="doc_hospital">
          <?php
          $places = explode(";", $row['Places']);
          foreach ($places as $x => $x_value) {
          ?>
            <option>
              <?php echo $x_value  ?>
            </option>

          <?php
          }
          ?>
        </select>
        <div class="price_avail">
          <strong>₹ <?php echo $row['Fees']  ?> Consult Fee</strong>
          <?php
          if ($row['tele'] == 1) {
          ?>
            <span>Available For Tele-Consult</span>
          <?php
          } else {
          ?>
            <span class="notAvail">Not Available For Tele-Consult</span>
          <?php
          }
          ?>
        </div>
        <button class="appointment">Book Appointment</button>
      </div>
    </div>

<?php
  }
}
?>