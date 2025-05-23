<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - Tài liệu của tôi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Trang chủ</a>
                <a href="library.html" class="nav-item nav-link">Thư viện số miễn phí</a>
                <a href="libraryLicense.html" class="nav-item nav-link">Thư viện số bản quyền</a>
                <a href="comment.html" class="nav-item nav-link">Bình luận</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Tài khoản cá nhân</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="profile.html" class="dropdown-item">Trang cá nhân</a>
                        <a href="myfile.html" class="dropdown-item active">Tài liệu của tôi</a>
                        <a href="boughtHistory.html" class="dropdown-item">lịch sử mua</a>
                        <a href="transfer.html" class="dropdown-item">Nạp tiền</a>
                        <span class="dropdown-item" style="background-color: aqua;">Số dư: 0đ</span>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
            </div>
            <a href="login.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">ĐĂNG NHẬP<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tài liệu của tôi</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Tài khoản cá nhân</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tài liệu của tôi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- Favorite Documents Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-title bg-white text-center text-primary px-3">Tài liệu miễn phí</h6>
            <h1 class="mb-3">Danh sách tài liệu yêu thích</h1>
            <p>Các tài liệu bạn đã đánh dấu yêu thích sẽ hiển thị tại đây.</p>
        </div>
        <div class="row g-4">
            <!-- Document Item -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border shadow-sm">
                    <img src="img/doc-1.jpg" class="card-img-top" alt="Tên tài liệu">
                    <div class="card-body">
                        <h5 class="card-title">Giáo trình Lập trình C++ cơ bản</h5>
                        <p class="card-text text-muted">Tác giả: Nguyễn Văn A</p>
                        <p class="card-text">Tài liệu hướng dẫn lập trình C++ từ cơ bản đến nâng cao, phù hợp cho sinh viên CNTT.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-danger" title="Bỏ yêu thích">
                            <i class="fa fa-heart-broken"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border shadow-sm">
                    <img src="img/doc-2.jpg" class="card-img-top" alt="Tên tài liệu">
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu Luật Kinh tế</h5>
                        <p class="card-text text-muted">Tác giả: Trần Thị B</p>
                        <p class="card-text">Tổng hợp kiến thức căn bản và chuyên sâu trong lĩnh vực luật thương mại và kinh doanh.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-danger" title="Bỏ yêu thích">
                            <i class="fa fa-heart-broken"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Favorite Documents End -->

<!-- Favorite Documents Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-title bg-white text-center text-primary px-3">Tài liệu bản quyền</h6>
            <h1 class="mb-3">Danh sách tài liệu đã mua</h1>
            <p>Các tài liệu bản quyền bạn đã mua sẽ hiển thị tại đây.</p>
        </div>
        <div class="row g-4">
            <!-- Document Item -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border shadow-sm">
                    <img src="img/doc-1.jpg" class="card-img-top" alt="Tên tài liệu">
                    <div class="card-body">
                        <h5 class="card-title">Giáo trình Lập trình C++ cơ bản</h5>
                        <p class="card-text text-muted">Tác giả: Nguyễn Văn A</p>
                        <p class="card-text">Tài liệu hướng dẫn lập trình C++ từ cơ bản đến nâng cao, phù hợp cho sinh viên CNTT.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-danger" title="Bỏ yêu thích">
                            <i class="fa fa-heart-broken"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border shadow-sm">
                    <img src="img/doc-2.jpg" class="card-img-top" alt="Tên tài liệu">
                    <div class="card-body">
                        <h5 class="card-title">Tài liệu Luật Kinh tế</h5>
                        <p class="card-text text-muted">Tác giả: Trần Thị B</p>
                        <p class="card-text">Tổng hợp kiến thức căn bản và chuyên sâu trong lĩnh vực luật thương mại và kinh doanh.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-danger" title="Bỏ yêu thích">
                            <i class="fa fa-heart-broken"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Favorite Documents End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Liên kết nhanh</h4>
                <a class="btn btn-link" href="">Giới thiệu</a>
                <a class="btn btn-link" href="">Liên hệ</a>
                <a class="btn btn-link" href="">Chính sách bảo mật</a>
                <a class="btn btn-link" href="">Điều khoản sử dụng</a>
                <a class="btn btn-link" href="">Câu hỏi thường gặp</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Thông tin liên hệ</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Đại học Vinh, đường Lê Duẩn, TP. Vinh, Nghệ An</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0899 073 387</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>thiepthanhx37@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Thư viện ảnh</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt=""></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Đăng ký nhận tin</h4>
                <p>Nhập email để nhận thông báo mới nhất từ chúng tôi.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Nhập email của bạn">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">eLEARNING</a>, Bản quyền thuộc về bạn.
                    Thiết kế bởi <a class="border-bottom" href="https://htmlcodex.com">NGUYỄN ĐÌNH THIỆP</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="#">Trang chủ</a>
                        <a href="#">Cookie</a>
                        <a href="#">Trợ giúp</a>
                        <a href="#">Hỏi đáp</a>
                    </div>
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
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>