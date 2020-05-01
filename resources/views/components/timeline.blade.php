<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets->load('user', 'user.image') as $tweet)
        <x-tweet :tweet="$tweet" :loop='$loop'/>
    @empty
        <p class="p-4">No tweets yet!</p>
    @endforelse
</div>
