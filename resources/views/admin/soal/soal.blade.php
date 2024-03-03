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
                                    <th>Gambar soal</th>
                                    <th>Soal</th>
                                    <th>Pilihan 1</th>
                                    <th>Pilihan 2</th>
                                    <th>Pilihan 3</th>
                                    <th>Pilihan 4</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg"
                                            style="height: 50px" />
                                    </td>
                                    <td><span class="maxlines">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
                                            Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
                                            Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </span></td>

                                    <td>Pilihan 1</td>
                                    <td>Pilihan 2</td>
                                    <td>Pilihan 3</td>
                                    <td>Pilihan 4</td>

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
                                    <th>#</th>
                                    <th>Gambar soal</th>
                                    <th>Soal</th>
                                    <th>Pilihan 1</th>
                                    <th>Pilihan 2</th>
                                    <th>Pilihan 3</th>
                                    <th>Pilihan 4</th>
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
                            <label class="form-label">Gambar soal</label>
                            <br>
                            <input type="file" id="d-gambar" name="d-gambar" />
                        </div>

                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="p-soal" name="p-soal" placeholder="soal"> </textarea>
                            <label for="p-soal" class="form-label">Soal</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" checked type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1">
                            <label for="p-pilihan1" class="form-label">Pilihan 1</label>
                            <input type="text" class="form-control" id="p-pilihan1" name="p-pilihan1"
                                placeholder="Jawaban 1">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label for="p-pilihan2" class="form-label">Pilihan 2</label>
                            <input type="text" class="form-control" id="p-pilihan2" name="p-pilihan2"
                                placeholder="Jawaban 2">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label for="p-pilihan3" class="form-label">Pilihan 3</label>
                            <input type="text" class="form-control" id="p-pilihan3" name="p-pilihan3"
                                placeholder="Jawaban 3">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label for="p-pilihan4" class="form-label">Pilihan 4</label>
                            <input type="text" class="form-control" id="p-pilihan4" name="p-pilihan4"
                                placeholder="Jawaban 4">
                        </div>

                        <span class="text-sm text-primary ">*Tandai Jawaban yang Benar</span>
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
