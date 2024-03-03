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
                    <img src="{{ asset('images/local/login.jpg') }}" />

                    <p class="title">Judul Pengumuman</p>
                    <hr>
                    <p class="isi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem
                        reiciendis
                        sunt repudiandae
                        eum
                        inventore nesciunt, dignissimos, enim vitae eveniet rerum obcaecati commodi recusandae voluptas
                        minima!
                        Eos
                        blanditiis repellat ducimus?


                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem
                        reiciendis
                        sunt repudiandae
                        eum
                        inventore nesciunt, dignissimos, enim vitae eveniet rerum obcaecati commodi recusandae voluptas
                        minima!
                        Eos
                        blanditiis repellat ducimus?

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem
                        reiciendis
                        sunt repudiandae
                        eum
                        inventore nesciunt, dignissimos, enim vitae eveniet rerum obcaecati commodi recusandae voluptas
                        minima!
                        Eos
                        blanditiis repellat ducimus?

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem
                        reiciendis
                        sunt repudiandae
                        eum
                        inventore nesciunt, dignissimos, enim vitae eveniet rerum obcaecati commodi recusandae voluptas
                        minima!
                        Eos
                        blanditiis repellat ducimus?
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
