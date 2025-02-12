import { useState } from 'react';
import './App.css';
function App() {
 const [count, setCount] = useState(0);
 return (
 <div className="container">
 <h1>Bienvenue sur mon premier projet React !</h1>
 <p>Ceci est une application React simple.</p>
 <h2>Compteur : {count}</h2>
 <button onClick={() => setCount(count + 1)}>➕ Augmenter</button>
 <button onClick={() => setCount(count - 1)}>➖ Diminuer</button>
 </div>
 );
}
export default App;