        {{-- drawer --}}
        <aside class="w-[20%] pe-5">
            <ul>
                <a href="{{ route('admin.dashboard') }}">
                    <li class="p-2 hover:bg-dirty-purple hover:bg-opacity-10">Dashboard</li>
                </a>

                {{-- divider --}}
                <li class="py-2">
                    <hr class="border border-b-tuna">
                </li>

                <a href="{{ route('admin.movies') }}">
                    <li class="p-2 hover:bg-dirty-purple hover:bg-opacity-10">Movies</li>
                </a>
                <a href="{{ route('admin.cinemas') }}">
                    <li class="p-2 hover:bg-dirty-purple hover:bg-opacity-10">Cinemas</li>
                </a>
                <a href="{{ route('admin.tickets') }}">
                    <li class="p-2 hover:bg-dirty-purple hover:bg-opacity-10">Tickets</li>
                </a>

                {{-- divider --}}
                <li class="py-2">
                    <hr class="border border-b-tuna">
                </li>

                <a href="{{ route('logout') }}">
                    <li class="p-2 hover:bg-dirty-purple hover:bg-opacity-10">Log Out</li>
                </a>

            </ul>
        </aside>
