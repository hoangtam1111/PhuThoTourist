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
                            @foreach ($fields as $field)
                                <div>{{ $field->name }}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="field mb-3">
                        <div class="title text-start mb-2">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            <span>Hình thức làm việc</span>
                        </div>
                        <div class="list-field d-flex flex-wrap">
                            @foreach ($type_works as $type_work)
                                <div>{{ $type_work->name }}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="field mb-3">
                        <div class="title text-start mb-2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Nơi làm việc</span>
                        </div>
                        <div class="list-field d-flex flex-wrap">
                            @foreach ($working_places as $working_place)
                                <div>{{ $working_place->name }}</div>
                            @endforeach
                        </div>
                    </div>
                    <img src="{{ asset('image/background/img-background.png') }}" class="img-background" alt="">
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    @foreach ($recruitments as $recruitment)
                        <div class="col-4 mb-4">
                            <div class="recruiment ">
                                <div class="title d-flex flex-wrap">
                                    <img src="{{ asset('image/background/logo-dam-sen.png') }}" alt="">
                                    <div class="text-start">
                                        <div class="name">{{ $recruitment->location }}</div>
                                        <div class="type">{{ $recruitment->type_work()->first()->name}}</div>
                                        <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $recruitment->working_place()->first()->name }}</div>
                                        <div class="d-flex justify-content-between">
                                            <div class="time">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i> {{ $recruitment->getWeek($recruitment->date) }} tuần trước
                                            </div>
                                            <div class="state green">
                                                <span>Đang tuyển</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail text-start">Mô tả công việc:</div>
                                <div class="description text-start">
                                    {{ $recruitment->job_description }} ...
                                </div>
                                <a href="{{ route('detail_recruitment',$recruitment->id) }}">
                                    <div class="link">
                                        Xem chi tiết
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
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
