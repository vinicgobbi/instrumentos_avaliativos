<?php

use Illuminate\Database\Eloquent\Model;

class INST_AVA_NOTA extends Model
{
    protected $table = 'inst_ava_nota';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'conceito',
        'feedback',
    ];
}