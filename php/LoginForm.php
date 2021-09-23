<script>
  $(document).ready(function() {
    $("#logIn").click(function() {
      $.ajax({
        url: "./php/logInDoctor.php",
        type: 'post',
        data: $('#formLogin').serialize(),
        success: function(getdata) {
          $('#loginblogs').html(getdata);
        }
      });
    });
  });
</script>

<div class="photo">
  <img src="./images/blogs_login.png" alt="">
</div>
<div class="login">
  <form action="blogs.php" method="post" id="formLogin">
    <h2>Log In For Doctors</h2>
    <input type="text" name="doctorID" id="doctorID" placeholder="Enter Docter ID" style="margin-bottom: 0;">
    <span style="display: block; margin: 0 auto; width: 80%; margin-bottom: 20px; color: #909090;">Try: 1020</span>
    <input type="password" name="password" id="password" placeholder="Enter Password" style="margin-bottom: 0;">
    <span style="display: block; margin: 0 auto; width: 80%; margin-bottom: 20px; color: #909090;">Try: 1020DR</span>
    <input type="button" value="Log In" name="logIn" id="logIn">
  </form>
</div>