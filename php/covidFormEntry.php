<?php

$dbhost = "sql307.epizy.com";
$dbuser = "epiz_33155386";
$dbpass = "5s0kLWyCNp3";
$db = "epiz_33155386_Medbay";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if (isset($_POST["submit"])) {
  $name = trim($_POST["name"]);
  $phoneNumber = trim($_POST["phoneNumber"]);
  $email = trim($_POST["email"]);
  $city = trim($_POST["city"]);
  $remark = trim($_POST["remark"]);

  echo $phoneNumber;

  if (strlen($phoneNumber) != 10) {
    echo "<script type = 'text/javascript'>
      alert('Phone Number Entered Is Invalid');
      window.history.go(-1);
      </script>";
  } else {

    $sql = "INSERT INTO covidform (Name, Email, Phone, City, Remark)
  VALUES ('" . $name . "', '" . $email . "', " . $phoneNumber . ", '" . $city . "', '" . $remark . "');";
?>
    <script>
      console.log("IN");
    </script>

<?php
    $result = mysqli_query($conn, $sql);
    echo "<script type = 'text/javascript'>
      alert('Your Request Was Accepted Successfully');
      window.history.go(-1);
      </script>";
  }
}
?>