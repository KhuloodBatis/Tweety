@extends('layouts.app')

@section('content')
   <div class="md:flex md:justify-between">
    <div class="md:w-1/6">
        @include('_sidebar-links')
    </div>
    <div class="md:flex-1 md:mx-10" style="max-width: 700px">

            @include('_publish-tweet-panel')
        <div class="border border-gray-300 rounded-lg">
        @include("_tweet")
        @include("_tweet")
        @include("_tweet")
        @include("_tweet")
        @include("_tweet")
        </div>
    </div>
    <div class="md:w-1/6 bg-blue-100 rounded-lg p-4">
        @include('_friends-list')</div>

   </div>
@endsection