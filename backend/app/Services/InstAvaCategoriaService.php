<?php

namespace App\Services;

use App\Models\InstAvaCategoria;

class InstAvaCategoriaService
{
    public function getInstAvaCategoria()
    {
        return InstAvaCategoria::with(['instrumento_avaliativo:id,titulo,descricao'])
                        ->get();
    }

    public function getInstAvaCategoriaByName(string $name)
    {
        return InstAvaCategoria::with(['instrumento_avaliativo:id,titulo,descricao'])->where("categoria", "LIKE", "%{$name}%")->get();
    }

    public function createInstAvaCategoria(array $data)
    {
        $categoria = InstAvaCategoria::create($data);

        return $categoria;
    }

    public function updateInstAvaCategoria(array $data, $id): ?InstAvaCategoria
    {
        $categoria = InstAvaCategoria::with(['instrumento_avaliativo:id,titulo,descricao'])
                        ->find($id);

        if (!$categoria) {
            return null;
        }

        $categoria->update($data);
        return $categoria;
    }

    public function deleteInstAvaCategoria($id): ?InstAvaCategoria
    {
        // Carrega apenas campos essenciais do relacionamento para evitar recursão
        $categoria = InstAvaCategoria::with(['instrumento_avaliativo:id,titulo,descricao'])
                        ->find($id);

        if (!$categoria) {
            return null; // categoria não encontrada
        }

        // Deleta a categoria
        $categoria->delete();

        return $categoria;
    }

}