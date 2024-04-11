<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

use function PHPSTORM_META\type;

class CetakFormulirController extends Controller
{

    public function index($id)
    {
        // return $this->dataTransaksi($id);
        $trans = [];
        $pdf   = App::make('dompdf.wrapper');

        $pdf->loadHTML($this->dataTransaksi($id))->setPaper('A4', 'portrait')->save('Laporan.pdf');

        //        $data = $this->dataTransaksi($id);
        //         return view('admin/project/penawaran', ['data' => $data]);
        return $pdf->stream();
    }

    public function dataTransaksi($id)
    {

        $siswa = CalonSiswa::with(['user'])->find($id);
        return view('siswa.calonsiswa.cetakformulir', ['siswa' => $siswa]);
    }
}
