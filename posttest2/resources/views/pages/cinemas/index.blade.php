@extends('layouts.global')

@section('content')
    @include('components.header')

    <div class="flex w-full bg-iron px-10">

        @include('components.aside')

        {{-- main --}}
        <div class="w-[80%] pb-10 px-2 grid grid-cols-1 gap-3">

            <div class="col-1 bg-white shadow-sm rounded-md px-5 py-3">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-[24pt] text-tuna">CINEMAS</h1>
                    <div class="h-fit">
                        @include('components.btn', ['mode' => 'light', 'name' => 'Tambah', 'route' => '#'])
                    </div>
                </div>
                <ul class="list-disc list-inside">
                    <li> Total bioskop: {{ count($cinemas) }} </li>
                </ul>
            </div>

            <div class="col-1 bg-white shadow-sm rounded-md px-5 py-3">
                <table class="table-fixed w-full">
                    <tr class="bg-dirty-purple text-white">
                        <th class="w-[5%] p-2">No.</th>
                        <th class="w-[20%] p-2">Cinema</th>
                        <th class="w-[30%] p-2">Alamat</th>
                        <th class="w-[15%] p-2">Telepon</th>
                        <th class="w-[30%] p-2">Film</th>
                    </tr>



                    @foreach ($cinemas as $cinema)
                        <tr class="odd:bg-tuna odd:bg-opacity-10">
                            <td class="text-center p-2">{{ $cinema->id }}.</td>
                            <td class="py-2">
                                {{ $cinema->nama }}
                            </td>

                            <td class="py-2">
                                <p>{{ $cinema->alamat }}</p>
                            </td>
                            <td class="text-center p-2">{{ $cinema->telepon }}</td>

                            <td class="py-2">
                                <?php
                                $juduls = DB::table('movies')
                                    ->join('tickets', 'movies.id', '=', 'tickets.id_movie')
                                    ->join('cinemas', 'tickets.id_cinema', '=', 'cinemas.id')
                                    ->where('cinemas.id', $cinema->id)
                                    ->select('judul')
                                    ->get();
                                
                                ?>

                                @foreach ($juduls as $judul)
                                    {{ $judul->judul }}
                                @endforeach



                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection
