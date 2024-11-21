@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/document.css') }}">
    <!-- Content -->
    <div class="container mt-5 content text-center">
        <div class="title mb-4">
            Tài liệu
        </div>
        <div class="new-document pb-5">
            <div class="row">
                <div class="col-3 mb-3">
                    <div class="document">
                        <img class="img-background" src="{{ asset('image/document/img-doc.png') }}" alt="">
                        <img class="icon-doc" src="{{ asset('image/icon/files.png') }}" alt="">
                        <div class="text">Báo cáo Tài Chính năm 2022-2023</div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="document">
                        <img class="img-background" src="{{ asset('image/document/img-doc.png') }}" alt="">
                        <img class="icon-doc" src="{{ asset('image/icon/files.png') }}" alt="">
                        <div class="text">Báo cáo Tài Chính năm 2022-2023</div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="document">
                        <img class="img-background" src="{{ asset('image/document/img-doc.png') }}" alt="">
                        <img class="icon-doc" src="{{ asset('image/icon/files.png') }}" alt="">
                        <div class="text">Báo cáo Tài Chính năm 2022-2023</div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="document">
                        <img class="img-background" src="{{ asset('image/document/img-doc.png') }}" alt="">
                        <img class="icon-doc" src="{{ asset('image/icon/files.png') }}" alt="">
                        <div class="text">Báo cáo Tài Chính năm 2022-2023</div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="document">
                        <img class="img-background" src="{{ asset('image/document/img-doc.png') }}" alt="">
                        <img class="icon-doc" src="{{ asset('image/icon/files.png') }}" alt="">
                        <div class="text">Báo cáo Tài Chính năm 2022-2023</div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="document">
                        <img class="img-background" src="{{ asset('image/document/img-doc.png') }}" alt="">
                        <img class="icon-doc" src="{{ asset('image/icon/files.png') }}" alt="">
                        <div class="text">Báo cáo Tài Chính năm 2022-2023</div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="document">
                        <img class="img-background" src="{{ asset('image/document/img-doc.png') }}" alt="">
                        <img class="icon-doc" src="{{ asset('image/icon/files.png') }}" alt="">
                        <div class="text">Báo cáo Tài Chính năm 2022-2023</div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="document">
                        <img class="img-background" src="{{ asset('image/document/img-doc.png') }}" alt="">
                        <img class="icon-doc" src="{{ asset('image/icon/files.png') }}" alt="">
                        <div class="text">Báo cáo Tài Chính năm 2022-2023</div>
                    </div>
                </div>
            </div>
            <i class="down fa fa-angle-double-down" aria-hidden="true"></i>
        </div>
        <div class="list-document p-5">
            <div class="filter d-flex justify-content-between">
                <div class="filter-date">
                    <p class="text-start">Ngày tạo</p>
                    <div class="input-date text-start">
                        <input type="date" name="from" id="date-input" value="{{ $from?$from:'' }}"
                        onchange="selectFrom(this.value)">
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <input type="date" name="to" id="date-input" value="{{ $to?$to:'' }}"
                        onchange="selectTo(this.value)">
                    </div>
                </div>
                <div class="filter-text">
                    <p class="text-start">Từ khoá</p>
                    <div class="input-search">
                        <form action="{{ route('document') }}" method="get">
                            <button type="submit" id="button-search">
                                <i class="fa fa-search" aria-hidden="true" id="search-button"></i>
                            </button>
                            <input type="hidden" name="from" value="{{ $from }}">
                            <input type="hidden" name="to" value="{{ $to }}">
                            <input type="text" placeholder="Tìm kiếm" name="search" id="search-input" value="{{ $search }}">
                        </form>
                    </div>
                </div>
            </div>

            <div class="table p-2 mt-2">
                <div class="row">
                    <div class="header col-1 text-center"
                        style="border-top-left-radius: 8px; border-bottom-left-radius: 8px;">STT</div>
                    <div class="header col-5">Tên tài liệu</div>
                    <div class="header col-3">Ngày tạo</div>
                    <div class="header col-3 text-center"
                        style="border-top-right-radius: 8px; border-bottom-right-radius: 8px;">Tải tài liệu</div>
                </div>
                @foreach ($posts as $post)
                    <div class="row mt-2">
                        <div class="body col-1 text-center"
                            style="border-top-left-radius: 8px; border-bottom-left-radius: 8px;">{{ $post->id }}</div>
                        <div class="body col-5">{{ $post->title }}</div>
                        <div class="body col-3">{{ $post->date }}</div>
                        <div class="body col-3 text-center"
                            style="border-top-right-radius: 8px; border-bottom-right-radius: 8px;">
                            <a href="{{ asset('files/post/' . $post->file) }}"
                                download="{{ asset('files/post/' . $post->file) }}">
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pages d-flex justify-content-between">
                <div class="num-of-page">
                    Hiển thị <input type="text" class="num" value="{{ $page_size ?? 10 }}" min="5"> câu
                    trả lời trong mỗi
                    trang
                </div>
                <div class="list-page d-flex justify-content-center align-items-center">
                    <div>
                        <a href="{{ route('document', ['search' => $search,'from'=>$from, 'to' => $to,'page'=>$page-1<1?1:$page-1]) }}">
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </a>
                    </div>
                    @for($i = 1; $i <= $total; $i++)
                        <a href="{{ route('document', ['search' => $search,'from'=>$from, 'to' => $to,'page'=>$i]) }}">
                            <div class="{{ $page==$i?'active':'' }}">{{ $i }}</div>
                        </a>
                    @endfor
                    <div>
                        <a href="{{ route('document', ['search' => $search,'from'=>$from, 'to' => $to,'page'=>$page+1 > $total ? $total : $page+1]) }}">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
<script>
    function selectFrom(selectedDate) {
        var baseUrl = '{{ route('document', ['search' => $search,'from'=>$from, 'to' => $to]) }}';
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
        var baseUrl = '{{ route('document', ['search' => $search,'from'=>$from, 'to' => $to]) }}';
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
