    <section class="h-[350px] p-10 bg-dirty-purple grid grid-cols-2 mt-10">
        <div class="bg-center bg-no-repeat" style="background-image: url({{ asset('assets/img/cinema-2.png') }})">

        </div>
        <div class="flex flex-col">
            <h2 class="text-4xl font-semibold leading-snug mb-5 text-white">
                Easy to access, easy to pay! <br>
                Get your tickets now! </h2>

            @include('components.btn', ['name' => 'Get Started', 'mode' => 'dark', 'route' => '#'])
        </div>
    </section>
