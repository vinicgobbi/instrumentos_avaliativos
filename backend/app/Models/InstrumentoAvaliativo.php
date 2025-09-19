<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstrumentoAvaliativo extends Model
{
    protected $table = 'instrumento_avaliativo';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'descricao',
        'disciplina',
        'turma'
    ];
}
