<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoidedDetail extends Model
{
    protected $with = ['document'];
    public $timestamps = false;

    protected $fillable = [
        'voided_id',
        'document_id',
        'description'
    ];

    public function voided()
    {
        return $this->belongsTo(Voided::class);
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}