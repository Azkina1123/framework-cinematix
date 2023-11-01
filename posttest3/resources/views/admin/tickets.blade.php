@extends('layouts.global')

@section('content')
    @include('components.header')

    <div class="flex w-full bg-iron px-10">

        @include('components.aside')

        {{-- main --}}
        <div class="w-[80%] pb-10 px-2 grid grid-cols-1 gap-3">

            <div class="col-1 bg-white shadow-sm rounded-md px-5 py-3">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-[24pt] text-tuna">TICKETS</h1>
                    <div class="h-fit">
                        @include('components.btn', [
                            'mode' => 'light',
                            'label' => 'Tambah',
                            'type' => 'button',
                        ])
                    </div>
                </div>
                <ul class="list-disc list-inside">
                    <li> Total tiket: {{ count($tickets) }} </li>
                </ul>
            </div>

            <div class="col-1 bg-white shadow-sm rounded-md px-5 py-3">
                <table class="table-fixed w-full">
                    <tr class="bg-dirty-purple text-white">
                        <th class="w-[5%] p-2">No.</th>
                        <th class="w-[20%] p-2">Film</th>
                        <th class="w-[20%] p-2">Cinema</th>
                        <th class="w-[20%] p-2">Harga</th>
                        <th class="w-[15%] p-2">Tanggal</th>
                        <th class="w-[20%] p-2">Waktu</th>
                    </tr>

                    @foreach ($tickets as $ticket)
                        <?php ?>
                        <tr class="odd:bg-tuna odd:bg-opacity-10">
                            <td class="text-center p-2">{{ $ticket->id }}.</td>
                            <td class="text-center p-2">
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('assets/poster/' . $ticket->movie->poster) }}" alt=""
                                        class="h-[128px]">
                                    <p class="ms">{{ $ticket->movie->judul }}</p>
                                </div>
                            </td>

                            <td class="text-center p-2">
                                {{ $ticket->cinema->nama }}
                            </td>
                            <td class="text-center p-2">Rp {{ $ticket->harga }}</td>
                            <td class="text-center p-2">
                                {{ date('d-m-Y', strtotime($ticket->tgl_waktu_tayang)) }}</td>

                            <td class="text-center p-2">

                                <?php
                                // use
                                
                                $waktus = DB::table('tickets')
                                    ->where('tgl_waktu_tayang', $ticket->tgl_waktu_tayang)
                                    ->get();
                                
                                ?>

                                @foreach ($waktus as $waktu)
                                    {{ date('h:i', strtotime($ticket->tgl_waktu_tayang)) }}
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection
