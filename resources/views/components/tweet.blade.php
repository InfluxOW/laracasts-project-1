<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-grey-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profiles.show', $tweet->user) }}">
            <img src="{{ $tweet->user->getAvatar() }}" alt="" class="rounded-full mr-2" width="50" height="50">
        </a>
    </div>

    <div>
        <a href="{{ route('profiles.show', $tweet->user) }}"><h5 class="font-medium mb-4">{{ $tweet->user->name }}</h5></a>
        <p class="text-sm">{{ $tweet->body }}</p>
        <x-likes :tweet="$tweet"/>
    </div>
</div>

