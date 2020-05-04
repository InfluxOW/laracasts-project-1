<div class="bg-gray-200 border border-gray-300 rounded-lg p-4">
    <h3 class="font-bold text-lg mb-4 text-center">Following</h3>

    <ul>
        @forelse (currentUser()->follows as $user)
            <li class="{{ $loop->last ? '' : ' mb-4' }}">
                <div>
                    <a href="{{ route('profiles.show', $user) }}"  class="flex items-center text-sm hover:bg-opacity-0 rounded-full bg-gray-100 border border-gray-300 w-full">
                        <img src="{{ $user->getAvatar() }}" alt="" class="rounded-full mr-2" width="50" height="50">
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>You aren't following anyone!</li>
        @endforelse
    </ul>
</div>

