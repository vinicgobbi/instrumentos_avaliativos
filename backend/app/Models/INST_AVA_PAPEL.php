<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class INST_AVA_PAPEL extends Model
{
    protected $table = 'inst_ava_papel';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'papel',
        'descricao',
    ];
}
