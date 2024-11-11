@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Dashboard Type Work</h1>
        {{-- Type Work --}}
        <div class="type-work">
            <div class="header d-flex justify-content-between">
                <div class="title text-info fs-2">Type Work</div>
                <div class="insert">
                    <a href="{{ route('admin.type-work.insert') }}" class="btn btn-outline-primary">Insert</a>
                </div>
            </div>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @if(!empty($typeWorks))
                    @foreach ($typeWorks as $typeWork)
                    <tr>
                        <td>{{ $typeWork->id }}</td>
                        <td>{{ $typeWork->name }}</td>
                        <td>
                            <a href="{{ route('admin.type-work.update',$typeWork->id) }}" class="btn btn-outline-success">Update</a>
                            <form action="{{ route('admin.type-work.delete', $typeWork->id) }}" method="GET"
                                onsubmit="return confirm('{{ trans('Do you want delete this field ? ') }}');"
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
