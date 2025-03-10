import Vid from "../assets/bgVid.mp4"
export default function Nav() {
    return (
        <>
     <header>
        <h1>Navigation React</h1>
        {/* <video className="MyVidBg" src={Vid} autoPlay loop muted></video> */}
        <nav>
            <ul>
                <li><a href="Home">Home</a></li>
                <li><a href="Service">Service</a></li>
                <li><a href="About">About</a></li>
                <li><a href="Contact">Contact</a></li>
            </ul>
        </nav>
     </header>
        </>
    )
}