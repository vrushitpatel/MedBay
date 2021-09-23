function covidForm() {
  body = document.getElementById("covid");
  header = document.getElementsByTagName("header");
  form = document.getElementById("covidForm");

  body.style.pointerEvents = "none";
  body.style.position = "fixed";
  header[0].style.pointerEvents = "none";
  form.style.display = "block";
}

function closeCovidForm() {
  body = document.getElementById("covid");
  header = document.getElementsByTagName("header");
  form = document.getElementById("covidForm");

  body.style.pointerEvents = "";
  body.style.position = "";
  header[0].style.pointerEvents = "";
  form.style.display = "none";
}
