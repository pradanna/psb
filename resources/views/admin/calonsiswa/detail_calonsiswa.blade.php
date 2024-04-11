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
                        <li class="breadcrumb-item "><a href="#">Detail Calon Siswa</a></li>
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
                                value="{{ $data->status_pendaftaran }}" name="p-namacalonsiswa"
                                placeholder="Nama Calon Siswa">
                            <label for="p-namacalonsiswa" class="form-label">Status Pendaftaran</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-namacalonsiswa"
                                value="{{ $data->user->nama }}" name="p-namacalonsiswa" placeholder="Nama Calon Siswa">
                            <label for="p-namacalonsiswa" class="form-label">Nama Calon Siswa</label>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" readonly id="p-tempatlahir"
                                        value="{{ $data->tempat_lahir }}" name="p-tempatlahir" placeholder="Tempat Lahir">
                                    <label for="p-tempatlahir" class="form-label">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" readonly id="p-tanggallahir"
                                        value="{{ $data->tanggal_lahir }}" name="p-tanggallahir"
                                        placeholder="Tanggal Lahir">
                                    <label for="p-tanggallahir" class="form-label">Tanggal Lahir</label>
                                </div>
                            </div>

                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-jeniskelamin" name="p-jeniskelamin"
                                value="{{ $data->jenis_kelamin }}" placeholder="Jenis Kelamin">
                            <label for="p-jeniskelamin" class="form-label">Jenis Kelamin</label>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-alamat" name="p-alamat"
                                value="{{ $data->alamat }}" placeholder="Judul Calon Siswa">
                            <label for="p-alamat" class="form-label">Alamat</label>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-asalsekolah" name="p-asalsekolah"
                                value="{{ $data->asal_sekolah }}" placeholder="Asal Sekolah">
                            <label for="p-asalsekolah" class="form-label">Asal Sekolah</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-asalsekolah" name="p-asalsekolah"
                                value="{{ $data->tahun_ajaran->nama }}" placeholder="Tahun Ajaran">
                            <label for="p-asalsekolah" class="form-label">Tahun Ajaran</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" readonly id="p-nohp" name="p-nohp"
                                value="{{ $data->no_hp }}" placeholder="Nomor HP">
                            <label for="p-nohp" class="form-label">No HP</label>
                        </div>

                        <div class="d-flex gap-1 ms-auto">
                            <button type="button" class="bt-primary m-2 " onclick="gantiStatus('diterima')">Terima
                                Pendaftaran</button>
                            <button type="button" class="bt-warning m-2 " onclick="gantiStatus('ditolak')">Tolak
                                Pendaftaran</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="menu">
                        <p>Foto</p>
                        <img src="{{ asset($data->url_foto) }}" style="width: 300px" class="mb-5" />

                        <p>Ijazah</p>
                        <img src="{{ asset($data->url_ijazah) }}" style="width: 100%" />
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <!-- Scripts -->
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        // Note that the name "myDropzone" is the camelized
        // id of the form.
        Dropzone.options.myDropzone = {
            // Configuration options go here
        };

        function gantiStatus(a) {
            let form = {
                '_token': '{{ csrf_token() }}',
                'status': a
            }
            saveDataObjectFormData('Status pendaftaran calon siswa ' + a, form,
                '{{ route('admin.calonsiswa.detail.status', ['siswa' => request('siswa')]) }}')
            return false;
        }
    </script>
@endsection
