<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <div class="container-fluid px-4">
        <a href="{{ route('user.index') }}" class="navbar-brand d-flex align-items-center gap-2">
            <i class="fa fa-book fs-2 text-primary"></i>
            <span class="fw-bold fs-3 text-primary">Lion<span class="text-warning">Book</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->routeIs('library.free') ? 'active' : '' }}">Thư viện số miễn phí</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->routeIs('library.premium') ? 'active' : '' }}">Thư viện số bản quyền</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->routeIs('comments') ? 'active' : '' }}">Bình luận</a>
                </li>
                
                @auth
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user-circle me-1"></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow rounded-3">
                        <li><a href="" class="dropdown-item"><i class="fa fa-user me-2"></i>Trang cá nhân</a></li>
                        <li><a href="" class="dropdown-item"><i class="fa fa-folder-open me-2"></i>Tài liệu của tôi</a></li>
                        <li><a href="" class="dropdown-item"><i class="fa fa-history me-2"></i>Lịch sử mua</a></li>
                        <li><a href="" class="dropdown-item"><i class="fa fa-credit-card me-2"></i>Nạp tiền</a></li>
                        <li>
                            <span class="dropdown-item text-primary fw-bold bg-light rounded-2">
                                <i class="fa fa-wallet me-2"></i>Số dư: {{ number_format(Auth::user()->balance, 0) }}đ
                            </span>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('login.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="fa fa-sign-out-alt me-2"></i>Đăng xuất
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
                
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Liên hệ</a>
                </li>
            </ul>
            
            @guest
            <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4 d-flex align-items-center gap-2">
                <span>ĐĂNG NHẬP</span>
                <i class="fa fa-arrow-right"></i>
            </a>
            @endguest
        </div>
    </div>
</nav>
<!-- Navbar End -->
