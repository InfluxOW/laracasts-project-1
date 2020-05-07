<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <x-errors/>

            <div class="lg:flex lg:justify-between">
                @auth
                    <div class="lg:w-auto">
                        @include('tweets._sidebar-links')
                    </div>
                @endauth

                <div class="lg:flex-1 lg:mx-10" style="max-width: 900px">
                    {{ $slot }}
                </div>

                @auth
                    <div class="lg:w-1/5">
                        @include('tweets._following-list')
                        @include('flash::message')
                    </div>
                @endauth
            </div>
        </main>
    </section>
    <x-slot name="scripts">
        {{ $scripts ?? '' }}
    </x-slot>
    <x-slot name="styles">
        {{ $styles ?? '' }}
    </x-slot>
</x-master>
