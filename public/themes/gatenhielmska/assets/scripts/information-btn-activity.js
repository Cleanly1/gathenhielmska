document.addEventListener("DOMContentLoaded", function (event) {
  const btns = document.querySelectorAll(".activity-btn");
  const texts = document.querySelectorAll(".activity-txt");
  const sponsorSection = document.querySelector(".activity-sponsor-container");
  const arrow = document.querySelectorAll(".btn-arrow");

  const btn1 = btns[0];
  const btn2 = btns[1];
  const arrow1 = arrow[0];
  const arrow2 = arrow[1];
  const text1 = texts[0];
  const text2 = texts[1];
  const text1Height = text1.offsetHeight;
  const text2Height = text2.offsetHeight;

  btn1.addEventListener("click", () => {
    text1.classList.toggle("toggle-text");
    arrow1.classList.toggle("btn-arrow-open");
    if (btn2.style.marginTop === `${text1Height}px`) {
      btn2.style.marginTop = "0px";
    } else {
      btn2.style.marginTop = `${text1Height}px`;
    }
  });

  btn2.addEventListener("click", () => {
    text2.classList.toggle("toggle-text");
    arrow2.classList.toggle("btn-arrow-open");
    if (sponsorSection.style.marginTop === `${text2Height}px`) {
      sponsorSection.style.marginTop = "0px";
    } else {
      sponsorSection.style.marginTop = `${text2Height}px`;
    }
  });
});
