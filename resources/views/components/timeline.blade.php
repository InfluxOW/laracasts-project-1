<div class="border border-gray-300 rounded-lg">
    @foreach ($tweets->load('user') as $tweet)
        <x-tweet :tweet='$tweet'/>
    @endforeach
</div>
