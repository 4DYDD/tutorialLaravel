<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-screen-xl p-1 mx-auto md:p-4 lg:py-8 lg:px-0">

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article
                    class="flex flex-col items-center justify-center p-3 bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between w-full mb-5 text-gray-500">

                        {{-- category --}}
                        <a href="/categories/{{ $post->category->slug }}">
                            <span
                                class="py-2 bg-{{ $post->category->color }}-200 text-{{ $post->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-{{ $post->category->color }}-200 dark:text-{{ $post->category->color }}-800">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                    </path>
                                </svg>
                                {{ $post->category->name }}
                            </span>
                        </a>
                        {{-- category --}}

                        {{-- createt_at --}}
                        <span class="text-xs">
                            {{ $post->created_at->format('j F Y') }}
                            |
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                        {{-- createt_at --}}

                    </div>

                    <div class="flex flex-col items-center justify-between w-full md:h-52 h-64 px-3.5">
                        {{-- title --}}
                        <h2
                            class="w-full mb-2 text-2xl font-bold tracking-tight text-gray-900 uppercase text-start dark:text-white">
                            <a class="hover:underline" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                        </h2>
                        {{-- title --}}


                        {{-- body --}}
                        <p class="h-full mb-5 font-light text-justify text-gray-500 dark:text-gray-400">
                            <span class="px-3"></span> {{ Str::limit($post->body, 150) }}
                        </p>
                        {{-- body --}}
                    </div>

                    <div class="flex items-center justify-between w-full h-10 px-1">

                        {{-- author --}}
                        <a href="/authors/{{ $post->author->username }}" class="hover:underline">
                            <div class="flex items-center space-x-2">
                                <img class="rounded-full size-6"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                    alt="{{ $post->author->name }} avatar" />
                                <span class="text-xs font-medium md:text-sm dark:text-white">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                        </a>
                        {{-- author --}}

                        {{-- read more --}}
                        <a href="/posts/{{ $post->slug }}"
                            class="inline-flex items-center text-xs font-medium md:text-sm text-primary-600 dark:text-primary-500 hover:underline">
                            Selengkapnya &raquo;
                        </a>
                        {{-- read more --}}

                    </div>
                </article>
            @endforeach

        </div>
    </div>

</x-layout>
