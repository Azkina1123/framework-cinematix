    <nav class="bg-white flex h-[70px] sticky top-0 z-10">

        <ul class="lg:w-[25%] sm:w-[40%] ps-10 flex items-center">
            <li class="px-3 py-2 hover:text-tuna hover:font-bold"><a href="{{ route('home') }}">Home</a></li>
            <li class="px-3 py-2 hover:text-tuna hover:font-bold"><a href="#">Movie</a></li>
            <li class="px-3 py-2 hover:text-tuna hover:font-bold"><a href="#">Cinema</a></li>
        </ul>

        <div class="lg:w-[50%] sm:w-[20%] flex justify-center items-center col-span-4 text-xl font-bold text-tuna">
            <p><a href="{{ route('home') }}">CINEMATIX</a></p>

        </div>

        <ul class="lg:w-[25%] sm:w-[40%] pe-10 flex justify-end items-center">
            <li class="px-3 py-2 hover:text-tuna hover:font-bold"> <a href="{{ route('login') }}"> Log In </a> </li>
            <li class="px-3 ml-3">
                @include('components.btn', ['name' => 'Sign Up', 'mode' => 'light', 'route' => '#'])
            </li>
        </ul>

    </nav>
