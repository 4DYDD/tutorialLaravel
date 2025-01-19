<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="max-w-screen-md py-8">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">
            {{ $post->title }}
        </h2>
        <div class="text-base text-gray-500">
            By
            <a class="hover:underline" href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a>
            in
            <a class="hover:underline" href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            |
            {{ $post->created_at->format('j F Y') }}
        </div>
        <p class="my-4 font-light text-justify">
            {{ $post->body }}
        </p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts">&laquo; Back to posts</a>
    </article>
</x-layout>
