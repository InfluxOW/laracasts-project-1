<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <x-errors/>

            <div class="lg:flex lg:justify-between">
                @auth
                    <div class="lg:w-32">
                        @include('tweets._sidebar-links')
                    </div>
                @endauth

                <div class="lg:flex-1 lg:mx-10" style="max-width: 900px">
                    {{ $slot }}
                </div>

                @auth
                    <div class="lg:w-1/5 bg-blue-100 rounded-lg p-4">
                        @include('tweets._friends-list')
                    </div>
                @endauth
            </div>
        </main>
    </section>
</x-master>
