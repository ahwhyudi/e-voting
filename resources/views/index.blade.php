<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta property="og:site_name" content="https://himafhunpam.com/">
    <meta property="og:title" content="Himpunan Mahasiswa Fakultas Hukum Universitas Pamulang 2022" />
    <meta property="og:description" content="Himpunan Mahasiswa Fakultas Hukum Universitas Pamulang 2022" />
    <Meta Content='Himpunan Mahasiswa Hukum Universitas Pamulang' Name='description'/>
    <meta property="og:image:type" content="image">
    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://himafhunpam.com/logo_hima.jpg">
    <meta property="og:image" itemprop="image" content="https://himafhunpam.com/logo_hima.jpg">
    <meta property="og:updated_time" content="1440432930" />
    <title>E-Voting</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    {{-- Styling --}}
    @include('includes.front.style')
</head>

<body>
    <link itemprop="thumbnailUrl" href="url_gambar"> <span itemprop="thumbnail" itemscope itemtype="https://himafhunpam.com/logo_hima.jpg"> 
    <link itemprop="url" href="https://himafhunpam.com/logo_hima.jpg"> </span>
    @include('includes.front.navbar')
    <section id="hero" class="d-flex align-items-center" style="">
        <div class="container">
            <div class="row">
                <div
                    class="
                            col-lg-6
                            pt-5 pt-lg-0
                            order-2 order-lg-1
                            d-flex
                            flex-column
                            justify-content-center
                        ">
                    <h1 data-aos="fade-up">
                        Sistem Informasi E-Voting Pemilihan Ketua Organisasi Sekolah, SMK XYZ
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Selamat datang di website resmi Organisasi Sekolah SMK XYZ
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="500">
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img d-flex justidy-content-center align-items-center" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('images/bannerosis.png') }}" class="img-fluid animated"  style="heigt:600px" alt="" />
                </div>
            </div>
        </div>
    </section>
    {{-- Konten --}}
    <main id="main">
        {{-- Calon --}}
        <section id="calon" class="team section-bg" >
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Kandidat</h2>
                    <p>Ayo pilih kandidat terbaikmu</p>
                </div>
                <div class="row justify-content-center">
                    {{-- @foreach ($paslon as $item) --}}
                    @for ($i=1;$i<=3;$i++)
                        <div class="col-11 col-lg-4 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="d-flex justify-content-around">
                                    <img src="{{-- {{ asset('/storage/' . $item->foto) }} --}}{{ asset('images/wakil.png') }}"
                                    class="img-fluid" alt="" />
                                    <img src="{{-- {{ asset('/storage/' . $item->foto) }} --}}{{ asset('images/wakil.png') }}"
                                    class="img-fluid" alt="" />
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="member-info">
                                            <h6 style="font-size: 14px">{{-- {{ $item->ketua->user->name }} --}} ahmad</h6>
                                            <p style="font-size: 12px">Calon Ketua Umum</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="member-info">
                                            <h6 style="font-size: 14px">{{-- {{ $item->wakil->user->name }} --}}budi</h6>
                                            <p style="font-size: 12px">Calon Wakil Ketua Umum</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mb-2">
                                    <a href="{{-- {{ route('profile', $item->id) }} --}}" class="btn btn-primary mx-2 mt-1 py-2">Profil
                                        Kandidat 0{{ $i }}{{-- {{ $item->nomor }} --}}</a>
                                </div>

                            </div>
                        </div>
                        @endfor
                    {{-- @endforeach  --}}
                </div>
            </div>
        </section>
        <section id="pertanyaan" class="faq">
            
            
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Q & A</h2>
                </div>
                @for ($i=0;$i<3;$i++)
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                        <h4>
                            Siapa saja sih yang bisa memilih calon ketua dan wakil ketua Osis SMK XXX?
                        </h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat voluptatem accusamus, blanditiis accusantium quas amet iure illo reiciendis ipsa omnis saepe earum itaque nesciunt aliquid fugit adipisci cum recusandae minima!
                        </p>
                    </div>
                </div>
                @endfor
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="kontak" class="contact">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak Kami</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Sosial Media</h3>
                            <div class="social-links">
                                <a href="#" class="twitter"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="instagram"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="youtube"><i
                                    class="bi bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>
                                    Jalan Raya xxxx<br />
                                    Kelurahan xxx, Kota xxx,
                                    Provinsi xxx
                                </p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>xxx@gmail.com</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>0812-1997-2916</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary rounded-pill">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </section>
        <!-- End Contact Section -->
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
        function gtag(){dataLayer.push(arguments);}
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
</body>

</html>
