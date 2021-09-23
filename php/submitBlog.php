<?php

$dbhost = "localhost";
$dbuser = "u772271968_vrushit";
$dbpass = "Vrushit123";
$db = "u772271968_medbay";

session_start();

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$Dept = $_POST["Dept"];
$Heading = $_POST["Heading"];
$Content = $_POST["Content"];
$Date = $_POST["Date"];

if (strlen($Dept) == 0 || strlen($Heading) == 0 || strlen($Content) == 0) {
?>
  <script>
    alert("Please Fill All The Input Fields!");
  </script>
<?php
  include './writeABlog.php';
} else if (strlen($Content) < 20) {
?>
  <script>
    alert("Too Less Content For Your Blog.");
  </script>
  <?php
  include './writeABlog.php';
} else {

  $sql = "INSERT INTO blogs (Name, Heading, Content, Date, Dept, ID) VALUES ('" . $_SESSION["docname"] . "','" . $Heading . "','" . $Content . "','" . $Date . "','" . $Dept . "'," . $_SESSION["id"] . ");";
  if ($conn->query($sql) === true) {
  ?>
    <script>
      alert("Your Blog Uploaded. Please Refresh To Check");
    </script>
  <?php
    include './writeABlog.php';
  } else {
  ?>
    <script>
      alert("Sorry! Your Blog Is Not Uploaded | There Might Be Some Network Error At Our End.<?php $conn->error ?>");
    </script>
  <?php
    include './writeABlog.php';
  }

  ?>
<?php
}
