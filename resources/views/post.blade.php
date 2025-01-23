<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- <article class="max-w-screen-md py-8">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">
            {{ $post->title }}
        </h2>
        <div>
            By
            <a class="text-base text-gray-500 hover:underline"
                href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            in
            <a class="text-base text-gray-500 hover:underline"
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            |
            {{ $post->created_at->format('j F Y') }} - <span
                class="text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <p class="my-4 font-light text-justify">
            {{ $post->body }}
        </p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts">&laquo; Back to posts</a>
    </article> --}}


    <main class="pt-8 pb-16 antialiased bg-white lg:pt-16 lg:pb-24 dark:bg-gray-900">
        <div class="flex justify-between max-w-screen-xl px-4 mx-auto ">
            <article
                class="w-full max-w-2xl mx-auto format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a class="block mb-5 font-medium text-blue-500 hover:underline" href="/posts">
                        &laquo; Kembali ke Blog
                    </a>
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="w-16 h-16 mr-4 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $post->author->name }}">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white hover:underline">
                                    {{ $post->author->name }}
                                </a>
                                <p class="text-base text-gray-500 dark:text-gray-400">
                                    Penulis
                                    |
                                    <a class="text-center text-sm text-{{ $post->category->color }}-800 bg-{{ $post->category->color }}-200 px-2 py-1 rounded"
                                        href="/categories/{{ $post->category->slug }}">
                                        {{ $post->category->name }}
                                    </a>
                                </p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    {{ $post->created_at->format('j F Y') }}
                                    -
                                    <span class="text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 uppercase lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}
                    </h1>
                </header>

                <p class="text-justify">
                    <span class="px-3"></span>
                    {{ $post->body }}
                </p>
            </article>
        </div>
    </main>

</x-layout>
/
