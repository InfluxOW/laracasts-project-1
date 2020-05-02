<x-app>
    @foreach ($users->load('image') as $user)
        <div class="flex items-center mb-5 hover:bg-gray-200 rounded-lg border border-gray-200">
            <img src="{{ $user->avatar }}" width="60" class="mr-4 rounded-lg">
            <div>
                <a href="{{ route('profiles.show', $user) }}"><h4 class="font-medium">{{ '@' . $user->username }}</h4></a>
            </div>
        </div>
    @endforeach

    {{ $users->links() }}
</x-app>
