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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tahun_ajaran()
    {
        return $this->belongsTo(TahunAjaran::class, 'tahun_ajaran_id');
    }



    /**
     * Scope a query to only include calon siswa of a specific tahun_ajaran.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $tahunajaran
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTahunAjaran($query, $tahunajaran)
    {
        return $query->where('tahun_ajaran_id', $tahunajaran);
    }
}
