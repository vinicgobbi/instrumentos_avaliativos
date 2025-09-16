<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class INSTRUMENTO_AVALIATIVO_CATEGORIA extends Model
{
    protected $table = 'instrumento_avaliativo_categoria';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'instrumento_id',
        'categoria_id',
    ];

    public function instrumento():BelongsTo
    {
        return $this->belongsTo(INSTRUMENTO_AVALIATIVO::class, 'instrumento_id', 'id');
    }

    public function categoria():BelongsTo
    {
        return $this->belongsTo(INST_AVA_CATEGORIA::class, 'categoria_id', 'id');
    }
}
