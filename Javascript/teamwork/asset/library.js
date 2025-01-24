//↓↓↓/////////////////////↓↓↓jEREMY↓↓↓//////////////////////////////////////↓↓↓
// Sélectionne le bouton avec l'id "launchSystem"
const btn = document.getElementById("launchSystem");

// Sélectionne l'élément avec la classe "listbooks"
const liste = document.querySelector(".listbooks");

// Ajoute un gestionnaire d'événements au bouton. Lorsqu'il est cliqué, cela modifie le style de l'élément "liste"
btn.addEventListener("click", () => {
  liste.style.display = "flex"; // Rend l'élément visible avec une disposition flexbox
  liste.style.width = "50vw"; // Définit une largeur de 50% de la largeur de la fenêtre
  liste.style.height = "25vh"; // Définit une hauteur de 25% de la hauteur de la fenêtre
  liste.style.transition = "0.5s ease-in-out"; // Ajoute une transition animée pour ces changements de style
});

// Définition de l'objet "library" qui agit comme une bibliothèque virtuelle
const library = {
  books: [], // Initialise un tableau vide pour stocker les livres

  // Méthode pour ajouter un livre à la bibliothèque
  addBook(title, author, isbn) {
    this.books.push({ title, author, isbn }); // Ajoute un objet représentant le livre au tableau
  },

  // Méthode pour lister les livres de la bibliothèque
  listBooks() {
    return this.books.length === 0 // Vérifie si la bibliothèque est vide
      ? "No books in the library." // Si oui, retourne un message indiquant qu'il n'y a pas de livres
      : this.books
          .map((book) => `${book.title} by ${book.author} (ISBN: ${book.isbn})`) // Formate chaque livre
          .join(", "); // Combine les livres formatés en une seule chaîne
  },

  // Méthode pour emprunter un livre en fonction de son index
  borrowBook(index) {
    if (this.books[index]) {
      // Vérifie si un livre existe à cet index
      return this.books.splice(index, 1)[0]; // Supprime et retourne le livre
    }
    return null; // Retourne null si aucun livre n'est trouvé
  },

  // Méthode pour retourner un livre emprunté
  returnBook(title, author, isbn) {
    this.addBook(title, author, isbn); // Réutilise la méthode addBook pour ajouter le livre retourné
  },

  // Méthode pour lister les livres disponibles
  listAvailableBooks() {
    return this.books.length === 0 // Vérifie si des livres sont disponibles
      ? "No books available." // Si non, retourne un message approprié
      : this.listBooks(); // Sinon, retourne la liste des livres
  },
};

// Fonction principale qui lance le système de la bibliothèque
function launcher() {
  // Tableau d'options pour afficher le menu principal
  const options = [
    "Welcome to the Library!",
    "Choose an option:",
    "1. Add a new book",
    "2. List all books",
    "3. Borrow a book",
    "4. Return a book",
    "5. List available books",
    "6. Exit",
  ];
  //↓↓↓/////////////////////↓↓↓MOHAMED-ALI↓↓↓//////////////////////////////////////↓↓↓
  // Sélectionne le conteneur pour afficher les livres
  const ctnr = document.querySelector(".listbooks");

  while (true) {
    // Boucle infinie pour permettre plusieurs interactions utilisateur
    const userChoice = parseInt(prompt(options.join("\n")), 10); // Demande à l'utilisateur de choisir une option

    switch (userChoice) {
      case 1: // Ajout d'un nouveau livre
        const newBookTitle = prompt("Enter the book title:"); // Demande le titre du livre
        const newBookAuthor = prompt("Enter the book author:"); // Demande l'auteur du livre
        const newBookIsbn = prompt("Enter the book ISBN:"); // Demande l'ISBN du livre
        if (newBookTitle && newBookAuthor && newBookIsbn) {
          // Vérifie que toutes les informations sont fournies
          library.addBook(newBookTitle, newBookAuthor, newBookIsbn); // Ajoute le livre à la bibliothèque
          const viewChoice1 = document.createElement("p"); // Crée un nouvel élément <p> pour afficher le livre
          viewChoice1.className = "addBook"; // Attribue une classe au paragraphe
          viewChoice1.textContent = `${newBookTitle} by ${newBookAuthor} (ISBN: ${newBookIsbn})`; // Ajoute le contenu texte
          ctnr.appendChild(viewChoice1); // Ajoute cet élément au conteneur
        }
        break;

      case 2: // Liste tous les livres
        alert(library.listBooks()); // Affiche les livres dans une fenêtre d'alerte
        break;

      case 3: // Emprunt d'un livre
        const borrowIndex =
          parseInt(
            prompt("Enter the number of the book to borrow (1, 2, ...):"),
            10
          ) - 1; // Demande l'index du livre à emprunter
        const borrowedBook = library.borrowBook(borrowIndex); // Tente d'emprunter le livre
        alert(
          borrowedBook
            ? `You borrowed: ${borrowedBook.title} by ${borrowedBook.author} (ISBN: ${borrowedBook.isbn})` // Affiche le livre emprunté
            : "Book not found." // Message si l'index est invalide
        );
        break;

      case 4: // Retour d'un livre
        const returnBookTitle = prompt(
          "Enter the title of the book to return:"
        ); // Demande le titre du livre retourné
        const returnBookAuthor = prompt("Enter the author of the book:"); // Demande l'auteur
        const returnBookIsbn = prompt("Enter the ISBN of the book:"); // Demande l'ISBN
        if (returnBookTitle && returnBookAuthor && returnBookIsbn) {
          // Vérifie les informations fournies
          library.returnBook(returnBookTitle, returnBookAuthor, returnBookIsbn); // Retourne le livre
        }
        break;

      case 5: // Liste les livres disponibles
        alert(library.listAvailableBooks()); // Affiche les livres disponibles
        break;

      case 6: // Quitte le programme
        alert("Goodbye!");
        return; // Arrête la fonction et quitte la boucle

      default: // Option invalide
        alert("Invalid choice. Please try again."); // Message d'erreur
    }
  }
}
