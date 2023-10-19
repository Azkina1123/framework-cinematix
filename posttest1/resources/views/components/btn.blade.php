@if ($mode == 'light')
    <a href="#"
        class="px-5 py-2 rounded-md bg-tuna border border-tuna text-white hover:bg-opacity-75 active:text-tuna active:bg-transparent w-fit">
    @elseif($mode == 'dark')
        <a href="#"
            class="px-5 py-2 rounded-md bg-iron border border-iron text-black hover:bg-opacity-75 active:text-white active:bg-transparent w-fit">
        @elseif($mode == 'line')
            <a href="#" class="px-5 py-2 bg-black bg-opacity-25 border-2 border-white text-white">
@endif
{{ $name }}
</a>
