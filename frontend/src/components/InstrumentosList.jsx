import React, { useEffect, useState } from 'react';
import { api } from '../services/api';

export default function InstrumentosList() {
    const [instrumentos, setInstrumentos] = useState([]);

    useEffect(() => {
        api.get('/coordinator/instrumentos-avaliativos/get')
           .then(res => setInstrumentos(res.data))
           .catch(err => console.error(err));
    }, []);

    return (
        <ul>
            {instrumentos.map(i => (
                <li key={i.id}>{i.titulo}</li>
            ))}
        </ul>
    );
}