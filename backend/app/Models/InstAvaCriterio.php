<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstAvaCriterio extends Model
{
    protected $table = 'inst_ava_criterio';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'criterio',
        'descricao',
        'id_papel'
    ];

    public function papel()
    {
        return $this->belongsTo(InstAvaPapel::class, 'id_papel');
    }
}
