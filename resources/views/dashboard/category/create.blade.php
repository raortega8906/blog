@extends('Dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('category.store') }}" method="POST">
        @include('dashboard.category._form')
    </form>

@endsection