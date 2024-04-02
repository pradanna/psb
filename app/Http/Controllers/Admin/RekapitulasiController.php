<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TahunAjaran;

class RekapitulasiController extends Controller
{
    public function index()
    {
        $tahunajarans = TahunAjaran::get();
        return view('admin.rekapitulasi.rekapitulasinilai', ['tahunajarans' => $tahunajarans]);
    }
}
