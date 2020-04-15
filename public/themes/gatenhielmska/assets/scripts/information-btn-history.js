document.addEventListener("DOMContentLoaded", function (event) {
  const btns = document.querySelectorAll(".history-btn");
  const texts = document.querySelectorAll(".history-txt");
  const arrow = document.querySelectorAll(".btn-arrow");
  const timelineTop = document.querySelector(".history-timeline-top");

  const btn1 = btns[0];
  const btn2 = btns[1];
  const btn3 = btns[2];
  const arrow1 = arrow[0];
  const arrow2 = arrow[1];
  const arrow3 = arrow[2];
  const text1 = texts[0];
  const text2 = texts[1];
  const text3 = texts[2];
  const text1Height = text1.offsetHeight;
  const text2Height = text2.offsetHeight;
  const text3Height = text3.offsetHeight;

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
    if (btn3.style.marginTop === `${text2Height}px`) {
      btn3.style.marginTop = "0px";
    } else {
      btn3.style.marginTop = `${text2Height}px`;
    }
  });

  btn3.addEventListener("click", () => {
    text3.classList.toggle("toggle-text");
    arrow3.classList.toggle("btn-arrow-open");
    if (timelineTop.style.marginTop === `${text3Height}px`) {
      timelineTop.style.marginTop = "0px";
    } else {
      timelineTop.style.marginTop = `${text3Height}px`;
    }
  });
});
