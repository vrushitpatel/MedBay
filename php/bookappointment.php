<script>
  document.getElementById('BookID').reset();
</script>

<?php

$dbhost = "localhost";
$dbuser = "u772271968_vrushit";
$dbpass = "Vrushit123";
$db = "u772271968_medbay";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if (isset($_POST["submit"])) {
  $f_name = $_POST["f_name"];
  $l_name = $_POST["l_name"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
  $DocName = $_POST["DocName"];
  $Speaciality = $_POST["Speaciality"];
  $Location = $_POST["Location"];
  $video = 0;
  $physical = 0;

  if (!empty($_POST['check_list'])) {
    foreach ($_POST['check_list'] as $selected) {
      if ($selected == "video") {
        $video = 1;
      }
      if ($selected == "physical") {
        $physical = 1;
      }
    }
  }

  $sql = "INSERT INTO BookAppointment (FirstName, LastName, Email, Gender, DocName, Speaciality, Location, video, physical) VALUES ('" . $f_name . "', '" . $l_name . "', '" . $email . "', '" . $gender . "', '" . $DocName . "', '" . $Speaciality . "', '" . $Location . "', " . $video . ", " . $physical . ");";

  $result = mysqli_query($conn, $sql);
  echo "<script type = 'text/javascript'>
        alert('Your Booking Is Done Successfully. We Will Contact You Soon.');
        window.history.go(-1);
        document.getElementById('BookID').reset();
        </script>";
}

?>