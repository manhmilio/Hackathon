<!-- Footer Start -->
<div class="container-fluid text-light footer pt-5 mt-5 wow fadeIn" style="background: linear-gradient(135deg, #1b095e 0%, #414345 100%);" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Liên kết nhanh</h4>
                <ul class="list-unstyled">
                    <li><a class="footer-link" href="#"><i class="fas fa-angle-right me-2"></i>Giới thiệu</a></li>
                    <li><a class="footer-link" href="#"><i class="fas fa-angle-right me-2"></i>Liên hệ</a></li>
                    <li><a class="footer-link" href="#"><i class="fas fa-angle-right me-2"></i>Chính sách bảo mật</a></li>
                    <li><a class="footer-link" href="#"><i class="fas fa-angle-right me-2"></i>Điều khoản sử dụng</a></li>
                    <li><a class="footer-link" href="#"><i class="fas fa-angle-right me-2"></i>Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Thông tin liên hệ</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Đại học Vinh, đường Lê Duẩn, TP. Vinh, Nghệ An</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0899 073 387</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>thiepthanhx37@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Thư viện ảnh</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4"><img class="img-fluid rounded shadow-sm" src="{{ asset('user_asset/img/course-1.jpg') }}" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded shadow-sm" src="{{ asset('user_asset/img/course-2.jpg') }}" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded shadow-sm" src="{{ asset('user_asset/img/course-3.jpg') }}" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded shadow-sm" src="{{ asset('user_asset/img/course-2.jpg') }}" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded shadow-sm" src="{{ asset('user_asset/img/course-3.jpg') }}" alt=""></div>
                    <div class="col-4"><img class="img-fluid rounded shadow-sm" src="{{ asset('user_asset/img/course-1.jpg') }}" alt=""></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Đăng ký nhận tin</h4>
                <p>Nhập email để nhận thông báo mới nhất từ chúng tôi.</p>
                <form class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5 rounded-pill" type="email" placeholder="Nhập email của bạn">
                    <button type="submit" class="btn btn-primary py-2 px-4 position-absolute top-0 end-0 mt-2 me-2 rounded-pill">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container border-top border-secondary pt-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 small">
                &copy; <a class="text-primary fw-bold" href="#">eLEARNING</a> - Bản quyền thuộc về bạn.
                Thiết kế bởi <a class="text-light text-decoration-underline" href="https://htmlcodex.com" target="_blank">NGUYỄN ĐÌNH THIỆP</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu d-inline-flex gap-3">
                    <a class="footer-link" href="#"><i class="fas fa-home me-1"></i>Trang chủ</a>
                    <a class="footer-link" href="#"><i class="fas fa-cookie-bite me-1"></i>Cookie</a>
                    <a class="footer-link" href="#"><i class="fas fa-life-ring me-1"></i>Trợ giúp</a>
                    <a class="footer-link" href="#"><i class="fas fa-question-circle me-1"></i>Hỏi đáp</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<style>
.footer-link {
    color: #b0b3b8;
    text-decoration: none;
    transition: color 0.2s;
}
.footer-link:hover {
    color: #fff;
    text-decoration: underline;
}
.btn-social {
    width: 38px;
    height: 38px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    border-radius: 50%;
    border: 1px solid #fff;
    transition: background 0.2s, color 0.2s;
}
.btn-social:hover {
    background: #fff;
    color: #070e6d;
}
</style>