<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - Trang chủ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('user.layouts.link')
</head>

<body>
    @include('user.layouts.spinner')
    
    @include('user.layouts.navbar')

    <!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <!-- Slide 1 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('user_asset/img/carousel-1.jpg') }}" alt="Thư viện số">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Thư viện học thuật mở</h5>
                            <h1 class="display-3 text-white animated slideInDown">Tiếp cận tri thức mọi lúc, mọi nơi</h1>
                            <p class="fs-5 text-white mb-4 pb-2">
                                Hàng ngàn tài liệu học tập, giáo trình và nghiên cứu đang chờ bạn khám phá – hoàn toàn miễn phí, dễ dàng truy cập trực tuyến.
                            </p>
                            <a href="documents.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Khám phá tài liệu</a>
                            <a href="register.html" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Đăng ký ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('user_asset/img/carousel-2.jpg') }}" alt="Học mọi lúc mọi nơi">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Nền tảng học tập thông minh</h5>
                            <h1 class="display-3 text-white animated slideInDown">Kho tài liệu đa ngành cho mọi đối tượng</h1>
                            <p class="fs-5 text-white mb-4 pb-2">
                                Dành cho học sinh, sinh viên, giảng viên và người đi làm – cập nhật liên tục, chọn lọc từ các nguồn uy tín.
                            </p>
                            <a href="categories.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Xem chuyên mục</a>
                            <a href="login.html" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

    <!-- Document Listings Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-title bg-white text-center text-primary px-3">Tài liệu</h6>
            <h1 class="mb-3">Tài liệu phổ biến và mới nhất</h1>
            <p>Tìm kiếm và truy cập tài liệu bạn cần một cách dễ dàng</p>
            <div class="input-group w-50 mx-auto mb-4">
                <input type="text" class="form-control" placeholder="Tìm tài liệu theo tên, chủ đề, tác giả...">
                <button class="btn btn-primary" type="button">
                    <i class="fa fa-search me-1"></i> Tìm kiếm
                </button>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Example of a document card -->
            <div class="col-lg-3 col-md-4">
                <div class="card h-100 shadow">
                    <img src="{{ asset('user_asset/img/doc-placeholder.jpg') }}" class="card-img-top" alt="Document Cover">
                    <div class="card-body">
                        <h5 class="card-title">Tên tài liệu</h5>
                        <p class="card-text text-muted">Tác giả: Nguyễn Văn A</p>
                        <p class="card-text">Mô tả ngắn gọn về nội dung tài liệu này, phù hợp cho học sinh, sinh viên...</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
            <!-- Repeat card for each document -->
             <div class="col-lg-3 col-md-4">
                <div class="card h-100 shadow">
                    <img src="{{ asset('user_asset/img/doc-placeholder.jpg') }}" class="card-img-top" alt="Document Cover">
                    <div class="card-body">
                        <h5 class="card-title">Tên tài liệu</h5>
                        <p class="card-text text-muted">Tác giả: Nguyễn Văn A</p>
                        <p class="card-text">Mô tả ngắn gọn về nội dung tài liệu này, phù hợp cho học sinh, sinh viên...</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="card h-100 shadow">
                    <img src="{{ asset('user_asset/img/doc-placeholder.jpg') }}" class="card-img-top" alt="Document Cover">
                    <div class="card-body">
                        <h5 class="card-title">Tên tài liệu</h5>
                        <p class="card-text text-muted">Tác giả: Nguyễn Văn A</p>
                        <p class="card-text text-muted">Chủ đề: Toán học</p>
                        <p class="card-text">Mô tả ngắn gọn về nội dung tài liệu này, phù hợp cho học sinh, sinh viên...</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="card h-100 shadow">
                    <img src="{{ asset('user_asset/img/doc-placeholder.jpg') }}" class="card-img-top" alt="Document Cover">
                    <div class="card-body">
                        <h5 class="card-title">Tên tài liệu</h5>
                        <p class="card-text text-muted">Tác giả: Nguyễn Văn A</p>
                        <p class="card-text text-muted">Chủ đề: CNTT</p>
                        <p class="card-text">Mô tả ngắn gọn về nội dung tài liệu này, phù hợp cho học sinh, sinh viên...</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="card h-100 shadow">
                    <img src="{{ asset('user_asset/img/doc-placeholder.jpg') }}" class="card-img-top" alt="Document Cover">
                    <div class="card-body">
                        <h5 class="card-title">Tên tài liệu</h5>
                        <p class="card-text text-muted">Tác giả: Nguyễn Văn A</p>
                        <p class="card-text text-muted">Chủ đề: Lịch sử</p>
                        <p class="card-text">Mô tả ngắn gọn về nội dung tài liệu này, phù hợp cho học sinh, sinh viên...</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="card h-100 shadow">
                    <img src="{{ asset('user_asset/img/doc-placeholder.jpg') }}" class="card-img-top" alt="Document Cover">
                    <div class="card-body">
                        <h5 class="card-title">Tên tài liệu</h5>
                        <p class="card-text text-muted">Tác giả: Nguyễn Văn A</p>
                        <p class="card-text text-muted">Chủ đề: Toán học</p>
                        <p class="card-text">Mô tả ngắn gọn về nội dung tài liệu này, phù hợp cho học sinh, sinh viên...</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="document-detail.html" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Document Listings End -->

   <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a href="#" class="text-decoration-none">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3 text-dark">Tài liệu lịch sử</h5>
                            <p class="text-muted">Các tài liệu tham khảo và học thuật về lịch sử Việt Nam và thế giới.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a href="#" class="text-decoration-none">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3 text-dark">Tài liệu toán học</h5>
                            <p class="text-muted">Tổng hợp giáo trình, bài tập và tài liệu nghiên cứu toán học.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a href="#" class="text-decoration-none">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3 text-dark">Tài liệu luật</h5>
                            <p class="text-muted">Tài liệu pháp luật, án lệ, luật hiện hành và phân tích pháp lý.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a href="#" class="text-decoration-none">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3 text-dark">Tài liệu CNTT</h5>
                            <p class="text-muted">Học liệu về lập trình, an toàn thông tin, và công nghệ phần mềm.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

    <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('user_asset/img/about.jpg') }}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Về chúng tôi</h6>
                <h1 class="mb-4">Chào mừng đến với Thư viện số eLEARNING</h1>
                <p class="mb-4">
                    eLEARNING là nền tảng thư viện số hiện đại, nơi bạn có thể tiếp cận hàng ngàn tài liệu học thuật, giáo trình, nghiên cứu và sách tham khảo từ mọi lĩnh vực – mọi lúc, mọi nơi.
                </p>
                <p class="mb-4">
                    Với sứ mệnh lan tỏa tri thức và kết nối cộng đồng học tập, eLEARNING mang đến trải nghiệm đọc mở, đa dạng và đáng tin cậy từ các chuyên gia, giáo sư hàng đầu trong và ngoài nước.
                </p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tài liệu mới nhất</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Đầy đủ bản quyền</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Chuyên gia & học giả uy tín</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Thư viện mở cho tất cả mọi người</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kho kiến thức cập nhật liên tục</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Hỗ trợ truy cập 24/7</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="contact.html">Liên hệ chúng tôi</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tài liệu tổng hợp</h6>
                <h1 class="mb-5">Tài liệu theo chủ đề</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('user_asset/img/cat-1.jpg') }}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Thiết kế web</h5>
                                    <small class="text-primary">29 file tài liệu</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('user_asset/img/cat-2.jpg') }}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Thiết kế đồ họa</h5>
                                    <small class="text-primary">19 File tài liệu</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('user_asset/img/cat-3.jpg') }}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Thiết kế ứng dụng mobile</h5>
                                    <small class="text-primary">49 file tài liệu</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('user_asset/img/cat-4.jpg') }}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Marketing</h5>
                            <small class="text-primary">23 file tài liệu</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tài liệu bản quyền</h6>
                <h1 class="mb-5">Tài liệu nổi bật</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('user_asset/img/course-1.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Buy Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('user_asset/img/course-2.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Buy Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('user_asset/img/course-3.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Buy Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tác giả</h6>
                <h1 class="mb-5">Tác giả nổi bật</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('user_asset/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('user_asset/img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('user_asset/img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('user_asset/img/team-4.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Bình luận</h6>
                <h1 class="mb-5">Trải nghiệm từ người dùng</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('user_asset/img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('user_asset/img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('user_asset/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('user_asset/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @include('user.layouts.footer')

    @include('user.layouts.back_top')
    
    @include('user.layouts.script')
</body>

</html>