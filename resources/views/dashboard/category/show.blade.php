@extends('Dashboard.master')

@section('content')

    <div class="form-group">
        <label for="title">Titulo</label>
        <input readonly type="text" class="form-control" name="title" id="title" value="{{ $category->title }}">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input readonly type="text" class="form-control" name="url_clean" id="url_clean" value="{{ $category->url_clean }}">
        @error('url_clean')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

@endsection
