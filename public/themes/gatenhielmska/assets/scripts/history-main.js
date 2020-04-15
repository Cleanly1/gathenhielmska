document.addEventListener("DOMContentLoaded", function (event) {
  const dot = document.querySelector(".history-dot");
  const timelineDOM = document.querySelector(".history-line");
  const timelineLength = timelineDOM.offsetHeight + 4;

  // Controller
  const controller = new ScrollMagic.Controller();

  let offsetStart;

  if (window.innerWidth > 1025) {
    offsetStart = "1000px";
  } else {
    offsetStart = "440px";
  }

  // Timeline Mobile
  const yearsMobile = gsap
    .timeline()
    .fromTo(
      document.querySelector("#history-animation-one"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-two"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-three"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-four"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-five"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-six"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-seven"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-eight"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-nine"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    );
  yearsMobile.pause();

  // Timeline Mobile
  const yearsDesktop = gsap
    .timeline()
    .fromTo(
      document.querySelector("#history-animation-one"),
      { opacity: 0 },
      { delay: 0.9, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-two"),
      { opacity: 0 },
      { delay: 0.8, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-three"),
      { opacity: 0 },
      { delay: 0.8, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-four"),
      { opacity: 0 },
      { delay: 0.9, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-five"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-six"),
      { opacity: 0 },
      { delay: 1, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-seven"),
      { opacity: 0 },
      { delay: 1.5, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-eight"),
      { opacity: 0 },
      { delay: 2, duration: 0.3, opacity: 1 }
    )
    .fromTo(
      document.querySelector("#history-animation-nine"),
      { opacity: 0 },
      { delay: 3, duration: 0.3, opacity: 1 }
    );
  yearsDesktop.pause();

  const dotScene = gsap
    .timeline()
    .fromTo(dot, { top: 20 }, { duration: 18, top: timelineLength });
  dotScene.pause();

  const scene = new ScrollMagic.Scene({
    triggerElement: ".animation-container",
    triggerHook: "onLeave",
    offset: `${offsetStart}`,
  })
    .on("enter", (e) => {
      if (window.innerWidth > 1025) {
        dotScene.play();
        yearsDesktop.play();
      } else {
        yearsMobile.play();
      }
    })
    .addTo(controller);
});
