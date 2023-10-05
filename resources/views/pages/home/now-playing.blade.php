    <section class="p-10 grid grid-cols-1 gap-5">
        <h2 class="text-xl font-bold"> Now Playing </h2>

        <div class="grid md:grid-cols-4 sm:grid-cols-2 justify-items-center gap-10">

            @for ($i = 1; $i <= 4; $i++)
                <a href="#" class="relative rounded-xl">

                    <img src="{{ asset("assets/img/movie-$i.jpg") }}" alt="" class="h-full w-full rounded-xl">

                    <div
                        class="absolute w-full h-full top-0 p-5 text-center flex justify-center items-center text-white opacity-0 hover:opacity-100 hover:bg-black hover:bg-opacity-75 rounded-xl">
                        <p> Get Ticket </p>
                    </div>
                </a>
            @endfor
        </div>

        <div class="flex justify-center items-center mt-5">
            @include('components.btn', ['name' => 'Lihat Selengkapnya', 'mode' => 'light'])

        </div>

    </section>
