// import { useState } from 'react'
import './App.css'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import Navbar from './navbar/Navbar.jsx'
import Home from './pages/home.jsx'
// import Service from './pages/Service.jsx'
import Contact from './pages/contact.jsx'

function App() {
  // const [count, setCount] = useState(0)
  return (
    <>
    <BrowserRouter>
    <Navbar/>
    <Routes>
     <Route path='/' element={<Home/>}/>
     <Route path='/' element={<Contact/>}/>
    </Routes>
    </BrowserRouter>
    </>
  )
}

export default App
