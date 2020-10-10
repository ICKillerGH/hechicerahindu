@props([
    'avatarUrl',
    'name',
    'testimony',
])

<article
    class="px-5 h-full border border-gray-800 text-center"
    style="
        background-image: url({{ asset('images/space_bg.png') }});
        background-size: 100% 130px;
        background-repeat: no-repeat;
    "
>
    <img
        src="{{ $avatarUrl }}"
        alt="{{ $name }}"
        class="inline-block w-32 h-32 mt-16 object-cover rounded-full"
    />
    <h4 class="mt-10 font-messeri text-2xl text-blue-400">{{ $name }}</h4>
    <p class="mt-10 text-lg italic">{{ $testimony }}</p>
    <img src="{{ asset('images/quote.png') }}" alt="quote" class="inline-block">
</article>
