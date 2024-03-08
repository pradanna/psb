<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswa;
use Yajra\DataTables\DataTables;

class CalonSiswaController extends Controller
{

    public function datatable(){
        $data = CalonSiswa::with('user');
        return DataTables::of($data)
            ->make();
    }

    public function index(){
        return view('admin.calonsiswa.calonsiswa');
    }

    public function detail(CalonSiswa $siswa){
        return view('admin.calonsiswa.detail_calonsiswa', ['data' => $siswa]);

    }
}
