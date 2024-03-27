<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $fillable = [
        'registrant_id',
        'soal_id',
        'jawaban'
    ];

    public function registrant()
    {
        return $this->belongsTo(Registrant::class, 'registrant_id');
    }

    public function soal()
    {
        return $this->belongsTo(Soal::class, 'soal_id');
    }
}
