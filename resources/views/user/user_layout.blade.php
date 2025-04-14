<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WiWi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('userlayout/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('userlayout/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userlayout/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userlayout/ib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}l" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('userlayout/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('userlayout/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Niên luân ngành hệ thống thông tin</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Ngô Lê Trúc Quỳnh B2107119</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>0783894977</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>WiWi</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Trang chủ</a>
                <a href="{{ route('info') }}" class="nav-item nav-link">Thông tin</a>
                <div class="nav-item dropdown">
                    <a href="{{ route('service') }}" class="nav-item nav-link">Dịch vụ</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ route('user.servicehealth.index') }}" class="dropdown-item">Chăm sóc sức khỏe</a>
                        <a href="{{ route('user.servicebeauty.index') }}" class="dropdown-item">Chăm sóc thẩm mỹ</a>
                    </div>
                </div>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="team.html" class="dropdown-item">Our Doctor</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                <a href="{{ route('contact') }}" class="nav-item nav-link">Liên Hệ</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">Đăng nhập</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Sức khỏe thú cưng là một trong những hạnh phúc lớn nhất</h1>
                {{-- <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                            <p class="text-light mb-0">Medical Stuff</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                            <p class="text-light mb-0">Total Patients</p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Cardiology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Neurology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Pulmonary</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

@yield('user_content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Thông tin liên hệ</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ngô Lê Trúc Quỳnh</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>B2107119</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>quynhb2107119@student.ctu.edu.vn</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Dịch vụ</h5>
                    <a class="btn btn-link" href="">Sức khỏe</a>
                    <a class="btn btn-link" href="">Thẩm mỹ</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Truy cập nhanh</h5>
                    <a class="btn btn-link" href="">Thông tin</a>
                    <a class="btn btn-link" href="">liên hệ</a>
                    <a class="btn btn-link" href="">Dịch vụ</a>
                    <a class="btn btn-link" href="">Đặt khám</a>
                    <a class="btn btn-link" href="">Thông báo</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">peek a boo</h5>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('userlayout/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('userlayout/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('userlayout/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('userlayout/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('userlayout/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('userlayout/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('userlayout/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('userlayout/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('userlayout/js/main.js') }}"></script>
</body>

</html>
