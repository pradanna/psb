<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TahunAjaran;
use Yajra\DataTables\DataTables;

class RekapitulasiController extends Controller
{
    public function index()
    {
        $tahunajaran = TahunAjaran::get();
        return view('admin.rekapitulasi.rekapitulasinilai', ['tahunajaran' => $tahunajaran]);
    }
}
