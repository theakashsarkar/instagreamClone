@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" style="height: 150px; width: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-item-baseline">
                <div class="d-flex align-item-center pb-3">
                    <div class="h4 ">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                <a href="/p/create">New Post</a>
            </div>
            @can('update',$user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> post</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title??null }}</div>
            <div>{{ $user->profile->description??null }}</div>
            <div><a href="#">{{ $user->profile->url??null }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach( $user->posts as $post )
        <div class="col-4 pb-4 ">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
    
</div>
@endsection
