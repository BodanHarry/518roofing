if (window.innerWidth > 895) {
  document.addEventListener("DOMContentLoaded", function () {
    const targetNode = document.querySelector(
      ".navbar.navbar-expand-lg.navbar-dark.px-5.py-3.py-lg-0"
    );
    const titleImg = document.getElementById("title-img");

    const observer = new MutationObserver((mutationsList, observer) => {
      for (let mutation of mutationsList) {
        if (
          mutation.type === "attributes" &&
          mutation.attributeName === "class"
        ) {
          if (
            targetNode.classList.contains("sticky-top") ||
            targetNode.classList.contains("shadow-sm")
          ) {
            titleImg.src = "img/svg/roofingBlue.svg";
          } else {
            titleImg.src = "img/svg/roofing.svg";
          }
          return;
        }
      }
      titleImg.src = "img/svg/roofing.svg";
    });

    const observerOptions = {
      attributes: true,
      attributeFilter: ["class"],
      childList: false,
      subtree: false,
    };

    observer.observe(targetNode, observerOptions);
  });
} else {
  const titleImg = document.getElementById("title-img");
  titleImg.src = "img/svg/roofingBlue.svg";
}
