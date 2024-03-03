@extends('admin.base')

@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="me-5">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="#">Data Service</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada pertanyaan, silahkan hubungi admin</span>
                </div>
            </div>
        </div>

        <div class="menu-container">
            <div class="menu overflow-hidden">
                <div class="title-container">
                    <p class="title">Data Service</p>
                    <a class="btn-primary-sm" href="/admin/tambah-service">Tambah Data Service</a>
                </div>
                <table id="tableService" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Nama Service</th>
                            {{-- slug otomatis ambil dari judul --}}
                            <th>Keterangan</th>
                            <th>Action</th>
                            {{-- detail, ubah status pesanan --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg" style="height: 50px" />
                            </td>
                            <td><span class="maxlines">Billboard</span></td>
                            <td><span class="maxlines">Berikut ini billboard strategis di semarang, Lorem Ipsum is simply
                                    dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make
                                    a type specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</span></td>

                            <td><span class="d-flex gap-1">
                                    <a class="btn-primary-sm">Lihat
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
                            <th>Icon</th>
                            <th>Nama Service</th>
                            {{-- slug otomatis ambil dari judul --}}
                            <th>Keterangan</th>
                            <th>Action</th>
                            {{-- detail, ubah status pesanan --}}
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

            var tableservice = $('#tableservice').DataTable({
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
