<x-app>

    @include('tweets._publish-tweet-panel')
    <x-timeline :tweets='$tweets'/>
    <x-slot name="scripts">
        <script src="{{ asset('js/tweet-image.js') }}"></script>
    </x-slot>
</x-app>

