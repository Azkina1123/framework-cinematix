@extends('layouts.global')

@section('content')
    {{-- nav --}}
    @include('components.navbar')

    {{-- banner --}}
    <section class="bg-tuna text-white h-[550px] py-10 px-20 flex flex-col items-center justify-around bg-cover bg-center"
        style="background-image:url({{ asset('assets/img/banner.jpg') }})">

        <p class="text-center text-3xl font-bold">
            It's time to have fun! <br>
            Find your enjoyment here.
        </p>

        <form action="" method="get" class="grid grid-cols-1 justify-items-center gap-3 w-full">
            <label for="movie" class="text-2xl">Search Movie</label>
            <input type="search" name="movie" id="movie"
                class="w-[50%] h-8 rounded-2xl px-4 py-2 bg-transparent border border-white text-white"
                placeholder="Find movie">
        </form>

        <div class="grid grid-cols-1 justify-items-center text-center">
            <p>
                Cinematix hadir sebagai layanan penjualan tiket bioskop secara online yang dirancang untuk
                memudahkan pengguna dalam mencari, memilih, dan membeli tiket untuk berbagai film yang
                ditayangkan di berbagai bioskop. Cinematix berusaha memberikan pengalaman yang nyaman dan efisien
                bagi
                pengguna yang ingin menikmati film di bioskop dengan mengintegrasikan informasi tentang film, jadwal
                tayang, dan pembelian tiket dalam satu platform online yang mudah diakses.
            </p>
        </div>

    </section>


    {{-- now playing --}}
    <section class="p-10 grid grid-cols-1 gap-5">
        <h2 class="text-xl font-bold"> Now Playing </h2>

        <div class="grid md:grid-cols-4 sm:grid-cols-2 justify-items-center gap-10">

            @for ($i = 1; $i <= 4; $i++)
                <a href="#" class="relative rounded-xl">

                    <img src="{{ asset("assets/poster/movie-$i.jpg") }}" alt="" class="h-full w-full rounded-xl">

                    <div
                        class="absolute w-full h-full top-0 p-5 text-center flex justify-center items-center text-white opacity-0 hover:opacity-100 hover:bg-black hover:bg-opacity-75 rounded-xl">
                        <p> Get Ticket </p>
                    </div>
                </a>
            @endfor
        </div>

        <div class="flex justify-center items-center mt-5">
            @include('components.btn', [
                'label' => 'Lihat Selengkapnya',
                'mode' => 'light',
                'type' => 'button',
            ])

        </div>

    </section>


    {{-- cinemas --}}
    <section class="p-10 grid grid-cols-1 gap-5">
        <h2 class="text-xl font-bold "> Cinemas </h2>

        <div class="grid md:grid-cols-6 sm:grid-cols-3 gap-5 justify-items-center content-center">
            <?php $cinemas = ['Shown U', "JeeIn'O", 'LMark', 'Flutix', 'Flutix V2', 'Shine Yeol']; ?>

            @for ($i = 0; $i < 6; $i++)
                <a href="#"
                    class="flex border rounded-xl px-3 py-2 border-tuna items-center hover:font-bold hover:text-tuna">
                    <img src="{{ asset('assets/img/cinema.png') }}" alt="cinema" width="32" height="32"
                        class="mr-5">
                    <p>{{ $cinemas[$i] }}</p>
                </a>
            @endfor

        </div>
        <div class="flex justify-center items-center mt-5">
            @include('components.btn', [
                'label' => 'Lihat Selengkapnya',
                'mode' => 'light',
                'type' => 'button',
            ])
        </div>

    </section>


    {{-- get started --}}
    <section class="h-[350px] p-10 bg-dirty-purple grid grid-cols-2 mt-10">
        <div class="bg-center bg-no-repeat" style="background-image: url({{ asset('assets/img/cinema-2.png') }})">

        </div>
        <div class="flex flex-col">
            <h2 class="text-4xl font-semibold leading-snug mb-5 text-white">
                Easy to access, easy to pay! <br>
                Get your tickets now! </h2>

            @include('components.btn', ['label' => 'Get Started', 'mode' => 'dark', 'type' => 'button'])
        </div>
    </section>


    {{-- bottom --}}
    @include('components.footer')
@endsection
