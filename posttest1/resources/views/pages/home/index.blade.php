@extends('layouts.global')

@section('content')
    {{-- nav --}}
    @include('components.navbar')

    {{-- banner --}}
    @include('pages.home.banner')

    {{-- now playing --}}
    @include('pages.home.now-playing')

    {{-- cinemas --}}
    @include('pages.home.cinemas')

    {{-- get started --}}
    @include('pages.home.get-started')

    {{-- bottom --}}
    @include('components.footer')
@endsection
