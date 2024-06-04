<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAS GARAGE BOGOR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('template/img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <style>
        .team-item .position-relative.overflow-hidden img {
            height: 350px;
            /* Atur tinggi gambar sesuai kebutuhan Anda */
            width: auto;
            /* Biarkan lebar gambar menyesuaikan proporsi aslinya */
            object-fit: cover;
            /* Untuk memastikan gambar terisi dengan baik */
        }
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    @foreach($location as $lokasi)
                        <small class="fa fa-map-marker-alt text-primary me-2"></small>
                        <small>{{$lokasi->lokasi}}</small>
                    @endforeach
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>SENIN - MINGGU : 08.30-16.30 WIB&nbsp;||&nbsp;JUMAT LIBUR</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+6289605000225</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-0"
                        href="https://www.instagram.com/sedulur_auto_service/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="{{ asset('template/img/logonavbar.png') }}" alt="Gambar mobil"
                    class="me-3" style="width: 40px; height: 35px;">CV.SAS GROUP</h2><br>

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Chevrolet</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('service') }}" class="dropdown-item">Service</a>
                        <a href="{{ route('partchevy') }}" class="dropdown-item">Part</a>
                        <a href="{{ route('team') }}" class="dropdown-item">Technicians</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Vespa</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('partvespa') }}" class="dropdown-item">Part and Catalogue</a>
                    </div>
                </div>
                <a href="{{ route('kontak') }}"
                    class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('template/img/background.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //
                                    </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Chevrolet
                                        Car repair and service centre</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('template/img/desaintransparant.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('template/img/sas-catalog.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Vespa Catalogue
                                        //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">PVP Vespa Catalogue
                                    </h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('template/img/vespapart.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Service Start -->
    <div id="start-service" class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Pelayanan Berkualitas</h5>
                            <p>Menjamin kepuasan pelanggan dan performa optimal kendaraan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Dikerjakan Oleh Ahli</h5>
                            <p>Dikerjakan oleh ahli yang berpengalaman dan terlatih, memberikan jaminan kualitas terbaik
                                untuk setiap pekerjaan yang dilakukan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>Kami dilengkapi dengan peralatan modern yang memastikan setiap layanan kami memberikan
                                hasil terbaik untuk kendaraan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- about start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100"
                            src="{{ asset('template/img/sasgrupbaru.jpg') }}" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, 0.8);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">SAS GARAGE</span><br>merupakan tempat terbaik untuk
                        perawatan mobil anda !!</h1>
                    <p class="mb-4">Kami di SAS Garage bangga memiliki tim yang tidak hanya profesional, tetapi juga
                        sangat berpengalaman dalam bidang perawatan mobil chevrolet anda. Kami berkomitmen untuk
                        memberikan pelayanan dan kualitas service dan part terbaik kepada anda.
                        <br>
                    <h6>Kenapa Harus SAS Garage? </h6>
                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                    <span>SAS Garage memiliki pekerja yang profesional dan berpengalaman di
                                        bidangnya.</span>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                        style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">02</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Quality Servicing Center</h6>
                                        <span>SAS Garage merupakan pusat pelayanan service mobil chevrolet dengan
                                            kualitas yang tinggi.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                        style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">03</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Genuine parts and lubricant</h6>
                                        <span>Kami mengedepankan kualitas spare part dan pelumas yg khusus kami gunakan
                                            untuk mobil Chevrolet anda.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="whatsapp://send?text=Halo%20saya%20ingin%20membooking%20service%20mobil%20saya.%20Dapatkah%20kami%20mengatur%20jadwal%20untuk%20service%3F%0A%0ANama%3A%20%0ANomor%20Telepon%3A%20%0AMobil%3A%20%0AJenis%20Service%3A%20%0ATanggal%20yang%20diinginkan%3A%20%0A&phone=+6289605000225"
                        class="btn btn-primary py-3 px-5" target="_blank">Booking Service<i
                            class="fab fa-whatsapp fa-2x fa-whatsapp-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- Service Start -->
    <div class="container-xxl service py-5" id="servis">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        @foreach($service as $key => $services)
                            <button
                                class="nav-link w-100 d-flex align-items-center text-start p-1 mb-1 {{ $key === 0 ? 'active' : '' }}"
                                data-bs-toggle="pill" data-bs-target="#tab-pane-{{$key + 1}}" type="button">
                                <i class="fa fa-car-side fa-2x me-3"></i>
                                <h4 class="m-0">{{$services->nama}}</h4>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        @foreach($service as $key => $services)
                            <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}" id="tab-pane-{{$key + 1}}">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100"
                                                src="/gambar/{{$services->foto}}" style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mb-4">{{$services->title}}</h4>
                                        <p class="mb-4">{{$services->deskripsi}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <a href="whatsapp://send?text=Halo%20saya%20ingin%20membooking%20service%20mobil%20saya.%20Dapatkah%20kami%20mengatur%20jadwal%20untuk%20service%3F%0A%0ANama%3A%20%0ANomor%20Telepon%3A%20%0AMobil%3A%20%0AJenis%20Service%3A%20%0ATanggal%20yang%20diinginkan%3A%20%0A&phone=+6289605000225"
                    class="btn btn-primary py-3 px-5" target="_blank">Booking Service<i
                        class="fab fa-whatsapp fa-2x fa-whatsapp-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                @php $count = 0; @endphp
                @foreach($teknisi as $teknisi)
                    @php    $count++; @endphp
                    @if ($count <= 4)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="/gambar/{{$teknisi->gambar}}" alt="">
                                </div>
                                <div class="bg-light text-center p-4">
                                    <h5 class="fw-bold mb-0">{{$teknisi->nama}}</h5>
                                    <small>{{$teknisi->role}}</small>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="/gambar/{{$teknisi->gambar}}" alt="">
                                </div>
                                <div class="bg-light text-center p-4">
                                    <h5 class="fw-bold mb-0">{{$teknisi->nama}}</h5>
                                    <small>{{$teknisi->role}}</small>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    @foreach($location as $lokasi)
                        <h4 class="text-light mb-4">Address</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$lokasi->lokasi}}</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6289605000225</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>isedulurautoseevice@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.instagram.com/sedulur_auto_service/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">SENIN-MINGGU:</h6>
                    <p class="mb-4">08.30-16.40</p>
                    <h6 class="text-light">JUMAT LIBUR</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="#servis">Diagnostic/Scanning</a>
                    <a class="btn btn-link" href="#servis">Electrical troubleshooting</a>
                    <a class="btn btn-link" href="#servis">Engine tune up</a>
                    <a class="btn btn-link" href="#servis">Engine mechanical repair</a>
                    <a class="btn btn-link" href="#servis">Chasis and absorbers</a>
                    <a class="btn btn-link" href="#servis">HVAC system</a>
                    <a class="btn btn-link" href="#servis">Oil Changing and flush</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">SAS GARAGE</a>, All Right Reserved.
                        Designed By <a class="border-bottom" href="https://www.instagram.com/dwwll_/"
                            target="_blank">Dwi Cahyo Nugroho</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('template/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js') }}"></script>

</body>

</html>