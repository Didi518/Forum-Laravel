<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->tittle }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <img src="{{ $post->image }}" alt="">

    <?php
    var_dump()
    ?>

    <div>
        {{ $post->content }}
    </div>

    </div>
</x-app-layout>