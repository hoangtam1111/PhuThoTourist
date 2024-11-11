@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Dashboard Type Post</h1>
        {{-- Type Post --}}
        <div class="type-post">
            <div class="header d-flex justify-content-between">
                <div class="title text-info fs-2">Type Post</div>
                <div class="insert">
                    <a href="{{ route('admin.type-post.insert') }}" class="btn btn-outline-primary">Insert</a>
                </div>
            </div>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @if(!empty($typePosts))
                    @foreach ($typePosts as $typePost)
                    <tr>
                        <td>{{ $typePost->id }}</td>
                        <td>{{ $typePost->name }}</td>
                        <td>
                            <a href="{{ route('admin.type-post.update',$typePost->id) }}" class="btn btn-outline-success">Update</a>
                            <form action="{{ route('admin.type-post.delete', $typePost->id) }}" method="GET"
                                onsubmit="return confirm('{{ trans('Do you want delete this type post ? ') }}');"
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
