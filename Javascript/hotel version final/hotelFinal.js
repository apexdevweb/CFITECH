// Définition de la classe Chambre
class Chambre {
  // Le constructeur initialise les propriétés de la chambre : numéro, type, prix et disponibilité
  constructor(numero, type, prix) {
    this.numero = numero; // Numéro unique de la chambre
    this.type = type; // Type de chambre (ex : simple, double, suite)
    this.prix = prix; // Prix de la chambre
    this.dispo = true; // Indique si la chambre est disponible (par défaut : true)
  }

  // Méthode pour créer des boutons d'interaction pour une chambre donnée
  creerBtn(container, hotelInstance) {
    // Fonction interne pour créer un bouton avec un texte et un gestionnaire d'événements
    const createButton = (text, onClick) => {
      const button = document.createElement("button"); // Création d'un élément bouton
      button.textContent = text; // Attribution du texte du bouton
      button.addEventListener("click", onClick); // Ajout d'un gestionnaire d'événements pour le clic
      return button; // Retourne l'élément bouton créé
    };

    // Ajoute un bouton "Supprimer" qui appelle la méthode supprimerChambre de l'hôtel
    container.appendChild(
      createButton(
        "Supprimer",
        () => hotelInstance.supprimerChambre(this.numero) // Supprime cette chambre en fonction de son numéro
      )
    );

    // Ajoute un bouton "Modifier" qui appelle la méthode modifierChambre de l'hôtel
    container.appendChild(
      createButton(
        "Modifier",
        () => hotelInstance.modifierChambre(this.numero) // Modifie cette chambre en fonction de son numéro
      )
    );

    // Ajoute un bouton qui dépend de la disponibilité de la chambre
    container.appendChild(
      this.dispo
        ? // Si la chambre est disponible, affiche un bouton "Réserver"
          createButton(
            "Réserver",
            () => hotelInstance.reserverChambre(this.numero) // Réserve cette chambre
          )
        : // Sinon, affiche un bouton "Disponibiliser"
          createButton(
            "Disponibiliser",
            () => hotelInstance.disponibiliserChambre(this.numero) // Rend cette chambre disponible
          )
    );
  }
}

// Déclaration de la classe Hotel
class Hotel {
  constructor() {
    // Initialisation d'une liste vide pour stocker les chambres de l'hôtel
    this.chambres = [];
  }

  // Méthode pour ajouter une nouvelle chambre
  ajouterChambre(numero, type, prix) {
    // Vérifie si une chambre avec le même numéro existe déjà
    if (this.chambres.some((chambre) => chambre.numero === numero)) {
      alert(`La chambre numéro ${numero} existe déjà.`); // Affiche une alerte si la chambre existe
    } else {
      // Crée une nouvelle instance de Chambre et l'ajoute à la liste
      const chambre = new Chambre(numero, type, prix);
      this.chambres.push(chambre);
      alert(`Chambre ${numero} ajoutée avec succès.`); // Confirme l'ajout de la chambre
      this.afficherChambre(); // Met à jour l'affichage des chambres
    }
  }

  // Méthode pour afficher toutes les chambres (ou un sous-ensemble)
  afficherChambre(tab = this.chambres) {
    // Sélectionne le conteneur HTML où afficher les chambres
    const container = document.querySelector(".Allchambre__container--set");
    container.innerHTML = ""; // Réinitialise le contenu du conteneur

    // Parcourt la liste des chambres et crée des éléments HTML pour chaque chambre
    tab.forEach((chambre) => {
      const div = document.createElement("div");
      div.textContent = `Room ${chambre.numero} - Type: ${chambre.type} - €${
        chambre.prix
      } / nuit - ${chambre.dispo ? "Disponible" : "Réservée"}`; // Ajoute les détails de la chambre
      chambre.creerBtn(div, this); // Ajoute des boutons pour interagir avec la chambre
      container.appendChild(div); // Ajoute l'élément au conteneur
    });
  }

  // Méthode pour chercher des chambres selon des critères
  chercherChambre() {
    // Récupère les valeurs des critères de recherche depuis le formulaire HTML
    const type = document.getElementById("typeSearchChambre").value;
    const maxPrice = parseFloat(document.getElementById("maxPrice").value);

    // Filtre les chambres selon le type et le prix maximum
    const filtered = this.chambres.filter(
      (chambre) => chambre.type === type && chambre.prix <= maxPrice
    );

    // Affiche les chambres filtrées
    this.afficherChambre(filtered);
  }

  // Méthode pour supprimer une chambre selon son numéro
  supprimerChambre(numero) {
    // Supprime la chambre correspondante de la liste
    this.chambres = this.chambres.filter(
      (chambre) => chambre.numero !== numero
    );
    this.afficherChambre(); // Met à jour l'affichage
  }

  // Méthode pour modifier le prix d'une chambre
  modifierChambre(numero) {
    // Demande un nouveau prix à l'utilisateur
    const nouveauPrix = parseFloat(prompt("Entrez le nouveau prix :"));

    // Recherche la chambre correspondante
    const chambre = this.chambres.find((ch) => ch.numero === numero);
    if (chambre) {
      chambre.prix = nouveauPrix; // Met à jour le prix de la chambre
      this.afficherChambre(); // Met à jour l'affichage
    }
  }

  // Méthode pour réserver une chambre
  reserverChambre(numero) {
    // Recherche la chambre correspondante
    const chambre = this.chambres.find((ch) => ch.numero === numero);
    if (chambre) {
      chambre.dispo = false; // Met la disponibilité à "réservée"
      this.afficherChambre(); // Met à jour l'affichage
    }
  }

  // Méthode pour rendre une chambre disponible
  disponibiliserChambre(numero) {
    // Recherche la chambre correspondante
    const chambre = this.chambres.find((ch) => ch.numero === numero);
    if (chambre) {
      chambre.dispo = true; // Met la disponibilité à "disponible"
      this.afficherChambre(); // Met à jour l'affichage
    }
  }
}

// Création d'une instance de l'hôtel
const hotel = new Hotel();

// Fonction pour ajouter une chambre via un formulaire HTML
function addRoom(event) {
  event.preventDefault(); // Empêche le rechargement de la page

  // Récupère les valeurs saisies par l'utilisateur
  const numero = parseInt(document.getElementById("numro").value);
  const type = document.getElementById("typeChambre").value;
  const prix = parseFloat(document.getElementById("prix").value);

  // Appelle la méthode pour ajouter la chambre
  hotel.ajouterChambre(numero, type, prix);
}
