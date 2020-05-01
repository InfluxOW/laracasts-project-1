@unless (currentUser()->is($user))
    {!! Form::open(['url' => route('profiles.follow.store', $user)]) !!}
    {{ currentUser()->isFollowing($user) ?
        Form::button('Unfollow me', ['class' => 'bg-red-500 rounded-full shadow py-2 px-4 text-white text-xs ml-2', 'type' => 'submit']) :
        Form::button('Follow me', ['class' => 'bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs ml-2', 'type' => 'submit'])}}
    {!! Form::close() !!}
@endunless
