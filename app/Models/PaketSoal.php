<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'tahun_ajaran_id',
        'status',
        'durasi',
        'waktu_pengerjaan',
        'gambar',
        'nama'
    ];

    public function tahun_ajaran(){
        return $this->belongsTo(TahunAjaran::class,'tahun_ajaran_id');
    }
}
