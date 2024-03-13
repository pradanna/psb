<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\PaketSoal;
use App\Models\Soal;
use Yajra\DataTables\DataTables;

class SoalController extends CustomController
{
    public function getPaket($url)
    {
        $paket = PaketSoal::where('url', $url)->first();

        return $paket;
    }

    public function datatable($url)
    {
        $paket = $this->getPaket($url);
        $data  = Soal::where('paket_soal_id', $paket->id);

        return DataTables::of($data)
                         ->make();
    }

    public function index($url)
    {
        $paket = $this->getPaket($url);
        if (request()->method() == 'POST'){
            return $this->post($paket);
        }
        return view('admin.soal.soal', ['data' => $paket]);
    }

    public function post($paket){
        $form = request()->validate([
            'soal' => 'required',
            'pilihan_1' => 'required',
            'pilihan_2' => 'required',
            'pilihan_3' => 'required',
            'pilihan_4' => 'required',
            'jawaban_benar' => 'required'
        ]);
        $image = null;
        if (request('gambar')) {
            $image     = $this->generateImageName('gambar');
            $stringImg = '/images/soal/'.$image;
            $this->uploadImage('gambar', $image, 'soalImage');
            $form['gambar_soal'] = $stringImg;
        }
        $id = request('id');

        $form['paket_soal_id'] = $paket->id;


        if ($id) {
            $data = Soal::find($id);
            if ($image && $data->gambar){
                if (file_exists('../public'.$data->gambar)) {
                    unlink('../public'.$data->gambar);
                }
            }
            $data->update($form);
        } else {
            Soal::create($form);
        }

        return response()->json(
            [
                'msg' => 'berhasil',
            ],
            200
        );
    }

    public function delete(){
        $data = Soal::find(request('id'));
        if ($data->gambar_soal) {
            if (file_exists('../public'.$data->gambar_soal)) {
                unlink('../public'.$data->gambar_soal);
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
