@extends('layouts.app')

@section('content')

    @include('tweets._publish-tweet-panel')
    <x-timeline :tweets='$tweets'/>

@endsection
