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
            @include('components.btn', ['name' => 'Lihat Selengkapnya', 'mode' => 'light'])
        </div>

    </section>
