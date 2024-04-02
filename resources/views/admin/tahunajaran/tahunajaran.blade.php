@extends('admin.base')

@section('morecss')
    {{-- DROPZONE --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection
@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="me-5">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="#">Data tahun ajaran</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada kendala, segera hubungi teknisi</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="menu-container">
                    <div class="menu overflow-hidden">
                        <div class="title-container">
                            <p class="title">Tambah tahun ajaran</p>
                        </div>
                        <table id="tabel" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Tahun Ajaran</th>
                                    <th>Jumlah Siswa yang diterima</th>
                                    <th>Action</th>
                                    {{-- detail, ubah status pesanan --}}
                                </tr>
                            </thead>
                            {{--                            <tbody> --}}
                            {{--                                <tr> --}}

                            {{--                                    <td><span class="maxlines">2024/2025</span></td> --}}

                            {{--                                    </td> --}}
                            {{--                                    <td><span class="d-flex gap-1"> --}}
                            {{--                                            <a class="btn-primary-sm">Lihat Data Peserta --}}
                            {{--                                            </a> --}}
                            {{--                                            <a class="btn-warning-sm">Lihat Soal --}}
                            {{--                                            </a> --}}
                            {{--                                            <a class="btn-danger-sm deletebutton">Hapus --}}
                            {{--                                            </a> --}}
                            {{--                                        </span> --}}
                            {{--                                    </td> --}}
                            {{--                                </tr> --}}

                            {{--                            </tbody> --}}
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Tahun Ajaran</th>
                                    <th>Jumlah Siswa yang diterima</th>
                                    <th>Action</th>
                                    {{-- detail, ubah status pesanan --}}
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-container">
                    <form class="menu overflow-hidden" id="form" onsubmit="return confirmSaveData()">
                        @csrf
                        <div class="title-container">
                            <p class="title">Data tahun ajaran</p>
                        </div>
                        <input type="hidden" id="id" name="id">

                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama Tahun Ajaran</label>
                            <input type="text" class="form-control" required id="nama" name="nama"
                                pattern="[0-9]{4}/[0-9]{4}" placeholder="2023/2024">
                        </div>

                        <div class="form-group mb-3">
                            <label for="jumlah_siswa" class="form-label">Jumlah siswa yang diterima</label>
                            <input type="number" class="form-control" required id="jumlah_siswa" name="jumlah_siswa"
                                placeholder="60">
                        </div>


                        <button type="submit" class="bt-primary m-2 ms-auto">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('morejs')
    <script>
        $(document).ready(function() {
            showData()
        })

        function showData() {
            let column = [{
                    className: "text-center",
                    orderable: false,
                    defaultContent: "",
                    searchable: false
                },
                {
                    data: 'nama',
                    name: 'nama',
                    className: "text-center",
                },
                {
                    data: 'jumlah_siswa',
                    name: 'julah_siswa',
                    className: "text-right",
                },
                {
                    className: "text-center",
                    data: 'id',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data, x, row) {
                        return '<span class="d-flex gap-1">' +
                            ' <a class="btn-primary-sm"  href="/admin/calonsiswa?t=' + row.nama +
                            '">Lihat Data Peserta' +
                            ' </a>' +
                            ' <a class="btn-warning-sm"  href="/admin/paketsoal?t=' + row.nama + '">Lihat Soal' +
                            ' </a>' +
                            ' <a class="btn-danger-sm" id="deleteData" data-id="' + data + '" data-nama="' + row
                            .nama + '">Hapus' +
                            ' </a>' +
                            ' </span>';
                    }
                },
            ]
            datatable('tabel', '{{ route('admin.tahunajaran.datatable') }}', column)
        }

        function confirmSaveData() {
            saveData('Simpan tahun ajaran', 'form', '{{ route('admin.tahunajaran') }}', afterSave)
            return false;
        }

        function afterSave() {
            $('#nama').val('')
            $('#tahun_ajaran').val('')
            $('#tabel').DataTable().ajax.reload();
        }

        $(document).on('click', '#deleteData', function() {
            let form = {
                '_token': '{{ csrf_token() }}',
                'id': $(this).data('id'),

            }
            deleteData('soal ' + $(this).data('name'), '{{ route('admin.tahunajaran.delete') }}', form, afterSave)
            return false
        })
    </script>
@endsection
