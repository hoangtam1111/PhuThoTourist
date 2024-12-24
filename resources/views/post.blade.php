@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <div class="content">
        <div class="arrow-container">
            <div class="arrow-div">BÀI VIẾT</div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-8 mb-3 slider">
                    <div class="carousel">
                        <div class="carousel-images ">
                            @foreach ($sliders as $slider)
                                <img src="{{ asset('image/post/'.$slider->image) }}" class="carousel-image">
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-buttons">
                        <button class="button prev" id="prev">❮</button>
                        <button class="button next" id="next">❯</button>
                    </div>

                    <div class="text text-start" id="caption">
                        <p class="title">Kết quả đấu giá giữ xe tại CVVH Đầm Sen 2022</p>
                        <p class="description">THÔNG BÁO MỜI CHÀO GIÁ CẠNH TRANH CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ tổ chức chào giá cạnh tranh lựa chọn đơn vị Cung cấp nước đá để chế tác Băng Đăng tại Công viên Văn hóa Đầm Sen.</p>
                    </div>

                    <div class="dots" id="dots">
                        <span class="dot active" data-index="0"></span>
                        <span class="dot" data-index="1"></span>
                        <span class="dot" data-index="2"></span>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 list-new-post">
                    <nav id="nav-scroll" class="  navbar navbar-light px-4">
                        Bài mới nhất
                    </nav>
                    <div class="scroll">
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                            @foreach ($newPosts as $newPost)
                                <div class="scroll-item d-flex">
                                    <div class="image">
                                        <img src="{{ asset('image/post/'.$newPost->image) }}" alt="">
                                    </div>
                                    <div class="text">
                                        <div class="title text-start">
                                            {{ $newPost->title }}
                                        </div>
                                        <div class="info text-start d-flex align-items-center">
                                            <div class="view">{{ $newPost->view }}k views</div>
                                            <div class="circle ms-1 me-1"></div>
                                            <div class="time">{{ $newPost->date }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bt-4 ">
                <div class="col-md-3 col-0">
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
                <div class="col-md-9 col-12">
                    <div class="list-post">
                        <div class="filter mb-4 d-flex justify-content-between flex-wrap">
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
                                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                                        <div class="card">
                                            <img src="{{ asset('image/post/' . $post->image) }}" style="border-top-left-radius: 8px;
                                            border-top-right-radius: 8px;"
                                                alt="...">
                                            <div class="text-start p-2">
                                                <div class="d-flex align-items-center role">Admin <div
                                                        class="circle ms-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title p-2">
                                                {{ $post->title }}
                                            </div>
                                            <div class="ps-2" >
                                                <div  style="height: 70px">
                                                    <div class="action text-start d-flex flex-wrap">
                                                        @foreach ($post->typePost()->get() as $detail)
                                                            <span class="m-1">{{ $detail->name }}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="information d-flex flex-wrap align-items-center mb-4">
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
                <div class="col-lg-3 col-md-0 col-0 mb-5"></div>
                <div class="col-lg-9 col-md-12 col-12 mb-5">
                    <div class="">
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
                                    <div class="{{ $page == $i ? 'active' : '' }} ">{{ $i }}</div>
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
    </div>
    <script>
        let currentIndex = 0;
        const images = document.querySelector('.carousel-images');
        const totalImages = document.querySelectorAll('.carousel-image').length;
        var captions = [];

        fetch('http://127.0.0.1:8000/api/slider')
        .then(response => {
            if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
           captions=data;
           console.log(captions);
        })
        .catch(error => console.error('There was a problem with the fetch operation:', error));

        console.log(captions);
        const dots = document.querySelectorAll('.dot');
        function updateCarousel() {
            const offset = -currentIndex * 100;
            images.style.transform = `translateX(${offset}%)`;

            // Cập nhật tiêu đề và mô tả
            const captionElement = document.getElementById('caption');
            captionElement.querySelector('.title').innerText = captions[currentIndex].title;
            captionElement.querySelector('.description').innerText = captions[currentIndex].description;

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
        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalImages;
            updateCarousel();
        }, 3000);

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
@endsection

