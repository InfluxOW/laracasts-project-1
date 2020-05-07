<x-master>
    <x-errors/>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="font-medium text-lg mb-4">{{ __('Register') }}</div>

            {!! Form::open(['url' => route('register')]) !!}
                {{ Form::label('name', 'Name', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
                {{ Form::text('name', '', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
                {{ Form::label('username', 'Username', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
                {{ Form::text('username', '', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
                {{ Form::label('email', 'Email', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
                {{ Form::email('email', '', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
                {{ Form::label('password', 'Password', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
                {{ Form::password('password', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
                {{ Form::label('password_confirmation', 'Password Confirmation', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
                {{ Form::password('password_confirmation', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
                <br>
                <div>
                    {{ Form::button('Submit', ['class' => 'bg-blue-500 shadow py-2 px-4 text-white rounded mt-2 mr-2', 'type' => 'submit']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</x-master>
