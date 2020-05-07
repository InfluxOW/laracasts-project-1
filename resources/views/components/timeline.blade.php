<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets->load('user', 'user.avatar', 'likes', 'dislikes', 'image') as $tweet)
        <x-tweet :tweet="$tweet" :loop='$loop'/>
    @empty
        <p class="p-4">No tweets yet!</p>
    @endforelse
</div>

<div class="m-2">
    {{ $tweets->links() }}
</div>
