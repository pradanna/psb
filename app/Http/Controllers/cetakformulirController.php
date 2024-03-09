<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

use function PHPSTORM_META\type;

class CetakFormulirController extends Controller
{

    public function index()
    {
        // return $this->dataTransaksi($id);
        $trans = [];
        $pdf   = App::make('dompdf.wrapper');

        $pdf->loadHTML($this->dataTransaksi())->setPaper('A4', 'potrait')->save('Laporan.pdf');

        //        $data = $this->dataTransaksi($id);
        //         return view('admin/project/penawaran', ['data' => $data]);
        return $pdf->stream();
    }

    public function dataTransaksi()
    {

        // if (\request('start')) {
        //     $trans = $trans->whereBetween('created_at', ["$start 00:00:00", "$end 23:59:59"]);
        // }
        // $trans = $trans->get();
        return view('siswa.calonsiswa.cetakformulir');
    }
}
