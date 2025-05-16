<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - Thư viện số miễn phí</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('user.layouts.link')
</head>

<body>
    @include('user.layouts.spinner')

    @include('user.layouts.navbar')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Danh sách tài liệu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Thư viện số</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

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
                        <a href="{{ asset('user_asset/document-detail.html') }}" class="btn btn-sm btn-primary">Xem chi tiết</a>
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
                        <a href="{{ asset('user_asset/document-detail.html') }}" class="btn btn-sm btn-primary">Xem chi tiết</a>
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
                        <a href="{{ asset('user_asset/document-detail.html') }}" class="btn btn-sm btn-primary">Xem chi tiết</a>
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
                        <a href="{{ asset('user_asset/document-detail.html') }}" class="btn btn-sm btn-primary">Xem chi tiết</a>
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
                        <a href="{{ asset('user_asset/document-detail.html') }}" class="btn btn-sm btn-primary">Xem chi tiết</a>
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
                        <a href="{{ asset('user_asset/document-detail.html') }}" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        <button class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Document Listings End -->

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

<!-- Footer Start -->
    @include('user.layouts.footer')
<!-- Footer End -->


    <!-- Back to Top -->
    @include('user.layouts.back_top')

    <!-- JavaScript -->
    @include('user.layouts.script')
</body>

</html>