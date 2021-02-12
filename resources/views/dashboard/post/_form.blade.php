@csrf
<div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}">
    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input type="text" class="form-control" name="url_clean" id="url_clean"
        value="{{ old('url_clean', $post->url_clean) }}">
    @error('url_clean')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="category_id">Categorias</label>
    <select name="category_id" id="category_id" class="form-control">
        @foreach ($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $title }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="posted">Posted</label>
        <select name="posted" id="posted" class="form-control">
            @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
        </select>
    </select>
</div>
<div class="form-group">
    <label for="content">Contenido</label>
    <textarea name="content" class="form-control" id="content"
        rows="13">{{ old('content', $post->content) }}</textarea>
    @error('content')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<input type="submit" value="Enviar" class="btn btn-primary">
