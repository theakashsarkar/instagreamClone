@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="row">
                            <h1>Edit Profile</h1>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label ">Title</label>
                                    <input id="title"
                                    type="title" 
                                    class="form-control @error('title') is-invalid @enderror" 
                                    name="title"
                                    value="{{ $user->profile->title }}"
                                    >

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label ">Description</label>
                                    <input id="description"
                                    type="description" 
                                    class="form-control @error('description') is-invalid @enderror" 
                                    name="description"
                                    value="{{ $user->profile->description }}"
                                    >

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label ">URL</label>
                                    <input id="url"
                                    type="url" 
                                    class="form-control @error('url') is-invalid @enderror" 
                                    name="url"
                                    value="{{ $user->profile->url }}"
                                    >

                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                        <div class="row">
                            <label for="image" class="col-md-4 col-form-label">profile Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror"id="image" name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">Save Profile</button>
                        </div>
                </div>    
    </form>
</div>
@endsection
