<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    {!! Form::open(['url' => '#']) !!}
    {{ Form::textarea('body', '', ['class' => 'w-full', 'placeholder' => 'Tell me anything', 'cols' => '', 'rows' => '']) }}

    <hr class="my-4">
    <footer class="flex justify-between">
        <img src="https://api.adorable.io/avatars/40/abott@adorable.png" alt="" class="rounded-full mr-2">
        {{ Form::button('Tweet', ['class' => 'bg-blue-500 rounded-lg shadow py-2 px-4 text-white']) }}
    </footer>
    {!! Form::close() !!}
</div>
