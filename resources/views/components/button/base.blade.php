<{{ $tag }}
    {{ $attributes->merge(['class' => 'px-3 py-2 inline-flex items-center justify-center text-base leading-5 font-semibold rounded-md cursor-pointer focus:outline-none shadow transition duration-200 disabled:opacity-75 disabled:pointer-events-none focus:z-0']) }}
>
    {{ $slot }}
</{{ $tag }}>
