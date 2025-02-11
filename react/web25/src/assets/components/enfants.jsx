import React, { useState } from "react"

function Enfant({valeurInitiale}) {
    const [compteur, setCompteur] = useState(valeurInitiale);
    return(
    <>
 <p>compteur : {compteur}</p>
 <button onClick={()=>setCompteur(compteur + 1)}> +1</button>
    </>
     )
}
export default Enfant