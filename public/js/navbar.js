window.addEventListener("scroll", function () {
  var navbar = document.getElementById("navbar");
  var logo = document.getElementById("logo");
  var logoScrolled = document.getElementById("logoScrolled");

  if (window.scrollY > 0) {
    navbar.classList.add("scrolled");
    logo.hidden = true;
    logoScrolled.hidden = false;
  } else {
    navbar.classList.remove("scrolled");
    logo.hidden = false;
    logoScrolled.hidden = true;
  }
});
