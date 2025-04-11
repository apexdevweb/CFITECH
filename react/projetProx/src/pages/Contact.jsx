import React from "react";

function Contact() {
  return (
    <>
      <h1>Contactez-nous</h1>
      <form method="post">
        <div className="inpt__container">
         <span class="inpt__logo">#</span> <input type="text" placeholder="Nom" />
         <input type="text" placeholder="Prenom" />
         <input type="email" placeholder="E-m@il" />
        </div>
        <textarea name="message" placeholder="Votre message"></textarea>
        <input type="submit" value="Envoyer" />
      </form>
    </>
  );
}

export default Contact;
