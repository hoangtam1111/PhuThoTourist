@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />

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
    <div class="container">
        <div class="slider-custom">
            <div class="title text-center">
                <h3>CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ</h3>
                <h2>PHUTHOTOURIST</h3>
                    <h4>Ngày thành lập 01/01/2019</h4>
            </div>
            <section id="slider">
                <input type="radio" name="slider" id="s1">
                <input type="radio" name="slider" id="s2">
                <input type="radio" name="slider" id="s3" checked>
                <input type="radio" name="slider" id="s4">
                <input type="radio" name="slider" id="s5">
                <label for="s1" id="slider1">
                    <img src="{{ asset('image/sliders/image1.png') }}" height="500px" width="100%" alt="">
                    <div class="text">Hơn 1000 bánh chưng lộc cho khách dâng hương tượng vua Hùng tại Đầm Sen</div>
                </label>
                <label for="s2" id="slider2">
                    <img src="{{ asset('image/sliders/image1.png') }}" height="500px" width="100%" alt="">
                    <div class="text">Hơn 1000 bánh chưng lộc cho khách dâng hương tượng vua Hùng tại Đầm Sen</div>
                </label>
                <label for="s3" id="slider3">
                    <img src="{{ asset('image/sliders/image1.png') }}" height="500px" width="100%" alt="">
                    <div class="text">Hơn 1000 bánh chưng lộc cho khách dâng hương tượng vua Hùng tại Đầm Sen</div>
                </label>
                <label for="s4" id="slider4">
                    <img src="{{ asset('image/sliders/image1.png') }}" height="500px" width="100%" alt="">
                    <div class="text">Hơn 1000 bánh chưng lộc cho khách dâng hương tượng vua Hùng tại Đầm Sen</div>
                </label>
                <label for="s5" id="slider5">
                    <img src="{{ asset('image/sliders/image1.png') }}" height="500px" width="100%" alt="">
                    <div class="text">Hơn 1000 bánh chưng lộc cho khách dâng hương tượng vua Hùng tại Đầm Sen</div>
                </label>
            </section>
        </div>
    </div>
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
                    @if (!empty($newPosts))
                        @foreach ($newPosts as $newPost)
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('image/post/' . $newPost->image) }}" class="card-img-top"
                                        alt="...">
                                    <div class="text-start p-3">
                                        <div class="d-flex align-items-center role mb-2">Admin <div class="circle ms-1">
                                            </div>
                                        </div>
                                        <a href="{{ route('detail_document', $newPost->id) }}">
                                            <div class="title mb-2">{{ $newPost->title }}</div>
                                        </a>
                                        <p class="text">{{ $newPost->description }}</p>
                                    </div>
                                    <div class="ps-3">
                                        <div class="action text-start">
                                            @foreach ($newPost->typePost()->get() as $detail)
                                                <button>{{ $detail->name }}</button>
                                            @endforeach
                                        </div>
                                        <div class="information d-flex align-items-center mb-3">
                                            <div class="view">{{ $newPost->view }} lượt xem</div>
                                            <div class="circle-gray ms-1 me-1"></div>
                                            <div class="date">{{ $newPost->date }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <a href="{{ route('post') }}" class="btn btn-posts mt-4 mb-4">Xem thêm bài viết</a>
            </div>
            <div class="central-service text-center pt-4 pb-5 mb-4">
                <p class="title ">LĨNH VỰC HOẠT ĐỘNG</p>
                <div class="header">Các dịch vụ trọng tâm</div>
                <div class="underline"></div>
                <p class="text mt-3 mb-4">3 dịch vụ trọng tâm của Phuthotourist là vui chơi giải trí, nhà hàng – khách sạn,
                    và dịch vụ lữ hành</p>
                <div class="row justify-content-center">
                    @foreach ($centralServices as $central)
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('image/central/' . $central->image) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $central->title }}</h5>
                                    <p class="card-text">{{ $central->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel({
                indicators: true
            })
        })
    </script>
@endsection
