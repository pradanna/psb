@extends('admin.base')

@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="me-5">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="#">Data Rekapitulasi Nilai</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada kendala, silahkan hubungi developer website</span>
                </div>
            </div>
        </div>

        <div class="menu-container">
            <div class="menu overflow-hidden  ">
                <div class="title-container mb-5">
                    <div>
                        <p class="title">Data Rekapitulasi Nilai</p>
                        <select class="form-select" aria-label="Default select example" id="id_tahun_ajaran">
                            @foreach ($tahunajarans as $tahunajaran)
                                <option value={{ $tahunajaran->id }}> {{ $tahunajaran->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <a class="btn-primary-sm" href="/admin/tambah-calonsiswa">Kunci Nilai dan Mulai Rekapitulasi Nilai</a>
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
@endsection

@section('morejs')
    <script>
        $(document).ready(function() {
            showData()
        })


        function showData() {
            const url = '{{ route('admin.rekapitulasi.siswa') }}';

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
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'status_penerimaan',
                        name: 'status_penerimaan'
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
