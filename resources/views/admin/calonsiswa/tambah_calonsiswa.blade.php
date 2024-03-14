@extends('admin.base')

@section('morecss')
    {{-- DROPZONE --}}

    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection


@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="/admin/calonsiswa">Data Calon Siswa</a></li>
                        <li class="breadcrumb-item "><a href="#">Tambah Calon Siswa</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada pertanyaan silahkan hubungi admin</span>
                </div>
            </div>
        </div>

        <div class="menu-container">
            <form id="form" class="menu" onsubmit="return confirmSave()" enctype="multipart/form-data">
                @csrf
                <div class="title-container">
                    <p class="title">Tambah Calon Siswa</p>
                </div>

                <input type="hidden" id="d-id" name="d-id">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-namacalonsiswa" name="nama" required value="{{$data->user->nama}}"
                           placeholder="Nama Calon Siswa">
                    <label for="p-namacalonsiswa" class="form-label">Nama Calon Siswa</label>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-tempatlahir" name="tempat_lahir" required value="{{$data->tempat_lahir}}"
                                   placeholder="Tempat Lahir">
                            <label for="p-tempatlahir" class="form-label">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="p-tanggallahir" class="form-label">Tanggal Lahir</label>

                            <input type="text" class="form-control" id="p-tanggallahir" required value="{{$data->tanggal_lahir}}"
                                   name="tanggal_lahir" />
                        </div>
                    </div>

                </div>

                <label>Jenis Kelamin</label>
                <div class="d-flex gap-3 mb-3 ">
                    <div class="form-check">
                        <input class="form-check-input" {{$data->jenis_kelamin == 'Laki - Laki' ? 'checked' : ''}} type="radio" name="jenis_kelamin" value="Laki - Laki" id="p-laki">
                        <label class="form-check-label" for="p-laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" {{$data->jenis_kelamin == 'Perempuan' ? 'checked' : ''}} type="radio" name="jenis_kelamin" value="Perempuan" id="p-perempuan"
                               >
                        <label class="form-check-label" for="p-perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-alamat" name="alamat" required value="{{$data->alamat}}"
                           placeholder="Judul Calon Siswa">
                    <label for="p-alamat" class="form-label">Alamat</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-asalsekolah" name="asal_sekolah" required value="{{$data->asal_sekolah}}"
                           placeholder="Asal Sekolah">
                    <label for="p-asalsekolah" class="form-label">Asal Sekolah</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-nohp" name="no_hp" required value="{{$data->no_hp}}"
                           placeholder="Nomor HP">
                    <label for="p-nohp" class="form-label">No HP</label>
                </div>



                <div class="row">
                    <div class="col-6">
                        <div class=" mb-3">
                            <label class="form-label">Foto</label>
                            <br>

                            <input type="file" id="foto" name="url_foto" class="image"
                                   data-min-height="10" data-heigh="300" accept="image/*"/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" mb-3">
                            <label class="form-label">Ijazah / Akta SD</label>
                            <br>
                            <input type="file" id="ijazah" name="url_ijazah" class="image"
                                   data-min-height="10" data-heigh="300" accept="image/*"/>
                        </div>
                    </div>
                </div>

                <hr>
                Masukan Username dan Password untuk login
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-username" name="username" value="{{$data->user->username}}" required
                                   placeholder="Username">
                            <label for="p-username" class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-password" name="password"
                                   placeholder="Password">
                            <label for="p-password" class="form-label">Password</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-konfirmpassword"
                                   name="password_confirmation" placeholder="Konfirmasi Password">
                            <label for="p-konfirmpassword" class="form-label">Konfirmasi Password</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="bt-primary m-2 ms-auto">Simpan</button>

            </form>
        </div>
    </div>
@endsection

@section('morejs')
    <!-- Scripts -->


    <script>
        $(document).ready(function () {
            setImgDropify('ijazah', "Masukkan foto ijazah");
            setImgDropify('foto', "Masukkan foto");
            @if($data)
            setImgDropify('ijazah', "Masukkan foto ijazah",'{{$data->url_ijazah}}');
            setImgDropify('foto', "Masukkan foto",'{{$data->url_foto}}');
            @endif
        });

        function confirmSave() {
            saveData('Simpan data calon siswa', 'form', '{{route('admin.calonsiswa.data',['siswa' => request('siswa')])}}', afterSave)
            return false;
        }

        function afterSave() {

        }
    </script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#p-tanggallahir').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
@endsection
