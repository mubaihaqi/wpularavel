<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:text-blue-600">
            {{ $post->title }}</h2>
        <div class="flex items-center text-base text-slate-600 space-x-1">
            <p>By</p>
            <a href="/authors/{{ $post->author->username }}"
                class="hover:underline  text-gray-500">{{ $post->author->name }}
            </a>
            <p>in </p>
            <a href="/categories/{{ $post->category->slug }}"
                class="hover:underline  text-gray-500">{{ $post->category->title }}</a>
            | {{ $post['created_at']->format('d F Y') }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts...</a>
    </article>

</x-layout>
