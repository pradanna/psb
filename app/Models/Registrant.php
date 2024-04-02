<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paket_soal_id',
        'mulai',
        'is_finish'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function paket()
    {
        return $this->belongsTo(PaketSoal::class, 'paket_soal_id');
    }

    public function jawabans()
    {
        return $this->hasMany(Jawaban::class, 'registrant_id');
    }

    public function getTerjawabAttribute()
    {
        $results = $this->jawabans()->get();
        $value = [];
        if (count($results) > 0) {
            $tmp = $results->pluck('soal_id')->values()->toArray();
            $value = $tmp;
        }
        return $value;
    }
}
