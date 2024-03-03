@extends('admin.base')

@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="me-5">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="#">Data Calon Siswa</a></li>
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
            <div class="menu overflow-hidden">
                <div class="title-container">
                    <p class="title">Data Calon Siswa</p>
                    <a class="btn-primary-sm" href="/admin/tambah-calonsiswa">Tambah Calon Siswa</a>
                </div>
                <table id="tableCalon" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama Calon Siswa</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Nomor HP</th>
                            <th>Action</th>
                            {{-- detail, ubah status pesanan --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg" style="height: 50px" />
                            </td>
                            <td><span class="maxlines">Joni</span></td>
                            <td><span class="maxlines">15 maret 2024</span></td>
                            <td><span class="maxlines">lanang</span></td>
                            <td><span class="maxlines">081238172987</span></td>

                            <td><span class="d-flex gap-1">
                                    <a class="btn-primary-sm" href="/admin/detail-calonsiswa">Lihat Detail
                                    </a>
                                    <a class="btn-warning-sm">Ubah
                                    </a>

                                    <a class="btn-danger-sm deletebutton">Hapus
                                    </a>
                                </span>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Foto</th>
                            <th>Nama Calon Siswa</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Nomor HP</th>
                            <th>Action</th>
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

            $(".deletebutton").click(function() {
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
        });
    </script>
@endsection
