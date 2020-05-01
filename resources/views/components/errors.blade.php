@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div role="alert" class="mb-2">
            <div class="bg-red-500 text-white font-medium rounded-t px-4 py-1">
                Error
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-1 text-red-400">
                <p>{{ $error }}</p>
            </div>
        </div>
    @endforeach
@endif
