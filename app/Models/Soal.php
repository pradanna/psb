<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_soal_id',
        'gambar_soal',
        'soal',
        'pilihan_1',
        'pilihan_2',
        'pilihan_3',
        'pilihan_4',
        'jawaban_benar'
    ];

    public function paket()
    {
        return $this->belongsTo(PaketSoal::class, 'paket_soal_id');
    }
}
