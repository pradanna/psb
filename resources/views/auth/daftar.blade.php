@extends('base')

@section('morecss')
    <link rel="shortcut icon" href="{{ asset('images/local/favicon.ico') }}" title="Favicon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-genosstyle.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <script src="{{ asset('js/swal.js') }}"></script>
    <link href="{{ asset('js/dropify/css/dropify.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Nun   ito';
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </link>
@endsection
@section('content')
    <div class="login">
        <div class="panel-login pinggiran-bunder-10   " style="height: auto; margin-bottom: 100px; margin-top: 100px; ">

            <div class="login-container" style="width: 100%; ">
                @if (session('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div>
                    <p class="text-center mt-3 h2 fw-bold">Form Pendaftaran Calon Siswa Baru</p>
                    <p class="text-center mt-3  fw-bold">Masukan Data dengan Benar</p>

                    <form class="menu" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="title-container">
                            <p class="title">Tambah Calon Siswa</p>
                        </div>

                        <input type="hidden" id="d-id" name="d-id">

                        <div class="mb-3">
                            <div class="form-floating ">
                                <input type="text" class="form-control" id="p-namacalonsiswa" name="nama" required
                                    value="{{ old('nama') }}" placeholder="Nama Calon Siswa">
                                <label for="p-namacalonsiswa" class="form-label">Nama Calon Siswa</label>
                            </div>
                            @if ($errors->has('nama'))
                                <p class="text-danger" style="font-size: 0.8em">
                                    {{ $errors->first('nama') }}
                                </p>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="form-floating ">
                                    <input type="text" class="form-control" id="p-tempatlahir" name="tempat_lahir"
                                        required value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
                                    <label for="p-tempatlahir" class="form-label">Tempat Lahir</label>
                                </div>
                                @if ($errors->has('tempat_lahir'))
                                    <p class="text-danger" style="font-size: 0.8em">
                                        {{ $errors->first('tempat_lahir') }}
                                    </p>
                                @endif
                            </div>
                            <div class="col-6 mb-3">
                                <div class="">
                                    <label for="p-tanggallahir" class="form-label">Tanggal Lahir</label>

                                    <input type="text" class="form-control" id="p-tanggallahir" required
                                        value="{{ old('tanggal_lahir') }}" name="tanggal_lahir" />
                                </div>
                                @if ($errors->has('tanggal_lahir'))
                                    <p class="text-danger" style="font-size: 0.8em">
                                        {{ $errors->first('tanggal_lahir') }}
                                    </p>
                                @endif
                            </div>

                        </div>

                        <label>Jenis Kelamin</label>
                        <div class="mb-3">
                            <div class="d-flex gap-3  ">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki - Laki"
                                        id="p-laki">
                                    <label class="form-check-label" for="p-laki">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan"
                                        id="p-perempuan" checked>
                                    <label class="form-check-label" for="p-perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('jenis_kelamin'))
                                <p class="text-danger" style="font-size: 0.8em">
                                    {{ $errors->first('jenis_kelamin') }}
                                </p>
                            @endif
                        </div>

                        <div class=" mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="p-alamat" name="alamat" required
                                    value="{{ old('alamat') }}" placeholder="Judul Calon Siswa">
                                <label for="p-alamat" class="form-label">Alamat</label>
                            </div>
                            @if ($errors->has('alamat'))
                                <p class="text-danger" style="font-size: 0.8em">
                                    {{ $errors->first('alamat') }}
                                </p>
                            @endif
                        </div>

                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="p-asalsekolah" name="asal_sekolah"
                                    required value="{{ old('asal_sekolah') }}" placeholder="Asal Sekolah">
                                <label for="p-asalsekolah" class="form-label">Asal Sekolah</label>
                            </div>
                            @if ($errors->has('asal_sekolah'))
                                <p class="text-danger" style="font-size: 0.8em">
                                    {{ $errors->first('asal_sekolah') }}
                                </p>
                            @endif
                        </div>

                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="p-nohp" name="no_hp" required
                                    value="{{ old('no_hp') }}" placeholder="Nomor HP">
                                <label for="p-nohp" class="form-label">No HP</label>
                            </div>
                            @if ($errors->has('asal_sekolah'))
                                <p class="text-danger" style="font-size: 0.8em">
                                    {{ $errors->first('asal_sekolah') }}
                                </p>
                            @endif
                        </div>



                        <div class="row">
                            <div class="col-6">
                                <div class=" mb-3">
                                    <label class="form-label">Foto</label>
                                    <br>

                                    <input type="file" id="foto" name="url_foto" class="image" required
                                        data-min-height="10" data-heigh="300" accept="image/*" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class=" mb-3">
                                    <label class="form-label">Ijazah / Akta SD</label>
                                    <br>
                                    <input type="file" id="ijazah" name="url_ijazah" class="image" required
                                        data-min-height="10" data-heigh="300" accept="image/*" />
                                </div>
                            </div>
                        </div>

                        <hr>
                        Masukan Username dan Password untuk login
                        <div class="row">
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="p-username" name="username"
                                        value="{{ old('username') }}" required placeholder="Username">
                                    <label for="p-username" class="form-label">Username</label>
                                </div>
                                @if ($errors->has('username'))
                                    <p class="text-danger" style="font-size: 0.8em">
                                        {{ $errors->first('username') }}
                                    </p>
                                @endif
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating ">
                                    <input type="text" class="form-control" id="p-password" name="password" required
                                        placeholder="Password">
                                    <label for="p-password" class="form-label">Password</label>
                                </div>
                                @if ($errors->has('password'))
                                    <p class="text-danger" style="font-size: 0.8em">
                                        {{ $errors->first('password') }}
                                    </p>
                                @endif
                            </div>
                            <div class="col-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="p-konfirmpassword" required
                                        name="password_confirmation" placeholder="Konfirmasi Password">
                                    <label for="p-konfirmpassword" class="form-label">Konfirmasi Password</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between w-100 ">
                            <span>Sudah Punya akun, <a href="/login">Login</a></span>
                            <button type="submit" class="bt-primary m-2 ms-auto">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    {{--        @if ($errors) --}}
    {{--    {{dump($errors)}} --}}
    {{--        @endif --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dialog.js') }}"></script>

    <script src="{{ asset('js/dropify/js/dropify.js') }}"></script>

    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#p-tanggallahir').datepicker({
            uiLibrary: 'bootstrap5'
        });
        $(document).ready(function() {
            setImgDropify('ijazah', "Masukkan foto ijazah");
            setImgDropify('foto', "Masukkan foto");
        });
    </script>
@endsection
