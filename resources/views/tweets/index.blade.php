<x-app>

    @include('tweets._publish-tweet-panel')
    <x-timeline :tweets='$tweets'/>
    @push('scripts')
        <script src="{{ asset('js/tweet-image.js') }}"></script>
        <script>
            function textCounter(field,field2,maxlimit)
            {
                var countfield = document.getElementById(field2);
                if ( field.value.length > maxlimit ) {
                field.value = field.value.substring( 0, maxlimit );
                return false;
                } else {
                countfield.value = maxlimit - field.value.length;
                }
            }
        </script>
    @endpush
</x-app>

