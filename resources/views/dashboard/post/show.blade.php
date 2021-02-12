@extends('Dashboard.master')

@section('content')

    <div class="form-group">
        <label for="title">Titulo</label>
        <input readonly type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input readonly type="text" class="form-control" name="url_clean" id="url_clean" value="{{ $post->url_clean }}">
        @error('url_clean')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea readonly name="content" class="form-control" id="content" rows="13">{{ $post->content }}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

@endsection
