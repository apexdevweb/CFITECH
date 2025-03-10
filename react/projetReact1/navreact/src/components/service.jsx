import Nav from "./nav.jsx";
export default function Servicepage() {
  return (
    <>
      <section>
        <Nav></Nav>
        <h2 className="subtitle">Service</h2>
        <form method="GET">
          <input type="number" />
         <button>Deposer</button>
         <button>Retirer</button>
        </form>
      </section>
    </>
  );
}

