var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    document.getElementById('manu').style.display = "block";
    document.querySelector('.hamburger__btn').classList.add('active');
    document.querySelector('.nav_bar_container .icons').classList.remove('icons_active');
    document.querySelector('.nav_bar_container .logo').classList.remove('logo_active');
  } else {
    document.getElementById("navbar").style.top = "-90px";
    document.getElementById('manu').style.display = "none";
    document.querySelector('.hamburger__btn').classList.add('active');
    document.querySelector('.nav_bar_container .icons').classList.add('icons_active');
    document.querySelector('.nav_bar_container .logo').classList.add('logo_active');
  }
  prevScrollpos = currentScrollPos;
}