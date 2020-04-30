<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    {!! Form::open(['route' => 'tweet.store']) !!}
    {{ Form::textarea('body', '', ['class' => 'w-full', 'placeholder' => 'Tell me anything', 'cols' => '', 'rows' => '']) }}

    <hr class="my-4">
    <footer class="flex justify-between">
        <img src="{{ Auth::user()->avatar }}" alt="" class="rounded-full mr-2">
        {{ Form::submit('Tweet', ['class' => 'bg-blue-500 rounded-lg shadow py-2 px-4 text-white']) }}
    </footer>
    {!! Form::close() !!}
</div>
