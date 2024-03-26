@extends('siswa.base')

@section('content')
    <div class="dashboard">
        @foreach($informasi as $data)
            <div class="row mb-3">
                <div class="col-4">
                    {{-- GAMBAR DARI INFORMASI --}}
                    <img src="{{ asset($data->gambar) }}" class="gbr-info" alt="information-img"/>
                </div>
                <div class="col-8">
                    <div class="dashboard">
                        <div class="menu-container">
                            <div class="menu overflow-hidden">
                                <div class="title-container">
                                    <p class="title">{{ $data->judul }}</p>
                                </div>
                                <div class="isi-informasi">
                                    {{ $data->informasi }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
