// Slider menu animation - mobile
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

// Drop down menu animation - mobile

const links = document.querySelectorAll("#menu-links-mobile");
const lists = document.querySelectorAll("#menu-list-mobile");
const dropdown = document.querySelector(".menu-dropdown");

links[0].href = "#";
links[5].href = "#";

links[0].addEventListener("click", () => {
  dropdown.classList.toggle("dropdown-down-children");
  lists[1].classList.toggle("dropdown-down-parents");
  lists[2].classList.toggle("dropdown-down-parents");
  lists[3].classList.toggle("dropdown-down-parents");
  lists[4].classList.toggle("dropdown-down-parents");
  lists[5].classList.toggle("dropdown-down-parents");
});
