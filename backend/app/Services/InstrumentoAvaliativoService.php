<?php

namespace App\Services;

use App\Models\InstrumentoAvaliativo;


class InstrumentoAvaliativoService
{

    public function getInstrumentoAvaliativo()
    {
        return InstrumentoAvaliativo::all();
    }

    public function getInstrumentoAvaliativoByName(string $name)
    {
       return InstrumentoAvaliativo::where('titulo', 'LIKE', "%{$name}%")->get();
    }

    public function createInstrumentoAvaliativo(array $validatedData): InstrumentoAvaliativo
    {
        $instrumento = InstrumentoAvaliativo::create($validatedData);

        return $instrumento;
    }

    public function updateInstrumentoAvaliativo(array $validatedData, int $id): ?InstrumentoAvaliativo
    {
        $instrumento = InstrumentoAvaliativo::find($id);

        if ($instrumento) {
            $instrumento->update($validatedData);
        }

        return $instrumento;
    }

    public function deleteInstrumentoAvaliativo(int $id): ?InstrumentoAvaliativo
    {
        $instrumento = InstrumentoAvaliativo::find($id);

        if ($instrumento){
            $instrumento->delete();
        }

        return $instrumento;

    }
}