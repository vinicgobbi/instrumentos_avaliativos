<?php

namespace App\Http\Controllers;

use App\Models\INSTRUMENTO_AVALIATIVO;
use Illuminate\Http\Request;

class InstrumentoAvaliativoController extends Controller
{
    // GET
    public function getInstrumentoAvaliativo()
    {
        return INSTRUMENTO_AVALIATIVO::get();
    }

    // GET - BY NAME
    public function getInstrumentoAvaliativoByName($name)
    {
        return INSTRUMENTO_AVALIATIVO::where('titulo', $name)->first();
    }

    // CREATE
    public function createInstrumentoAvaliativo(Request $request)
    {
        // DATA VALIDATION
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',

        ], [
            'titulo.required' => 'O título do Instrumento Avaliativo deve ser fornecido',
            'titulo.string' => 'O título do Instrumento Avaliativo deve ser em formato de texto',
            'descricao.required' => 'A descrição do Instrumento Avaliativo deve ser fornecida',
            'descricao.string' => 'A descrição do Instrumento Avaliativo deve ser em formato de texto',
        ]);
    }
    // UPDATE
    public function updateInstrumentoAvaliativo()
    {
        return "updateInstrumentoAvaliativo";
    }
    // DELETE
    public function deleteInstrumentoAvaliativo()
    {
        return "deleteInstrumentoAvaliativo";
    } 
}
