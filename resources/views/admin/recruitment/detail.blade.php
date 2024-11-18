@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Detail Recruitment</h1>
        {{-- Recruitment --}}
        <div class="recruitment">
            <table class="table table-bordered">
                <tr>
                    <td><label class="form-label">Location</label></td>
                    <td>{{ $recruitment->location }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Quantity</label></td>
                    <td>{{ $recruitment->quantity }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Address</label></td>
                    <td>{{ $recruitment->address }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Job Description</label></td>
                    <td>{{$recruitment->job_description}}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Date</label></td>
                    <td>{{ $recruitment->date }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Interest</label></td>
                    <td>{{ $recruitment->interest }}</td>
                </tr>

                <tr>
                    <td><label class="form-label">Requirement</label></td>
                    <td>{{ $recruitment->requirement }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Age</label></td>
                    <td>{{ $recruitment->age }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Level</label></td>
                    <td>{{ $recruitment->level }}</td>
                </tr>

                <tr>
                    <td><label class="form-label">Field</label></td>
                    <td>{{ $recruitment->field->name }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Type Work</label></td>
                    <td>{{ $recruitment->type_work->name }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Working Place</label></td>
                    <td>{{ $recruitment->working_place->name }}</td>
                </tr>
            </table>
        </div>
        <div class="apply-work">
            <h2>Apply Work</h2>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Phone</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
                @if(!empty($applyWorks))
                    @foreach ($applyWorks as $applyWork)
                    <tr>
                        <td>{{ $applyWork->id }}</td>
                        <td><a href="{{ route('admin.apply-work.detail', $applyWork->id) }}">{{ $applyWork->name }}</a></td>
                        <td>{{ $applyWork->sex }}</td>
                        <td>{{ $applyWork->phone }}</td>
                        <td>{{ $applyWork->level }}</td>
                        <td>
                            <form action="{{ route('admin.apply-work.delete', $applyWork->id) }}" method="GET"
                                onsubmit="return confirm('{{ trans('Do you want delete this apply work ? ') }}');"
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
        <a href="{{ route('admin.recruitment.index') }}" class="btn btn-danger">Back</a>

    </div>
@endsection
