//Toggle class active
const navbarNav = document.querySelector(".navbar-nav");
//Ketika side menu navbar diklik maka
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

//Menghilangkan sidebar menu ketika klik bagian luar sidebar
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
