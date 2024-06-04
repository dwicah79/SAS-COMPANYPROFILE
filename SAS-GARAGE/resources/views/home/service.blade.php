<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAS GARAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/img/logo.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('template/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
</head>

<body>
         <!-- Spinner Start -->
         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                            <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/sedulur_auto_service/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Topbar End -->



<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img src="{{ asset('template/img/logonavbar.png') }}" alt="Gambar mobil" class="me-3" style="width: 40px; height: 35px;">CV.SAS GROUP</h2><br>
        
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
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
                <a href="{{ route('kontak') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <!-- <a href="{{ route('dashboard') }}" id="loginBtn" class="btn btn-primary py-4 px-lg-5" target="_blank">Login<i class="fa fa-arrow-right ms-3"></i></a>
                <script>
                document.getElementById("loginBtn").addEventListener("click", function(event) {
                    var isAdmin = confirm("Apakah Anda yakin ingin masuk ke halaman login? Hanya admin yang dapat mengaksesnya.");
                    if (!isAdmin) {
                        event.preventDefault(); // Menghentikan tindakan bawaan dari tombol login
                    }
                });
                </script> -->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{ asset('template/img/background.jpg') }});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        @foreach($service as $key => $services)
                            <button class="nav-link w-100 d-flex align-items-center text-start p-1 mb-1 {{ $key === 0 ? 'active' : '' }}" data-bs-toggle="pill" data-bs-target="#tab-pane-{{$key+1}}" type="button">
                                <i class="fa fa-car-side fa-2x me-3"></i>
                                <h4 class="m-0">{{$services->nama}}</h4>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        @foreach($service as $key => $services)
                            <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }}" id="tab-pane-{{$key+1}}">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="/gambar/{{$services->foto}}" style="object-fit: cover;" alt="">
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
                <a href="whatsapp://send?text=Halo%20saya%20ingin%20membooking%20service%20mobil%20saya.%20Dapatkah%20kami%20mengatur%20jadwal%20untuk%20service%3F%0A%0ANama%3A%20%0ANomor%20Telepon%3A%20%0AMobil%3A%20%0AJenis%20Service%3A%20%0ATanggal%20yang%20diinginkan%3A%20%0A&phone=+6289605000225" class="btn btn-primary py-3 px-5" target="_blank">Booking Service<i class="fab fa-whatsapp fa-2x fa-whatsapp-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
    <!-- Service End -->



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
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/sedulur_auto_service/" target="_blank"><i class="fab fa-instagram"></i></a>
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
                        Designed By <a class="border-bottom" href="https://www.instagram.com/dwwll_/"target="_blank">Dwi Cahyo Nugroho</a>
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
    <script src="{{asset('template/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('template/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('template/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('template/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('template/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('template/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('template/js/main.js')}}"></script>
</body>

</html>