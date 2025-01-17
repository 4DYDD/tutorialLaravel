<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="max-w-screen-md py-8 border-b border-gray-300">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">
                <a class="hover:underline" href="/posts/{{ $post['slug'] }}">
                    {{ $post['title'] }}
                </a>
            </h2>
            <div class="text-base text-gray-500"><a href="#">{{ $post['author'] }}</a> | 17 Januari 2025</div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 150) }}
            </p>
            <a class="font-medium text-blue-500 hover:underline" href="/posts/{{ $post['slug'] }}">Read More &raquo;</a>
        </article>
    @endforeach



</x-layout>
