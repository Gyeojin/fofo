function stickyNav() {
  const nav = document.querySelector(".nav");
  const topBtn = document.querySelector(".scrolltop");
  const topArrow = document.querySelector(".arrow");
  const scrollTop = window.pageYOffset;
  const homeTop = nav.offsetTop;

  if (scrollTop > 0) {
    nav.classList.add("sticky");
    topBtn.style.display = "block";
  } else if (window.scrollY == 0) {
    nav.classList.remove("sticky");
    topBtn.style.display = "none";
  }

  topArrow.onclick = function () {
    window.scroll({ top: homeTop, behavior: "smooth" });
  };
}
window.addEventListener("scroll", stickyNav);
