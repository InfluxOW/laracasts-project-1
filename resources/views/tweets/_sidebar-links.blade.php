<div class="overflow-hidden shadow-lg bg-white mb-4 rounded-b-lg rounded-t border-red-light">
    <div class="flex cursor-pointer border px-4 py-2 text-lg text-gray-700"
        style="{{ (request()->is('tweets')) ? 'border-left: 4px solid #7AB1FF' : '' }}">
        <a class="pl-2" href="{{ route('tweets.index') }}">
            <i class="fas fa-home"></i>
            Tweets
        </a>
    </div>
    <div class="flex cursor-pointer border px-4 py-2 text-lg text-gray-700"
        style="{{ (request()->is('profiles') || request()->is('profiles/*')) ? 'border-left: 4px solid #7AB1FF' : '' }}">
        <a class="pl-2" href="{{ route('profiles.show', Auth::user()) }}">
            <i class="fas fa-user"></i>
            Profile
        </a>
    </div>
    <div class="flex cursor-pointer border px-4 py-2 text-lg text-gray-700"
        style="{{ (request()->is('explore')) ? 'border-left: 4px solid #7AB1FF' : '' }}">
        <a class="pl-2" href="{{ route('explore.index') }}">
            <i class="fas fa-search"></i>
            Explore
        </a>
    </div>
        <div class="flex cursor-pointer border px-4 py-2 text-lg text-gray-700">
            <div class="pl-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                {{ __('Logout') }}
            </div>
                {{Form::open(['url' => route('logout'), 'method' => 'POST', 'id' => 'logout-form', 'class' => 'invisible'])}}
                {{Form::close()}}
        </div>
</div>
