<x-app>
    {!! Form::open(['url' => route('profiles.update', $user), 'method' => 'PATCH', 'files' => true]) !!}
        {{ Form::label('name', 'Name', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::text('name', $user->name, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('username', 'Username', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::text('username', $user->username, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('email', 'Email', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::email('email', $user->email, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('description', 'description', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::textarea('description', $user->description, ['class' => 'border border-gray-400 p-2 w-full mb-2', 'cols' => '', 'rows' => '']) }}
        {{ Form::label('avatar', 'avatar', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        <div class="flex items-center mb-2 border border-gray-400">
            {{ Form::file('avatar', ['class' => 'p-2 w-full']) }}
            <img src="{{ $user->getAvatar() }}" width="50" class="ml-2 border-l-1 border-gray-400">
        </div>
        {{ Form::label('banner', 'banner', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        <div class="flex items-center mb-2 border border-gray-400">
            {{ Form::file('banner', ['class' => 'p-2 w-full']) }}
            <img src="{{ $user->banner_url }}" width="150" class="ml-2 border-l-1 border-gray-400">
        </div>


        {{-- {{ Form::label('password', 'Password', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::password('password', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('password_confirmation', 'Password Confirmation', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::password('password_confirmation', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }} --}}
        {{ Form::button('Submit', ['class' => 'bg-blue-500 shadow py-2 px-4 text-white rounded mr-4', 'type' => 'submit']) }}
        <a href="{{ route('profiles.show', $user) }}" class="hover:underline">Cancel</a>
    {!! Form::close() !!}
</x-app>
