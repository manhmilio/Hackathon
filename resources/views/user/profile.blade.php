<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - Trang cá nhân</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('user.layouts.link')
</head>

<body>
    @include('user.layouts.spinner')
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('user.layouts.navbar')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Tài khoản cá nhân</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Trang cá nhân</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- Profile Page Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-start">
            <!-- Sidebar Profile Navigation -->
            <div class="col-lg-3 col-md-4">
                <div class="bg-light p-4 shadow rounded mb-4">
                    <div class="text-center mb-3">
                        <form action="{{ route('user.profile.avatar') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <img src="{{ $user->avatar ? asset('storage/avatars/'.$user->avatar) : asset('img/user-profile.jpg') }}" 
                                 class="img-fluid rounded-circle mb-2" width="100" alt="User Avatar">
                            <div class="mb-2">
                                <input type="file" name="avatar" class="form-control form-control-sm" accept="image/*">
                            </div>
                            <button class="btn btn-sm btn-outline-primary" type="submit">Cập nhật ảnh</button>
                        </form>
                        <h5 class="mb-0 mt-3">{{ $user->username }}</h5>
                        <small class="text-muted">Thành viên từ {{ $user->created_at ? $user->created_at->format('Y') : 'N/A' }}</small>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="profile.html" class="nav-link"><i class="fa fa-user me-2"></i>Trang cá nhân</a></li>
                        <li class="nav-item mb-2"><a href="myfile.html" class="nav-link"><i class="fa fa-heart me-2"></i>Tài liệu yêu thích</a></li>
                        <li class="nav-item mb-2"><a href="transfer.html" class="nav-link"><i class="fa fa-wallet me-2"></i>Số dư: 0đ</a></li>
                        <li class="nav-item mb-2"><a href="settings.html" class="nav-link"><i class="fa fa-cog me-2"></i>Cài đặt</a></li>
                        <li class="nav-item"><a href="logout.html" class="nav-link text-danger"><i class="fa fa-sign-out-alt me-2"></i>Đăng xuất</a></li>
                    </ul>
                </div>
            </div>

            <!-- Profile Main Content -->
            <div class="col-lg-9 col-md-8">
                <div class="bg-white shadow rounded p-4 mb-4">
                    <h4 class="mb-4">Thông tin cá nhân</h4>
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    
                    <form action="{{ route('user.profile.update') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Họ và tên</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->username }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" value="{{ $user->phone ?? '' }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" value="{{ $user->address ?? '' }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
                    </form>
                </div>

                <!-- Change Password Section -->
                <div class="bg-white shadow rounded p-4">
                    <h4 class="mb-4">Thay đổi mật khẩu</h4>
                    <form action="{{ route('user.profile.password') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Mật khẩu hiện tại</label>
                                <input type="password" name="current_password" class="form-control" placeholder="Nhập mật khẩu hiện tại">
                                @error('current_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Mật khẩu mới</label>
                                <input type="password" name="new_password" class="form-control" placeholder="Nhập mật khẩu mới">
                                @error('new_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Xác nhận mật khẩu mới</label>
                                <input type="password" name="new_password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu mới">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning">Thay đổi mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Page End -->



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
    @include('user.layouts.back_top')


    @include('user.layouts.script')
</body>

</html>