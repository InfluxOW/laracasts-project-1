
<div class="flex p-4 border-b border-b-grey-400">
    <div class="mr-2 flex-shrink-0">
        <img src="{{ $tweet->user->avatar }}" alt="" class="rounded-full mr-2">
    </div>

    <div>
        <h5 class="font-medium mb-4">{{ $tweet->user->name }}</h5>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>

