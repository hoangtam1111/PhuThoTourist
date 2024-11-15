@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Dashboard Post</h1>
        {{-- Post --}}
        <div class="post">
            <div class="header d-flex justify-content-between">
                <div class="title text-info fs-2">Post</div>
                <div class="insert">
                    <a href="{{ route('admin.post.insert') }}" class="btn btn-outline-primary">Insert</a>
                </div>
            </div>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
                @if(!empty($posts))
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->view }}</td>
                        <td>
                            <a href="{{ route('admin.post.update',$post->id) }}" class="btn btn-outline-success">Update</a>
                            <form action="{{ route('admin.post.delete', $post->id) }}" method="GET"
                                onsubmit="return confirm('{{ trans('Do you want delete this post ? ') }}');"
                                style="display: inline-block;">
                                @csrf
                                <input type="submit" class="btn btn-outline-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection
