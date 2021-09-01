function stickyNav() {
  const nav = document.querySelector(".nav");
  const topBtn = document.querySelector(".scrolltop");
  const topArrow = document.querySelector(".arrow");
  const footerArrow = document.querySelector(".scrolltop_footer");
  const scrollTop = window.pageYOffset;
  //console.log(scrollTop);
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

  if (scrollTop > 3084) {
    topBtn.style.display = "none";
    footerArrow.style.display = "block";
  } else {
    topBtn.style.display = "block";
    footerArrow.style.display = "none";
  }
}
window.addEventListener("scroll", stickyNav);

$(function () {
  $(".sort-tit img").click(function () {
    $(".sort-tit img").toggleClass("on");
    if ($(this).hasClass("on")) {
      $(this).css({ transform: "rotate(" + 180 + "deg)" });
      $(".pro-sort-sub").css("display", "block");
    } else {
      $(this).css({ transform: "rotate(" + 0 + "deg)" });
      $(".pro-sort-sub").css("display", "none");
    }
  });
});
