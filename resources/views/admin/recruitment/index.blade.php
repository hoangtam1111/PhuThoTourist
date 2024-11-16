@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Dashboard Recruitment</h1>
        {{-- Recruitment --}}
        <div class="recruitment">
            <div class="header d-flex justify-content-between">
                <div class="title text-info fs-2">Recruitment</div>
                <div class="insert">
                    <a href="{{ route('admin.recruitment.insert') }}" class="btn btn-outline-primary">Insert</a>
                </div>
            </div>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Location</th>
                    <th>Quantity</th>
                    <th>Age</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
                @if(!empty($recruitments))
                    @foreach ($recruitments as $recruitment)
                    <tr>
                        <td>{{ $recruitment->id }}</td>
                        <td>{{ $recruitment->location }}</td>
                        <td>{{ $recruitment->quantity }}</td>
                        <td>{{ $recruitment->age }}</td>
                        <td>{{ $recruitment->level }}</td>
                        <td>
                            <a href="{{ route('admin.recruitment.update',$recruitment->id) }}" class="btn btn-outline-success">Update</a>
                            <form action="{{ route('admin.recruitment.delete', $recruitment->id) }}" method="GET"
                                onsubmit="return confirm('{{ trans('Do you want delete this recruitment ? ') }}');"
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
