<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'asal_sekolah',
        'no_hp',
        'url_foto',
        'url_ijazah',
        'status_pendaftaran',
        'tahun_ajaran_id',
        'status_penerimaan',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function tahun_ajaran(){
        return $this->belongsTo(TahunAjaran::class,'tahun_ajaran_id');
    }
}
