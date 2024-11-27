<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    {{-- <meta property="og:site_name" content="https://himafhunpam.com/">
    <meta property="og:title" content="Himpunan Mahasiswa Fakultas Hukum Universitas Pamulang 2022" />
    <meta property="og:description" content="Himpunan Mahasiswa Fakultas Hukum Universitas Pamulang 2022" />
    <Meta Content='Himpunan Mahasiswa Hukum Universitas Pamulang' Name='description' />
    <meta property="og:image:type" content="image">
    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://himafhunpam.com/logo_hima.jpg">
    <meta property="og:image" itemprop="image" content="https://himafhunpam.com/logo_hima.jpg">
    <meta property="og:updated_time" content="1440432930" /> --}}
    <title>Profile</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    {{-- Styling --}}
    @include('includes.front.style')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <link itemprop="thumbnailUrl" href="url_gambar"> <span itemprop="thumbnail" itemscope
        itemtype="https://himafhunpam.com/logo_hima.jpg">
        <link itemprop="url" href="https://himafhunpam.com/logo_hima.jpg">
    </span>
    @include('includes.front.navbar')

    <main style="margin-top: 120px; min-height: 100vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('updatePassword') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                Profile
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">
                                        Nama Lengkap
                                    </label>
                                    <input type="text" class="form-control" readonly
                                        value="{{ auth()->user()->nama_lengkap }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">
                                        NISN
                                    </label>
                                    <input type="text" class="form-control" readonly
                                        value="{{ auth()->user()->nisn }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">
                                        Password
                                    </label>
                                    <input type="password" class="form-control" name="password" minlength="6" required>
                                </div>

                                <button class="btn btn-primary">
                                    Simpan Data
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container-fluid">
            <div
                class="
                        row
                        border-top
                        justify-content-center
                        align-items-center
                        pt-4
                    ">
                <div class="col-auto text-gray-500 font-weight-light">
                    &copy; Copyright {{ date('Y') }} | Osis SMK XYZ
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



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
    <!-- Vendor JS Files -->
    {{-- <script src="{{asset('frontend/home/assets/vendor/purecounter/purecounter.js')}}"></script> --}}
    <script src="{{ asset('frontend/home/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/home/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/home/assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (Session::get('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "{{ Session::get('success') }}"
            })
        </script>
    @endif
    @if (Session::get('error'))
        <script>
            Swal.fire({
                icon: "error",
                title: "{{ Session::get('error') }}"
            })
        </script>
    @endif

    @stack('addScript')
</body>

</html>
