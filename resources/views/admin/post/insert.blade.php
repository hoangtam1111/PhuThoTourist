@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Insert Post</h1>
        {{-- Post --}}
        <div class="post">
            <form method="post" action="{{ route('admin.post.post-insert') }}" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td><label class="form-label">Title</label></td>
                        <td>
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                                value="{{ old('title') }}" />
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Description</label></td>
                        <td>
                            <textarea class="form-control" name="description" id="" placeholder="">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Type Post</label></td>
                        <td>
                            @foreach($types as $type)
                                <div>
                                    <input type="checkbox" name="types[]" value="{{ $type->id }}" id="type_{{ $type->id }}">
                                    <label for="type_{{ $type->id }}">{{ $type->name }}</label>
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
                    <button type="submit" class="btn btn-primary">Insert</button>
                    <a href="{{ route('admin.post.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
