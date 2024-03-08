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
                        <div class="table-responsive">
                            <table id="tabel" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cover Paket</th>
                                    <th>Nama</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status</th>
                                    <th>Waktu</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="https://www.dreambox.id/wp-content/uploads/2022/06/15.jpg"
                                             style="height: 50px"/>
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
                                    <th>Nama</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status</th>
                                    <th>Waktu</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-container">
                    <form id="form" onsubmit="return confirmSave()" class="menu overflow-hidden">
                        @csrf
                        <div class="title-container">
                            <p class="title">Tambah soal</p>
                        </div>
                        <input type="hidden" id="id" name="id">

                        <div class=" mb-3">
                            <label class="form-label">Cover Paket Soal</label>
                            <br>
                            <input type="file" id="image1" name="gambar" class="image"
                                   data-min-height="10" data-heigh="300" accept="image/*"/>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="nama" name="nama" placeholder="soal"> </textarea>
                            <label for="nama" class="form-label">Nama Paket Soal</label>
                        </div>


                        <select class="form-select mb-3 " id="ajaranSelect" name="tahun_ajaran_id" aria-label="Default select example">
                            <option selected>Pilih Tahun Ajaran</option>
                            @foreach($ajaran as $d)
                                <option value="{{$d->id}}">{{$d->nama}}</option>
                            @endforeach
                        </select>

                            <div class="form-group mb-3">
                                <label for="durasi" class="form-label">Durasi (Menit)</label>
                                <input type="text" class="form-control" id="durasi" name="durasi" placeholder="60"/>
                            </div>

                        <div class="form-group mb-3">
                            <label for="waktu_pengerjaan" class="form-label">Waktu Pengerjaan</label>
                            <input type="datetime-local" class="form-control" id="waktu_pengerjaan" name="waktu_pengerjaan" placeholder="60"/>
                        </div>
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
    <script>
        $(document).ready(function () {
            show_datatable();
            setImgDropify('image1');
        });

        function resetForm() {
            setImgDropify('image1');
            $('#nama').val('')
            $('#id').val('')
            $('#durasi').val('')
            $('#ajaranSelect').val('')
            $('#waktu_pengerjaan').val('')
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
                    data: 'nama', name: 'nama',
                },
                {
                    data: 'tahun_ajaran.nama', name: 'tahun_ajaran.nama',
                },
                {
                    data: 'status', name: 'status',
                },
                {
                    data: 'durasi', name: 'durasi',
                },
                {
                    className: "text-center",
                    data: 'id', name: 'id', orderable: false, searchable: false,
                    render: function (data,x,row) {
                        return '<span class="d-flex gap-1">' +
                            '<a class="btn-primary-sm" href="/admin/paketsoal/soal/'+row.url+'">Lihat Soal' +
                            '</a>' +
                            '<a class="btn-warning-sm" id="editData" data-id="'+data+'" data-start="'+row.waktu_pengerjaan+'" data-gambar="'+row.gambar+'" data-nama="'+row.nama+'" data-durasi="'+row.durasi+'" data-ajaran="'+row.tahun_ajaran_id+'">Ubah' +
                            '</a>' +
                            ' <a class="btn-danger-sm deletebutton">Hapus' +
                            '</a>' +
                            '<div class="dropdown">' +
                            '<a class="btn-status-sm dropdown-toggle" href="#" role="button"' +
                            '       data-bs-toggle="dropdown" aria-expanded="false">' +
                            '        Ubah Status Soal' +
                            '    </a>' +
                            '    <ul class="dropdown-menu">' +
                            '        <li><a class="dropdown-item gantiStatus" data-id="'+data+'" data-stat="menunggu" href="#">Menunggu Waktu</a></li>' +
                            '       <li><a class="dropdown-item gantiStatus" data-id="'+data+'" data-stat="siap" href="#">Siap Dikerjakan</a></li>' +
                            '        <li><a class="dropdown-item gantiStatus" data-id="'+data+'" data-stat="selesai" href="#">Selesai</a></li>' +
                            '    </ul>' +
                            ' </div>' +
                            '</span>';
                    }
                },
            ];
            datatable('tabel', '{{route('admin.paketsoal.datatable')}}', colums)
        }

        function confirmSave() {
            saveData('Simpan Informasi','form','{{route('admin.paketsoal')}}', afterSave)
            return false
        }

        function afterSave() {
            $('#tabel').DataTable().ajax.reload();
        }


        $(document).on('click','#editData', function () {
            let id = $(this).data('id')
            let start = $(this).data('start')
            let waktu_pengerjaan = $(this).data('start')
            let image = $(this).data('gambar')
            let nama = $(this).data('nama')
            let durasi = $(this).data('durasi')
            let ajaran = $(this).data('ajaran')
            $('#nama').val(nama)
            $('#id').val(id)
            $('#durasi').val(durasi)
            $('#ajaranSelect').val(ajaran)
            console.log('waktu_pengerjaan',waktu_pengerjaan)
            $('#waktu_pengerjaan').val(waktu_pengerjaan)
            setImgDropify('image1', null, image);
        })

        $(document).on('click','.gantiStatus', function () {
            let status = $(this).data('stat')
            let id = $(this).data('id')
            let url = '{{route('admin.paketsoal.status',['id' => 'valllll'])}}'
            url = url.replace('valllll',id)
            let form = {
                '_token': '{{csrf_token()}}',
                'status': status
            }
            $.post(url,form, function (res,x,r) {
                if (r.status == 200){
                    afterSave()
                }
            })
        })
    </script>
@endsection
