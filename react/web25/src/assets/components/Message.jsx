export default function Message(props) {
  return (
    <blockquote className="info">
    <p>Nationalité: {props.nationalite}</p>
    <p>Nom: {props.nom}</p>
    <p>Bonjour:{props.age}</p>
    </blockquote>
  )
}

