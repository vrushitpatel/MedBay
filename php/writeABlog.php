<script>
  $(document).ready(function() {
    $("#submit").click(function() {
      $.ajax({
        url: "./php/submitBlog.php",
        type: 'post',
        data: $('#BlogForm').serialize(),
        success: function(getdata) {
          $('#loginblogs').html(getdata);
        }
      });
    });

    // $("#logout12").click(function() {
    //   console.log("Why");
    //   $.ajax({
    //     url: "./php/logout.php",
    //     type: 'post',
    //     success: function(getdata) {
    //       $('#loginblogs').html(getdata);
    //     }
    //   });
    // });
  });
</script>

<?php

if (isset($_SESSION["id"])) {
  // Do Nothing
} else {
  session_start();
}

?>

<?php
$mydate = getdate(date("U"));
$date = getdate()["mday"];
$month = substr(getdate()["month"], 0, 3);
// session_destroy();

?>

<div class="photo">
  <h2>Hello <span> <?php echo $_SESSION["docname"];  ?></span></h2>
</div>
<div class="login">
  <form action="blogs.php" method="post" id="BlogForm">
    <h2>Write Your Blog</h2>
    <input type="text" name="DocName" id="DocName" value="<?php echo $_SESSION["docname"];  ?>" readonly>
    <input type="text" name="DocID" id="DocID" value="<?php echo $_SESSION["id"];  ?>" readonly>
    <input type="text" name="Date" id="Date" value="<?php echo $date . " " . $month ?>" readonly>
    <input type="text" name="Dept" id="Dept" placeholder="Regarding Department">
    <input type="text" name="Heading" id="Heading" placeholder="Enter Your Title">
    <textarea name="Content" id="Content" placeholder="Enter Your Content" cols="30" rows="10"></textarea>
    <input type="button" value="Upload Blog" name="submit" id="submit">
    <!-- <input type="button" value="Logout" name="logout" id="logout12"> -->
  </form>
</div>