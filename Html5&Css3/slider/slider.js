document.addEventListener("DOMContentLoaded", () => {
  const btns = document.querySelectorAll(".btn");
  const slideRow = document.getElementById("slide-row");
  const main = document.querySelector("main");

  let currentIndex = 0;

  function updateSlide() {
    //j'ajoute un switch pour basculer sur les différent index
    slideRow.forEach((slideContent, index) => {
      mySlideCnt = slideContent[index];
      switch (currentIndex) {
        case 0:
          console.log(currentIndex);
          mySlideCnt.classList.add("translation");
          break;
        case 1:
          console.log(currentIndex);
          mySlideCnt.classList.add("translation");
          break;
        case 2:
          console.log(currentIndex);
          mySlideCnt.classList.add("translation");
          break;
        case 3:
          console.log(currentIndex);
          mySlideCnt.classList.add("translation");
          break;

        default:
          break;
      }
    });
  }

  btns.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      currentIndex = index;
      updateSlide();
    });
  });

  window.addEventListener("resize", () => {
    updateSlide();
  });
});
