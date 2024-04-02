<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TahunAjaran;
use Yajra\DataTables\DataTables;

class TahunAjaranController extends Controller
{
    public function datables()
    {
        $data = TahunAjaran::query();

        return DataTables::of($data)
            ->make(true);
    }

    public function getData()
    {
        return TahunAjaran::all();
    }

    public function index()
    {
        if (request()->method() == 'POST') {
            return $this->post();
        }
        return view('admin.tahunajaran.tahunajaran');
    }

    public function post()
    {
        $field = request()->validate([
            'nama' => 'required',
            'jumlah_siswa' => 'required'
        ]);

        if (request('id')) {
            $tahun = TahunAjaran::find(request('id'));
            $tahun->update($field);
        } else {
            TahunAjaran::create($field);
        }

        return 'success';
    }

    public function delete()
    {
        $data = TahunAjaran::find(request('id'));
        $data->delete();

        return response()->json(
            [
                'msg' => 'berhasil',
            ],
            200
        );
    }
}
