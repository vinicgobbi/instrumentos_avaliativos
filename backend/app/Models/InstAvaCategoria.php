<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstAvaCategoria extends Model
{
    protected $table = 'inst_ava_categoria';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    protected $fillable = [
        'categoria',
        'descricao',
        'conceito_max',
        'conceito_min',
        'id_instrumento_avaliativo'
    ];

    public function instrumento_avaliativo()
    {
        return $this->belongsTo(InstrumentoAvaliativo::class, 'id_instrumento_avaliativo');
    }
}
