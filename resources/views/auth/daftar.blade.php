<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link rel="shortcut icon" href="{{ asset('images/local/favicon.ico') }}" title="Favicon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-genosstyle.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('/css/sweetalert2.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/sweetalert2.min.js') }}"></script>

    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="w-100 h-100 bg-login">

    <div class="login">
        <div class="panel-login pinggiran-bunder-10   " style="height: auto; margin-bottom: 100px; margin-top: 100px; ">

            <div class="login-container" style="width: 100%; ">
                <div>
                    <p class="text-center mt-3 h2 fw-bold">Form Pendaftaran Calon Siswa Baru</p>
                    <p class="text-center mt-3  fw-bold">Masukan Data dengan Benar</p>

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

                                    <input type="text" class="form-control" id="p-tanggallahir"
                                        name="p-tanggallahir" />
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
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="p-perempuan"
                                    checked>
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
                            <input type="text" class="form-control" id="p-nohp" name="p-nohp"
                                placeholder="Nomor HP">
                            <label for="p-nohp" class="form-label">No HP</label>
                        </div>



                        <div class="row">
                            <div class="col-6">
                                <div class=" mb-3">
                                    <label class="form-label">Foto</label>
                                    <br>

                                    <input type="file"id="p-foto" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class=" mb-3">
                                    <label class="form-label">Ijazah / Akta SD</label>
                                    <br>
                                    <input type="file" id="p-ijazah" />
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
                                    <input type="text" class="form-control" id="p-konfirmpassword"
                                        name="p-konfirmpassword" placeholder="Konfirmasi Password">
                                    <label for="p-konfirmpassword" class="form-label">Konfirmasi Password</label>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="bt-primary m-2 ms-auto">Simpan</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#p-tanggallahir').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
</body>

</html>
