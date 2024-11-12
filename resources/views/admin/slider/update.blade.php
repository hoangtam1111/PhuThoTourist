@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Update Slider</h1>
        {{-- Slider --}}
        <div class="slider">
            <form method="post" action="{{ route('admin.slider.post-update') }}" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <input type="hidden" name="id" value="{{ $slider->id }}">
                        <td><label class="form-label">Title</label></td>
                        <td>
                            <input type="text" class="form-control" id="title" placeholder="title slider" name="title"
                                value="{{ old('title') ?? $slider->title }}" />
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Image</label></td>
                        <td>
                            <input type="file" class="form-control" id="image" name="image"
                                value="{{ old('image') ?? $slider->image }}" />
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                </table>
                @csrf
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Insert</button>
                    <a href="{{ route('admin.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
