import Nav from "./nav.jsx";
export default function Servicepage() {
  return (
    <>
      <section>
        <Nav></Nav>
        <h2 className="subtitle">Service</h2>
          <input type="number" />
         <button>Deposer</button>
         <button>Retirer</button>
      </section>
    </>
  );
}

import React, { useState, useEffect } from "react";

function BankAccount() {
  const [balance, setBalance] = useState(1000); // Solde initial de 1000€
  const [amount, setAmount] = useState(0); // Montant saisi par l'utilisateur

  function deposit() {
    setBalance((prev) => prev + Number(amount)); // Déposer le montant saisi
  } 

  function withdraw() {
    setBalance((prev) => (prev >= amount ? prev - Number(amount) : prev)); // Retirer le montant saisi, sans aller sous 0€
  }

  useEffect(() => {
    console.log(Nouveau solde : ${balance}€);
  }, [balance]); // S'exécute à chaque changement du solde

  return (
    <div style={{ textAlign: "center", padding: "20px", fontSize: "20px" }}>
      <h2>Solde : {balance}€</h2>
      <input
        type="number"
        value={amount}
        onChange={(e) => setAmount(e.target.value)}
        placeholder="Entrez un montant"
        style={{ marginBottom: "10px", padding: "5px" }}
      />
      <br />
      <button onClick={deposit} style={{ marginRight: "10px" }}>
        Déposer
      </button>
      <button onClick={withdraw} disabled={balance < amount}>
        Retirer
      </button>
    </div>
  );
}

export default BankAccount;