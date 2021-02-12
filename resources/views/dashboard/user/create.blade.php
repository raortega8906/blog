@extends('Dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('user.store') }}" method="POST">
        @include('dashboard.user._form', ['passw' => true])
    </form>

@endsection