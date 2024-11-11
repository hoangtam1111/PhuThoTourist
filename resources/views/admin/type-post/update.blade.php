@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Update Type Post</h1>
        {{-- Type Post --}}
        <div class="type-post">
            <form method="post" action="{{ route('admin.type-post.post-update') }}" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <input type="hidden" name="id" value="{{ $typePost->id }}">
                        <td><label class="form-label">Name</label></td>
                        <td>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                value="{{ old('name') ?? $typePost->name }}" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                </table>
                @csrf
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Insert</button>
                    <a href="{{ route('admin.type-post.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
