<?php

$dbhost = "localhost";
$dbuser = "u772271968_vrushit";
$dbpass = "Vrushit123";
$db = "u772271968_medbay";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$id = $_POST["doctorID"];
$password = $_POST["password"];
$docname = "";

$sql = "SELECT * FROM `doctorslogin`";
$result = mysqli_query($conn, $sql);
$flag = 0;

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row["ID"] == $id && $row["Password"] == $password) {
      $flag = -1;
      $docname = $row["DocName"];
    }
  }
}

if ($flag == -1) {
  $cookie_exp_time = time() + 60 * 1; // 30 Days Expiry
  setcookie("Doctor", $id, $cookie_exp_time, "/");

  session_start();
  $_SESSION["id"] = $id;
  $_SESSION["docname"] = $docname;
  $_SESSION["time"] = $cookie_exp_time;
  include './writeABlog.php';
  //echo $_SESSION["docname"];
}

if ($flag == 0) {
?>
  <script>
    alert("Wrong Credentials Entered | Kindly Check Your ID and Password");
  </script>
<?php
  include './LoginForm.php';
}
?>