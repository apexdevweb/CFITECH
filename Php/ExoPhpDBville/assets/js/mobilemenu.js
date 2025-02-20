const ctnr = document.querySelector("nav");
const barretsCtnr = document.createElement("div");
barretsCtnr.setAttribute("class", "barrets__container");
ctnr.appendChild(barretsCtnr);
const list = document.querySelector(".nav__list");
for (let i = 0; i < 3; i++) {
  const barrets = document.createElement("div");
  barrets.setAttribute("class", "barre");
  barretsCtnr.appendChild(barrets);
  barretsCtnr.addEventListener("click", () => {
    list.classList.toggle("listview");
    const allBarr = document.querySelectorAll(".barre");
    if (list.classList.contains("listview")) {
      allBarr.forEach((barre) => barre.classList.add("open__barre"));
    } else {
      allBarr.forEach((barre) => barre.classList.remove("open__barre"));
    }
  });
}
