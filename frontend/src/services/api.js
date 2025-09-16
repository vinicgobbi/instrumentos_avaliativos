import axios from 'axios';

export const api = axios.create({
    baseURL: 'http://localhost:8000/api',
});

// import { api } from './services/api';

// api.get('/instrumentos')
//    .then(res => console.log(res.data))
//    .catch(err => console.error(err));