document.addEventListener("DOMContentLoaded", function () {
  const targetNode = document.querySelector(
    ".navbar.navbar-expand-lg.navbar-dark.px-5.py-3.py-lg-0"
  );
  const titleImg = document.getElementById("title-img");

  const observer = new MutationObserver((mutationsList, observer) => {
    for (let mutation of mutationsList) {
      if (mutation.type === "attributes" && mutation.attributeName === "class") {
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
    // Si no se cumple la condición del if anterior, se ejecuta este código:
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
