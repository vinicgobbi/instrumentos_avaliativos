<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstAvaNota extends Model
{
    protected $table = 'inst_ava_nota';
    protected $id = 'id';
    public $timestamps = true;

    protected $fillable = [
        'conceito',
        'feedback',
        'aluno',
        'id_criterio'
    ];

    public function criterio()
    {
        return $this->belongsTo(InstAvaCriterio::class, 'id_criterio');
    }
}
