@extends('admin.base')

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
                    </span><span>Jika ada kendala, silahkan hubungi developer website</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="menu-container">
                    <div class="menu overflow-hidden">
                        <div class="title-container">
                            <p class="title">Data soal {{$data->nama}}</p>
                        </div>
                        <table id="tabel" class="table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar soal</th>
                                <th>Soal</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>Pilihan 3</th>
                                <th>Pilihan 4</th>
                                <th>Jawaban</th>
                                <th style="width: 50px">Action</th>
                            </tr>
                            </thead>
                            {{--                            <tbody>--}}
                            {{--                                <tr>--}}
                            {{--                                    <td>1</td>--}}
                            {{--                                    <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg"--}}
                            {{--                                            style="height: 50px" />--}}
                            {{--                                    </td>--}}
                            {{--                                    <td><span class="maxlines">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum--}}
                            {{--                                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem--}}
                            {{--                                            Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum--}}
                            {{--                                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem--}}
                            {{--                                            Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </span></td>--}}

                            {{--                                    <td>Pilihan 1</td>--}}
                            {{--                                    <td>Pilihan 2</td>--}}
                            {{--                                    <td>Pilihan 3</td>--}}
                            {{--                                    <td>Pilihan 4</td>--}}

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
                                <th>Gambar soal</th>
                                <th>Soal</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>Pilihan 3</th>
                                <th>Pilihan 4</th>
                                <th>Jawaban</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-container">
                    <form id="form" enctype="multipart/form-data" class="menu overflow-hidden" onsubmit="return confirmSave()">
                        @csrf
                        <div class="title-container">
                            <p class="title">Tambah soal</p>
                        </div>
                        <input type="hidden" id="id" name="id">

                        <div class=" mb-3">
                            <label class="form-label">Gambar soal</label>
                            <br>
                            <input type="file" id="image1" name="gambar" class="image"
                                   data-min-height="10" data-heigh="300" accept="image/*"/>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="soal" name="soal" placeholder="soal"> </textarea>
                            <label for="soal" class="form-label">Soal</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" checked type="radio" name="jawaban_benar" value="1"
                                   id="jawaban1">
                            <label for="jawaban1" class="form-label">Pilihan 1</label>
                            <input type="text" class="form-control" id="pilihan_1" name="pilihan_1"
                                   placeholder="Jawaban 1">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban2" value="2">
                            <label for="jawaban2" class="form-label">Pilihan 2</label>
                            <input type="text" class="form-control" id="pilihan_2" name="pilihan_2"
                                   placeholder="Jawaban 2">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban3" value="3">
                            <label for="jawaban3" class="form-label">Pilihan 3</label>
                            <input type="text" class="form-control" id="pilihan_3" name="pilihan_3"
                                   placeholder="Jawaban 3">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="jawaban_benar" id="jawaban4" value="4">
                            <label for="jawaban4" class="form-label">Pilihan 4</label>
                            <input type="text" class="form-control" id="pilihan_4" name="pilihan_4"
                                   placeholder="Jawaban 4">
                        </div>

                        <span class="text-sm text-primary ">*Tandai Jawaban yang Benar</span>
                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="bt-warning " onclick="resetForm()">Clear</button>
                            <button type="submit" class="bt-primary">Simpan Perubahan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('morejs')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>

        $(document).ready(function () {
            show_datatable();
            setImgDropify('image1');
        });

        function resetForm() {
            setImgDropify('image1');
            $('#id').val('')
            $('#pilihan_1').val('')
            $('#pilihan_2').val('')
            $('#pilihan_3').val('')
            $('#pilihan_4').val('')
            $('#soal').val('')
            $('#jawaban1').prop('checked', true);
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
                    data: 'gambar_soal', name: 'gambar_soal',
                    render: function (data, x, row) {
                        return row.gambar_soal ? '<img  src="' + row.gambar_soal + '" height="50" alt="img"/>' : ''
                    }
                },
                {
                    data: 'soal', name: 'soal',
                },
                {
                    data: 'pilihan_1', name: 'pilihan_1',
                }, {
                    data: 'pilihan_2', name: 'pilihan_2',
                }, {
                    data: 'pilihan_3', name: 'pilihan_3',
                }, {
                    data: 'pilihan_4', name: 'pilihan_4',
                },
                {
                    data: 'jawaban_benar', name: 'jawaban_benar',
                    render:function (data) {
                        return 'Pilihan '+data
                    },
                },
                {
                    className: "text-center",
                    data: 'id', name: 'id', orderable: false, searchable: false,
                    render: function (data, x, row) {
                        return '<div class="d-flex justify-content-center gap-1">' +
                            '       <a class="btn-primary-sm" id="">Lihat</a>' +
                            '       <a class="btn-warning-sm" id="editData"  data-image="' + row.gambar_soal + '" data-soal="' + row.soal + '" data-pilihan1="' + row.pilihan_1 + '" data-pilihan2="' + row.pilihan_2 + '"' +
                            '      data-pilihan3="' + row.pilihan_3 + '" data-pilihan4="' + row.pilihan_4 + '" data-jawaban="' + row.jawaban_benar + '" data-id="' + data + '">Ubah</a>' +
                            '       <a class="btn-danger-sm deletebutton" id="deleteData" data-name="' + row.soal + '" data-id="' + data + '">Hapus</a>' +
                            '</div>'
                    }
                },
            ];
            datatable('tabel', '{{route('admin.paketsoal.soal.datatable',['url' => request('url')])}}', colums)
        }

        function confirmSave() {
            saveData('Simpan soal', 'form', '{{route('admin.paketsoal.soal',['url' => request('url')])}}', afterSave)
            return false
        }

        function afterSave() {
            $('#tabel').DataTable().ajax.reload();
            resetForm()
        }

        $(document).on('click', '#editData', function () {
            let gambar = $(this).data('image')
            let soal = $(this).data('soal')
            let pilihan1 = $(this).data('pilihan1')
            let pilihan2 = $(this).data('pilihan2')
            let pilihan3 = $(this).data('pilihan3')
            let pilihan4 = $(this).data('pilihan4')
            let jawaban = $(this).data('jawaban')
            let id = $(this).data('id')

            $('#id').val(id);
            $('#soal').val(soal);
            $('#pilihan_1').val(pilihan1)
            $('#pilihan_2').val(pilihan2)
            $('#pilihan_3').val(pilihan3)
            $('#pilihan_4').val(pilihan4)
            $('#jawaban' + jawaban).prop('checked', true);
            setImgDropify('image1', null, gambar);
        })

        $(document).on('click', '#deleteData', function () {
            let form = {
                '_token': '{{csrf_token()}}',
                'id': $(this).data('id')
            }
            deleteData('soal ' + $(this).data('name'), '{{route('admin.paketsoal.soal.delete')}}',form, afterSave)
            return false
        })

    </script>
@endsection
