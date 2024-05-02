<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Calon Siswa || Genos Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- BOOTSTRAP --}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- SWEEET ALERT --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.4/sweetalert2.min.css">
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
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" />


    {{-- ICON --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.4/sweetalert2.min.js"></script>

    @yield('morecss')

</head>

<body>

    <div class="d-flex admin ">
        {{-- SIDEBAR --}}
        <div class="sidebar ">
            <div class="logo-container">
                <img class="company-logos" src="{{ asset('images/local/logo.png') }}" />
                <img class="company-logos-minimize" src="{{ asset('images/local/logo.png') }}" />
            </div>
            <div class="menu-container">

                <ul>
                    <li>
                        <a class=" menu {{ request()->is('siswa') ? 'active' : '' }} tooltip"
                            href="{{ route('siswa.dashboard') }}"><span class="material-symbols-outlined">
                                dashboard
                            </span>
                            <span class="text-menu"> Beranda</span>
                            <span class="tooltiptext">Beranda</span>
                        </a>
                    </li>

                    <li>
                        <a class="menu tooltip {{ request()->is('siswa/profil') ? 'active' : '' }}"
                            href="{{ route('siswa.profil') }}"><span class="material-symbols-outlined">
                                account_circle
                            </span>
                            <span class="text-menu"> Profile</span>
                            <span class="tooltiptext">Profile</span>
                        </a>
                    </li>


                    <li>
                        <a class="menu tooltip {{ request()->is('siswa/soal') ? 'active' : '' }}"
                            href="{{ route('siswa.soal') }}">

                            <span class="material-symbols-outlined">
                                home_repair_service
                            </span>
                            <span class="text-menu"> Soal</span>
                            <span class="tooltiptext">Soal</span>
                        </a>
                    </li>
                </ul>

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
                                    <img src="https://www.freeiconspng.com/thumbs/account-icon/account-icon-33.png" />
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <p class="user">User</p>
                                    <p class="email">user@gmail.com</p>
                                    <hr>
                                    <a class="logout" href="/logout">Logout</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>



    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script src="{{ asset('js/admin-genosstyle.js') }}"></script>

    @yield('morejs')

</body>

</html>
