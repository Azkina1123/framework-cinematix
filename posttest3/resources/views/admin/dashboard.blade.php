@extends('layouts.global')

@section('content')
    @include('components.header')

    <div class="flex w-full bg-iron px-10">

        @include('components.aside')

        {{-- main --}}
        <div class="w-[80%] pb-10 px-2 grid grid-cols-2 gap-3">

            {{-- content --}}
            <div class="bg-white rounded-md h-[250px] shadow-sm px-5 py-3">
                <h1 class="text-tuna font-bold">Top Movies</h1>
            </div>

            <div class="bg-white rounded-md h-[250px] shadow-sm px-5 py-3">
                <h1 class="text-tuna font-bold">Now Playing</h1>
            </div>

            <div class="bg-white rounded-md h-[200px] col-span-2 shadow-sm px-5 py-3">
                <h1 class="text-tuna font-bold">Upcoming Movies</h1>
            </div>
        </div>

    </div>

    @include('components.footer')
@endsection
