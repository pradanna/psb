@extends('admin.base')

@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="#">Profile</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada pertanyaan silahkan hubungi admin</span>
                </div>
            </div>


        </div>

        <div class="menu-container">
            <div class="menu">
                <div class="title-container">
                    <p class="title">Profile Yousee indonesia</p>
                </div>

                <input type="hidden" id="d-id" name="d-id">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-alamatpusat" name="p-alamatpusat"
                        placeholder="Jalan Balai Pustaka No.23,RW 6/RW 15, Rawamangun, Kecamatan Pulo Gadung, Kota Jakarta Timur, DKI Jakarta 13220  ">
                    <label for="p-alamatpusat" class="form-label">Alamat Kantor Pusat</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-alamatsolo" name="p-alamatsolo"
                        placeholder="Jl Sidoluhur, Tanjung Anom RT 6 RW 6, Kel Kwarasan, Kec Grogol, Kab Sukoharjo">
                    <label for="p-alamatsolo" class="form-label">Alamat Kantor Solo</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-notelp" name="p-notelp" placeholder="lokasi">
                    <label for="p-notelp" class="form-label">No Telp</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="p-email" name="p-email" placeholder="lokasi">
                    <label for="p-email" class="form-label">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea rows="3" style="min-height: 100px" type="text" class="form-control" id="p-sejarahsingkat"
                        name="p-sejarahsingkat"></textarea>
                    <label for="p-sejarahsingkat" class="form-label">Sejarah Singkat</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-telpkantor" name="p-telpkantor"
                        placeholder="Nomor Telp. Kantor">
                    <label for="p-telpkantor" class="form-label">No. Telp Kantor</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-petapusat" name="p-petapusat"
                        placeholder='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.508271932542!2d106.88216657576419!3d-6.196469660706733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5b4958505db%3A0x489cbcb4771909c!2sYousee%20Indonesia%20-%20Marketing%20Office%20%7C%7C%20Billboard%2C%20Baliho%2C%20Videotron%20Nasional%20Indonesia!5e0!3m2!1sen!2sid!4v1706332624474!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                    <label for="p-petapusat" class="form-label">Alamat Kantor Pusat</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-petasolo" name="p-petasolo"
                        placeholder='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.508271932542!2d106.88216657576419!3d-6.196469660706733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5b4958505db%3A0x489cbcb4771909c!2sYousee%20Indonesia%20-%20Marketing%20Office%20%7C%7C%20Billboard%2C%20Baliho%2C%20Videotron%20Nasional%20Indonesia!5e0!3m2!1sen!2sid!4v1706332624474!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'>
                    <label for="p-petasolo" class="form-label">Alamat Kantor Solo</label>
                </div>
                Sosial Media (Link)
                <div class="row">


                    <div class="col-md-3 col-sm-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-facebook" name="p-facebook"
                                placeholder="facebook">
                            <label for="p-facebook" class="form-label">Facebook</label>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-instagram" name="p-instagram"
                                placeholder="instagram">
                            <label for="p-instagram" class="form-label">Instagram</label>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-tiktok" name="p-tiktok"
                                placeholder="tiktok">
                            <label for="p-tiktok" class="form-label">Tiktok</label>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="p-whatsapp" name="p-whatsapp"
                                placeholder="whatsapp">
                            <label for="p-whatsapp" class="form-label">Whatsapp</label>
                        </div>
                    </div>


                    <button type="button" class="bt-primary m-2 ms-auto">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script>
        new DataTable('#tableTitik');


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
