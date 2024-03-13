<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\PaketSoal;
use App\Models\TahunAjaran;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class PaketSoalController extends CustomController
{
    public function datatable()
    {
        $data = PaketSoal::with('tahun_ajaran');

        if (request('t')){
            $tahun = TahunAjaran::where('nama',request('t'))->first();
            $param = null;
            if ($tahun){
                $param = $tahun->id;
            }
            $data = $data->where('tahun_ajaran_id',$param );
        }

        return DataTables::of($data)
                         ->make();
    }

    public function index()
    {
        if (request()->method() == 'POST'){
            return $this->post();
        }
        $tahunController = new TahunAjaranController();
        $ajaran          = $tahunController->getData();

        return view('admin.soal.paketsoal', ['ajaran' => $ajaran]);
    }

    public function post()
    {
        $field = request()->validate([
            'tahun_ajaran_id'  => 'required',
            'durasi'           => 'required',
            'waktu_pengerjaan' => 'required',
            'nama'             => 'required',
        ]);

        $tahun = TahunAjaran::find($field['tahun_ajaran_id']);

        $field['url'] = Str::slug(strtolower($field['nama']).' '.$tahun->nama,'-');

        $image = null;

        if (request('gambar')) {
            $image     = $this->generateImageName('gambar');
            $stringImg = '/images/paket-soal/'.$image;
            $this->uploadImage('gambar', $image, 'paketSoalImage');
            $field['gambar'] = $stringImg;
        }

        $id = request('id');

        if ($id) {
            $data = PaketSoal::find($id);
            if ($image && $data->gambar){
                if (file_exists('../public'.$data->gambar)) {
                    unlink('../public'.$data->gambar);
                }
            }
            $data->update($field);
        } else {
            PaketSoal::create($field);
        }

        return response()->json(
            [
                'msg' => 'berhasil',
            ],
            200
        );

    }

    public function gantiStatus($id){
        $paket = PaketSoal::find($id);
        $paket->update(['status' => request('status')]);
        return response()->json(
            [
                'msg' => 'berhasil',
            ],
            200
        );

    }

    public function delete(){
        $data = PaketSoal::find(request('id'));

        foreach ($data->soal as $d){
            if ($d->gambar_soal) {
                if (file_exists('../public'.$d->gambar_soal)) {
                    unlink('../public'.$d->gambar_soal);
                }
            }
            $d->delete();
        }

        if ($data->gambar) {
            if (file_exists('../public'.$data->gambar)) {
                unlink('../public'.$data->gambar);
            }
        }

        $data->delete();

        return response()->json(
            [
                'msg' => 'berhasil',
            ],
            200
        );
    }

}
