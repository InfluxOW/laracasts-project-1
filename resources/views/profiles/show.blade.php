<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="" class="mb-2 rounded-lg">
            <img src="{{ $user->avatar }}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-medium text-2xl mb-0">{{ $user->name }}</h2>
                <p class="font-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('update', $user)
                    <a href="{{ route('profiles.edit', $user) }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs">Edit Profile</a>
                @endcan
                <x-button-follow :user='$user'/>
            </div>
        </div>

        <p class="text-sm">just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text</p>
    </header>

    <x-timeline :tweets="$user->tweets"/>
</x-app>
