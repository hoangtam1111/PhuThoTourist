@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        {{-- Slider --}}
        <div class="slider">
            <div class="header d-flex justify-content-between">
                <div class="title text-info fs-2">Slider</div>
                <div class="insert">
                    <a href="{{ route('admin.slider.insert') }}" class="btn btn-outline-primary">Insert</a>
                </div>
            </div>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
                @if(!empty($sliders))
                    @foreach ($sliders as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td><img src="{{ asset('image/sliders/'.$slider->image) }}" style="max-height: 100px" alt=""></td>
                        <td>{{ $slider->title }}</td>
                        <td>
                            <form action="{{ route('admin.slider.update-state', $slider->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="checkbox" name="active" id="checkbox-{{ $slider->id }}"
                                    {{ $slider->active == 1 ? 'checked' : '' }}
                                    onclick="this.form.submit();">
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.slider.update', $slider->id) }}" class="btn btn-outline-success">Update</a>
                            <form action="{{ route('admin.slider.delete', $slider->id) }}" method="GET"
                                onsubmit="return confirm('{{ trans('Do you want to delete slider ? ') }}');"
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
        {{-- Central Service --}}
        <div class="central-service">
            <div class="header d-flex justify-content-between">
                <div class="title text-info fs-2">Central Service</div>
                <div class="insert">
                    <a href="{{ route('admin.central-service.insert') }}" class="btn btn-outline-primary">Insert</a>
                </div>
            </div>
            <table class="table table-bordered align-middle text-center">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th style="max-width: 400px" class="text-start">description</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
                @if(!empty($centralServices))
                    @foreach ($centralServices as $centralService)
                    <tr>
                        <td>{{ $centralService->id }}</td>
                        <td><img src="{{ asset('image/central/'.$centralService->image) }}" height="100px" alt=""></td>
                        <td>{{ $centralService->title }}</td>
                        <td style="max-width: 400px" class="text-start">{{ $centralService->description }}</td>
                        <td>
                            <form action="{{ route('admin.central-service.update-state', $centralService->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="checkbox" name="active" id="checkbox-{{ $centralService->id }}"
                                    {{ $centralService->active == 1 ? 'checked' : '' }}
                                    onclick="this.form.submit();">
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.central-service.update',$centralService->id) }}" class="btn btn-outline-success">Update</a>
                            <form action="{{ route('admin.central-service.delete',$centralService->id) }}" method="GET"
                                onsubmit="return confirm('{{ trans('Do you want delete central service ? ') }}');"
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
