<?php

namespace App\Http\Controllers;

use App\Services\InstrumentoAvaliativoService;
use Illuminate\Http\Request;

class InstrumentoAvaliativoController extends Controller
{
    private $instrumentoAvaliativoService;
    public function __construct(InstrumentoAvaliativoService $instrumentoAvaliativoService)
    {
        $this->instrumentoAvaliativoService = $instrumentoAvaliativoService;
    }
    // GET
    public function getInstrumentoAvaliativo()
    {   
        $instrumento = $this->instrumentoAvaliativoService->getInstrumentoAvaliativo();
        return $instrumento;
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
            'disciplina' => 'required|string|max:11',
            'turma' => 'required|string|max:20'
        ], [
            // título
            'titulo.required' => 'O título do Instrumento Avaliativo deve ser fornecido',
            'titulo.string'   => 'O título do Instrumento Avaliativo deve estar em formato de texto',
            'titulo.max'      => 'O título do Instrumento Avaliativo não pode ter mais de 255 caracteres',

            // descrição
            'descricao.required' => 'A descrição do Instrumento Avaliativo deve ser fornecida',
            'descricao.string'   => 'A descrição do Instrumento Avaliativo deve estar em formato de texto',
            'descricao.max'      => 'A descrição do Instrumento Avaliativo não pode ter mais de 255 caracteres',

            // disciplina
            'disciplina.required' => 'A disciplina do Instrumento Avaliativo deve ser fornecida',
            'disciplina.string'   => 'A disciplina do Instrumento Avaliativo deve estar em formato de texto',
            'disciplina.max'      => 'A disciplina do Instrumento Avaliativo não pode ter mais de 11 caracteres',

            // turma
            'turma.required' => 'A turma do Instrumento Avaliativo deve ser fornecida',
            'turma.string'   => 'A turma do Instrumento Avaliativo deve estar em formato de texto',
            'turma.max'      => 'A turma do Instrumento Avaliativo não pode ter mais de 20 caracteres',
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
            'disciplina' => 'required|string|max:11',
            'turma' => 'required|string|max:20'
        ], [
            // título
            'titulo.required' => 'O título do Instrumento Avaliativo deve ser fornecido',
            'titulo.string'   => 'O título do Instrumento Avaliativo deve estar em formato de texto',
            'titulo.max'      => 'O título do Instrumento Avaliativo não pode ter mais de 255 caracteres',

            // descrição
            'descricao.required' => 'A descrição do Instrumento Avaliativo deve ser fornecida',
            'descricao.string'   => 'A descrição do Instrumento Avaliativo deve estar em formato de texto',
            'descricao.max'      => 'A descrição do Instrumento Avaliativo não pode ter mais de 255 caracteres',

            // disciplina
            'disciplina.required' => 'A disciplina do Instrumento Avaliativo deve ser fornecida',
            'disciplina.string'   => 'A disciplina do Instrumento Avaliativo deve estar em formato de texto',
            'disciplina.max'      => 'A disciplina do Instrumento Avaliativo não pode ter mais de 11 caracteres',

            // turma
            'turma.required' => 'A turma do Instrumento Avaliativo deve ser fornecida',
            'turma.string'   => 'A turma do Instrumento Avaliativo deve estar em formato de texto',
            'turma.max'      => 'A turma do Instrumento Avaliativo não pode ter mais de 20 caracteres',
        ]);

        $instrumento = $this->instrumentoAvaliativoService->updateInstrumentoAvaliativo($validatedData, $id);

        if (!$instrumento) {
            return response()->json(["message" => "Instrumento avaliativo não encontrado"], 404);
        }else {
            return $instrumento;
        }

        
    }
    // DELETE
    public function deleteInstrumentoAvaliativo($id)
    {
        $delete = $this->instrumentoAvaliativoService->deleteInstrumentoAvaliativo($id);
        if ($delete){
            return response()->json(["message" => "Instrumento avaliativo deletado com sucesso", "data" => $delete], 200);
        } else {
            return response()->json(["message" => "Instrumento avaliativo não encontrado"], 404);
        }
    } 
}
