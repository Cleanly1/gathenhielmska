const backToTop = document.querySelector(".footer_back_to_top");

backToTop.addEventListener("click", function() {
  scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth"
  });
});
