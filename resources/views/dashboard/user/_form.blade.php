@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="surname">Apellido</label>
    <input type="text" class="form-control" name="surname" id="surname" value="{{ old('surname', $user->surname) }}">
    @error('surname')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
@if ($passw)
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" value="{{ old('password', $user->password) }}">
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endif
<input type="submit" value="Enviar" class="btn btn-primary">
