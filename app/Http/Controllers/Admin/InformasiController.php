<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

/**
 *
 */
class InformasiController extends CustomController
{
    /**
     * @return JsonResponse
     * @throws \Exception
     */
    public function datatable(){
        $data = Informasi::query();

        return DataTables::of($data)
            ->make();
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|JsonResponse
     */
    public function index(){
        if (request()->method() == 'POST'){
            return $this->post();
        }
        return view('admin.informasi.informasi');
    }

    /**
     * @return JsonResponse
     */
    public function post(){
        request()->validate([
            'informasi' => 'required',
            'judul' => 'required',
        ]);

        $form = request()->all();
        $image = null;

        if (request('gambar')) {
            $image     = $this->generateImageName('gambar');
            $stringImg = '/images/informasi/'.$image;
            $this->uploadImage('gambar', $image, 'informasiImage');
            $form['gambar'] = $stringImg;
        }

        $id = request('id');


        if ($id) {
            $data = Informasi::find($id);
            if ($image && $data->gambar){
                if (file_exists('../public'.$data->gambar)) {
                    unlink('../public'.$data->gambar);
                }
            }
            $data->update($form);
        } else {
            Informasi::create($form);
        }

        return response()->json(
            [
                'msg' => 'berhasil',
            ],
            200
        );

    }


    public function delete()
    {
        $data = Informasi::find(request('id'));
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
