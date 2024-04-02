<!doctype html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulir {{ $siswa->url_foto }}</title>
    <!-- Fonts -->

    <!-- Styles -->
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('bootsrap/css/bootstrap/bootstrap.css') }}" type="text/css"> --}}


</head>

<body>
    <style type="text/css">
        @page {
            margin: 0px;
        }

        /* * { padding: 0; margin: 0; } */
        @font-face {
            font-family: "source_sans_proregular";
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        }

        body {
            font-family: "source_sans_proregular", Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
        }
    </style>

    <style>
        .container {
            margin-left: 80px;
            margin-right: 80px;
        }

        .normalfontsize {
            font-size: 0.9rem
        }

        .tablefontsize {
            font-size: 0.75rem
        }

        .w-100 {
            width: 100%;
        }

        .margin-normal {
            margin-top: 0 !important;
            margin-bottom: 0;
            padding-bottom: 5px !important;
        }

        .text-bold {
            font-weight: bold;
        }

        .text-center {
            text-align: center !important;
        }

        .text-left {
            text-align: left !important;
        }

        .bg-blue {
            background-color: rgb(43, 102, 168);
            color: white;
        }

        .mx-1 {
            margin-right: 10px;
            margin-left: 10px;
        }

        table,
        th,
        td {
            border: none;
            border-collapse: collapse;
        }

        td {
            padding: 5;
        }


        .px-1 {
            padding-right: 10px;
            padding-left: 10px;
        }

        .wo-border {
            border: none;
            padding-top: 0 !important;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: black;
            border-radius: 50px;
            display: inline-block;
            margin-right: 10px
        }

        ul {
            margin-top: 0 !important;
        }

        .page-break {
            page-break-after: always;
        }
    </style>

    <div>
        <div style="padding: 20px">
            <img src="{{ public_path() }}/images/local/kop.jpg" style="width: 100%" />
            <hr style="margin-bottom: 20px;">

            <div style="float: left">
                <table>
                    <tr>
                        <td>
                            Nama
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $siswa->user->nama }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            TTL
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }} S
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Jenis Kelamin
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $siswa->jenis_kelamin }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Alamat
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $siswa->alamat }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Asal Sekolah
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $siswa->asal_sekolah }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nomor HP
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $siswa->no_hp }}
                        </td>
                    </tr>
                </table>
            </div>

            <div style="float: right">
                <img src="{{ public_path() }}{{ $siswa->url_foto }}" style="width: 200px" />
            </div>
        </div>


        <!-- JS -->
        <script src="js/app.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
