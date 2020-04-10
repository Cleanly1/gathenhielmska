document.addEventListener("DOMContentLoaded", function (event) {
  const subList = document.querySelectorAll(".desktop-sub-nav-list");
  const pathName = window.location.pathname;

  const historyURL = "/om-gatenhielmska/historia/";
  const visitURL = "/om-gatenhielmska/besok-gatenhielmska/";
  const activityURL = "/om-gatenhielmska/verksamheten/";

  const history = subList[0];
  const activity = subList[1];
  const visit = subList[2];

  if (pathName === activityURL || pathName === "/om-gatenhielmska/") {
    activity.style.backgroundColor = "#FFFFFF";
  }
  if (pathName === visitURL) {
    visit.style.backgroundColor = "#FFFFFF";
  }
  if (pathName === historyURL) {
    history.style.backgroundColor = "#FFFFFF";
  }
});
