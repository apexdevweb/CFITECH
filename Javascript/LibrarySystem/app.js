function launcher() {
  const btn = document.getElementById("launchSystem");
  let myTab = [
    "Welcom to the Library!",
    "Choose an option",
    "1.Add a new book",
    "2.List all books",
    "3.Borrow a book",
    "4.Return a book",
    "5.List available books",
    "6.Exit",
    "Enter your choice",
  ];
  let userChoice = prompt(myTab);
  const ctnr = document.querySelector(".library__container"); //Selectionne la section
  if (userChoice == 1) {
    console.log("Nouveau livre ajouter");
    let userChoice1 = prompt("entrer le titre du livre"); //Valeur entrer par l'utilisateur
    let viewChoice1 = document.createElement("p"); // Création d'une balise <p>
    viewChoice1.setAttribute("class", "addBook"); // Attribution d'une class pour la balise <p>
    ctnr.appendChild(viewChoice1); //Ajout de la balise <p> a la section
    viewChoice1.innerHTML = userChoice1 += ""; //Exprime la valeur dans le contenu HTML
  } else if (userChoice == 2) {
    console.log("Liste tout les livres");
  } else if (userChoice == 3) {
    console.log("Emprunter un livre");
  } else if (userChoice == 4) {
    console.log("Retourner un livre");
  } else if (userChoice == 5) {
    console.log("Livres disponible");
  } else if (userChoice == 6) {
    console.log("quitter");
  }
}
