@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="rounded-circle" style="height: 150px; width: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> post</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://www.instagram.com/static/images/mediaUpsell.jpg/6efc710a1d5a.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.instagram.com/static/images/mediaUpsell.jpg/6efc710a1d5a.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.instagram.com/static/images/mediaUpsell.jpg/6efc710a1d5a.jpg" class="w-100">
        </div>
    </div>
    
</div>
@endsection
