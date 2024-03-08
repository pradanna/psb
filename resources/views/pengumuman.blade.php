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

                <div class="table-pengumuman">
                    <table id="tableCalon" class="table table-striped " style="width:100%">
                        <thead>
                            <tr>
                                <th>Id Calon Siswa</th>
                                <th>Nama Calon Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Status Kelulusan</th>
                                {{-- detail, ubah status pesanan --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><span class="maxlines">1032</span></td>
                                <td><span class="maxlines">Joni</span></td>
                                <td><span class="maxlines">lanang</span></td>
                                <td><span class="maxlines">Lulus</span></td>


                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id Calon Siswa</th>
                                <th>Nama Calon Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Status Kelulusan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('morejs')
    <script>
        $(document).ready(function() {

            var tableCalon = $('#tableCalon').DataTable({
                responsive: {
                    details: {
                        display: DataTable.Responsive.display.modal({
                            header: function(row) {
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
        });
    </script>
@endsection
