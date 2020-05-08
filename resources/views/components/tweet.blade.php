<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-grey-400' }}">
    <div class="mr-2">
        <a href="{{ route('profiles.show', $tweet->user) }}">
            <img src="{{ $tweet->user->getAvatar() }}" alt="" class="rounded-full mr-2" width="50" height="50">
        </a>
    </div>

    <div>
        <div class="flex mb-4 items-center">
            <a href="{{ route('profiles.show', $tweet->user) }}"><h5 class="font-bold text-gray-700">{{ $tweet->user->name }}</h5></a>
            <h5 class="text-xs ml-4">{{ $tweet->created_at->diffForHumans() }}</h5>
            @can('delete', $tweet)
                <a
                href="{{ route('tweets.destroy', $tweet) }}"
                data-confirm="Are you sure?"
                data-method="delete"
                rel="nofollow"
                class="bg-red-500 rounded-lg py-1 px-2 shadow text-white text-xs ml-2">Delete</a>
            @endcan
        </div>
        <p class="text-sm">{{ $tweet->body }}</p>
        @if ($tweet->hasImage())
            <img src="{{ $tweet->getImageUrl() }}" alt="" class="my-2 w-full">
        @endif
        <div class="items-center flex">
            <x-likes :tweet="$tweet"/>
        </div>
    </div>
</div>

