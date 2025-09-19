<?php

namespace App\Services;

use App\Models\INST_AVA_CATEGORIA;

class InstAvaCategoriaService
{
    public function getInstAvaCategoria()
    {
        return INST_AVA_CATEGORIA::all();
    }

    public function getInstAvaCategoriaByName(string $name)
    {
        return INST_AVA_CATEGORIA::where("categoria", "LIKE", "%{$name}%")->get();
    }

    public function createInstAvaCategoria(array $data)
    {
        $categoria = INST_AVA_CATEGORIA::create($data);

        return $categoria;
    }

    public function updateInstAvaCategoria(array $data, $id)
    {
        $categoria = INST_AVA_CATEGORIA::find($id);

        if ($categoria) {
            $categoria->update($data);
        }

        return $categoria;
    }

    public function deleteInstAvaCategoria($id)
    {
        $categoria = INST_AVA_CATEGORIA::find($id);

        if ($categoria) {
            $categoria->delete();
        }

        return $categoria;
    }
}
