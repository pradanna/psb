@extends('admin.base')

@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="me-5">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="#">Data Inbox</a></li>
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
                    <p class="title">Data Inbox</p>
                    <a class="btn-primary-sm" href="/admin/tambah-inbox">Tambah Inbox</a>
                </div>
                <table id="tableInbox" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Telp</th>
                            <th>Nama Perusahaan</th>
                            {{-- slug otomatis ambil dari judul --}}
                            <th>Isi Pesan</th>
                            <th>Action</th>
                            {{-- detail, ubah status pesanan --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td><span class="maxlines">Joko</span></td>
                            <td><span class="maxlines">098129381</span></td>
                            <td><span class="maxlines">Genossys</span></td>
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
                                    <a class="btn-primary-sm" data-bs-toggle="modal" data-bs-target="#modalinbox">Lihat
                                        Detail
                                    </a>
                                    <a class="btn-warning-sm">Whatsapp
                                    </a>

                                    <a class="btn-danger-sm deletebutton">Hapus
                                    </a>
                                </span>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            {{-- slug otomatis ambil dari judul --}}
                            <th>Isi Inbox</th>
                            <th>tags</th>
                            <th>Action</th>
                            {{-- detail, ubah status pesanan --}}
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalinbox" tabindex="-1" aria-labelledby="modalinboxLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalinboxLabel">Pesan dari "Nama"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <span class="fw-bold ">Nama </span>
                            <span>(Nomor HP) </span>
                        </div>
                        <div><span>dari perusahaan "Nama Perusahaan"</span></div>
                        <br>
                        <div><span class="fw-bold ">Isi Pesan</span></div>
                        <div><span>Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum,
                                Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem
                                Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem
                                Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem
                                Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem
                                Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,Lorem Ipsum, Lorem Ipsum,</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Hubungi lewat whatsapp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script>
        $(document).ready(function() {

            var tableInbox = $('#tableInbox').DataTable({
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
