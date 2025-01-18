<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="max-w-screen-md py-8">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">
            {{ $post['title'] }}
        </h2>
        <div class="text-base text-gray-500"><a href="#">{{ $post['author'] }}</a> |
            {{ $post->created_at->format('j F Y') }}</div>
        <p class="my-4 font-light text-justify">
            {{ $post['body'] }}
        </p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts">&laquo; Back to posts</a>
    </article>
</x-layout>

{{-- $post = App\Models\Post::create([
'title'=>'Judul Artikel 2',
'author'=>'haidir',
'slug'=>'judul-artikel-2',
'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, in nostrum! Quae dolorem corporis id vitae
culpa iure magnam dolor laudantium, odio ut tempora voluptates sit libero, magni doloribus asperiores est. Totam!
',
]); --}}
