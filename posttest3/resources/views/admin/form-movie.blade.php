@extends('layouts.global')

@section('content')
    @include('components.header')
    <div class="flex justify-center items-center w-full bg-iron px-10">
        <form action="{{ isset($movie) ? route('admin.movies.edit.action', $movie->id) : route('admin.movies.add.action') }}"
            method="post" enctype="multipart/form-data"
            class="w-1/2 flex flex-col justify-stretch col-1 bg-white shadow-sm rounded-md px-5 py-3">
            @csrf

            <h1 class="text-xl font-bold text-tuna text-center mb-5">Add New Movie</h1>
            @if (isset($movie))
                <img src="{{ asset('assets/poster/' . $movie->poster) }}" alt="" width="200" height="250"
                    class="self-center">
            @endif

            {{-- <div class="poster-img w-[200px] h-[250px] bg-greyish-purple self-center rounded-md mb-2"
                style="background-image: url()"></div> --}}

            <input type="file" name="poster" id="poster" class="self-center" {{ isset($movie) ? '' : 'required' }}>

            <label for="judul">Judul</label>
            @include('components.input', [
                'id' => 'judul',
                'name' => 'judul',
                'placeholder' => 'Judul',
                'type' => 'text',
                'value' => isset($movie) ? $movie->judul : '',
                'required' => true,
            ])

            <label for="ringkasan">Overview</label>
            @include('components.textarea', [
                'name' => 'ringkasan',
                'placeholder' => 'Overview',
                'id' => 'ringkasan',
                'row' => 3,
                'required' => true,
                'value' => isset($movie) ? $movie->ringkasan : '',
            ])

            <div class="grid grid-cols-2 gap-5">

                <div class="flex flex-col">
                    <label for="durasi">Duration</label>
                    @include('components.input', [
                        'id' => 'durasi',
                        'name' => 'durasi',
                        'placeholder' => 'Duration',
                        'type' => 'text',
                        'value' => isset($movie) ? $movie->durasi : '',
                        'required' => true,
                    ])

                </div>
                <div class="flex flex-col">
                    <label for="rate">Rate</label>
                    @include('components.input', [
                        'id' => 'rate',
                        'name' => 'rate',
                        'placeholder' => 'Rate',
                        'type' => 'text',
                        'value' => isset($movie) ? $movie->rate : '',
                        'required' => true,
                    ])
                </div>
            </div>

            <label for="casts">Casts</label>
            @include('components.textarea', [
                'name' => 'casts',
                'placeholder' => 'Casts',
                'id' => 'casts',
                'row' => 3,
                'required' => true,
                'value' => isset($movie) ? $movie->casts : '',
            ])

            <div class="flex justify-between mt-2">
                <a href="{{ route('admin.movies') }}">

                    @include('components.btn', [
                        'label' => 'Cancel',
                        'mode' => 'light',
                        'type' => 'button',
                    ])
                </a>
                @include('components.btn', ['label' => 'Save', 'mode' => 'dark', 'type' => 'submit'])
            </div>

        </form>
    </div>

    @include('components.footer')
@endsection
