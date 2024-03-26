<?php


namespace App\Http\Controllers\Siswa;


use App\Models\PaketSoal;
use App\Models\Soal;
use Illuminate\Database\Eloquent\Collection;

class SoalController
{
    public function index()
    {
        $paket_soal = PaketSoal::with(['tahun_ajaran'])
            ->orderBy('created_at', 'DESC')->get();
        return view('siswa.soal.paketsoal')->with([
            'paket_soal' => $paket_soal
        ]);
    }

    public function soalByID($id)
    {
        $nomor = request()->query->get('nomor');
        $currentSoalIndex = 1;
        if ($nomor) {
            $currentSoalIndex = (int)$nomor;
        }
        /** @var Collection $soal */
        $soal = Soal::with(['paket'])
            ->where('paket_soal_id', '=', $id)
            ->orderBy('id', 'ASC')
            ->get();

        $soalLen = count($soal);
        $currentSoal = null;
        if ($soalLen > 0 && $currentSoalIndex <= $soalLen) {
            $tmpCurrentSoal = $soal->slice(($currentSoalIndex - 1), 1)->first();
            if ($tmpCurrentSoal !== null) {
               $currentSoal = $tmpCurrentSoal;
            }
        }

        if ($currentSoal === null) {
            abort(404, 'soal tidak ditemukan');
        }
        return view('siswa.soal.kerjakansoal')->with([
            'soal' => $soal,
            'current_soal_index' => $currentSoalIndex,
            'current_soal' => $currentSoal
        ]);
    }
}
