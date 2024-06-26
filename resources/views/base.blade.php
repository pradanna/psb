<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MTSN SRAGEN</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    {{-- BOOTSTRAP --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- CSS --}}
    <link href="{{ asset('css/genosstyle.v.01.css') }}" rel="stylesheet" />

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;700;800&display=swap"
        rel="stylesheet">


    {{-- DATA TABLES --}}
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />


    {{-- ICON --}}


    {{-- SWEEET ALERT --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">


    @yield('morecss')

</head>

<body class="bg-web">
    <nav class="g-navbar container ">
        <img src="{{ asset('images/local/logo.png') }}" />
        <div class="g-nav-menu">
            <a class="menu {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda<span
                    class="indicator "></span></a>
            <a class="menu {{ Request::is('pengumuman') ? 'active' : '' }}" href="/pengumuman">Pengumuman
                Penerimaan<span class="indicator"></span></a>
            <a class="menu {{ Request::is('daftar') ? 'active' : '' }}" href="/daftar">Daftar <span
                    class="indicator"></span></a>
            <a class="menu {{ Request::is('login') ? 'active' : '' }}" href="/login">Masuk <span
                    class="indicator"></span></a>
        </div>
        <div class="g-nav-social">
            <a>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    stroke-width="1.5" width="20" height="20">
                    <defs>
                        <style>
                            .cls-637b8512f95e86b59c57a11c-1 {
                                fill: none;
                                stroke: currentColor;
                                stroke-miterlimit: 10;
                            }

                            .cls-637b8512f95e86b59c57a11c-2 {
                                fill: currentColor;
                            }
                        </style>
                    </defs>
                    <rect class="cls-637b8512f95e86b59c57a11c-1" x="1.5" y="1.5" width="21" height="21"
                        rx="3.82"></rect>
                    <circle class="cls-637b8512f95e86b59c57a11c-1" cx="12" cy="12" r="4.77"></circle>
                    <circle class="cls-637b8512f95e86b59c57a11c-2" cx="18.2" cy="5.8" r="1.43"></circle>
                </svg>
            </a>
            <a>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    stroke-width="1.5" width="20" height="20">
                    <defs>
                        <style>
                            .cls-637b8512f95e86b59c57a116-1 {
                                fill: none;
                                stroke: currentColor;
                                stroke-miterlimit: 10;
                            }
                        </style>
                    </defs>
                    <path class="cls-637b8512f95e86b59c57a116-1"
                        d="M17.73,6.27V1.5h-1A7.64,7.64,0,0,0,9.14,9.14v.95H6.27v3.82H9.14V22.5h4.77V13.91h2.86V10.09H13.91V9.14a2.86,2.86,0,0,1,2.86-2.87Z">
                    </path>
                </svg>
            </a>

        </div>

    </nav>
    @yield('content')

    {{-- ONE TIME --}}


    <footer class="footer">
        <div class="row gx-3 ">
            <div class="col-4">
                <img class="footer-logo" src="{{ asset('images/local/logo.png') }}" />

            </div>
            <div class="col-4">
                <p class="header">Contact Us</p>
                <p class="text"><span><img class="icon-text"
                            src="{{ asset('images/local/icon/home-address.png') }}" /></span>Jl. Raya Solo - Purwodadi
                    Km 32 Sumberlawang Sragen </p>

                <p class="text"><span><img class="icon-text"
                            src="{{ asset('images/local/icon/phone.png') }}" /></span> 0271-8501774</p>


            </div>

            <div class="col-4">
                <p class="header">Social Media</p>
                <div class="g-nav-social">
                    <a>
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            stroke-width="1.5" width="20" height="20">
                            <defs>
                                <style>
                                    .cls-637b8512f95e86b59c57a11c-1 {
                                        fill: none;
                                        stroke: currentColor;
                                        stroke-miterlimit: 10;
                                    }

                                    .cls-637b8512f95e86b59c57a11c-2 {
                                        fill: currentColor;
                                    }
                                </style>
                            </defs>
                            <rect class="cls-637b8512f95e86b59c57a11c-1" x="1.5" y="1.5" width="21" height="21"
                                rx="3.82"></rect>
                            <circle class="cls-637b8512f95e86b59c57a11c-1" cx="12" cy="12" r="4.77">
                            </circle>
                            <circle class="cls-637b8512f95e86b59c57a11c-2" cx="18.2" cy="5.8" r="1.43">
                            </circle>
                        </svg>
                    </a>
                    <a>
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" stroke-width="1.5" width="20" height="20">
                            <defs>
                                <style>
                                    .cls-637b8512f95e86b59c57a116-1 {
                                        fill: none;
                                        stroke: currentColor;
                                        stroke-miterlimit: 10;
                                    }
                                </style>
                            </defs>
                            <path class="cls-637b8512f95e86b59c57a116-1"
                                d="M17.73,6.27V1.5h-1A7.64,7.64,0,0,0,9.14,9.14v.95H6.27v3.82H9.14V22.5h4.77V13.91h2.86V10.09H13.91V9.14a2.86,2.86,0,0,1,2.86-2.87Z">
                            </path>
                        </svg></a>

                </div>
            </div>

        </div>
        <hr>
        <div class="d-flex justify-content-between  ">
            <p>
                Copyright © 2024 MTS N 3 SRAGEN
            </p>


        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"
        integrity="sha256-SrfCZ78qS4YeGNB8awBuKLepMKtLR86uP4oomyg4pUc=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    @yield('morejs')
</body>

</html>
