<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    {!! Form::open(['route' => 'tweets.store']) !!}
    {{ Form::textarea('body', '', ['class' => 'w-full', 'placeholder' => 'Tell me anything', 'cols' => '', 'rows' => '', 'required']) }}

    <hr class="my-4">
    <footer class="flex justify-between items-center">
        <img src="{{ currentUser()->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">
        {{ Form::button('Tweet', ['class' => 'bg-blue-500 rounded-lg shadow px-10 py-2 text-sm text-white hover:bg-blue-600', 'type' => 'submit']) }}
    </footer>
    {!! Form::close() !!}
</div>
