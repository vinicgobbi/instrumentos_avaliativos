<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class INSTRUMENTO_AVALIATIVO extends Model
{
    protected $table = 'instrumento_avaliativo';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'descricao'
    ];
}
