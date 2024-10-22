@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/detail_document.css') }}">
    <!-- Content -->
    <div class="container mt-5 mb-5 content text-center">
        <div class="title text-start">
            Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022
        </div>
        <div class="time text-start">
            by tuyendung in on Tháng Năm 21, 2020
        </div>
        <img src="{{ asset('image/document/dedtail.png') }}" alt="" class="img-detail mt-4">
        <div class="text text-start">
            <p>Công ty Cổ phần Dịch vụ Du lịch Phú Thọ xin thông báo đến các đơn vị tham gia đấu giá cạnh tranh hạng mục
                “Hợp tác giữ xe 02 – 04 bánh tại Công viên văn hóa Đầm Sen (Số 03 Hòa Bình, Phường 03, Quận 11, TP.HCM), kết
                quả như sau</p>
            <ul>
                <li>Tên hạng mục đấu giá: Hợp tác giữ xe 02 -04 bánh.</li>
                <li>Giá khởi điểm được duyệt: 241.667.000 đồng/tháng (đã bao gồm thuế GTGT).</li>
                <li>Bên mời đấu giá: Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Địa chỉ: Số 15 đường số 2 cư xá Lữ Gia, Phường
                    15, Quận 11, TP.HCM)./li>
                <li>Địa điểm thực hiện: Công viên văn hóa Đầm Sen.</li>
                <li>Hình thức lựa chọn đơn vị: Đấu giá cạnh tranh</li>
            </ul>
            <p>Kết quả lựa chọn đơn vị:</p>
            <ul>
                <li>Công ty TNHH Thương mại Dịch vụ Hai Tám Sáu (Mã số doanh nghiệp: 0313270903 – Địa chỉ: 247/8B Hoàng Hoa
                    Thám, Phường 05, Quận Phú Nhuận, TP.HCM)</li>
                <li>Giá tham gia: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>
                <li>Xếp hạng hồ sơ: Hạng 1+ Giá trúng đấu giá: 13.500.000.000 đồng (đã gồm thuế GTGT)</li>
                <li>Loại hợp đồng: Hợp đồng hợp tác kinh doanh+ Thời gian thực hiện hợp đồng: 03 năm</li>
            </ul>
            <p>Đề nghị Công ty TNHH TMDV Hai Tám Sáu trong vòng 02 ngày kể từ thời điểm nhận được thông báo trúng đấu giá
                của Công ty Cổ phần Dịch vụ Du lịch Phú Thọ, phải tiến hành thương thảo và ký hợp đồng. Nộp tiền bảo lãnh
                thực hiện hợp đồng bằng tiền mặt hoặc chuyển khoản tương ứng số tiền: 895.000.000 đồng (365 triệu/tháng x 03
                tháng = 1.095.000.000 đồng trừ 200 triệu đồng tiền đã ký quỹ) ngay sau khi ký hợp đồng cho Công ty Cổ phần
                Dịch vụ Du lịch Phú Thọ theo đúng Hồ sơ yêu cầu mời đấu giá cạnh tranh ngày 31/5/2022.</p>
            <p>Nếu quá thời hạn trên mà không thực hiện thương thảo, ký hợp đồng hoặc không nộp đủ số tiền bảo lãnh thực
                hiện hợp đồng, thì sẽ mất tiền ký quỹ và mặt bằng đấu giá hợp tác sẽ được chuyển cho khách hàng có hồ sơ đấu
                giá xếp hạng hai.</p>
            <p>Kế hoạch ký kết hợp đồng với đơn vị được lựa chọn: Dự kiến trước ngày 30/6/2022.</p>
            <p>Với những công ty không trúng đấu giá hợp tác sẽ được nhận lại ngay số tiền đã nộp ký quỹ là 200.000.000 đồng
                tại Văn phòng Công ty Cổ phần Dịch vụ Du lịch Phú Thọ.</p>
            <p>Thông báo này là cơ sở để ký kết hợp đồng với nhà cung cấp trúng thầu đúng theo quy định.Trân trọng.</p>
            <p>Chi tiết xem trong văn bản đính kèm</p>
        </div>
        <iframe class="file" src="./file.pdf"></iframe>
        <div class="related-posts mt-4">
            <div class="title text-start mb-2">Bài viết liên quan</div>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img src="{{ asset('image/post/post1.png') }}" class="card-img-top" alt="...">
                        <div class="text-start p-2">
                            <div class="d-flex align-items-center role">Admin <div class="circle ms-1"></div>
                            </div>
                            <div class="title mb-2">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor Fullcolor
                            </div>
                        </div>
                        <div class="ps-2">
                            <div class="action text-start">
                                <span>Sự kiện</span>
                                <span>Thông báo</span>
                                <span>Tin tức</span>
                            </div>
                            <div class="information d-flex align-items-center mb-3 mt-2">
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
                        <div class="text-start p-2">
                            <div class="d-flex align-items-center role">Admin <div class="circle ms-1"></div>
                            </div>
                            <div class="title mb-2">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor Fullcolor
                            </div>
                        </div>
                        <div class="ps-2">
                            <div class="action text-start">
                                <span>Sự kiện</span>
                                <span>Thông báo</span>
                                <span>Tin tức</span>
                            </div>
                            <div class="information d-flex align-items-center mb-3 mt-2">
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
                        <div class="text-start p-2">
                            <div class="d-flex align-items-center role">Admin <div class="circle ms-1"></div>
                            </div>
                            <div class="title mb-2">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor Fullcolor
                            </div>
                        </div>
                        <div class="ps-2">
                            <div class="action text-start">
                                <span>Sự kiện</span>
                                <span>Thông báo</span>
                                <span>Tin tức</span>
                            </div>
                            <div class="information d-flex align-items-center mb-3 mt-2">
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
                        <div class="text-start p-2">
                            <div class="d-flex align-items-center role">Admin <div class="circle ms-1"></div>
                            </div>
                            <div class="title mb-2">Thông báo kết quả lựa chọn nhà thầu 2 màn hình Led P4 Outdoor Fullcolor
                            </div>
                        </div>
                        <div class="ps-2">
                            <div class="action text-start">
                                <span>Sự kiện</span>
                                <span>Thông báo</span>
                                <span>Tin tức</span>
                            </div>
                            <div class="information d-flex align-items-center mb-3 mt-2">
                                <div class="view">10N lượt xem</div>
                                <div class="circle-gray ms-1 me-1"></div>
                                <div class="date">20/02/2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
