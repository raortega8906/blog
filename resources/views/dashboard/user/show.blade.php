@extends('Dashboard.master')

@section('content')

    <div class="form-group">
        <label for="name">Nombre</label>
        <input readonly type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="surname">Apellido</label>
        <input readonly type="text" class="form-control" name="surname" id="surname" value="{{ $user->surname }}">
        @error('surname')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

@endsection
