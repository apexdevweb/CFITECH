import React from "react";
import { Link } from "react-router-dom";

function Navbar() {
    return (
<>
<nav>
    <ul>
        <li>
        <Link to="/">Acceuil</Link>
        </li>
        <li>
        <Link to="/service">Service</Link>
        </li>
        <li>
        <Link to="/about">About</Link>
        </li>
        <li>
        <Link to="/contact">Contact</Link>
        </li>
    </ul>
</nav>
</>
    )    
}

export default Navbar