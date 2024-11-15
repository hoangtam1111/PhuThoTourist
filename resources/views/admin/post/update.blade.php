@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Update Post</h1>
        {{-- Post --}}
        <div class="type-post">
            <form method="post" action="{{ route('admin.post.post-update') }}" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <tr>
                        <td><label class="form-label">Title</label></td>
                        <td>
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                                value="{{ old('title') ?? $post->title }}" />
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Description</label></td>
                        <td>
                            <textarea name="description" id="" placeholder="">{{ old('description') ?? $post->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Type Post</label></td>
                        <td>
                            @foreach($itemTypes as $itemType)
                                <div>
                                    <input type="checkbox" name="types[]" value="{{ $itemType['type']->id }}" id="type_{{ $itemType['type']->id }}" {{ $itemType['state']==1?"checked":"" }}>
                                    <label for="type_{{ $itemType['type']->id }}">{{ $itemType['type']->name }}</label>
                                </div>
                            @endforeach
                        </td>
                    </tr>

                    <tr>
                        <td><label class="form-label">Image</label></td>
                        <td>
                            <input type="file" class="form-control" id="image" name="image"
                                value="{{ old('image') }}" />
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">File</label></td>
                        <td>
                            <input type="file" class="form-control" id="file" name="file"
                                value="{{ old('file') }}" />
                            @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                </table>
                @csrf
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('admin.post.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
