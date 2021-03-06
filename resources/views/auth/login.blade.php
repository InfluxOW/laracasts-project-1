<x-master>
    <x-errors/>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="font-medium text-lg mb-4">{{ __('Login') }}</div>

            {!! Form::open(['url' => route('login')]) !!}
                {{ Form::label('email', 'Email', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
                {{ Form::email('email', '', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
                {{ Form::label('password', 'Password', ['class' => 'block uppercase font-medium  text-xs text-gray-700 mb-2']) }}
                {{ Form::password('password', ['class' => 'border border-gray-400 p-2 w-full mb-2']) }}
                {{ Form::label('remember', 'Remember Me', ['class' => 'uppercase font-medium  text-xs text-gray-700 mb-2']) }}
                {{ Form::checkbox('remember', 'remember', '') }}
                <br>
                <div class="flex items-center justify-between">
                    {{ Form::button('Submit', ['class' => 'bg-blue-500 shadow py-2 px-4 text-white rounded mt-2 mr-2', 'type' => 'submit']) }}
                    <a href="{{ route('github.login') }}" class="flex bg-green-500 shadow py-2 px-4 text-white rounded mt-2">
                        Login With Github <img src="{{ url('images/octoface.svg') }}" alt="" class="ml-2" />
                    </a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</x-master>
