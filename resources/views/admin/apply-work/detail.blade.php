@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Detail Apply Work</h1>
        {{-- Apply Work --}}
        <div class="apply-work">
            <table class="table table-bordered">
                <tr>
                    <td><label class="form-label">Name</label></td>
                    <td>{{ $applyWork->name }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Sex</label></td>
                    <td>{{ $applyWork->sex==1?'Nam':'Nữ' }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Date of Birth</label></td>
                    <td>{{ $applyWork->dob }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Place Of Birth</label></td>
                    <td>{{$applyWork->place_of_birth}}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Current Residence</label></td>
                    <td>{{ $applyWork->current_residence }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Phone</label></td>
                    <td>{{ $applyWork->phone }}</td>
                </tr>

                <tr>
                    <td><label class="form-label">Email</label></td>
                    <td>{{ $applyWork->email }}</td>
                </tr>
                @if ($applyWork->facebook)
                    <tr>
                        <td><label class="form-label">Facebook</label></td>
                        <td><a href="{{ $applyWork->facebook }}">Link</a></td>
                    </tr>
                @endif
                <tr>
                    <td><label class="form-label">Level</label></td>
                    <td>{{ $applyWork->level }}</td>
                </tr>

                <tr>
                    <td><label class="form-label">Long day work</label></td>
                    @if($applyWork->long_day_work==0)
                        <td>Có</td>
                    @elseif($applyWork->long_day_work==1)
                        <td>Tuỳ thời điểm</td>
                    @else
                        <td>Không</td>
                    @endif
                </tr>
                <tr>
                    <td><label class="form-label">Overtime</label></td>
                    @if($applyWork->overtime==0)
                        <td>Có</td>
                    @elseif($applyWork->overtime==1)
                        <td>Tuỳ thời điểm</td>
                    @else
                        <td>Không</td>
                    @endif
                </tr>
                <tr>
                    <td><label class="form-label">Previous Workplace</label></td>
                    <td>{{ $applyWork->previous_workplace }}</td>
                </tr>
                <tr>
                    <td><label class="form-label">Experience</label></td>
                    <td>{{ $applyWork->experience }}</td>
                </tr>
            </table>
        </div>
        @if (!empty($applyWork->file_cv))
            <iframe class="file" src="{{ asset('files/cv/' . $applyWork->file_cv) }}" style="width: 100%; height: 700px;"></iframe>
        @endif
        <a href="{{ route('admin.recruitment.detail', $applyWork->recruitment_id) }}" class="btn btn-danger">Back</a>
    </div>
@endsection
