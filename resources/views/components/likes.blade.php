<div class="flex">
    <div class="mt-2 items-center flex mr-4 {{ $tweet->isLikedBy(currentUser()) ? 'text-green-500' : 'text-gray-500' }}">
        {!! Form::open(['url' => route('tweets.like', $tweet)]) !!}
        <button type="submit">
            <i class="far fa-thumbs-up mr-1"></i>
            <span class="text-xs">
                {{ $tweet->likes_count }}
            </span>
        </button>
        {!! Form::close() !!}
    </div>
    {!! Form::open(['url' => route('tweets.dislike', $tweet)]) !!}
    <div class="mt-2 items-center flex {{ $tweet->isDislikedBy(currentUser()) ? 'text-red-500' : 'text-gray-500' }}">
        <button type="submit">
            <i class="far fa-thumbs-down mr-1"></i>
            <span class="text-xs">
                {{ $tweet->dislikes_count }}
            </span>
        </button>
    </div>
    {!! Form::close() !!}
</div>
