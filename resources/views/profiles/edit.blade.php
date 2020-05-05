<x-app>
    {!! Form::open(['url' => route('profiles.update', $user), 'method' => 'PATCH', 'files' => true, 'class' => 'mb-2']) !!}
        {{ Form::label('name', 'Name', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::text('name', $user->name, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('username', 'Username', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::text('username', $user->username, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('email', 'Email', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::email('email', $user->email, ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
        {{ Form::label('description', 'description', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::textarea('description', $user->description, ['class' => 'border border-gray-400 p-2 w-full mb-2', 'cols' => '', 'rows' => '']) }}
        {{ Form::label('avatar', 'avatar', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::file('avatar', ['class' => 'p-2 w-full filepond', 'id' => 'avatar']) }}
        {{ Form::label('banner', 'banner', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
        {{ Form::file('banner', ['class' => 'p-2 w-full filepond', 'id' => 'banner']) }}
        {{ Form::button('Submit', ['class' => 'bg-blue-500 shadow py-2 px-4 text-white rounded mr-4', 'type' => 'submit']) }}
        <a href="{{ route('profiles.show', $user) }}" class="hover:underline">Cancel</a>
    {!! Form::close() !!}

    <x-slot name="scripts">
        <script src="{{ asset('js/avatar.js') }}"></script>
        <script src="{{ asset('js/banner.js') }}"></script>
    </x-slot>
</x-app>

{{-- {{ Form::label('password', 'Password', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
{{ Form::password('password', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
{{ Form::label('password_confirmation', 'Password Confirmation', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
{{ Form::password('password_confirmation', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }} --}}
