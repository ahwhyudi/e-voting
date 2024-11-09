<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    {{-- <meta property="og:site_name" content="https://himafhunpam.com/login">
    <meta property="og:title" content="Login HIMA FH UNPAM" />
    <meta property="og:description" content="Himpunan Mahasiswa Fakultas Hukum Universitas Pamulang 2022" />
    <Meta Content='Himpunan Mahasiswa Hukum Universitas Pamulang' Name='description'/>
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image">
    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image" content="https://himafhunpam.com/logo_hima.jpg">
    <meta property="og:image" itemprop="image" content="https://himafhunpam.com/logo_hima.jpg">
    <meta property="og:updated_time" content="1440432930" />
    <title>Login</title>
    <!-- Favicons -->
    <link href="{{ asset('images/osis.png') }}" rel="icon" />
    <link href="{{ asset('frontend/home/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" /> --}}

    <link rel="stylesheet" href="{{ asset('frontend/login/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/login/scss/style.css') }}" />

</head>

<body>

    <div class=" vh-100 vw-100 d-flex justify-content-center align-items-center">
        <div class="login-border border px-5 shadow-lg" id="login-border">
            <div class=" images">
                <h3 class="deskripsi text-center mt-5">Login</h3>
                <img src="images/sma.png" class="tengah" />
                <br />
                <form method="POST" action="{{ route('prosesLogin') }}" class="mb-5">
                    @csrf
                    <h5>&nbsp; NIS</h5>
                    <div class="form-group first mb-3">
                        <input id="username" type="text" class="form-control @error('nisn') is-invalid @enderror"
                            name="nisn" value="{{ old('nisn') }}" placeholder="Masukan nis anda" required
                            autocomplete="nisn" autofocus>
                        @error('nisn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <h5>&nbsp; Password</h5>
                    <div class="form-group last mb-4">
                        <input type="password" placeholder="Password" class="form-control" id="password"
                            name="password" required autocomplete="current-password" />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-primary form-control">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>

        </div>
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-217270429-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-217270429-1');
    </script>
</body>

</html>
