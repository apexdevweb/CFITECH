class Chambre {
  constructor(numero, type, prix) {
    this.numero = numero;
    this.type = type;
    this.prix = prix;
    this.dispo = true;
  }

  creerBtn(divChambre, objet) {
    let btnSupp = document.createElement("button");
    // btnSupp.setAttribute("class",);
    btnSupp.innerText = "Supprimer";
    btnSupp.addEventListener("click", () => {
      objet.supprimerChambre(this.numero);
    });
    divChambre.appendChild(btnSupp);

    let btnModif = document.createElement("button");
    // btnModif.setAttribute("class",);
    btnModif.innerText = "Modifier";
    btnModif.addEventListener("click", () => {
      objet.modifierChambre(this.numero);
    });
    divChambre.appendChild(btnModif);

    if (this.dispo) {
      let btnReserv = document.createElement("button");
      btnReserv.innerText = "Réserver";
      btnReserv.addEventListener("click", () => {
        objet.reserverChambre(this.numero);
      });
      divChambre.appendChild(btnReserv);
    } else {
      let btnDispo = document.createElement("button");
      btnDispo.innerText = "disponibler";
      btnDispo.addEventListener("click", () => {
        objet.disponibiliserChambre(this.numero);
      });
      divChambre.appendChild(btnDispo);
    }
  }
}

class Hotel {
  constructor() {
    this.chambres = [];
  }

  /*Faire appelle à la methode ajouterChamber sur le bouton enregistrer dans ADDROOM */
  ajouterChambre() {
    /* modifier les prompts avec les valeurs des inputs */
    // let numero = prompt("Entrez le numéro de la chambre :");
    // let type = prompt("Entrez le type de chambre (simple/double) :");
    // let prix = parseFloat(prompt("Entrez le prix par nuit :"));

    if (numero && type && prix) {
      let chambreExistante = false;
      for (let i = 0; i < this.chambres.length; i++) {
        if (this.chambres[i].numero === numero) {
          chambreExistante = true;
          break;
        }
      }

      if (chambreExistante) {
        alert(`chambre ${numero} ajoutée est déjà enregistrer`);
      } else {
        let chambre = new Chambre(numero, type, prix);
        this.chambres.push(chambre);
        alert(`Chambre ${numero} ajoutée avec succès.`);
      }
    } else {
      alert("Entrée invalide. Veuillez réessayer.");
    }
  }
  /*Faire appelle à la methode afficherChambre sur l'onglet List All Rooms */
  afficherChambre(tab = this.chambres) {
    let container = document.getElementsByClassName(
      "Allchambre__container--set"
    );
    for (let i = 0; i < tab.length; i++) {
      let chambre = tab[i];
      let statut = "";
      if (chambre.dispo) {
        statut = "Disponible";
      } else {
        statut = "Réservée";
      }
      let divChambre = document.createElement("div");
      divChambre.setAttribute("id", chambre["numero"]);
      divChambre.innerText = `Room ${chambre.numero} - Type: ${chambre.type} - €${chambre.prix}/nuits - ${statut}     `;
      chambre.creerBtn(divChambre, this);
      container.appendChild(divChambre);
    }
  }
  /*Faire appelle à la methode afficherChambreDispo sur l'onglet List Available Rooms */
  afficherChambreDispo(tab = this.chambres) {
    let chambresDispo = [];

    for (let i = 0; i < tab.length; i++) {
      let chambre = tab[i];
      if (chambre.dispo) {
        chambresDispo.push(chambre);
      }
    }
    this.afficherChambre(chambresDispo);
  }
  /*Faire appelle à la methode chercherChambre sur le bounton Search */
  chercherChambre() {
    let type = prompt("Introduisez le type de chambre ");
    let prixMax = parseFloat(prompt("Introduisez le prix "));
    let chambresChercher = [];

    for (let i = 0; i < this.chambres.length; i++) {
      let chambre = this.chambres[i];

      if (chambre.type == type && chambre.prix <= prixMax) {
        chambresChercher.push(chambre);
      }
    }
    if (chambresChercher.length != 0) {
      this.afficherChambreDispo(chambresChercher);
    } else {
      alert("Aucune chambres correspondante trouvée.");
    }
  }

  supprimerChambre(num) {
    let container = document.getElementsByClassName(
      "Allchambre__container--set"
    );
    container.innerText = "";
    for (let i = 0; i < this.chambres.length; i++) {
      let chambre = this.chambres[i];
      if (chambre.numero == num) {
        this.chambres.splice(i, 1);
      }
    }

    /* rajouter condition qui va vérifier si on est sur la page afficher allRooms
        qui va faire appelle à la méthode afficherChambre et si on est sur la page
        chambre Dispo va faire appelle à la méthode afficherChambreDispo*/
    this.afficherChambre();
  }

  modifierChambre(num) {
    /* a modifier remplacer le prompt avec la valeur de l'input récuperé */
    let nouveauPrix = parseFloat(prompt("Introduisez le nouveau prix. "));
    for (let i = 0; i < this.chambres.length; i++) {
      let chambre = this.chambres[i];
      if (chambre.numero == num) {
        chambre.prix = nouveauPrix;
        let divParent = document.getElementById(num);
        let btn = divParent.getElementsByTagName("button");
        if (chambre.dispo) {
          divParent.firstChild.textContent = `Room ${chambre.numero} - Type: ${chambre.type} - €${chambre.prix}/nuits - Disponible`;
          for (let i = 0; i < btn.length; i++) {
            divParent.appendChild(btn[i]);
          }
        } else {
          divParent.firstChild.textContent = `Room ${chambre.numero} - Type: ${chambre.type} - €${chambre.prix}/nuits - Réservée`;
          for (let i = 0; i < btn.length; i++) {
            divParent.appendChild(btn[i]);
          }
        }
      }
    }
  }

  reserverChambre(num) {
    for (let i = 0; i < this.chambres.length; i++) {
      let chambre = this.chambres[i];
      if (chambre.numero == num) {
        chambre.dispo = false;
      }
    }

    let container = document.getElementsByClassName(
      "Allchambre__container--set"
    );
    container.innerText = "";
    /* rajouter condition qui va vérifier si on est sur la page afficher allRooms
        qui va faire appelle à la méthode afficherChambre et si on est sur la page
        chambre Dispo va faire appelle à la méthode afficherChambreDispo*/
    this.afficherChambre();
  }

  disponibiliserChambre(num) {
    for (let i = 0; i < this.chambres.length; i++) {
      let chambre = this.chambres[i];
      if (chambre.numero == num) {
        chambre.dispo = true;
      }
    }

    let container = document.getElementsByClassName(
      "Allchambre__container--set"
    );
    container.innerText = "";
    /* rajouter condition qui va vérifier si on est sur la page afficher allRooms
        qui va faire appelle à la méthode afficherChambre et si on est sur la page
        chambre Dispo va faire appelle à la méthode afficherChambreDispo*/
    this.afficherChambre();
  }
}
const hotel = new Hotel();
