@extends('admin.base')

@section('content')
    <div class="dashboard">
        {{-- STATUS --}}
        <div class="status-container icon-circle">
            <a class="card-status color1" href="/admin/datatitik">
                <div class="content">
                    <div class="stat">
                        <p class="title">Jumlah Titik</p>
                        <p class="val">100</p>
                    </div>

                    <div class="report">
                        <p> <span class="down">100</span> Jumlah titik yang ditampilkan untuk public.</p>
                    </div>
                </div>

                <div class="icon-container">
                    <span class="material-symbols-outlined">
                        assignment
                    </span>
                </div>
            </a>

            <a class="card-status color2" href="/admin/datatitik">
                <div class="content">
                    <div class="stat">
                        <p class="title">Jumlah Artikel</p>
                        <p class="val">120</p>
                    </div>

                    <div class="report">
                        <p> <span class="down">120</span> Jumlah artikel.</p>
                    </div>
                </div>

                <div class="icon-container">
                    <span class="material-symbols-outlined">
                        event_available
                    </span>
                </div>
            </a>

            <a class="card-status color3" href="/admin/datatitik">
                <div class="content">
                    <div class="stat">
                        <p class="title">Jumlah Portfolio</p>
                        <p class="val">100</p>
                    </div>

                    <div class="report">
                        <p> <span class="down">100</span> Titik portfolio.</p>
                    </div>
                </div>

                <div class="icon-container">
                    <span class="material-symbols-outlined">
                        cast
                    </span>
                </div>
            </a>


        </div>

        {{-- Titik disewa --}}
        <div class="menu-container  ">
            <div class="menu overflow-hidden">
                <div class="title-container">
                    <p class="title">Inbox</p>
                </div>
                <table id="tableTitik" class="table table-striped nowrap " style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Whatsapp</th>
                            <th>Pesan</th>
                            <th>Action</th>
                            {{-- detail, ubah status pesanan --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bagus</td>
                            <td>0895178657</td>
                            <td>Halo, saya mau pasang billboard untuk kota Solo 20 titik, gimana caranya ?</td>
                            <td><span class="d-flex gap-1"><a class="btn-primary-sm" data-bs-toggle="modal"
                                        data-bs-target="#modaldetail">Whatsapp</a>
                                    <a class="btn-warning-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalubahpesanan">Hapus</a>
                                </span>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Whatsapp</th>
                            <th>Pesan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalubahpesanan" tabindex="-1" aria-labelledby="modalubahpesananLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalubahpesananLabel">Ubah Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="border-radius: 5px; border: 1px solid #eee; padding: 10px " class="mb-3">
                        <div class="d-flex justify-content-between ">
                            <div class="info-titik">
                                <div class="mb-2">
                                    <span class="title">Kota</span> <br>
                                    <span>Kota</span>
                                </div>
                                <div>
                                    <span class="title ">Alamat</span> <br>
                                    <span>Jalan A Yani, Manahan, Banjarsari, Surakarta, Jawa Tengah</span>
                                </div>
                            </div>
                            <div>
                                <span class="pill-bg disewa">disewa</span>
                            </div>
                        </div>
                    </div>

                    <form class="mb-3">

                        <div class="mb-3">
                            <label for="startDate" class="label-input">Disewa dari tanggal</label>
                            <input id="startDate" class="form-control" type="date" />
                            <span id="startDateSelected"></span>
                        </div>
                        <div class="mb-3">
                            <label for="endDate" class="label-input">Sampai tanggal</label>
                            <input id="endDate" class="form-control" type="date" />
                            <span id="endDateSelected"></span>
                        </div>

                        <div>
                            <button type="submit" class="bt-primary full">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="modaldetail" tabindex="-1" aria-labelledby="modaldetail" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Titik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <ul class="nav nav-pills mb-3" id="pills-tab-detail" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link genostab active" id="pills-detail-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-detail" type="button" role="tab"
                                aria-controls="pills-detail" aria-selected="true">Detail
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link genostab" id="pills-maps-tab-detail" data-bs-toggle="pill"
                                data-bs-target="#pills-maps" type="button" role="tab" aria-controls="pills-maps"
                                aria-selected="false">Maps
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link genostab" id="pills-gambar1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-gambar1" type="button" role="tab"
                                aria-controls="pills-gambar1" aria-selected="false">Gambar
                            </button>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-detail" role="tabpanel"
                            aria-labelledby="pills-detail-tab">
                            <div class="row">
                                <input type="hidden" id="d-id" name="d-id">


                                <div class="col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="d-provinsi" name="d-provinsi"
                                            readonly placeholder="Provinsi" value="test">
                                        <label for="d-provinsi" class="form-label">Provinsi</label>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="d-kota" name="d-kota"
                                            readonly placeholder="Kota">
                                        <label for="d-kota" class="form-label">Kota</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="d-alamat" name="d-alamat" readonly
                                    placeholder="alamat">
                                <label for="d-alamat" class="form-label">Alamat</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="d-lokasi" name="d-lokasi" readonly
                                    placeholder="lokasi">
                                <label for="d-lokasi" class="form-label">Lokasi</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="d-urlstreetview" name="d-urlstreetview"
                                    readonly placeholder="urlstreetview">
                                <label for="d-urlstreetview" class="form-label">URL Street View</label>
                            </div>




                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="d-tipe" name="d-tipe"
                                            readonly placeholder="tipe">
                                        <label for="d-tipe" class="form-label">Tipe</label>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="d-posisi" name="d-posisi"
                                            readonly placeholder="posisi">
                                        <label for="d-posisi" class="form-label">Posisi</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="d-panjang" type="number"
                                            readonly name="d-panjang" placeholder="0">
                                        <label for="d-panjang" class="form-label">Panjang/Tinggi</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="d-lebar" name="d-lebar"
                                            readonltableTitiky placeholder="0">
                                        <label for="d-lebar" class="form-label">Lebar</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="d-sisi" type="number"
                                            readonly name="d-sisi" placeholder="0">
                                        <label for="d-sisi" class="form-label">Sisi</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="d-trafik" />
                                        <label for="d-trafik" class="form-label">Trafik</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-maps" role="tabpanel" aria-labelledby="pills-maps-tab">
                            <div class="panel-peta mb-3" id="map-detail">
                                <div class="maps">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15819.870767231081!2d110.8195408!3d-7.578495749999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1705640877995!5m2!1sen!2sid"
                                        style="border:0;width: 100%; height: 500px;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="street">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!4v1705640909558!6m8!1m7!1sn74xmFeOXL1zClJPLP_nSg!2m2!1d-7.580094072252944!2d110.8180529316843!3f355.22287!4f0!5f0.7820865974627469"
                                        style="border:0; width: 100%; height: 500px;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>



                        </div>
                        <div class="tab-pane fade" id="pills-gambar1" role="tabpanel"
                            aria-labelledby="pills-gambar1-tab">
                            <div class="panel-gambar">
                                <img src="{{ asset('images/local/login.jpg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script script>
        var tabletitik = $('#tableTitik').DataTable({
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
        // new $.fn.dataTable.FixedHeader(tabletitik);

        let startDate = document.getElementById('startDate')
        let endDate = document.getElementById('endDate')

        startDate.addEventListener('change', (e) => {
            let startDateVal = e.target.value
            document.getElementById('startDateSelected').innerText = startDateVal
        })

        endDate.addEventListener('change', (e) => {
            let endDateVal = e.target.value
            document.getElementById('endDateSelected').innerText = endDateVal
        })
    </script>
@endsection
