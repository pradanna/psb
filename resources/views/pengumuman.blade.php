@extends('base')

@section('morecss')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    {{-- DATA TABLES --}}
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
@endsection
@section('content')
    <div class="g-hero">
        <div class="hero-text">
            <img src="{{ asset('images/local/namasistem.png') }}" />
        </div>
    </div>

    <div class="article-full mb-5 ">
        <div class="article-content">
            <div class="article-wrapper">

                <h1 class="text-center">DAFTAR KELULUSAN SISWA BARU</h1>

                <div class="menu-container">
                    <div class="menu overflow-hidden  ">
                        <div class="title-container mb-5">
                            <div>
                                <p class="mb-0">Pilih Tahun Ajaran</p>
                                <select class="form-select w-25" aria-label="Default select example" id="id_tahun_ajaran">
                                    @foreach ($tahunajarans as $tahunajaran)
                                        <option value={{ $tahunajaran->id }}> {{ $tahunajaran->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <table id="tabel" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama Siswa</th>
                                    <th>Nilai</th>
                                    <th>Status Penerimaan</th>
                                    <th>Nomor HP</th>
                                    {{-- detail, ubah status pesanan --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg" style="height: 50px" />
                                    </td>
                                    <td><span class="maxlines">Joni</span></td>
                                    <td><span class="maxlines">70</span></td>
                                    <td><span class="maxlines">Tidak Lolos</span></td>
                                    <td><span class="maxlines">081238172987</span></td>

                                </tr> --}}

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama Siswa</th>
                                    <th>Nilai</th>
                                    <th>Status Penerimaan</th>
                                    <th>Nomor HP</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
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
            const url = '{{ route('tabel.pengumuman') }}';

            // Inisialisasi DataTable
            $('#tabel').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: url,
                    dataSrc: '',
                    data: function(d) {
                        // Mengirimkan parameter tahun_ajaran ke backend
                        d.tahun_ajaran = $('#id_tahun_ajaran').val();
                    }
                },
                columns: [{
                        name: 'url_foto',
                        name: 'url_foto',
                        render: function(data, x, row) {
                            return '<img  src="' + row.url_foto + '" height="50" alt="img"/>'
                        }
                    },
                    {
                        data: 'user.nama',
                        name: 'user.nama'
                    },

                    {
                        data: 'user.registrans.scored',
                        name: 'user.registrans.scored'
                    },
                    {
                        data: 'status_penerimaan',
                        name: 'status_penerimaan',
                        render: function(data, x, row) {
                            if (data == 'diterima') {
                                return '<span class="badge bg-success">Lolos</span>'
                            } else if (data == 'ditolak') {
                                return '<span class="badge bg-danger">Tidak Lolos</span>'
                            } else {
                                return '<span class="badge bg-warning">Belum ditentukan</span>'
                            }
                        },
                    },
                    {
                        data: 'no_hp',
                        name: 'no_hp'
                    },

                ]
            });
        }


        // Event handler untuk memperbarui tabel saat memilih tahun ajaran
        $('#id_tahun_ajaran').on('change', function() {
            $('#tabel').DataTable().ajax.reload();
        });
    </script>
@endsection
