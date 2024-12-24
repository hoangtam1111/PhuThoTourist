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
                    <div class="name">{{ $recruitment->location }}</div>
                    <div class="type">{{ $recruitment->type_work()->first()->name }}</div>

                    <span class="location me-3"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $recruitment->working_place()->first()->name }}</span>
                    <span class="time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{ $recruitment->getWeek($recruitment->date) }} tuần trước
                    </span>
                </div>
            </div>
            @if ($recruitment->state==0)
                <div class="state green">
                    <span>Đang tuyển</span>
                </div>
            @else
                <div class="state red">
                    <span>Đã tuyển</span>
                </div>
            @endif
        </div>

        <div class="title-mobile">
            <div class="d-flex justify-content-start">
                <div class="logo">
                    <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                </div>
                <div class="text">
                    <div class="name text-start">{{ $recruitment->location }}</div>
                    <div class="type text-start">{{ $recruitment->type_work()->first()->name }}</div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="location-time text-start">
                    <div class="location me-3"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $recruitment->working_place()->first()->name }}</div>
                    <div class="time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{ $recruitment->getWeek($recruitment->date) }} tuần trước
                    </div>
                </div>
                <div class="state">
                    @if ($recruitment->state==0)
                <div class="state green">
                    <span>Đang tuyển</span>
                </div>
                    @else
                        <div class="state red">
                            <span>Đã tuyển</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <img src="{{ asset('image/recruitment/detail-recruiment.png') }}" width="100%" alt="">
        <div class="detail">
            <div class="header text-start">Chi tiết tin tuyển dụng</div>
            <table class="table table-bordered text-start">
                <tr>
                    <td class="head">Vị trí</td>
                    <td>{{ $recruitment->location }}</td>
                </tr>
                <tr>
                    <td class="head">Số lượng</td>
                    <td>{{ $recruitment->quantity }} người</td>
                </tr>
                <tr>
                    <td class="head">Nơi làm việc</td>
                    <td>{{ $recruitment->working_place()->first()->name }}</td>
                </tr>
                <tr>
                    <td class="head">Địa chỉ làm việc</td>
                    <td>{{ $recruitment->address }}</td>
                </tr>
                <tr>
                    <td class="head">Mô tả công việc</td>
                    <td>
                        <ul>
                            @foreach ($recruitment->parseArray($recruitment->job_description) as $string)
                                <li>{{ $string }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="head">Ngày làm việc</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td class="head">Giờ làm việc</td>
                    <td>{{ $recruitment->type_work()->first()->name }}</td>
                </tr>
                <tr>
                    <td class="head">Quyền lợi</td>
                    <td>
                        <ul>
                            @foreach ($recruitment->parseArray($recruitment->interest) as $string)
                                <li>{{ $string }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="head">Yêu cầu</td>
                    <td>
                        <ul>
                            @foreach ($recruitment->parseArray($recruitment->requirement) as $string)
                                <li>{{ $string }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="head">Độ tuổi</td>
                    <td>{{ $recruitment->age }}</td>
                </tr>
                <tr>
                    <td class="head">Trình độ</td>
                    <td>{{ $recruitment->level }}</td>
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
            <div class="detail-mobile d-none text-start">
                <p><b>Vị trí</b></p>
                <p>{{ $recruitment->location }}</p>

                <p><b>Số lượng</b></p>
                <p>{{ $recruitment->quantity }} người</p>

                <p><b>Nơi làm việc</b></p>
                <p>{{ $recruitment->working_place()->first()->name }}</p>

                <p><b>Địa chỉ làm việc</b></p>
                <p>{{ $recruitment->address }}</p>

                <p><b>Mô tả công việc</b></p>
                <ul>
                    @foreach ($recruitment->parseArray($recruitment->job_description) as $string)
                        <li>{{ $string }}</li>
                    @endforeach
                </ul>

                <p><b>Ngày làm việc</b></p>
                <p>{{ $recruitment->date }}</p>

                <p><b>Giờ làm việc</b></p>
                <p>{{ $recruitment->type_work()->first()->name }}</p>

                <p><b>Quyền lợi</b></p>
                <ul>
                    @foreach ($recruitment->parseArray($recruitment->interest) as $string)
                        <li>{{ $string }}</li>
                    @endforeach
                </ul>

                <p><b>Yêu cầu</b></p>
                <ul>
                    @foreach ($recruitment->parseArray($recruitment->requirement) as $string)
                        <li>{{ $string }}</li>
                    @endforeach
                </ul>

                <p><b>Độ tuổi</b></p>
                <p>{{ $recruitment->age }}</p>

                <p><b>Trình độ</b></p>
                <p>{{ $recruitment->level }}</p>

                <p><b>Hồ sơ gồm</b></p>
                <p>Thông tin ứng tuyển:
                    <ul>
                        <li>Ứng viên vui lòng gửi CV đến email: tuyendung@damsenpark.vn.</li>
                        <li>Hoặc nộp hồ sơ trực tiếp tại Trụ sở Văn phòng Công ty: 15 đường số 2, cư xá Lữ Gia, P. 15,
                            Quận 11.</li>
                    </ul>
                    (ĐT: 028 38 650 921 - Phòng Nhân sự).
                </p>
            </div>
        </div>
        <div class="apply">
            <div class="header text-start">Ứng tuyển Online</div>
            <form action="{{ route('apply') }}" method="post"  enctype="multipart/form-data">
                <div class="row justify-content-between">
                    @csrf
                    <input type="hidden" name="id" value="{{ $recruitment->id }}">
                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="name">Họ tên</label><br>
                        <input type="text" name="name" id="name" placeholder="Nguyễn Văn A" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="sex">Giới tính</label><br>
                        <div class="d-flex radio">
                            <div class="d-flex me-4"><input type="radio" checked name="sex" id="sex" value="1"><span>Nam</span></div>
                            <div class="d-flex me-4"><input type="radio" name="sex" id="sex" value="0"><span>Nữ</span>
                            </div>
                        </div>
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="dob">Năm sinh</label><br>
                        <input type="text" name="dob" id="dob" placeholder="12-12-2000" value="{{ old('dob') }}">
                        @error('dob')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="place_of_birth">Nơi sinh</label><br>
                        <input type="text" name="place_of_birth" id="place_of_birth"
                            placeholder="Phường 6, Quận Tân Bình, TP HCM" value="{{ old('place_of_birth') }}">
                        @error('place_of_birth')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="current_residence">Nơi ở hiện nay</label><br>
                        <input type="text" name="current_residence" id="current_residence"
                            placeholder="123 Âu Cơ, Phường 9, Tân Bình, TP HCM" value="{{ old('current_residence') }}">
                        @error('current_residence')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="phone">Điện thoại</label><br>
                        <input type="text" name="phone" id="phone" placeholder="0123456789" value="{{ old('place_of_birth') }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="email">Email</label><br>
                        <input type="text" name="email" id="email" placeholder="Nguyenvana@gmail.com" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="facebook">Facebook cá nhân</label><br>
                        <input type="text" name="facebook" id="facebook" placeholder="facebook.com.vn">
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="level">Trình độ</label><br>
                        <input type="text" name="level" id="level" placeholder="Đại học" value="{{ old('level') }}">
                        @error('level')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input file col-lg-5 col-12 text-start">
                        <label for="file_cv">Đính kèm CV</label><br>
                        <div for="file_cv" class="file-name" id="file-name">Không có tập tin nào được chọn</div>
                        <input type="file" class="form-control" id="file_cv" name="file_cv"
                            value="{{ old('file_cv') }}" onchange="displayFileName()"/>
                        {{-- <input type="file" name="file_cv" id="file_cv" onchange="displayFileName()"> --}}
                        <label class="icon" for="file_cv"><img src="{{ asset('image/icon/icon-file.png') }}" alt=""></label>
                        @error('file_cv')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start">
                        <label for="long_day_work">Bạn có sẵn sàng đi công tác dài ngày</label><br>
                        <div class="d-flex radio">
                            <div class="d-flex me-4"><input type="radio" checked name="long_day_work" id="long_day_work" value="0"><span>Có</span></div>
                            <div class="d-flex me-4"><input type="radio" name="long_day_work" id="long_day_work" value="1"><span>Tùy thời điểm</span></div>
                            <div class="d-flex me-4"><input type="radio" name="long_day_work" id="long_day_work" value="2"><span>Không</span></div>
                        </div>
                    </div>

                    <div class="input mb-3 col-lg-5 col-12 text-start" style="margin-top: -12px;">
                        <label for="overtime">Bạn có sẵn sàng làm thêm giờ</label><br>
                        <div class="d-flex radio">
                            <div class="d-flex me-4"><input type="radio" checked name="overtime"
                                    id="overtime" value="0"><span>Có</span></div>
                            <div class="d-flex me-4"><input type="radio" name="overtime" id="overtime" value="1"><span>Tùy
                                    thời điểm</span></div>
                            <div class="d-flex me-4"><input type="radio" name="overtime"
                                    id="overtime" value="2"><span>Không</span></div>
                        </div>
                    </div>

                    <div class="col-12 text-start mb-3">
                        <label for="previous_workplace">Những nơi đã từng làm việc trước đây <span>(ghi rõ vị
                                trí)</span></label>
                        <textarea name="previous_workplace" id="" placeholder="Những nơi đã từng làm việc trước đây">{{ old('previous_workplace') }}</textarea>
                        @error('previous_workplace')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 text-start mb-3">
                        <label for="experience">Kinh nghiệm bản thân</label>
                        <textarea name="experience" id="" placeholder="Kinh nghiệm bản thân">{{ old('experience') }}</textarea>
                        @error('experience')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit">Gửi ngay</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function displayFileName() {
            var fileInput = document.getElementById('file_cv');
            var fileNameElement = document.getElementById('file-name');

            if (fileInput.files.length > 0) {
                fileNameElement.textContent = fileInput.files[0].name;
            } else {
                fileNameElement.textContent = '';
            }
        }
    </script>
@endsection
