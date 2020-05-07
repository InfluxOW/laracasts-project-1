<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    {!! Form::open(['route' => 'tweets.store', 'files' => true,]) !!}
    <div class="flex mb-2 font-semibold text-sm text-gray-600">
    {!! Form::text("counter", "255", ['disabled', 'id' => 'counter', 'class' => 'bg-white']) !!}
    </div>
    {{ Form::textarea('body', '', ['class' => 'w-full', 'placeholder' => 'Tell me anything', 'cols' => '', 'rows' => '', 'required',
    'id' => 'tweet', 'onkeyup' => "textCounter(this,'counter', 255)"]) }}
    {{ Form::file('image', ['class' => 'p-2 w-full filepond', 'id' => 'image']) }}
    <hr class="my-4">
    <footer class="flex justify-between items-center">
        <img src="{{ currentUser()->getAvatar() }}" alt="" class="rounded-full mr-2" width="50" height="50">
        {{ Form::button('Tweet', ['class' => 'bg-blue-500 rounded-lg shadow px-10 py-2 text-sm text-white hover:bg-blue-600', 'type' => 'submit']) }}
    </footer>
    {!! Form::close() !!}
</div>
