<?php

namespace App\Http\Controllers;

use App\Services\instrumentoAvaliativoService;
use Illuminate\Http\Request;

class InstrumentoAvaliativoController extends Controller
{
    private $instrumentoAvaliativoService;
    public function __construct(instrumentoAvaliativoService $instrumentoAvaliativoService)
    {
        $this->instrumentoAvaliativoService = $instrumentoAvaliativoService;
    }
    // GET
    public function getInstrumentoAvaliativo()
    {   
        $instrumento = $this->instrumentoAvaliativoService->getInstrumentoAvaliativo();
        return response()->json($instrumento);
    }

    // GET - BY NAME
    public function getInstrumentoAvaliativoByName($name)
    {
        return $this->instrumentoAvaliativoService->getInstrumentoAvaliativoByName($name);
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

        $instrumento = $this->instrumentoAvaliativoService->createInstrumentoAvaliativo($validatedData);

        return $instrumento;
    }
    // UPDATE
    public function updateInstrumentoAvaliativo(Request $request, $id)
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

        $instrumento = $this->instrumentoAvaliativoService->updateInstrumentoAvaliativo($validatedData, $id);

        return $instrumento;
    }
    // DELETE
    public function deleteInstrumentoAvaliativo($id)
    {
        return $this->instrumentoAvaliativoService->deleteInstrumentoAvaliativo($id);
    } 
}
