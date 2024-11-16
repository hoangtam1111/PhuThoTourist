@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Update Recruitment</h1>
        {{-- Recruitment --}}
        <div class="recruitment">
            <form method="post" action="{{ route('admin.recruitment.post-update') }}" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <input type="hidden" name="id" value="{{ $recruitment->id }}">
                    <tr>
                        <td><label class="form-label">Location</label></td>
                        <td>
                            <input type="text" class="form-control" id="title" placeholder="Location work" name="location"
                                value="{{ $recruitment->location ?? old('location')  }}" />
                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Quantity</label></td>
                        <td>
                            <input type="number" class="form-control" id="title" name="quantity"
                            value="{{ old('quantity') ?? $recruitment->quantity}}" min="1"/>
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Address</label></td>
                        <td>
                            <input type="text" class="form-control" id="title" placeholder="address work" name="address"
                                value="{{ old('address') ?? $recruitment->address }}" />
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Job Description</label></td>
                        <td>
                            <textarea class="form-control" name="job_description" id="">{{ old('job_description') ?? $recruitment->job_description }}</textarea>
                            @error('job_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Date</label></td>
                        <td>
                            <input type="date" class="form-control" id="date" name="date"
                                value="{{ old('date') ?? $recruitment->date }}" />
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Interest</label></td>
                        <td>
                            <textarea class="form-control" name="interest" id="">{{ old('interest') ?? $recruitment->interest }}</textarea>
                            @error('interest')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                        <td><label class="form-label">Requirement</label></td>
                        <td>
                            <textarea class="form-control" name="requirement" id="">{{ old('requirement') ?? $recruitment->requirement }}</textarea>
                            @error('requirement')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Age</label></td>
                        <td>
                            <input type="text" class="form-control" id="age" placeholder="age" name="age"
                                value="{{ old('age') ?? $recruitment->age}}" />
                            @error('age')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Level</label></td>
                        <td>
                            <input type="text" class="form-control" id="title" placeholder="level work" name="level"
                                value="{{ old('level') ?? $recruitment->level }}" />
                            @error('level')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                        <td><label class="form-label">Field</label></td>
                        <td>
                            <select class="form-control" id="field_id" name="field_id">
                                <option value="{{ $recruitment->field->id }}" selected>{{ $recruitment->field->name }}</option>
                                @foreach ($fields as $field)
                                    <option value="{{ $field->id }}">{{ $field->name }}</option>
                                @endforeach
                            </select>
                            @error('field_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Type Work</label></td>
                        <td>
                            <select class="form-control" id="type_work_id" name="type_work_id">
                                <option value="{{ $recruitment->type_work->id }}" selected>{{ $recruitment->type_work->name }}</option>
                                @foreach ($typeWorks as $typeWork)
                                    <option value="{{ $typeWork->id }}">{{ $typeWork->name }}</option>
                                @endforeach
                            </select>
                            @error('type_work_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Working Place</label></td>
                        <td>
                            <select class="form-control" id="working_place_id" name="working_place_id">
                                <option value="{{ $recruitment->working_place->id }}" selected>{{ $recruitment->working_place->name }}</option>
                                @foreach ($workingPlaces as $workingPlace)
                                    <option value="{{ $workingPlace->id }}">{{ $workingPlace->name }}</option>
                                @endforeach
                            </select>
                            @error('working_place_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                </table>
                @csrf
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('admin.recruitment.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
