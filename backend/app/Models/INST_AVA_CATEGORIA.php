<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class INST_AVA_CATEGORIA extends Model
{
    protected $table = 'inst_ava_categoria';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'categoria',
        'descricao',
        'conceito_max',
        'conceito_min'
    ];
}
