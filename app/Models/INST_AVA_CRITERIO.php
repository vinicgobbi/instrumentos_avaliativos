<?php

use Illuminate\Database\Eloquent\Model;

class INST_AVA_CRITERIO extends Model
{
    protected $table = 'inst_ava_criterio';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'criterio',
        'descricao'
    ];
}