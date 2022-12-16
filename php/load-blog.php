<?php

$dbhost = "sql307.epizy.com";
$dbuser = "epiz_33155386";
$dbpass = "5s0kLWyCNp3";
$db = "epiz_33155386_Medbay";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$blogs_new_count = $_POST['blog_new_count'];

$sql = "SELECT * FROM `blogs` ORDER BY `blogs`.`ID` DESC LIMIT $blogs_new_count";
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
  echo "There Are No More Blogs To Be Displayed ...";
}
