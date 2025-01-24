// Classe Client - représente un client de la banque
class Client {
  constructor(nom, prenom) {
    this.nom = nom; // Nom de famille du client
    this.prenom = prenom; // Prénom du client
  }

  // Méthode pour afficher le nom complet du client
  nomComplet() {
    return `${this.prenom} ${this.nom}`;
  }
}

// Classe CompteBancaire - représente un compte bancaire
class CompteBancaire {
  constructor(client, soldeInitial = 0) {
    this.client = client; // Référence à un objet Client
    this.solde = soldeInitial; // Solde initial du compte bancaire
  }

  // Méthode pour afficher le solde actuel
  afficherSolde() {
    alert(`Solde actuel de ${this.client.nomComplet()}: ${this.solde} euros`);
  }

  // Méthode pour effectuer un dépôt
  deposer(montant) {
    if (montant > 0) {
      this.solde += montant;
      alert(
        `${montant} euros déposés sur le compte de ${this.client.nomComplet()}. Nouveau solde: ${
          this.solde
        } euros`
      );
    } else {
      alert("Le montant à déposer doit être positif.");
    }
  }

  // Méthode pour effectuer un retrait
  retirer(montant) {
    if (montant > 0) {
      if (this.solde >= montant) {
        this.solde -= montant;
        alert(
          `${montant} euros retirés du compte de ${this.client.nomComplet()}. Nouveau solde: ${
            this.solde
          } euros`
        );
      } else {
        alert(
          `Solde insuffisant pour retirer ${montant} euros sur le compte de ${this.client.nomComplet()}. Solde actuel: ${
            this.solde
          } euros`
        );
      }
    } else {
      alert("Le montant à retirer doit être positif.");
    }
  }
}

// Création de clients
const client1 = new Client("Aimable", "Jean");
const client2 = new Client("Robert", "Pierre");
const client3 = new Client("Philip", "Charles");

// Création de comptes bancaires pour les clients avec des soldes initiaux
const compteJean = new CompteBancaire(client1, 5000);
const comptePierre = new CompteBancaire(client2, 7000);
const comptePhilipp = new CompteBancaire(client3, 10000);

// Afficher les soldes initiaux
compteJean.afficherSolde();
comptePierre.afficherSolde();
comptePhilipp.afficherSolde();

// Effectuer quelques transactions
compteJean.deposer(500); // Dépôt sur le compte de Jean
compteJean.retirer(1000); // Retrait du compte de Jean
comptePierre.retirer(2000); // Retrait du compte de Pierre
comptePierre.deposer(1000); // Dépôt sur le compte de Pierre

// Afficher les soldes finaux
compteJean.afficherSolde();
comptePierre.afficherSolde();
