document.addEventListener("DOMContentLoaded", function (event) {
  const subList = document.querySelectorAll(".gallery-sub-nav-list");
  const pathName = window.location.pathname;

  const houseURL = "/galleri/gallery-house/";
  const gardenURL = "/galleri/gallery-garden/";
  const performanceURL = "/galleri/gallery-performance/";

  const house = subList[0];
  const gearden = subList[1];
  const performance = subList[2];

  if (pathName === houseURL || pathName === "/galleri/") {
    house.style.backgroundColor = "#FFFFFF";
  }
  if (pathName === gardenURL) {
    gearden.style.backgroundColor = "#FFFFFF";
  }
  if (pathName === performanceURL) {
    performance.style.backgroundColor = "#FFFFFF";
  }
});
