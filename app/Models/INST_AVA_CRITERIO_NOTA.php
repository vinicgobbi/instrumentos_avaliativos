<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class INST_AVA_CRITERIO_NOTA extends Model
{
    protected $table = 'inst_ava_criterio_nota';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    protected $fillable = [
        'criterio_id',
        'nota_id',
    ];

    public function criterio():BelongsTo
    {
        return $this->belongsTo(INST_AVA_CRITERIO::class, 'criterio_id', 'id');
    }

    public function nota():BelongsTo
    {
        return $this->belongsTo(INST_AVA_NOTA::class, 'nota_id', 'id');
    }
}