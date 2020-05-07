@foreach (session('flash_notification', collect())->toArray() as $message)
    <div class="text-center py-4 lg:px-4 font-sans screen-bottom" role="flash">
        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full lg:inline-flex" role="alert">
            <span class="rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">{{ $message['level'] }}</span>
            <span class="font-semibold text-xs mr-2">{{ $message['message'] }}</span>
        </div>
    </div>
@endforeach

{{ session()->forget('flash_notification') }}
