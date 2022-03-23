<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Editer  {{ __('$post->tittle') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        <div class="my-5">
            @foreach ($errors->all() as $error)
            <span class="block text-red-500">{{ $error }}</span>
            @endforeach
        </div>
        <form action="{{ route ('posts.update', $post) }}" method="post" enctype="multipart/form-data" class="mt-10">
            @method('put')
            @csrf
            <x-label for="tittle" value="Titre du post" />
            <x-input id="tittle" name="tittle" value="{{ $post->tittle }}"/>

            <x-label for="content" value="Contenu du post" />
            <textarea id="content" name="content" value="{{ $post->content }}"></textarea>

            <x-label for="image" value="Image du post" />
            <x-input id="image" name="image" type="file" />

            <x-label for="category" value="Categorie du post" />

            <select name="category" id="category">
                @foreach($categorys as $category)
                <option value="{{ $category->id }}" {{ $post->category_id === $category->id ? '' : ''}}> {{ $category->name }}</option>
                @endforeach
            </select>
            <x-button style="display:block !important" class="mt-5" type="submit">Modifier mon post</x-button>
        </form>
    </div>
</x-app-layout>