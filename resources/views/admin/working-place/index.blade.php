@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Dashboard Working Place</h1>
        {{-- Working Place --}}
        <div class="working-place">
            <div class="header d-flex justify-content-between">
                <div class="title text-info fs-2">Working Place</div>
                <div class="insert">
                    <a href="{{ route('admin.working-place.insert') }}" class="btn btn-outline-primary">Insert</a>
                </div>
            </div>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @if(!empty($workingPlaces))
                    @foreach ($workingPlaces as $workingPlace)
                    <tr>
                        <td>{{ $workingPlace->id }}</td>
                        <td>{{ $workingPlace->name }}</td>
                        <td>
                            <a href="{{ route('admin.working-place.update',$workingPlace->id) }}" class="btn btn-outline-success">Update</a>
                            <form action="{{ route('admin.working-place.delete', $workingPlace->id) }}" method="GET"
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
