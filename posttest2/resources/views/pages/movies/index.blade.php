@extends('layouts.global')

@section('content')
    @include('components.header')

    <div class="flex w-full bg-iron px-10">

        @include('components.aside')

        {{-- main --}}
        <div class="w-[80%] pb-10 px-2 grid grid-cols-1 gap-3">

            <div class="col-1 bg-white shadow-sm rounded-md px-5 py-3">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-[24pt] text-tuna">MOVIES</h1>
                    <div class="h-fit">
                        @include('components.btn', ['mode' => 'light', 'name' => 'Tambah', 'route' => '#'])
                    </div>
                </div>
                <ul class="list-disc list-inside">
                    <li> Total film: {{ count($movies) }} </li>
                </ul>
            </div>

            <div class="col-1 bg-white shadow-sm rounded-md px-5 py-3">
                <table class="table-fixed w-full">
                    <tr class="bg-dirty-purple text-white">
                        <th class="w-[5%] p-2">No.</th>
                        <th class="w-[20%] p-2">Film</th>
                        <th class="w-[30%] p-2">Ringkasan</th>
                        <th class="w-[10%] p-2">Durasi</th>
                        <th class="w-[15%] p-2">Cast</th>
                        <th class="w-[5%] p-2">Rate</th>
                        <th class="w-[15%] p-2">Cinema</th>
                    </tr>

                    @foreach ($movies as $movie)
                        <tr class="odd:bg-tuna odd:bg-opacity-10">
                            <td class="text-center p-2">{{ $movie->id }}.</td>
                            <td class="text-center p-2">
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset("assets/img/$movie->poster") }}" alt="" class="h-[128px]">
                                    <p class="ms">{{ $movie->judul }}</p>
                                </div>
                            </td>

                            <td class="p-2">
                                <p>{{ $movie->ringkasan }}</p>
                            </td>
                            <td class="text-center p-2">{{ $movie->durasi }}</td>
                            <td class="text-center p-2">{{ $movie->casts }}</td>
                            <td class="text-center p-2">{{ $movie->rate }}</td>
                            <td class="text-center p-2">


                                <?php
                                $cinemas = DB::table('cinemas')
                                    ->join('tickets', 'cinemas.id', '=', 'tickets.id_cinema')
                                    ->join('movies', 'tickets.id_movie', '=', 'movies.id')
                                    ->where('movies.id', $movie->id)
                                    ->select('cinemas.nama')
                                    ->get();
                                
                                ?>

                                @foreach ($cinemas as $cinema)
                                    {{ $cinema->nama }}
                                @endforeach

                                {{-- {{ $cinemas }} --}}
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>

    </div>
@endsection
