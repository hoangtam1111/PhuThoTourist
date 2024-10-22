@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- Navbar -->
    <div class="navbar">
        <img class="logo" src="{{ asset('image/logo/logo-phu-tho-3.png') }}" alt="">
        <div class="group">
            <img class="logo-group" src="{{ asset('image/logo/logo-group.png') }}" alt="">
            <p>Truy cập vào phuthohotel.com</p>
        </div>
        <i class="down fa fa-angle-double-down" aria-hidden="true"></i>
    </div>
    <!-- Slider -->

    <!-- Content -->
    <div class="container mt-5 content">
        <div class="">
            <div class="about p-5 mb-6">
                <div class="row">
                    <div class="col-12 col-md-7 col-lg-7 ">
                        <p class="title">VỀ CHÚNG TÔI</p>
                        <div class="header">Chúng tôi cung cấp dịch vụ du lịch đáp ứng mọi nhu cầu của bạn!</div>
                        <div class="underline mb-4"></div>
                        <div class="description">
                            <p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Phuthotourist), là một đơn vị thành viên của
                                Saigontourist. Phuthotourist được biết đến với các sản phẩm du lịch nổi tiếng tại TP.HCM
                                (Quận 11) như:</p>
                            <ul>
                                <li>Công viên Văn hóa Đầm Sen</li>
                                <li>Khu du lịch sinh thái Vàm Sát</li>
                                <li>Khách sạn Ngọc Lan</li>
                                <li>Khách sạn Phú Thọ</li>
                                <li>Trung tâm chăm sóc sức khỏe & giải trí Đầm Sen (Damsen Plaza)</li>
                                <li>Nhà hàng Thủy Tạ Đầm Sen</li>
                                <li>Cà phê Vườn Đá</li>
                                <li>Trung tâm Dịch vụ Du lịch Đầm Sen (Damsen Travel)</li>
                                <li>Liên kết với Công viên nước Đầm Sen (Đầm Sen Water Park).</li>
                            </ul>
                        </div>
                        <button>Xem chi tiết</button>
                    </div>
                    <div class="col-12 col-md-5 col-lg-5 image">
                        <img class="image-about-first" src="{{ asset('image/background/Rectangle 11.png') }}"
                            alt="">
                        <img class="image-about-second" src="{{ asset('image/background/Rectangle 12.png') }}"
                            alt="">
                    </div>
                </div>

            </div>
            <div class="new-post text-center mt-5">
                <img class="img-background" src="{{ asset('image/background/logo-background.png') }}" alt="">
                <p class="title text-light mt-4">CHIA SẼ THÔNG TIN</p>
                <div class="header">Bài viết mới</div>
                <div class="underline"></div>
                <p class="text-light mt-3 mb-4">Hãy cùng chúng tôi chia sẻ những bài viết mới với các thông tin về những sản
                    phẩm du lịch</p>
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('image/post/post1.png') }}" class="card-img-top" alt="...">
                            <div class="text-start p-3">
                                <div class="d-flex align-items-center role mb-2">Admin <div class="circle ms-1"></div>
                                </div>
                                <div class="title mb-2">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor
                                    Fullcolor</div>
                                <p class="text">Công ty Cổ phần Dịch vụ Du lịch Phú Thọ thông báo đến các nhà thầu tham
                                    gia chào hàng cạnh tranh Gói thầu: Cung cấp, lắp đặt 02 màn..</p>
                            </div>
                            <div class="ps-3">
                                <div class="action text-start">
                                    <button>Sự kiện</button>
                                    <button>Thông báo</button>
                                    <button>Tin tức</button>
                                </div>
                                <div class="information d-flex align-items-center mb-3">
                                    <div class="view">10N lượt xem</div>
                                    <div class="circle-gray ms-1 me-1"></div>
                                    <div class="date">20/02/2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('image/post/post1.png') }}" class="card-img-top" alt="...">
                            <div class="text-start p-3">
                                <div class="d-flex align-items-center role mb-2">Admin <div class="circle ms-1"></div>
                                </div>
                                <div class="title mb-2">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor
                                    Fullcolor</div>
                                <p class="text">Công ty Cổ phần Dịch vụ Du lịch Phú Thọ thông báo đến các nhà thầu tham
                                    gia chào hàng cạnh tranh Gói thầu: Cung cấp, lắp đặt 02 màn..</p>
                            </div>
                            <div class="ps-3">
                                <div class="action text-start">
                                    <button>Sự kiện</button>
                                    <button>Thông báo</button>
                                    <button>Tin tức</button>
                                </div>
                                <div class="information d-flex align-items-center mb-3">
                                    <div class="view">10N lượt xem</div>
                                    <div class="circle-gray ms-1 me-1"></div>
                                    <div class="date">20/02/2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('image/post/post1.png') }}" class="card-img-top" alt="...">
                            <div class="text-start p-3">
                                <div class="d-flex align-items-center role mb-2">Admin <div class="circle ms-1"></div>
                                </div>
                                <div class="title mb-2">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor
                                    Fullcolor</div>
                                <p class="text">Công ty Cổ phần Dịch vụ Du lịch Phú Thọ thông báo đến các nhà thầu tham
                                    gia chào hàng cạnh tranh Gói thầu: Cung cấp, lắp đặt 02 màn..</p>
                            </div>
                            <div class="ps-3">
                                <div class="action text-start">
                                    <button>Sự kiện</button>
                                    <button>Thông báo</button>
                                    <button>Tin tức</button>
                                </div>
                                <div class="information d-flex align-items-center mb-3">
                                    <div class="view">10N lượt xem</div>
                                    <div class="circle-gray ms-1 me-1"></div>
                                    <div class="date">20/02/2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-posts mt-4 mb-4">Xem thêm bài viết</a>
            </div>
            <div class="central-service text-center pt-4 pb-5 mb-4">
                <p class="title ">LĨNH VỰC HOẠT ĐỘNG</p>
                <div class="header">Các dịch vụ trọng tâm</div>
                <div class="underline"></div>
                <p class="text mt-3 mb-4">3 dịch vụ trọng tâm của Phuthotourist là vui chơi giải trí, nhà hàng – khách sạn,
                    và dịch vụ lữ hành</p>
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('image/central/central1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Vui chơi giải trí</h5>
                                <p class="card-text">Với 2 khu giải trí nổi tiếng TP.HCM là Công viên văn hóa Đầm Sen, và
                                    khu du lịch sinh thái Vàm Sát (H.Cần Giờ)...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('image/central/central2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nhà hàng – Khách sạn</h5>
                                <p class="card-text">Với hệ thống khách sạn Phú Thọ và Ngọc Lan đạt chuẩn 3 sao, chuyên
                                    tiếp đón các đoàn thể thao....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('image/central/central3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dịch vụ Lữ hành</h5>
                                <p class="card-text">Tổ chức các tour trong và ngoài nước với Trung tâm Dịch vụ du lịch Đầm
                                    Sen. Ngoài ra Trung tâm còn thế mạnh là tổ chức...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
