<?php

namespace App\Services;

use App\Models\INSTRUMENTO_AVALIATIVO;

class instrumentoAvaliativoService
{
    public function createInstrumentoAvaliativo(array $validatedData): INSTRUMENTO_AVALIATIVO
    {
        $instrumento = INSTRUMENTO_AVALIATIVO::create($validatedData);

        return $instrumento;
    }
}
