<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class INST_AVA_PAPEL_CRITERIO extends Model
{
    protected $table = 'inst_ava_papel_criterio';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'papel_id',
        'criterio_id'
    ];

    // 'PAPEL' RELATIONSHIP
    public function papel(): BelongsTo
    {
        return $this->belongsTo(INST_AVA_PAPEL::class, 'papel_id', 'id');
    }

    // 'CRITERIO' RELATIONSHIP
    public function criterio(): BelongsTo
    {
        return $this->belongsTo(INST_AVA_CRITERIO::class, 'criterio_id', 'id');
    }
}
