<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calon Siswa || kerjakan Soal</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



    {{-- BOOTSTRAP --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS --}}
    <link href="{{ asset('css/admin-genosstyle.css') }}" rel="stylesheet" />

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap"
        rel="stylesheet">


    {{-- DATA TABLES --}}
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />


    {{-- ICON --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


    {{-- SWEEET ALERT --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.4/sweetalert2.min.js"></script>
    @yield('morecss')

</head>

<body>

    <div class="d-flex admin ">
        {{-- SIDEBAR --}}
        <div class="sidebar ">
            <div class="logo-container">
                <img class="company-logos" src="{{ asset('images/local/logo.png') }}" alt="logo-img" />
                <img class="company-logos-minimize" src="{{ asset('images/local/logo.png') }}" alt="logo-img" />
            </div>
            <div class="menu-container">

                <p>Nomor Soal</p>
                <div class="nomorsoal-wrapper">
                    @foreach ($soal as $key => $data)
                        <a href="{{ '/' . request()->path() . '?nomor=' . ($key + 1) }}"
                            class="nomorsoal {{ $current_soal_index === $key + 1 ? 'active' : (in_array($data->id, $current_jawaban) ? 'terisi' : '') }}"
                            data-id="{{ $data->id }}">{{ $key + 1 }}</a>
                    @endforeach
                </div>

                <div class="mt-5">
                    <p class="mb-0 fw-bold ">Keterangan warna:</p>
                    <p class="mb-0 fs-06 d-flex align-items-md-center gap-3 mb-1 "><a class="nomorsoal">0</a> Belum
                        Dikerjakan
                    </p>
                    <p class="mb-0 fs-06 d-flex align-items-md-center gap-3  mb-1  "><a class="nomorsoal terisi">0</a>
                        Sudah
                        Dikerjakan</p>
                    <p class="mb-0 fs-06 d-flex align-items-md-center  gap-3 "><a
                            class="nomorsoal active">0</a>Indikator
                        nomor</p>
                </div>

                <div class="footer">
                    <p class="top">Login Sebagai</p>
                    <p class="bot">Calon Siswa</p>
                </div>
            </div>
        </div>


        {{-- BODY --}}
        <div class="gen-body  ">


            {{-- NAVBAR --}}
            <div class="gen-nav">
                <div class="start">
                    <a class="nav-button">
                        <span class="iconfwd material-symbols-outlined">
                            arrow_forward
                        </span>
                        <span class="iconback material-symbols-outlined">
                            arrow_back
                        </span>
                    </a>
                </div>
                <div class="end">

                    <div class="dropdown">
                        <div class="profile-button">
                            <div class="content">

                                <a id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img
                                        src="https://store.sirclo.com/blog/wp-content/uploads/2022/04/6.-user-persona.jpg" />
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <p class="user">User</p>
                                    <p class="email">user@gmail.com</p>
                                    <hr>
                                    <a class="logout" href="">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CONTENT --}}
            <div class="gen-content">
                @yield('content')
            </div>

            <div class="bottom-mobile">

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.4/sweetalert2.min.js"></script>



    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('js/admin-genosstyle.js') }}"></script>

    @yield('morejs')

</body>

</html>
