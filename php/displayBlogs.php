<?php
$dbhost = "sql307.epizy.com";
$dbuser = "epiz_33155386";
$dbpass = "5s0kLWyCNp3";
$db = "epiz_33155386_Medbay";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$sql = "SELECT * FROM `blogs` ORDER BY `ID` DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>

    <div class="blogs fading">
      <div class="header">
        <img src="./images/cardiogram.png" alt="" />
        <h3><?php echo $row['Dept']  ?></h3>
      </div>
      <div class="text">
        <p>
          <?php echo $row['Content']  ?>
        </p>
        <strong>Mosan Cameron,</strong>
        <span>Executive of fedex</span>
      </div>
    </div>

<?php
  }
}
?>