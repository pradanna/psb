@extends('admin.base')

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
            <div class="menu">
                <div class="title-container">
                    <p class="title">Tambah Calon Siswa</p>
                </div>



                <input type="hidden" id="d-id" name="d-id">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-namacalonsiswa" name="p-namacalonsiswa"
                        placeholder="Nama Calon Siswa">
                    <label for="p-namacalonsiswa" class="form-label">Nama Calon Siswa</label>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-tempatlahir" name="p-tempatlahir"
                                placeholder="Tempat Lahir">
                            <label for="p-tempatlahir" class="form-label">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="p-tanggallahir" class="form-label">Tanggal Lahir</label>

                            <input type="text" class="form-control" id="p-tanggallahir" name="p-tanggallahir" />
                        </div>
                    </div>

                </div>

                <label>Jenis Kelamin</label>
                <div class="d-flex gap-3 mb-3 ">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="p-laki">
                        <label class="form-check-label" for="p-laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="p-perempuan" checked>
                        <label class="form-check-label" for="p-perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-alamat" name="p-alamat"
                        placeholder="Judul Calon Siswa">
                    <label for="p-alamat" class="form-label">Alamat</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-asalsekolah" name="p-asalsekolah"
                        placeholder="Asal Sekolah">
                    <label for="p-asalsekolah" class="form-label">Asal Sekolah</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-nohp" name="p-nohp" placeholder="Nomor HP">
                    <label for="p-nohp" class="form-label">No HP</label>
                </div>



                <div class="row">
                    <div class="col-6">
                        <div class=" mb-3">
                            <label class="form-label">Foto</label>

                            <form action="/target" class="dropzone" id="p-foto"></form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" mb-3">
                            <label class="form-label">Ijazah / Akta SD</label>

                            <form action="/target" class="dropzone" id="p-ijazah"></form>
                        </div>
                    </div>
                </div>

                <hr>
                Masukan Username dan Password untuk login
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-username" name="p-username"
                                placeholder="Username">
                            <label for="p-username" class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-password" name="p-password"
                                placeholder="Password">
                            <label for="p-password" class="form-label">Password</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-konfirmpassword" name="p-konfirmpassword"
                                placeholder="Konfirmasi Password">
                            <label for="p-konfirmpassword" class="form-label">Konfirmasi Password</label>
                        </div>
                    </div>
                </div>

                <button type="button" class="bt-primary m-2 ms-auto">Simpan Perubahan</button>

            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <!-- Scripts -->


    <script>
        // Note that the name "myDropzone" is the camelized
        // id of the form.
        Dropzone.options.myDropzone = {
            // Configuration options go here
        };
    </script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#p-tanggallahir').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
@endsection
