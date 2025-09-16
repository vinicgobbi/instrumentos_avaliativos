<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrumentoAvaliativoController extends Controller
{
    // READ
    public function getInstrumentoAvaliativo()
    {
        return "getInstrumentoAvaliativo";
    }
    // READ - BY NAME
    public function getInstrumentoAvaliativoByName()
    {
        return "getInstrumentoAvaliativoByName";
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
        
        return "createInstrumentoAvaliativos";
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
