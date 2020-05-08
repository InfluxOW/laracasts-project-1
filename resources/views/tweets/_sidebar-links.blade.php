{{-- <div class="overflow-hidden shadow-lg bg-white mb-4 rounded-b-lg rounded-t border-red-light border border-gray-300 rounded-lg">
    <div class="flex cursor-pointer border-b border-gray-300 px-4 py-2 text-lg text-gray-700"
        style="{{ (request()->is('tweets')) ? 'border-left: 4px solid #7AB1FF' : '' }}">
        <a href="{{ route('tweets.index') }}">
            <i class="fas fa-home"></i>
            Tweets
        </a>
    </div>
    <div class="flex cursor-pointer border-b border-gray-300 px-4 py-2 text-lg text-gray-700"
        style="{{ (request()->is('explore')) ? 'border-left: 4px solid #7AB1FF' : '' }}">
        <a href="{{ route('explore.index') }}">
            <i class="fas fa-search"></i>
            Explore
        </a>
    </div>
    <div class="flex cursor-pointer border-b border-gray-300 px-4 py-2 text-lg text-gray-700"
        style="{{ (request()->is('profiles') || request()->is('profiles/*')) ? 'border-left: 4px solid #7AB1FF' : '' }}">
        <a href="{{ route('profiles.show', Auth::user()) }}">
            <i class="fas fa-user"></i>
            Profile
        </a>
    </div>
    <div class="flex cursor-pointer px-4 py-2 text-lg text-gray-700">
        <div href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            {{ __('Logout') }}
        </div>
            {{Form::open(['url' => route('logout'), 'method' => 'POST', 'id' => 'logout-form', 'class' => 'invisible'])}}
            {{Form::close()}}
    </div>
</div> --}}

<div class="area"></div><nav class="main-menu">
    <img src="/images/logo.png" alt="Tweety" class="w-full">
    <ul>
        <li>
            <a href="{{ route('tweets.index') }}">
                <i class="fa fa-home fa-2x nav-icon"></i>
                <span class="nav-text">
                    Tweets
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('explore.index') }}">
                <i class="fa fa-search fa-2x nav-icon"></i>
                <span class="nav-text">
                    Explore
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('profiles.show', currentUser()) }}">
                <i class="fa fa-user fa-2x nav-icon"></i>
                <span class="nav-text">
                    Profile
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('notifications') }}">
                <i class="fa fa-bell fa-2x nav-icon {{ currentUser()->unreadNotifications->count() > 0 ? 'text-red-800' : '' }}"></i>
                <span class="nav-text">
                    Notifications
                </span>
            </a>
        </li>
    </ul>

    <ul class="logout">
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off fa-2x nav-icon"></i>
                <span class="nav-text">Logout</span>
                    {{Form::open(['url' => route('logout'), 'method' => 'POST', 'id' => 'logout-form', 'class' => 'invisible'])}}
                    {{Form::close()}}
            </a>
        </li>
    </ul>
</nav>
