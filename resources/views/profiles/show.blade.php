<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="{{ $user->getBanner() }}" alt="" class="mb-2 rounded-lg w-full">
            <img src="{{ $user->getAvatar() }}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 300px">
                <h2 class="font-medium text-2xl mb-0">{{ $user->name }}</h2>
                <p class="font-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('update', $user)
                    <a href="{{ route('profiles.edit', $user) }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs" id="edit">Edit Profile</a>
                @endcan
                <x-button-follow :user='$user'/>
            </div>
        </div>

        <p class="text-sm text-center text-gray-500">{{ $user->description ?? 'No information' }}</p>
    </header>

    <x-timeline :tweets="$user->tweets()->withCount('likes', 'dislikes')->paginate(20)"/>
</x-app>
