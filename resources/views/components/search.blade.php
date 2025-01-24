@props(['result' => false])
@props(['posts' => []])

<div {{ $attributes }}>
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <div class="max-w-screen-md mx-auto sm:text-center">
            @if ($result || (request('category') || request('author')))
                <a class="block w-full px-16 mb-3 font-medium text-blue-500 text-start hover:underline" href="/posts">
                    &laquo; Kembali ke Blog
                </a>
            @endif
            <form action="/posts" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" id="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" id="author" value="{{ request('author') }}">
                    <input type="hidden" name="name" id="name" value="{{ request('name') }}">
                @endif

                <div class="items-center max-w-screen-sm mx-auto mb-3 space-y-4 sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="search"
                            class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cari</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>

                        </div>
                        <input
                            class="block w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search for Article . . ." type="search" id="search" name="search"
                            autocomplete="off" value="{{ request('search') ?? request('search') }}">
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full px-8 py-3 text-sm font-medium text-center text-white border rounded-lg cursor-pointer border-primary-600 sm:rounded-none sm:rounded-r-lg bg-primary-700 hover:bg-primary-800 dark:bg-primary-600 dark:hover:bg-primary-700 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-800">Cari</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="text-sm text-center text-gray-400">
            {{ $result ? $posts . ' artikel ' . (request('page') ? 'di page ' . request('page') : '') . " dengan kata kunci - '" . request('search') . "'" . (request('name') ? ' pada blog ' . request('name') : '') . (request('category') ? ' dengan kategori ' . ucwords(str_replace('-', ' ', request('category'))) : '') : '' }}
        </div>
    </div>
</div>
