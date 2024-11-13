@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Update Central Service</h1>
        {{-- Central Service --}}
        <div class="central-service">
            <form method="post" action="{{ route('admin.central-service.post-update') }}" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <input type="hidden" name="id" value="{{ $centralService->id }}">
                    <tr>
                        <td><label class="form-label">Title</label></td>
                        <td>
                            <input type="text" class="form-control" id="name" placeholder="Title" name="title"
                                value="{{ old('title') ?? $centralService->title }}" />
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Description</label></td>
                        <td>
                            <input type="text" class="form-control" id="name" placeholder="Description" name="description"
                                value="{{ old('description') ?? $centralService->description }}" />
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Image</label></td>
                        <td>
                            <input type="file" class="form-control" id="image" name="image"
                                value="{{ old('image') ?? $centralService->image }}" />
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
