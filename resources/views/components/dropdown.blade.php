@props(['kategorinya' => []])

<div x-data="{ isOpen: false }" class="relative flex items-center justify-center p-4">
    <button @click="isOpen = !isOpen" id="dropdownDefault" data-dropdown-toggle="dropdown"
        class="text-white justify-between bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-xs sm:text-sm min-w-40 px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        type="button" id="kategori-button" aria-expanded="false" aria-haspopup="true">
        <span class="w-full text-center">
            {{ request('name') ? explode(' ', request('name'))[0] . ' -' : '' }}

            {{ request('category') ? ucwords(str_replace('-', ' ', request('category'))) : 'Category' }}
        </span>
        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div class="absolute z-10 w-56 p-3 bg-white border border-gray-300 rounded-lg shadow top-24 dark:bg-gray-700"
        x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95" id="dropdown" role="menu" aria-orientation="vertical"
        aria-labelledby="kategori-button" tabindex="-1">
        <h6 class="mb-1 text-sm font-medium text-gray-900 dark:text-white">
            Category
        </h6>
        <ul class="flex flex-col items-center justify-center w-full space-y-2 text-sm h-52"
            aria-labelledby="dropdownDefault">
            @foreach ($kategorinya as $category)
                <li class="flex items-center w-full">
                    <a class="block w-full"
                        href="/posts?category={{ $category->slug }}{{ request('author') ? '&author=' . request('author') . '&name=' . request('name') : '' }}">
                        <span
                            class="w-full py-2 bg-{{ $category->color }}-200 text-{{ $category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-{{ $category->color }}-200 dark:text-{{ $category->color }}-800">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg>
                            {{ $category->name }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
