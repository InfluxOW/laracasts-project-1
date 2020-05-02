<x-app>
    @foreach ($users as $user)
        <a href="{{ route('profiles.show', $user) }}">
            <div class="flex items-center mb-5 hover:bg-gray-200 rounded-lg border border-gray-200">
                <img src="{{ $user->getAvatar() }}" width="60" class="mr-4 rounded-lg">
                <div>
                    <h4 class="font-medium">{{ '@' . $user->username }}</h4>
                </div>
            </div>
        </a>
    @endforeach

    {{ $users->links() }}
</x-app>
