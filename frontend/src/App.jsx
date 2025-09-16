import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import InstrumentosPage from './pages/InstrumentosPage';

export default function App() {
    return (
        <Router>
            <Routes>
                <Route path="/instrumentos" element={<InstrumentosPage />} />
            </Routes>
        </Router>
    );
}
