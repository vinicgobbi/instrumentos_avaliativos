<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstAvaPapel extends Model
{
    protected $table = 'inst_ava_papel';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'papel',
        'descricao',
        'id_categoria'
    ];

    public function id_categoria()
    {
        return $this->belongsTo(InstAvaCategoria::class, 'id_categoria');
    }
}
