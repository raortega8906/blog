@extends('Dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.user._form', ['passw' => false])
    </form>

@endsection
