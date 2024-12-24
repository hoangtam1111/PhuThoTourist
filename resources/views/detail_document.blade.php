@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/detail_document.css') }}">
    <!-- Content -->
    <div class="container mt-5 mb-5  text-center">
        <div class="content">
            <div class="title text-start">
                {{ $post->title }}
            </div>
            <div class="time text-start">
                by tuyendung in on {{ $post->date }}
            </div>
            <img src="{{ asset('image/post/' . $post->image) }}" alt="" class="img-detail mt-4">
            <div class="text text-start">
                @foreach ($post->parseArray($post->description) as $string)
                    @if(!empty($post->parseArrayTab($string)[1]))
                        <ul>
                            @foreach ($post->parseArrayTab($string) as $li)
                                @if(!empty($li))
                                    <li>{{ $li }}</li>
                                @endif
                            @endforeach
                        </ul>
                    @else
                        <p>{{ $string }}</p>
                    @endif
                @endforeach
            </div>
            @if (!empty($post->file))
            <iframe src="{{ asset('files/post/' . $post->file) }}" style="width: 100%; height: 70vh;" frameborder="0"></iframe>

            @endif
            <div class="related-posts mt-4">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-3 col-12">
                            <div class="card">
                                <img src="{{ asset('image/post/' . $post->image) }}" class="card-img-top" alt="...">
                                <div class="text-start p-2">
                                    <div class="d-flex align-items-center role">Admin <div class="circle ms-1"></div>
                                    </div>
                                    <div class="title mb-2">{{ $post->title }}
                                    </div>
                                </div>
                                <div class="ps-2">
                                    <div class="action text-start">
                                        @foreach ($post->typePost()->get() as $detail)
                                            <span>{{ $detail->name }}</span>
                                        @endforeach
                                    </div>
                                    <div class="information d-flex align-items-center mb-3 mt-2">
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
        <div class="list-new-post mt-3">
            <div id="nav-scroll" class="navbar-light px-4">
                Bài mới nhất
            </div>
            <div class="scroll">
                    @foreach ($posts as $post)
                        <div class="scroll-item d-flex">
                            <div class="image">
                                <img src="{{ asset('image/post/'.$post->image) }}" alt="">
                            </div>
                            <div class="text">
                                <a href="{{ route('detail_document', $post->id) }}" style="text-decoration: none">
                                    <div class="title text-start">
                                        {{ $post->title }}
                                    </div>
                                </a>
                                <div class="info text-start d-flex align-items-center">
                                    <div class="view">{{ $post->view }}k views</div>
                                    <div class="circle ms-1 me-1"></div>
                                    <div class="time">{{ $post->date }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>

        </div>
    </div>
@endsection
