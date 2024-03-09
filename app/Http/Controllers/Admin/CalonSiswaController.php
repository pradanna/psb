<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\CalonSiswa;
use App\Models\TahunAjaran;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class CalonSiswaController extends CustomController
{

    public function datatable(){
        $data = CalonSiswa::with(['user','tahun_ajaran']);
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

    public function index(){
        return view('admin.calonsiswa.calonsiswa');
    }

    public function detail(CalonSiswa $siswa){
        return view('admin.calonsiswa.detail_calonsiswa', ['data' => $siswa]);
    }

    /**
     * @param CalonSiswa $siswa
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application|JsonResponse
     */
    public function dataCalonSiswa(CalonSiswa $siswa){
        if (request()->method() == 'POST'){
            return $this->postDataCalonSiswa($siswa);
        }
        return view('admin.calonsiswa.tambah_calonsiswa', ['data' => $siswa]);
    }

    /**
     * @return JsonResponse
     */
    public function postDataCalonSiswa(CalonSiswa $siswaM){
        $id = $siswaM->user_id;
        $siswa = request()->validate([
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            'asal_sekolah'  => 'required',
            'no_hp'         => 'required',
        ]);

        $user = request()->validate([
            'nama'     => 'required',
            'username' => "required|unique:users,username,$id,id",
        ]);

        if (request('password')){
            request()->validate([
                'password' => 'required|confirmed',
            ]);
            $user['password'] = Hash::make(request('password'));
        }

        DB::beginTransaction();
        try {
            $dir = Str::slug(strtolower($user['nama']).' '.strtolower($siswa['asal_sekolah']), '-');

            if (request('url_foto')) {
                if ($siswaM->url_foto) {
                    if (file_exists('../public'.$siswaM->url_foto)) {
                        unlink('../public'.$siswaM->url_foto);
                    }
                }
                $image     = $this->generateImageName('url_foto');
                $stringImg = '/images/calon-siswa/'.$dir.'/'.$image;
                $this->uploadImage('url_foto', $dir.'/'.$image, 'siswaImage');
                $siswa['url_foto'] = $stringImg;
            }

            if (request('url_ijazah')) {
                if ($siswaM->url_ijazah) {
                    if (file_exists('../public'.$siswaM->url_ijazah)) {
                        unlink('../public'.$siswaM->url_ijazah);
                    }
                }
                $image     = $this->generateImageName('url_ijazah');
                $stringImg = '/images/calon-siswa/'.$dir.'/'.$image;
                $this->uploadImage('url_ijazah', $dir.'/'.$image, 'siswaImage');
                $siswa['url_ijazah'] = $stringImg;
            }
            $userM = User::find($id);
            $userM->update($user);
            $siswaM->update($siswa);
            $code = 200;
            $data = 'success';
            DB::commit();
        }catch (\Exception $er){
            $code = 500;
            $data = $er->getMessage();
            DB::rollBack();
        }
        return response()->json($data,
            $code
        );
    }

    /**
     * @param CalonSiswa $siswa
     *
     * @return JsonResponse
     */
    public function confirmRegistration(CalonSiswa $siswa){
        $status = request('status');
        $siswa->update([
            'status_pendaftaran' => $status
        ]);

        return response()->json(
            [
                'msg' => 'berhasil',
            ],
            200
        );
    }
}
