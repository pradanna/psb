@extends('admin.base')

@section('morecss')
    {{-- DROPZONE --}}
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
                        <table id="tabel" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Logo informasi</th>
                                    <th>Judul informasi</th>
                                    <th>Isi informasi</th>
                                    <th style="width: 100px">Action</th>
                                </tr>
                            </thead>
{{--                            <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg"--}}
{{--                                            style="height: 50px" />--}}
{{--                                    </td>--}}
{{--                                    <td><span class="maxlines">Pengumuman Pendaftaran, Pengerjaan soal tes</span></td>--}}
{{--                                    <td><span class="maxlines">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum--}}
{{--                                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem--}}
{{--                                            Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum--}}
{{--                                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem--}}
{{--                                            Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </span></td>--}}


{{--                                    <td><span class="d-flex gap-1">--}}
{{--                                            <a class="btn-primary-sm">Lihat--}}
{{--                                            </a>--}}
{{--                                            <a class="btn-warning-sm">Ubah--}}
{{--                                            </a>--}}

{{--                                            <a class="btn-danger-sm deletebutton">Hapus--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                            </tbody>--}}
                            <tfoot>
                                <tr>
                                    <th>#</th>
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
                    <form id="form" class="menu overflow-hidden" enctype="multipart/form-data" onsubmit="return confirmSave()">
                        @csrf
                        <div class="title-container">
                            <p class="title">Tambah informasi</p>
                        </div>
                        <input type="hidden" id="id" name="id">

                        <div class=" mb-3">
                            <label class="form-label">Gambar informasi</label>

                            <input type="file" id="image1" name="gambar" class="image"
                                   data-min-height="10" data-heigh="300" accept="image/*"/>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="judul" name="judul" required
                                placeholder="Nama informasi">
                            <label for="judul" class="form-label">Judul informasi</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="informasi" name="informasi" placeholder="Isi informasi" required> </textarea>
                            <label for="informasi" class="form-label">Isi informasi</label>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="bt-warning " onclick="resetForm()">Clear</button>
                            <button type="submit" class="bt-primary ">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('morejs')
    <script>
        $(document).ready(function () {
            show_datatable();
            setImgDropify('image1');
        });

        function resetForm() {
            setImgDropify('image1');
            $('#judul').val('')
            $('#id').val('')
            $('#informasi').val('')
        }

        function show_datatable() {
            let colums = [
                {
                    className: "text-center",
                    orderable: false,
                    defaultContent: "",
                    searchable: false
                },
                {
                    // data: 'public_health_center.name', name: 'public_health_center.name'
                    data: 'image', name: 'image',
                    render: function (data, x, row) {
                        return '<img  src="' + row.gambar + '" height="50" alt="img"/>'
                    }
                },
                {
                    data: 'judul', name: 'judul',
                },
                {
                    data: 'informasi', name: 'informasi',
                },
                {
                    className: "text-center",
                    data: 'id', name: 'id', orderable: false, searchable: false,
                    render: function (data, x, row) {
                        return '<div class="d-flex justify-content-between gap-1">' +
                            '       <a class="btn-primary-sm" id="">Lihat</a>' +
                            '       <a class="btn-warning-sm" id="editData"  data-image="' + row.gambar + '" data-judul="' + row.judul + '" data-informasi="'+row.informasi+'" data-id="' + data + '">Ubah</a>' +
                            '       <a class="btn-danger-sm deletebutton" id="deleteData" data-name="' + row.name + '" data-id="' + data + '">Hapus</a>' +
                            '</div>'
                    }
                },
            ];
            datatable('tabel', '{{route('admin.informasi.datatable')}}', colums)
        }

        function confirmSave() {
            saveData('Simpan Informasi','form','{{route('admin.informasi')}}', afterSave)
            return false
        }

        function afterSave() {
            $('#tabel').DataTable().ajax.reload();
        }

        $(document).on('click','#editData', function () {
            let id = $(this).data('id')
            let judul = $(this).data('judul')
            let informasi = $(this).data('informasi')
            let image = $(this).data('image')
            $('#judul').val(judul)
            $('#id').val(id)
            $('#informasi').val(informasi)
            setImgDropify('image1', null, $(this).data('image'));
        })

        $(document).on('click', '#deleteData', function () {
            let form = {
                '_token': '{{csrf_token()}}',
                'id': $(this).data('id')
            }
            deleteData('testimoni ' + $(this).data('judul'), '{{route('admin.informasi.delete')}}',form, afterSave)
            return false
        })
    </script>
@endsection
