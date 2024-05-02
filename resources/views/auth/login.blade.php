<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('images/local/favicon.ico') }}" title="Favicon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-genosstyle.css') }}" type="text/css">
    {{-- BOOTSTRAP --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('/css/sweetalert2.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/sweetalert2.min.js') }}"></script>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="w-100 h-100 bg-login">
    <div style="height: 100vh">
        @if (\Illuminate\Support\Facades\Session::has('failed'))
            <script>
                Swal.fire("Autentikasi Gagal ", 'Periksa Username dan Password!', "error")
            </script>
        @endif
        <div class="login">
            <div class="panel-login pinggiran-bunder-10  ">

                <div class="gambar">
                    <img src={{ asset('images/local/login.jpg') }} />
                </div>

                <div class="login-container">
                    <div>
                        <p class="text-center mt-3 h2 fw-bold">Hello Again!</p>
                        <p class="text-center mt-3  fw-bold">Masukan Username dan Password</p>

                        <form class="p-3" method="POST" onsubmit="return confirmSave()">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" required class="form-control login" id="username" name="username"
                                    value="{{ old('username') }}">
                                @if ($errors->has('username'))
                                    <p class="text-danger" style="font-size: 0.8em">
                                        {{ $errors->first('username') }}
                                    </p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" required class="form-control login" id="password"
                                    name="password">
                                @if ($errors->has('password'))
                                    <p class="text-danger" style="font-size: 0.8em">
                                        {{ $errors->first('password') }}
                                    </p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <div class="d-flex gap-2">
                                    <input type="text" class="form-control login" required id="captchaText"
                                        name="captcha" onkeyup="changetext()">
                                    <div class="d-flex">
                                        <canvas id="captchaCanvas" width="150" height="35"></canvas>
                                        <button type="button" id="generateCaptcha" style="width: 40px"> <svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                            </svg></button>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-danger" id="errorCapth" style="font-size: 0.8em"></p>
                            </div>

                            <button class="btn-login   mt-4 d-block mb-3 w-100 " type="submit">LOGIN
                            </button>

                            <span class="d-block  text-center ">Bila ada kendala dalam login akun, silahkan hubungi
                                <a href="#">admin</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    </script>
    <script src="{{ asset('/js/captcha.js') }}"></script>

    <script>
        function confirmSave() {
            let captchaText = $('#captchaText').val()
            if (captchaText !== captcha) {
                $('#errorCapth').html('Captcha tidak sesuai')
                return false;
            }
        }

        function changetext() {
            $('#errorCapth').empty()
        }
    </script>

</body>

</html>
