import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.jsx'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import Homepage from './components/home.jsx'
import Servicepage from './components/service.jsx'
import Contactpage from './components/contact.jsx'
import Aboutpage from './components/about.jsx'


createRoot(document.getElementById('root')).render(
  <StrictMode>
  <BrowserRouter>
    <Routes>
      <Route path="/Home" element={<Homepage />} />
      <Route path="/About" element={<Aboutpage />} />
      <Route path="/Service" element={<Servicepage />} />
      <Route path="/Contact" element={<Contactpage />} />
    </Routes>
  </BrowserRouter>
  </StrictMode>,
)
