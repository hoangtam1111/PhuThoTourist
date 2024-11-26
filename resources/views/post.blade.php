@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <div class="content">
        <div class="title text-center">
            Bài viết
        </div>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="slider">
                        <div class="carousel">
                            <div class="carousel-images ">
                                <img src="./Rectangle 3.png" class="carousel-image" alt="Hình 1">
                                <img src="./Rectangle 3.png" class="carousel-image" alt="Hình 2">
                                <img src="./Rectangle 3.png" class="carousel-image" alt="Hình 3">
                            </div>
                        </div>
                        <div class="carousel-buttons">
                            <button class="button prev" id="prev">❮</button>
                            <button class="button next" id="next">❯</button>
                        </div>

                        <div class="text text-start" id="caption">
                            <p class="title">Đây là mô tả cho Hình 1.</p>
                            <p class="description">THÔNG BÁO MỜI CHÀO GIÁ CẠNH TRANH CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ
                                tổ chức chào giá cạnh tranh lựa chọn đơn vị Cung cấp nước đá để chế tác Băng Đăng tại Công
                                viên Văn hóa Đầm Sen.</p>
                        </div>

                        <div class="dots" id="dots">
                            <span class="dot active" data-index="0"></span>
                            <span class="dot" data-index="1"></span>
                            <span class="dot" data-index="2"></span>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <nav id="nav-scroll" class="  navbar navbar-light px-4">
                        Bài mới nhất
                    </nav>
                    <div class="scroll">
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0"
                            class="scrollspy-example" tabindex="0">
                            <div class="scroll-item d-flex">
                                <div class="image">
                                    <img src="./Rectangle 3.png" alt="">
                                </div>
                                <div class="text">
                                    <div class="title text-start">
                                        Thông báo đấu giá giữ xe tại CVHH Đầm Sen
                                    </div>
                                    <div class="info text-start d-flex align-items-center">
                                        <div class="view">10k views</div>
                                        <div class="circle ms-1 me-1"></div>
                                        <div class="time">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item d-flex">
                                <div class="image">
                                    <img src="./Rectangle 3.png" alt="">
                                </div>
                                <div class="text">
                                    <div class="title text-start">
                                        Thông báo đấu giá giữ xe tại CVHH Đầm Sen
                                    </div>
                                    <div class="info text-start d-flex align-items-center">
                                        <div class="view">10k views</div>
                                        <div class="circle ms-1 me-1"></div>
                                        <div class="time">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item d-flex">
                                <div class="image">
                                    <img src="./Rectangle 3.png" alt="">
                                </div>
                                <div class="text">
                                    <div class="title text-start">
                                        Thông báo đấu giá giữ xe tại CVHH Đầm Sen
                                    </div>
                                    <div class="info text-start d-flex align-items-center">
                                        <div class="view">10k views</div>
                                        <div class="circle ms-1 me-1"></div>
                                        <div class="time">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item d-flex">
                                <div class="image">
                                    <img src="./Rectangle 3.png" alt="">
                                </div>
                                <div class="text">
                                    <div class="title text-start">
                                        Thông báo đấu giá giữ xe tại CVHH Đầm Sen
                                    </div>
                                    <div class="info text-start d-flex align-items-center">
                                        <div class="view">10k views</div>
                                        <div class="circle ms-1 me-1"></div>
                                        <div class="time">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item d-flex">
                                <div class="image">
                                    <img src="./Rectangle 3.png" alt="">
                                </div>
                                <div class="text">
                                    <div class="title text-start">
                                        Thông báo đấu giá giữ xe tại CVHH Đầm Sen
                                    </div>
                                    <div class="info text-start d-flex align-items-center">
                                        <div class="view">10k views</div>
                                        <div class="circle ms-1 me-1"></div>
                                        <div class="time">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item d-flex">
                                <div class="image">
                                    <img src="./Rectangle 3.png" alt="">
                                </div>
                                <div class="text">
                                    <div class="title text-start">
                                        Thông báo đấu giá giữ xe tại CVHH Đầm Sen
                                    </div>
                                    <div class="info text-start d-flex align-items-center">
                                        <div class="view">10k views</div>
                                        <div class="circle ms-1 me-1"></div>
                                        <div class="time">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-item d-flex">
                                <div class="image">
                                    <img src="./Rectangle 3.png" alt="">
                                </div>
                                <div class="text">
                                    <div class="title text-start">
                                        Thông báo đấu giá giữ xe tại CVHH Đầm Sen
                                    </div>
                                    <div class="info text-start d-flex align-items-center">
                                        <div class="view">10k views</div>
                                        <div class="circle ms-1 me-1"></div>
                                        <div class="time">20/02/2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bt-4 ">
                <div class="col-3">
                    <div class="type-post">
                        <img src="{{ asset('image/background/img-background.png') }}" class="img-background"
                            alt="">
                        <div class="head text-center">
                            Chủ đề bài viết
                        </div>
                        <ul class="list-type">
                            @foreach ($types as $type)
                                <li class="{{ $type->id == $type_id ? 'active' : '' }}">
                                    <a
                                        href="{{ route('post', ['type' => $type->id, 'search' => $search, 'from' => $from, 'to' => $to]) }}">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                        <span>{{ $type->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-9">
                    <div class="list-post">
                        <div class="filter mb-4 d-flex justify-content-between">
                            <div class="search">
                                <form action="{{ route('post') }}" method="get">
                                    <button type="submit" id="button-search">
                                        <i class="fa fa-search" aria-hidden="true" id="search-button"></i>
                                    </button>
                                    <input type="hidden" name="type" value="{{ $type_id }}">
                                    <input type="hidden" name="from" value="{{ $from }}">
                                    <input type="hidden" name="to" value="{{ $to }}">
                                    <input type="text" placeholder="Tìm kiếm" name="search" id="search-input"
                                        value="{{ $search }}">
                                </form>
                            </div>
                            <div class="date">
                                <input type="date" name="from" id="date-input" value="{{ $from ? $from : '' }}"
                                    onchange="selectFrom(this.value)">
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <input type="date" name="to" id="date-input" value="{{ $to ? $to : '' }}"
                                    onchange="selectTo(this.value)">
                                <span class="sort"><i class="fa fa-exchange" aria-hidden="true"></i>A đến Z</span>
                            </div>
                        </div>
                        <div class="related-posts">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-3 mb-4">
                                        <div class="card">
                                            <img src="{{ asset('image/post/' . $post->image) }}" class="card-img-top"
                                                alt="...">
                                            <div class="text-start p-2">
                                                <div class="d-flex align-items-center role">Admin <div
                                                        class="circle ms-1">
                                                    </div>
                                                </div>
                                                <a href="{{ route('detail_document', $post->id) }}">
                                                    <div class="title mb-2">{{ $post->title }}</div>
                                                </a>
                                            </div>
                                            <div class="ps-2">
                                                <div class="action text-start">
                                                    @foreach ($post->typePost()->get() as $detail)
                                                        <span>{{ $detail->name }}</span>
                                                    @endforeach
                                                </div>
                                                <div class="information d-flex flex-wrap align-items-center mb-4 mt-2">
                                                    <div class="view">{{ $post->view }} lượt xem</div>
                                                    <div class="circle-gray ms-1 me-1"></div>
                                                    <div class="date">{{ $post->date }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-5"></div>
                <div class="col-9 mb-5">
                    <div class="list-page d-flex justify-content-center align-items-center text-center">
                        <div>
                            <a
                                href="{{ route('post', ['type' => $type_id, 'search' => $search, 'from' => $from, 'to' => $to, 'page' => $page - 1 < 1 ? 1 : $page - 1]) }}">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                            </a>
                        </div>
                        @for ($i = 1; $i <= $total; $i++)
                            <a
                                href="{{ route('post', ['type' => $type_id, 'search' => $search, 'from' => $from, 'to' => $to, 'page' => $i]) }}">
                                <div class="{{ $page == $i ? 'active' : '' }}">{{ $i }}</div>
                            </a>
                        @endfor
                        <div>
                            <a
                                href="{{ route('post', ['type' => $type_id, 'search' => $search, 'from' => $from, 'to' => $to, 'page' => $page + 1 > $total ? $total : $page + 1]) }}">
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    let currentIndex = 0;
    const images = document.querySelector('.carousel-images');
    const totalImages = document.querySelectorAll('.carousel-image').length;
    const captions = [
        "Đây là mô tả cho Hình 1.",
        "Đây là mô tả cho Hình 2.",
        "Đây là mô tả cho Hình 3."
    ];

    const dots = document.querySelectorAll('.dot');

    function updateCarousel() {
        const offset = -currentIndex * 100;
        images.style.transform = `translateX(${offset}%)`;
        document.getElementById('caption').innerText = captions[currentIndex];

        // Cập nhật các dấu chấm
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    });

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateCarousel();
    });

    // Thêm sự kiện cho các dấu chấm
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            currentIndex = parseInt(dot.getAttribute('data-index'));
            updateCarousel();
        });
    });

    // Tự động chuyển đổi hình ảnh mỗi 3 giây
    /*setInterval(() => {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    }, 3000);*/
</script>

<script>
    function selectFrom(selectedDate) {
        var baseUrl = '{{ route('post', ['type' => $type_id, 'search' => $search, 'from' => $from, 'to' => $to]) }}';
        baseUrl = baseUrl.replace(/&amp;/g, '&');
        if (baseUrl.includes('from=')) {
            baseUrl = baseUrl.replace(/(from=)[^&]*/, '$1' + selectedDate);
        } else {
            var newUrl = baseUrl.includes('?') ?
                baseUrl + '&from=' + selectedDate :
                baseUrl + '?from=' + selectedDate;
            window.location.href = newUrl;
            return;
        }
        window.location.href = baseUrl;
    }

    function selectTo(selectedDate) {
        var baseUrl = '{{ route('post', ['type' => $type_id, 'search' => $search, 'from' => $from, 'to' => $to]) }}';
        baseUrl = baseUrl.replace(/&amp;/g, '&');
        if (baseUrl.includes('to=')) {
            baseUrl = baseUrl.replace(/(to=)[^&]*/, '$1' + selectedDate);
        } else {
            var newUrl = baseUrl.includes('?') ?
                baseUrl + '&to=' + selectedDate :
                baseUrl + '?to=' + selectedDate;
            window.location.href = newUrl;
            return;
        }
        window.location.href = baseUrl;
    }
</script>
