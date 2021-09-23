function summary_open(para_id) {
  var para = document.getElementById(para_id);

  para.className = para.className == "hidden" ? "" : "hidden";
}

function faq_open(faq_id, v_height) {
  var para = document.getElementById(faq_id);

  if (para.className == "hidden-2") {
    para.className = "";
    para.style.height = 0;
  } else {
    para.className = "hidden-2";
    para.style.height = v_height;
  }

  console.log(para);
}
