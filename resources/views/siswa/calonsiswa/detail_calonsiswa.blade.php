@extends('siswa.base')

@section('morecss')
    {{-- DROPZONE --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection


@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="{{ route('siswa.dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item "><a href="{{ route('siswa.profil') }}">Detail Calon Siswa</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada pertanyaan silahkan hubungi admin</span>
                </div>
            </div>
        </div>

        <div class="menu-container d-block ">
            <div class="row">
                <div class="col-8">
                    <div class="menu">
                        <div class="title-container">
                            <p class="title">Detail Calon Siswa</p>
                        </div>
                        <input type="hidden" id="d-id" name="d-id">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-namacalonsiswa"
                                name="p-namacalonsiswa" placeholder="Nama Calon Siswa" value="{{ $profil->user->nama }}">
                            <label for="p-namacalonsiswa" class="form-label">Nama Calon Siswa</label>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" readonly id="p-tempatlahir"
                                        name="p-tempatlahir" placeholder="Tempat Lahir" value="{{ $profil->tempat_lahir }}">
                                    <label for="p-tempatlahir" class="form-label">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" readonly id="p-tanggallahir"
                                        name="p-tanggallahir" placeholder="Tanggal Lahir"
                                        value="{{ $profil->tanggal_lahir }}">
                                    <label for="p-tanggallahir" class="form-label">Tanggal Lahir</label>
                                </div>
                            </div>

                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-jeniskelamin" name="p-jeniskelamin"
                                placeholder="Jenis Kelamin" value="{{ $profil->jenis_kelamin }}">
                            <label for="p-jeniskelamin" class="form-label">Jenis Kelamin</label>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-alamat" name="p-alamat"
                                placeholder="Judul Calon Siswa" value="{{ $profil->alamat }}">
                            <label for="p-alamat" class="form-label">Alamat</label>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-asalsekolah" name="p-asalsekolah"
                                placeholder="Asal Sekolah" value="{{ $profil->asal_sekolah }}">
                            <label for="p-asalsekolah" class="form-label">Asal Sekolah</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-nohp" name="p-nohp"
                                placeholder="Nomor HP" value="{{ $profil->no_hp }}">
                            <label for="p-nohp" class="form-label">No HP</label>
                        </div>
                        <a href="/siswa/cetakformulir/{{ $profil->id }}" class="bt-primary m-2 ms-auto"
                            target="_blank">Cetak Formulir
                            Pendaftaran</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="menu">
                        <p>Foto</p>
                        <img src="{{ asset($profil->url_foto) }}" style="width: 300px" class="mb-5" alt="img-foto" />

                        <p>Ijazah</p>
                        <img src="{{ asset($profil->url_ijazah) }}" style="width: 100%" alt="img-ijazah" />
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <!-- Scripts -->
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        // Note that the name "myDropzone" is the camelized
        // id of the form.
        Dropzone.options.myDropzone = {
            // Configuration options go here
        };
    </script>
@endsection
