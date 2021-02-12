@csrf
<div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $category->title) }}">
    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input type="text" class="form-control" name="url_clean" id="url_clean"
        value="{{ old('url_clean', $category->url_clean) }}">
    @error('url_clean')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<input type="submit" value="Enviar" class="btn btn-primary">
