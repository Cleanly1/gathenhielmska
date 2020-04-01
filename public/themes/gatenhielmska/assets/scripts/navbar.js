const menuButton = document.querySelector(".burger-menu");
const slider = document.querySelector(".slider-menu");
let menuOpen = false;

menuButton.addEventListener("click", () => {
  if (!menuOpen) {
    menuButton.classList.add("open");
    slider.classList.add("menu-slider-open");
    menuOpen = true;
  } else {
    menuButton.classList.remove("open");
    slider.classList.remove("menu-slider-open");
    menuOpen = false;
  }
});
