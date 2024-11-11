@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Dashboard Field</h1>
        {{-- Field --}}
        <div class="field">
            <div class="header d-flex justify-content-between">
                <div class="title text-info fs-2">Field</div>
                <div class="insert">
                    <a href="{{ route('admin.field.insert') }}" class="btn btn-outline-primary">Insert</a>
                </div>
            </div>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @if(!empty($fields))
                    @foreach ($fields as $field)
                    <tr>
                        <td>{{ $field->id }}</td>
                        <td>{{ $field->name }}</td>
                        <td>
                            <a href="{{ route('admin.field.update',$field->id) }}" class="btn btn-outline-success">Update</a>
                            <form action="{{ route('admin.field.delete', $field->id) }}" method="GET"
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
