@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/detail_recruitment.css') }}">
    <!-- Content -->
    <div class="container mt-5 mb-5 content text-center ">
        <div class="title d-flex justify-content-between mb-3">
            <div class="text-start d-flex">
                <div class="logo">
                    <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                </div>
                <div class="text">
                    <div class="name">Nhân viên thiết kế đồ họa</div>
                    <div class="type">Nhân viên chính thức</div>

                    <span class="location me-3"><i class="fa fa-map-marker" aria-hidden="true"></i> CVVH Đầm Sen</span>
                    <span class="time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 2 tuần trước
                    </span>
                </div>
            </div>
            <div class="state green">
                <span>Đang tuyển</span>
            </div>
        </div>
        <img src="./detail-recruiment.png" width="100%" alt="">
        <div class="detail">
            <div class="header text-start">Chi tiết tin tuyển dụng</div>
            <table class="table table-bordered text-start">
                <tr>
                    <td class="head">Vị trí</td>
                    <td>Nhân viên thiết kế đồ họa</td>
                </tr>
                <tr>
                    <td class="head">Số lượng</td>
                    <td>02 người</td>
                </tr>
                <tr>
                    <td class="head">Nơi làm việc</td>
                    <td>Công viên văn hóa Đầm Sen</td>
                </tr>
                <tr>
                    <td class="head">Địa chỉ làm việc</td>
                    <td>3 Hòa Bình, Phường 3, Quận 11, TP.HCM</td>
                </tr>
                <tr>
                    <td class="head">Mô tả công việc</td>
                    <td>
                        <ul>
                            <li>Thiết kế hình ảnh, brochure, banner, poster, pano, backdrop sân khấu, các loại vé mời … và
                                các ấn phẩm phục vụ sự kiện, truyền thông của công viên.</li>
                            <li>Chụp hình, quay phim, dựng video đơn giản.</li>
                            <li>Lên phác thảo, trao đổi ý tưởng với quản lý và hoàn thiện thiết kế.</li>
                            <li>Các chi tiết về công việc được trao đổi tại buổi phỏng vấn.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="head">Ngày làm việc</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td class="head">Giờ làm việc</td>
                    <td>Giờ hành chính</td>
                </tr>
                <tr>
                    <td class="head">Quyền lợi</td>
                    <td>
                        <ul>
                            <li>Được ký hợp đồng lao động, tham gia đầy đủ chế độ BHXH</li>
                            <li>Thưởng tháng 13, 14, các ngày lễ, tết trong năm.</li>
                            <li>Được phục vụ bữa ăn trưa tại nơi làm việc.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="head">Yêu cầu</td>
                    <td>
                        <ul>
                            <li>Tốt nghiệp từ Cao đẳng chuyên ngành Mỹ thuật, Đồ họa....</li>
                            <li>Sử dụng thành thạo các phần mềm thiết kế (Photoshop, Corel, Illustrator…).</li>
                            <li>Có khả năng quay và dựng video hấp dẫn người xem</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="head">Độ tuổi</td>
                    <td>22 - 27 tuổi</td>
                </tr>
                <tr>
                    <td class="head">Trình độ</td>
                    <td>Cao đẳng</td>
                </tr>
                <tr>
                    <td class="head">Hồ sơ gồm</td>
                    <td>
                        Thông tin ứng tuyển:
                        <ul>
                            <li>Ứng viên vui lòng gửi CV đến email: tuyendung@damsenpark.vn.</li>
                            <li>Hoặc nộp hồ sơ trực tiếp tại Trụ sở Văn phòng Công ty: 15 đường số 2, cư xá Lữ Gia, P. 15,
                                Quận 11.</li>
                        </ul>
                        (ĐT: 028 38 650 921 - Phòng Nhân sự).
                    </td>
                </tr>
            </table>
        </div>
        <div class="apply">
            <div class="header text-start">Ứng tuyển Online</div>
            <form action="" method="post">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-5 text-start">
                        <div class="input mb-3">
                            <label for="name">Họ tên</label><br>
                            <input type="text" name="name" id="name" placeholder="Nguyễn Văn A">
                        </div>
                        <div class="input mb-3">
                            <label for="dob">Năm sinh</label><br>
                            <input type="text" name="dob" id="dob" placeholder="12-12-2000">
                        </div>
                        <div class="input mb-3">
                            <label for="current_residence">Nơi ở hiện nay</label><br>
                            <input type="text" name="current_residence" id="current_residence"
                                placeholder="123 Âu Cơ, Phường 9, Tân Bình, TP HCM">
                        </div>
                        <div class="input mb-3">
                            <label for="email">Email</label><br>
                            <input type="text" name="email" id="email" placeholder="Nguyenvana@gmail.com">
                        </div>
                        <div class="input mb-3">
                            <label for="level">Trình độ</label><br>
                            <input type="text" name="level" id="level" placeholder="Đại học">
                        </div>
                        <div class="input mb-3">
                            <label for="long_day_work">Bạn có sẵn sàng đi công tác dài ngày</label><br>
                            <div class="d-flex radio">
                                <div class="d-flex me-4"><input type="radio" checked name="long_day_work"
                                        id="long_day_work"><span>Có</span></div>
                                <div class="d-flex me-4"><input type="radio" name="long_day_work"
                                        id="long_day_work"><span>Tùy thời điểm</span></div>
                                <div class="d-flex me-4"><input type="radio" name="long_day_work"
                                        id="long_day_work"><span>Không</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-start">
                        <div class="input mb-3">
                            <label for="gender">Giới tính</label><br>
                            <div class="d-flex radio">
                                <div class="d-flex me-4"><input type="radio" checked name="gender"
                                        id="gender"><span>Nam</span></div>
                                <div class="d-flex me-4"><input type="radio" name="gender" id="gender"><span>Nữ</span>
                                </div>
                            </div>
                        </div>
                        <div class="input mb-3">
                            <label for="dob">Nơi sinh</label><br>
                            <input type="text" name="dob" id="dob"
                                placeholder="Phường 6, Quận Tân Bình, TP HCM">
                        </div>

                        <div class="input mb-3">
                            <label for="phone">Điện thoại</label><br>
                            <input type="text" name="phone" id="phone" placeholder="0123456789">
                        </div>
                        <div class="input mb-3">
                            <label for="facebook">Facebook cá nhân</label><br>
                            <input type="text" name="facebook" id="facebook" placeholder="facebook.com.vn">
                        </div>
                        <div class="input file">
                            <label for="file_cv">Đính kèm CV</label><br>
                            <div class="file-name" id="file-name">Không có tập tin nào được chọn</div>
                            <input type="file" name="file_cv" id="file_cv" onchange="displayFileName()">
                            <label class="icon" for="file_cv"><img src="./icon-file.png" alt=""></label>
                        </div>
                        <div class="input mb-3" style="margin-top: -12px;">
                            <label for="overtime">Bạn có sẵn sàng làm thêm giờ</label><br>
                            <div class="d-flex radio">
                                <div class="d-flex me-4"><input type="radio" checked name="overtime"
                                        id="overtime"><span>Có</span></div>
                                <div class="d-flex me-4"><input type="radio" name="overtime" id="overtime"><span>Tùy
                                        thời điểm</span></div>
                                <div class="d-flex me-4"><input type="radio" name="overtime"
                                        id="overtime"><span>Không</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-start mb-3">
                        <label for="previous_workplace">Những nơi đã từng làm việc trước đây <span>(ghi rõ vị
                                trí)</span></label>
                        <textarea name="previous_workplace" id="" placeholder="Những nơi đã từng làm việc trước đây"></textarea>
                    </div>
                    <div class="col-12 text-start mb-3">
                        <label for="experience">Kinh nghiệm bản thân</label>
                        <textarea name="experience" id="" placeholder="Kinh nghiệm bản thân"></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit">Gửi ngay</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
