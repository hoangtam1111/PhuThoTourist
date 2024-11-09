@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <div class="content">
        <div class="title text-center">
            Bài viết
        </div>
        <div class="container">
            <div class="row">
                <div class="col-9 slider">

                </div>

                <div class="col-3 list-new-post">

                </div>
            </div>
            <div class="row bt-4 ">
                <div class="col-3">
                    <div class="type-post">
                        <div class="head text-center">
                            Chủ đề bài viết
                        </div>
                        <ul class="list-type">
                            @foreach ($types as $type)
                                <li class="{{ $type->id == $type_id ? 'active' : '' }}">
                                    <a href="{{ route('post', ['type' => $type->id]) }}">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                        <span>{{ $type->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <img src="{{ asset('image/background/img-background.png') }}" class="img-background" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <div class="list-post">
                        <div class="filter mb-4 d-flex justify-content-between">
                            <div class="search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="text" placeholder="Tìm kiếm" name="search">
                            </div>
                            <div class="date">
                                <input type="date" name="from" id="" value="10/10/2021">
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <input type="date" name="to" id="" value="10/10/2021">
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
                                                <div class="d-flex align-items-center role">Admin <div class="circle ms-1">
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
@endsection
