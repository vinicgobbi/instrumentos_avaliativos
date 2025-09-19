<?php

namespace App\Services;

use App\Models\INSTRUMENTO_AVALIATIVO;


class InstrumentoAvaliativoService
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

    public function updateInstrumentoAvaliativo(array $validatedData, int $id): ?INSTRUMENTO_AVALIATIVO
    {
        $instrumento = INSTRUMENTO_AVALIATIVO::find($id);

        if ($instrumento) {
            $instrumento->update($validatedData);
        }

        return $instrumento;
    }

    public function deleteInstrumentoAvaliativo(int $id): ?INSTRUMENTO_AVALIATIVO
    {
        $instrumento = INSTRUMENTO_AVALIATIVO::find($id);

        if ($instrumento){
            $instrumento->delete();
        }

        return $instrumento;

    }
}