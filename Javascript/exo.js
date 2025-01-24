let interval_script; //variable tampon pour placé le setInterval() dedans pour le
//réutilisé par la suite pour stopé le script

//le tout placé dans une fonction que l'ont peut activé avec un "onclick" coté HTML
function changeColor() {
  //selection individuel de mes balise div
  const fire1 = document.getElementById("F1");
  const fire2 = document.getElementById("F2");
  const fire3 = document.getElementById("F3");
  //je les place ensuite dans un tableau
  let myTab = [fire1, fire2, fire3];
  //j'initialise un index à partir de 0
  let index = 0;
  //j'initialise un setTnterval() qui vas executer le bloc de code qui vas changer les couleurs
  //selon le timer défini
  interval_script = setInterval(() => {
    myTab.forEach((tabEl) => {
      // je boucle en premier sur le tableau avec un foreach je fais un remove(pour enlever toutes les classe CSS)
      tabEl.classList.remove("fire1", "fire2", "fire3");
    });
    // je met une condition pour permettre au couleur de s'executer une par une en suivant l'index initialisé au préalable
    if (index === 0) {
      myTab[index].classList.add("fire1");
    } else if (index === 1) {
      myTab[index].classList.add("fire2");
    } else if (index === 2) {
      myTab[index].classList.add("fire3");
    }
    index = (index + 1) % myTab.length; //je finis par un index avec l'ajout de 1
    //pour permettre de passer a l'index suivant avec le "%" pour revenir au debut à la fin du tableau
  }, 900); //900 est le paramétrage du timer
}
function changeColorStop() {
  clearInterval(interval_script);
}
