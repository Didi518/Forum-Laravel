<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crée un post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">

            <x-label for="title" value="Titre du post">
        </form>
    </div>
</x-app-layout>