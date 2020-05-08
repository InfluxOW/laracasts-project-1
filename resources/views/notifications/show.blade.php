<x-app>
    @forelse ($notifications as $notification)
        @if ($notification->type === 'App\Notifications\UserFollowed')
            <div class="border-l-4 border-blue-500 rounded-lg">
                <div class="flex w-full bg-white shadow-lg rounded-lg overflow-hidden border border-gray-300 mb-2">
                    <div class="flex items-center px-2 py-3">
                        <img class="w-12 h-12 object-cover rounded-full" src="{{ $notification->data['avatar_url'] }}">
                        <div class="mx-3">
                            <p class="text-gray-600">You have new follower <a href="{{ route('profiles.show', $notification->data['username']) }}" class="text-blue-500">{{ $notification->data['username'] }}</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($notification->type === 'App\Notifications\NewTweet')
            <div class="border-l-4 border-blue-500 rounded-lg">
                <div class="flex w-full bg-white shadow-lg rounded-lg overflow-hidden border border-gray-300 mb-2">
                    <div class="flex px-2 py-3">
                        <img class="w-12 h-12 object-cover rounded-full mt-8" src="{{ $notification->data['avatar_url'] }}">
                        <div class="mx-3 self-center">
                            <h2 class="text-xl font-semibold text-gray-800">User <a href="{{ route('profiles.show', $notification->data['username']) }}" class="text-blue-500">{{ $notification->data['username'] }}</a> posted new tweet.</h2>
                            <p class="text-gray-600">{{ $notification->data['tweet'] }}</p>
                            @if (isset($notification->data['image']))
                                <img src="{{ $notification->data['image'] }}" alt="" class="my-2 w-auto">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @empty
    <p>No notifications!</p>
    @endforelse

    {{ $notifications->links() }}
</x-app>
