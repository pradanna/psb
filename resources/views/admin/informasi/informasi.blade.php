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
                        <li class="breadcrumb-item "><a href="#">Data informasi</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada kendala, silahkan hubungi developer website</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="menu-container">
                    <div class="menu overflow-hidden">
                        <div class="title-container">
                            <p class="title">Data informasi</p>
                        </div>
                        <table id="tableinformasi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Logo informasi</th>
                                    <th>Judul informasi</th>
                                    <th>Isi informasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg"
                                            style="height: 50px" />
                                    </td>
                                    <td><span class="maxlines">Pengumuman Pendaftaran, Pengerjaan soal tes</span></td>
                                    <td><span class="maxlines">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
                                            Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
                                            Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </span></td>


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
                                    <th>Logo informasi</th>
                                    <th>Judul informasi</th>
                                    <th>Isi informasi</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-container">
                    <div class="menu overflow-hidden">
                        <div class="title-container">
                            <p class="title">Tambah informasi</p>
                        </div>
                        <input type="hidden" id="d-id" name="d-id">

                        <div class=" mb-3">
                            <label class="form-label">Gambar informasi</label>

                            <form action="/target" class="dropzone" id="p-icon"></form>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-judulinformasi" name="p-judulinformasi"
                                placeholder="Nama informasi">
                            <label for="p-judulinformasi" class="form-label">Judul informasi</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="p-isiinformasi" name="p-isiinformasi" placeholder="Isi informasi"> </textarea>
                            <label for="p-isiinformasi" class="form-label">Isi informasi</label>
                        </div>

                        <button type="button" class="bt-primary m-2 ms-auto">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('morejs')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        $(document).ready(function() {

            var tableinformasi = $('#tableinformasi').DataTable({
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

            // Note that the name "myDropzone" is the camelized
            // id of the form.
            Dropzone.options.myDropzone = {
                // Configuration options go here
            };
        });
    </script>
@endsection