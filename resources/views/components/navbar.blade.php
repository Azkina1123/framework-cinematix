    <nav class="bg-white flex h-[70px] sticky top-0 z-10">

        <ul class="basis-1/4 ps-10 flex items-center">
            <li class="px-5 py-2 hover:text-tuna hover:font-bold"><a href="#">Home</a></li>
            <li class="px-5 py-2 hover:text-tuna hover:font-bold"><a href="#">Movie</a></li>
            <li class="px-5 py-2 hover:text-tuna hover:font-bold"><a href="#">Cinema</a></li>
        </ul>

        <div class="basis-1/2 flex justify-center items-center col-span-4 text-xl font-bold text-tuna">
            <p><a href="#">CINEMATIX</a></p>

        </div>

        <ul class="basis-1/4 pe-10 flex justify-end items-center">
            <li class="px-5 py-2 hover:text-tuna hover:font-bold"> <a href="#"> Log In </a> </li>
            <li class="ml-3">
                @include('components.btn', ['name' => 'Sign Up', 'mode' => 'light'])
            </li>
        </ul>

    </nav>
