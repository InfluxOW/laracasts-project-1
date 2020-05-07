@foreach (session('flash_notification', collect())->toArray() as $message)
<div class="text-center py-4 lg:px-4 screen-bottom" role="flash">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex-auto rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">{{ $message['level'] }}</span>
        <span class="flex-auto font-semibold text-xs mr-2">{{ $message['message'] }}</span>
    </div>
</div>
@endforeach

{{ session()->forget('flash_notification') }}
