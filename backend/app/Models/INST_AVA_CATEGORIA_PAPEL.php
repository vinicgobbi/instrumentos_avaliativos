<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class INST_AVA_CATEGORIA_PAPEL extends Model
{
    protected $table = 'inst_ava_categoria_papel';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'categoria_id',
        'papel_id',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(INST_AVA_CATEGORIA::class, 'categoria_id', 'id');
    }

    public function papel(): BelongsTo
    {
        return $this->belongsTo(INST_AVA_PAPEL::class, 'papel_id', 'id');
    }
}
