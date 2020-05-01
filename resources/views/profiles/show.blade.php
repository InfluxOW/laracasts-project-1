@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" alt="" class="mb-2 rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-medium text-2xl mb-0">{{ $user->name }}</h2>
                <p class="font-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow me</a>
            </div>
        </div>
        <p class="text-sm">just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text just random text</p>
        <img
        src="{{ $user->avatar }}"
        alt=""
        class="rounded-full mr-2 absolute"
        style="left: calc(50% - 75px); top: 200px"
        width="150">
    </header>

    <x-timeline :tweets='$user->tweets'/>
@endsection
