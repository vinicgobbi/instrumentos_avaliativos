<?php

namespace App\Services;

use App\Models\INSTRUMENTO_AVALIATIVO;


class instrumentoAvaliativoService
{

    public function getInstrumentoAvaliativo()
    {
        return INSTRUMENTO_AVALIATIVO::all();
    }

    public function getInstrumentoAvaliativoByName(string $name)
    {
       return INSTRUMENTO_AVALIATIVO::where('titulo', 'LIKE', "%{$name}%")->get();
    }

    public function createInstrumentoAvaliativo(array $validatedData): INSTRUMENTO_AVALIATIVO
    {
        $instrumento = INSTRUMENTO_AVALIATIVO::create($validatedData);

        return $instrumento;
    }

    public function updateInstrumentoAvaliativo(array $validatedData, int $id): INSTRUMENTO_AVALIATIVO
    {
        $instrumento = INSTRUMENTO_AVALIATIVO::findOrFail($id);

        $instrumento->update($validatedData);

        return $instrumento;
    }

    public function deleteInstrumentoAvaliativo(int $id): INSTRUMENTO_AVALIATIVO
    {
        $instrumento = INSTRUMENTO_AVALIATIVO::findOrFail($id);

        $instrumento->delete();

        return $instrumento;
    }
}