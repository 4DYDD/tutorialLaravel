@props(['kategorinya' => []])

<div>
    <header {{ $attributes }} class="w-full pt-16 shadow">
        <div class="flex items-center justify-between px-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 py-6 max-w-7xl sm:px-6 lg:px-8">
                <h1 class="text-[1.8rem] font-bold tracking-tight text-gray-900">{{ $slot }}</h1>
            </div>

            {{-- DROPDOWN KATEGORI --}}
            <x-dropdown :kategorinya="$kategorinya"></x-dropdown>
            {{-- DROPDOWN KATEGORI --}}
        </div>
    </header>
</div>
