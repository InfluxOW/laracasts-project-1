<x-app>
    <ul class="gradient-list">
    @foreach ($users as $user)
        <li>
            <a href="{{ route('profiles.show', $user) }}">
                <div class="flex items-center mb-5 hover:bg-gray-200 rounded-lg border border-gray-300">
                    <img src="{{ $user->getAvatar() }}" width="60" class="mr-4 rounded-lg">
                    <div>
                        <h4 class="font-mono text-blue-500 text-sm">{{ '@' . $user->username }}</h4>
                    </div>
                </div>
            </a>
        </li>
    @endforeach
    </ul>

    @push('styles')
        <link href="{{ asset('css/list.css') }}" rel="stylesheet">
    @endpush

    <div class="mb-4">
        {{ $users->links() }}
    </div>
</x-app>
