// import { useState } from 'react'
import './App.css'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import Navbar from './navbar/Navbar.jsx'
import Home from './pages/Home.jsx'
import Service from './pages/Service.jsx'
import About from './pages/About.jsx'
import Contact from './pages/Contact.jsx'

function App() {
  // const [count, setCount] = useState(0)
  return (
    <>
    <BrowserRouter>
    <Navbar/>
    <Routes>
     <Route path='/' element={<Home/>}/>
     <Route path='service' element={<Service/>}/>
     <Route path='about' element={<About/>}/>
     <Route path='contact' element={<Contact/>}/>
    </Routes>
    </BrowserRouter>
    </>
  )
}

export default App
