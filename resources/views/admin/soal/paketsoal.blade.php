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
                        <li class="breadcrumb-item "><a href="#">Data soal</a></li>
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
                            <p class="title">Data soal</p>
                        </div>
                        <table id="tablesoal" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cover Paket</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status Paket Soal</th>
                                    <th>Waktu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg"
                                            style="height: 50px" />
                                    </td>
                                    <td><span class="maxlines">2024/2025</span></td>

                                    <td>Siap Dikerjakan</td>
                                    <td>2 Jam 30 Menit</td>

                                    <td><span class="d-flex gap-1">
                                            <a class="btn-primary-sm" href="/admin/soal">Lihat Soal
                                            </a>
                                            <a class="btn-warning-sm">Ubah
                                            </a>


                                            <a class="btn-danger-sm deletebutton">Hapus
                                            </a>

                                            <div class="dropdown">
                                                <a class="btn-status-sm dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Ubah Status Soal
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Menunggu Waktu</a></li>
                                                    <li><a class="dropdown-item" href="#">Siap Dikerjakan</a></li>
                                                    <li><a class="dropdown-item" href="#">Selesai</a></li>
                                                </ul>
                                            </div>

                                        </span>
                                    </td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Cover Paket</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status Paket Soal</th>
                                    <th>Waktu</th>
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
                            <p class="title">Tambah soal</p>
                        </div>
                        <input type="hidden" id="d-id" name="d-id">

                        <div class=" mb-3">
                            <label class="form-label">Cover Paket Soal</label>
                            <br>
                            <input type="file" id="d-gambar" name="d-gambar" />
                        </div>

                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="p-soal" name="p-soal" placeholder="soal"> </textarea>
                            <label for="p-soal" class="form-label">Soal</label>
                        </div>


                        <select class="form-select mb-3 " aria-label="Default select example">
                            <option selected>Pilih Tahun Ajaran</option>
                            <option value="1">2024/2025</option>
                            <option value="2">2025/2026</option>
                            <option value="3">2026/2027</option>
                        </select>

                        <label>Durasi Pengerjaan Soal</label>
                        <div class="d-flex gap-3 ">
                            <div class="form-floating mb-3">
                                <textarea type="text" class="form-control" id="p-jam" name="p-jam" placeholder="jam"> </textarea>
                                <label for="p-jam" class="form-label">Jam</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea type="text" class="form-control" id="p-menit" name="p-menit" placeholder="menit"> </textarea>
                                <label for="p-menit" class="form-label">Menit</label>
                            </div>
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

            var tablesoal = $('#tablesoal').DataTable({
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
