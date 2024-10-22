@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/recruitment.css') }}">
    <!-- Content -->
    <div class="container mt-5 mb-5 content text-center">
        <div class="title">
            Tuyển dụng
        </div>
        <div class="row">
            <div class="col-3" style="min-height: 864px; margin-bottom: 55px;">
                <div class="filter">
                    <div class="filter-search">
                        <i class="icon-search fa fa-search" aria-hidden="true"></i>
                        <input type="text" name="search" class="search" placeholder="Tìm kiếm">
                    </div>
                    <div class="underline mt-4 mb-4"></div>
                    <div class="field mb-3">
                        <div class="title text-start mb-2">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <span>Lĩnh vực</span>
                        </div>
                        <div class="list-field d-flex flex-wrap">
                            <div class="active">Hướng dẫn viên</div>
                            <div>Kinh doanh</div>
                            <div>Kĩ sư xây dựng</div>
                            <div>Nhân viên kế toán</div>
                            <div>Nhân viên kĩ thuật</div>
                            <div>Nhân viên phục vụ</div>
                        </div>
                    </div>
                    <div class="field mb-3">
                        <div class="title text-start mb-2">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            <span>Hình thức làm việc</span>
                        </div>
                        <div class="list-field d-flex flex-wrap">
                            <div class="active">Bán thời gian</div>
                            <div>Nhân viên chính thức</div>
                            <div>Theo ca</div>
                            <div>Thực tập</div>
                        </div>
                    </div>
                    <div class="field mb-3">
                        <div class="title text-start mb-2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Nơi làm việc</span>
                        </div>
                        <div class="list-field d-flex flex-wrap">
                            <div class="active">Cà Phê Vườn Đá</div>
                            <div>NH Thủy Tạ Đầm Sen</div>
                            <div>KDL Sinh Thái Vàm Sát</div>
                            <div>CVVH Đầm Sen</div>
                            <div>Khách sạn Ngọc Lan</div>
                            <div>NH Thủy Tạ Đầm Sen</div>
                            <div>CVVH Đầm Sen</div>
                            <div>Khách sạn Ngọc Lan</div>
                        </div>
                    </div>
                    <img src="./img-background.png" class="img-background" alt="">
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm Sen
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state green">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm Sen
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state red">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm Sen
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state green">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm
                                        Sen</div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state green">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm
                                        Sen</div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state red">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm
                                        Sen</div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state green">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm
                                        Sen</div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state green">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm
                                        Sen</div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state green">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="recruiment ">
                            <div class="title d-flex flex-wrap">
                                <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                <div class="text-start">
                                    <div class="name">Nhân viên thiết kế đồ họa</div>
                                    <div class="type">Nhân viên chính thức</div>
                                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm
                                        Sen</div>
                                    <div class="d-flex justify-content-between">
                                        <div class="time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                                        </div>
                                        <div class="state green">
                                            <span>Đang tuyển</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail text-start">Mô tả công việc:</div>
                            <div class="description text-start">
                                Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên kinh doanh lữ hành. Yêu cầu: Tốt
                                nghiệp CĐ, ĐH chuyên ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý ...
                            </div>
                            <button>Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="list-page d-flex justify-content-center align-items-center">
                            <div><i class="fa fa-caret-left" aria-hidden="true"></i></div>
                            <div class="active">1</div>
                            <div>2</div>
                            <div>3</div>
                            <div>...</div>
                            <div>10</div>
                            <div><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
