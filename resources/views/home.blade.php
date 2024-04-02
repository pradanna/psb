@extends('base')

@section('content')
    <div class="g-hero">
        <div class="hero-text">
            <img src="{{ asset('images/local/namasistem.png') }}" class="img-namasistem" />
        </div>
        <div class="article-full mb-5 ">
            <div class="article-content">
                <div class="article-wrapper">
                    <h1>Informasi Terbaru</h1>
                    <img src="{{ asset($informasi->gambar) }}" />

                    <p class="title">{{ $informasi->judul }}</p>
                    <hr>
                    <p class="isi">{{ $informasi->informasi }}
                    </p>
                </div>

            </div>
        </div>
    </div>




    <script src="{{ asset('js/fitty.min.js') }}"></script>
    <script>
        fitty('.fittopage');
    </script>
@endsection()
