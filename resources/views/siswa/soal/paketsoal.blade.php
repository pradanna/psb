@extends('siswa.base')

@section('morecss')
    {{-- DROPZONE --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
@endsection
@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="me-5">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="#">Data soal</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada pertanyaan, silahkan hubungi admin</span>
                </div>
            </div>
        </div>

        @foreach($paket_soal as $data)
            <div class="menu-container">
                <div class="menu overflow-hidden">
                    <div class="row">
                        <div class="col-5">
                            <div class="title-container">
                                <p class="title">Data Paket Soal</p>
                            </div>
                            <img src="{{ asset($data->gambar) }}" alt="img-soal" class="w-100"/>
                        </div>
                        <div class="col-7">
                            <div class="title-container">
                                <p class="title">{{ $data->nama }}</p>

                            </div>
                            <p class="mb-0 ">Tahun Ajaran : {{ $data->tahun_ajaran->nama }}</p>
                            <p class="mb-0 ">Lama Waktu Pengerjaan : {{ $data->durasi }} Menit</p>
                            <p class="mb-5 ">Pengerjaan soal akan diadakan
                                pada {{ \Carbon\Carbon::parse($data->waktu_pengerjaan)->format('d F Y H:i:s') }} WIB</p>

                            <div class="title-container">
                                <p class="title">Peraturan</p>

                            </div>
                            <p class="mb-0 ">Kerjakan soal ini di MTs Negeri 3 Sragen</p>
                            <p class="mb-0 ">Dimohon datang 30 menit sebelum waktu pengerjaan</p>
                            <p class="mb-0 ">Tersedia 50 Soal dengan pilihan ganda</p>
                            <p class="mb-5 ">Pilih jawaban dengan benar, skor akan muncul setelah siswa mengerjakan</p>

                            <a href="{{ route('siswa.soal.by.id', ['id' => $data->id]) }}"
                               class="bt-primary  me-auto d-inline ">Mulai Mengerjakan</a>
                        </div>
                    </div>
                </div>

            </div>

        @endforeach

    </div>
@endsection

@section('morejs')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        $(document).ready(function () {

            var tablesoal = $('#tablesoal').DataTable({
                responsive: {
                    details: {
                        display: DataTable.Responsive.display.modal({
                            header: function (row) {
                                var data = row.data();
                                return 'Details for ' + data[0] + ' ' + data[1];
                            }
                        }),
                        renderer: DataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                }
            });

            $(".deletebutton").click(function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    }
                });
            });

            // Note that the name "myDropzone" is the camelized
            // id of the form.
            Dropzone.options.myDropzone = {
                // Configuration options go here
            };
        });
    </script>
@endsection
