@extends('siswa.base')

@section('content')
    <div class="dashboard">

        <div class="row">
            <div class="col-4">
                {{-- GAMBAR DARI INFORMASI --}}
                <img src="{{ asset('images/local/login.jpg') }}" class="gbr-info" />
            </div>
            <div class="col-8">
                <div class="dashboard">
                    <div class="menu-container">
                        <div class="menu overflow-hidden">
                            <div class="title-container">
                                <p class="title">Judul Informasi</p>
                            </div>
                            <div class="isi-informasi">
                                lorem ipsum dolor sit amet, consectetur adipis ac magna aliqu sapien sed magna aliqu fugiat
                                nulla pariatur et accusam et cupiditat non proident accus whence eu fug et accusam et
                                cupiditat non proident accus
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
