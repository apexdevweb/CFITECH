// Récupérer les éléments du formulaire  nécessaires
const form = document.getElementById("presenceForm");
const input = document.getElementById("stagiaireName");
const tableBody = document
  .getElementById("stagiaireTable")
  .querySelector("tbody");
const emptyMessage = document.getElementById("emptyMessage");

// Compteur pour numéroter les stagiaires
let stagiaireCount = 0;

// Gérer la soumission du formulaire
form.addEventListener("submit", () => {
  event.preventDefault(); // Empêcher le rechargement de la page avec le prevent

  // Récupérer le nom du stagiaire en utilisant la fonction "trim()" pour supprimer les espaces
  const stagiaireName = input.value.trim();

  // Vérifie si le champ est vide
  if (stagiaireName === "") {
    alert("Veuillez entrer le nom du stagiaire.");
    return;
  }

  // Ajouter le stagiaire dans le tableau
  stagiaireCount++;
  const row = document.createElement("tr");
  row.innerHTML = `
    <td>${stagiaireCount}</td>
    <td>${stagiaireName}</td>
    <td><button class="remove-btn">Supprimer</button></td>
    <td><label for="presence" style="font-size:1rem;">case cocher(présent)</label><input type="checkbox" name="presence"/></td>
`;

  // Ajouter la ligne au tableau
  tableBody.appendChild(row);

  // Réinitialiser le champ de saisie
  input.value = "";

  // Masquer le message "Aucun stagiaire"
  emptyMessage.style.display = "none";

  // Ajouter l'événement pour supprimer la ligne
  const removeBtn = row.querySelector(".remove-btn");
  removeBtn.addEventListener("click", () => {
    row.remove();
    stagiaireCount--;
    updateRowNumbers();
    if (stagiaireCount === 0) {
      emptyMessage.style.display = "block";
    }
  });
});
