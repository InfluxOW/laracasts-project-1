<x-app>
    {!! Form::open(['url' => route('profiles.update', $user), 'method' => 'PATCH', 'files' => true]) !!}
        {{ Form::label('name', 'Name', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::text('name', $user->name, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('username', 'Username', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::text('username', $user->username, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('email', 'Email', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::email('email', $user->email, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('avatar', 'avatar', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        <div class="flex items-center mb-2">
            {{ Form::file('avatar', ['class' => 'border border-gray-400 p-2 w-full']) }}
            <img src="{{ $user->avatar }}" width="50" class="ml-2">
        </div>
        {{-- {{ Form::label('password', 'Password', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::password('password', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('password_confirmation', 'Password Confirmation', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::password('password_confirmation', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }} --}}
        {{ Form::button('Submit', ['class' => 'bg-blue-500 shadow py-2 px-4 text-white rounded', 'type' => 'submit']) }}
    {!! Form::close() !!}
</x-app>
