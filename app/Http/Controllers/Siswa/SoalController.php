<?php


namespace App\Http\Controllers\Siswa;


use App\Models\Jawaban;
use App\Models\PaketSoal;
use App\Models\Registrant;
use App\Models\Soal;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use function Spatie\Ignition\register;

class SoalController
{
    public function index()
    {
        $paket_soal = PaketSoal::with(['tahun_ajaran'])
            ->orderBy('created_at', 'DESC')->get();
        if (request()->method() === 'POST') {
            return $this->register();
        }
        return view('siswa.soal.paketsoal')->with([
            'paket_soal' => $paket_soal
        ]);
    }

    private function register()
    {
        date_default_timezone_set('Asia/Jakarta');
        try {
            $userID = auth()->id();
            $paketID = request()->request->get('paket');
            $registrant = Registrant::with([])
                ->where('user_id', '=', $userID)
                ->where('paket_soal_id', '=', $paketID)
                ->exists();
            if (!$registrant) {
                $data = [
                    'user_id' => $userID,
                    'paket_soal_id' => $paketID,
                    'mulai' => Carbon::now()->format('Y-m-d H:i:s'),
                    'is_finish' => false
                ];
                Registrant::create($data);
            }
            return redirect()->route('siswa.soal.by.id', ['id' => $paketID]);
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'gagal menegerjakan soal...');
        }
    }

    public function soalByID($id)
    {
        $userID = auth()->id();
        $registrant = Registrant::with([])
            ->where('user_id', '=', $userID)
            ->where('paket_soal_id', '=', $id)
            ->first()->append(['terjawab']);
        if (!$registrant) {
            return redirect()->route('siswa.soal');
        }


        $nomor = request()->query->get('nomor');
        $currentSoalIndex = 1;
        if ($nomor) {
            $currentSoalIndex = (int)$nomor;
        }

        if (request()->method() === 'POST') {
            return $this->registerJawaban($id, $registrant, $currentSoalIndex);
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

        $currentJawaban = $registrant->terjawab;
        return view('siswa.soal.kerjakansoal')->with([
            'soal' => $soal,
            'current_soal_index' => $currentSoalIndex,
            'current_soal' => $currentSoal,
            'current_jawaban' => $currentJawaban,
        ]);
    }

    private function registerJawaban($paketID, $registrant, $currentSoalIndex)
    {
        try {
            $jawaban = request()->request->get('jawaban');
            $soal = request()->request->get('soal');
            $data = [
                'registrant_id' => $registrant->id,
                'soal_id' => $soal,
                'jawaban' => $jawaban
            ];
            $redirect = route('siswa.soal.by.id', ['id' => $paketID]) . '?nomor=' . ($currentSoalIndex + 1);
//            dd($redirect);
//            Jawaban::create($data);
            return redirect()->to($redirect);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('failed', 'gagal menegerjakan soal...');
        }
    }
}
