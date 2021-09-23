function validate() {
  var name = document.getElementById("name").value;
  var phoneNumber = document.getElementById("phoneNumber").value;
  var city = document.getElementById("city").value;

  if (name == "") {
    window.alert("Please Enter Your Name");
    return false;
  }

  if (name.length <= 5 || name >= 35) {
    window.alert("Please Enter Full Name");
    return false;
  }

  if (phoneNumber[0] != "7" && phoneNumber[0] != "8" && phoneNumber[0] != "9") {
    alert("Please Enter A Valid Indian Phone Number");
    return false;
  }

  if (city == "") {
    window.alert("Please Select A Valid City");
    return false;
  }
}