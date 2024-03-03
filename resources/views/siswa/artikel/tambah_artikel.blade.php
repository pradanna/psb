@extends('admin.base')

@section('morecss')
    {{-- DROPZONE --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

    <!-- include summernote css/js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
@endsection


@section('content')
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="/admin/artikel">Data Artikel</a></li>
                        <li class="breadcrumb-item "><a href="#">Tambah Artikel</a></li>
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
                    <p class="title">Tambah Artikel</p>
                </div>



                <input type="hidden" id="d-id" name="d-id">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="p-judulartikel" name="p-judulartikel"
                        placeholder="Judul Artikel">
                    <label for="p-judulartikel" class="form-label">Judul Artikel</label>
                </div>


                <div class=" mb-3">
                    <label class="form-label">Gambar Utama</label>

                    <form action="/target" class="dropzone" id="p-gambar"></form>
                </div>


                <div class="row mb-3">
                    <div class="col-md-8 ">
                        <label for="p-tags" class="form-label">Tambahkan Tags</label>
                        <select class="form-select" id="p-tags" data-placeholder="Choose anything" multiple>
                            <option>Christmas Island</option>
                            <option>South Sudan</option>
                            <option>Jamaica</option>
                            <option>Kenya</option>
                            <option>French Guiana</option>
                            <option>Mayotta</option>
                            <option>Liechtenstein</option>
                            <option>Denmark</option>
                            <option>Eritrea</option>
                            <option>Gibraltar</option>
                            <option>Saint Helena, Ascension and Tristan da Cunha</option>
                            <option>Haiti</option>
                            <option>Namibia</option>
                            <option>South Georgia and the South Sandwich Islands</option>
                            <option>Vietnam</option>
                            <option>Yemen</option>
                            <option>Philippines</option>
                            <option>Benin</option>
                            <option>Czech Republic</option>
                            <option>Russia</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex gap-2">
                        <div class="w-100   ">
                            <div class=" mb-3">
                                <label for="p-newtags" class="form-label" style="font-size: 0.6rem">Tambahkan Tags *jika
                                    belum ada</label>

                                <input type="text" class="form-control" style="height: 2.5rem;" id="p-newtags"
                                    name="p-newtags" placeholder="tags baru">
                            </div>

                        </div>
                        <div>
                            <label class="form-label">.</label>
                            <button type="button"
                                class="btn-warning-sm text-nowrap d-flex align-items-center  justify-content-center "
                                style="height: 2.5rem;  padding-top: 0; padding-bottom: 0"><span
                                    class="material-symbols-outlined">
                                    save
                                </span></button>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="control-label" for="p-isiartikel">Isi Artikel</label>
                    <textarea id="p-isiartikel" class="summernote" name="p-isiartikel"></textarea>
                </div>

                <button type="button" class="bt-primary m-2 ms-auto">Simpan Perubahan</button>

            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script>
        // Note that the name "myDropzone" is the camelized
        // id of the form.
        Dropzone.options.myDropzone = {
            // Configuration options go here
        };

        $('#p-tags').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });

        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endsection
