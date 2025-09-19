<?php

namespace App\Http\Controllers;

use App\Services\InstAvaCategoriaService;
use Illuminate\Http\Request;

class InstAvaCategoriaController extends Controller
{
    private $instAvaCategoriaService;

    public function __construct(InstAvaCategoriaService $instAvaCategoriaService)
    {
        $this->instAvaCategoriaService = $instAvaCategoriaService;
    }

    // GET
    public function getInstAvaCategoria() 
    {
        return $this->instAvaCategoriaService->getInstAvaCategoria();
    }

    // GET - BY NAME
    public function getInstAvaCategoriaByName($name)
    {
        return $this->instAvaCategoriaService->getInstAvaCategoriaByName($name);
    }

    // CREATE
    public function createInstAvaCategoria(Request $request)
    {
        $validatedData = $request->validate([
            'categoria' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'conceito_max' => 'required|integer|max:10|gte:conceito_min',
            'conceito_min' => 'required|integer|min:0|lte:conceito_max',
            'id_instrumento_avaliativo' => 'required|integer|exists:instrumento_avaliativo,id'
        ], [
            // categoria
            'categoria.required' => 'A categoria deve ser fornecida',
            'categoria.string'   => 'A categoria deve estar em formato de texto',
            'categoria.max'      => 'A categoria não pode ter mais de 255 caracteres',

            // descrição
            'descricao.required' => 'A descrição deve ser fornecida',
            'descricao.string'   => 'A descrição deve estar em formato de texto',
            'descricao.max'      => 'A descrição não pode ter mais de 255 caracteres',

            // conceito máximo
            'conceito_max.required' => 'O conceito máximo deve ser fornecido',
            'conceito_max.integer'  => 'O conceito máximo deve ser um número inteiro',
            'conceito_max.max'      => 'O conceito máximo não pode ser maior que 10',
            'conceito_max.gte'      => 'O conceito máximo deve ser maior ou igual ao conceito mínimo',

            // conceito mínimo
            'conceito_min.required' => 'O conceito mínimo deve ser fornecido',
            'conceito_min.integer'  => 'O conceito mínimo deve ser um número inteiro',
            'conceito_min.min'      => 'O conceito mínimo não pode ser menor que 0',
            'conceito_min.lte'      => 'O conceito mínimo deve ser menor ou igual ao conceito máximo',

            // id_instrumento_avaliativo
            'id_instrumento_avaliativo.required' => 'O ID do Instrumento Avaliativo deve ser fornecido',
            'id_instrumento_avaliativo.integer'  => 'O ID do Instrumento Avaliativo deve ser um número inteiro',
            'id_instrumento_avaliativo.exists'   => 'O Instrumento Avaliativo informado não existe na base de dados',
        ]);

        return $this->instAvaCategoriaService->createInstAvaCategoria($validatedData);
    }

    // UPDATE
    public function updateInstAvaCategoria(Request $request ,$id)
    {
        $validatedData = $request->validate([
            'categoria' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'conceito_max' => 'required|integer|max:10|gte:conceito_min',
            'conceito_min' => 'required|integer|min:0|lte:conceito_max',
            'id_instrumento_avaliativo' => 'required|integer|exists:instrumentos_avaliativos,id'
        ], [
            // categoria
            'categoria.required' => 'A categoria deve ser fornecida',
            'categoria.string'   => 'A categoria deve estar em formato de texto',
            'categoria.max'      => 'A categoria não pode ter mais de 255 caracteres',

            // descrição
            'descricao.required' => 'A descrição deve ser fornecida',
            'descricao.string'   => 'A descrição deve estar em formato de texto',
            'descricao.max'      => 'A descrição não pode ter mais de 255 caracteres',

            // conceito máximo
            'conceito_max.required' => 'O conceito máximo deve ser fornecido',
            'conceito_max.integer'  => 'O conceito máximo deve ser um número inteiro',
            'conceito_max.max'      => 'O conceito máximo não pode ser maior que 10',
            'conceito_max.gte'      => 'O conceito máximo deve ser maior ou igual ao conceito mínimo',

            // conceito mínimo
            'conceito_min.required' => 'O conceito mínimo deve ser fornecido',
            'conceito_min.integer'  => 'O conceito mínimo deve ser um número inteiro',
            'conceito_min.min'      => 'O conceito mínimo não pode ser menor que 0',
            'conceito_min.lte'      => 'O conceito mínimo deve ser menor ou igual ao conceito máximo',

            // id_instrumento_avaliativo
            'id_instrumento_avaliativo.required' => 'O ID do Instrumento Avaliativo deve ser fornecido',
            'id_instrumento_avaliativo.integer'  => 'O ID do Instrumento Avaliativo deve ser um número inteiro',
            'id_instrumento_avaliativo.exists'   => 'O Instrumento Avaliativo informado não existe na base de dados',
        ]);

        $categoria = $this->instAvaCategoriaService->updateInstAvaCategoria($validatedData, $id);

        if (!$categoria) {
            return response()->json(['message' => 'Categoria não encontrada']);
        }

        return $categoria;
    }

    // DELETE
    public function deleteInstAvaCategoria($id)
    {
        $categoria = $this->instAvaCategoriaService->deleteInstAvaCategoria($id);

        if (!$categoria) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }

        return response()->json([
            'message' => 'Categoria deletada com sucesso',
            'data' => [
                'id' => $categoria->id,
                'categoria' => $categoria->categoria,
                'descricao' => $categoria->descricao,
                'conceito_max' => $categoria->conceito_max,
                'conceito_min' => $categoria->conceito_min,
                'instrumento_avaliativo' => $categoria->instrumento_avaliativo // já limitado
            ]
        ], 200);
    }
}
