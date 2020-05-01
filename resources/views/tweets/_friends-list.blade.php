
<h3 class="font-medium text-lg mb-4">Following</h3>

<ul>
    @foreach (Auth::user()->follows as $user)
        <li>
            <div>
                <a href="{{ route('profiles.show', $user) }}"  class="flex items-center text-sm mb-4">
                    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">

                    {{ $user->name }}
                </a>
            </div>
        </li>
    @endforeach
</ul>
