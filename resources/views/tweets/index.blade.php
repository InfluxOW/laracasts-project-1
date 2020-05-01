<x-app>

    @include('tweets._publish-tweet-panel')
    <x-timeline :tweets='$tweets'/>

</x-app>

