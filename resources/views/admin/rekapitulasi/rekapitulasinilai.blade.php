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
                    <a class="btn-primary-sm" id="kuncidanrekap">Kunci Nilai dan Mulai Rekapitulasi Nilai</a>
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
                        data: 'user.registrans.scored',
                        name: 'user.registrans.scored',
                        render: function(data, x, row) {
                            if (data == null) {
                                return '<span class="badge bg-success">belum mengerjakan</span>'
                            } else {
                                return data;
                            }
                        },
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

        // Fungsi untuk melakukan pemilihan dua siswa terbaik
        function selectTopTwoStudents() {
            // Kirim permintaan ke backend dengan menggunakan AJAX
            $.ajax({
                url: '/admin/rekapitulasi/select-top-students', // Sesuaikan dengan URL endpoint Anda
                method: 'POST', // Sesuaikan dengan metode HTTP yang digunakan
                async: true,
                headers: {
                    'Accept': "application/json",
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    tahun_ajaran: $('#id_tahun_ajaran').val()
                },
                success: function(response) {
                    // Tampilkan pesan sukses atau lakukan tindakan lainnya
                    alert('Perhitungan Sudah Selesai');
                },
                error: function(xhr, status, error) {
                    // Tangani kesalahan jika permintaan gagal
                    console.error(error);
                    alert('Terjadi kesalahan saat perhitungan rekapitulasi.');
                }
            });

            $('#tabel').DataTable().ajax.reload();
        }

        document.getElementById('kuncidanrekap').addEventListener('click', function() {
            selectTopTwoStudents();
        });
    </script>
@endsection
