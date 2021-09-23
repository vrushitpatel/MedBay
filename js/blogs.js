var no_slide = 0;
blogs_display();

function blogs_display() {
  var blogs = document.getElementsByClassName("blogs");
  for (let i = 0; i < blogs.length; i++) {
    blogs[i].style.display = "none";
  }
  no_slide++;
  if (no_slide > blogs.length) {
    no_slide = 1;
  }
  blogs[no_slide - 1].style.display = "block";
  setTimeout(blogs_display, 10000); // Change image every 10 seconds
}

