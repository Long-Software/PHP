@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="title" class="col-md-4 col-form-label ">Title</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                   name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label ">Description</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                                   name="description" value="{{ old('description') ?? $user->profile->description}}" autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="url" class="col-md-4 col-form-label ">Url</label>

                        <div class="col-md-6">
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror"
                                   name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Image</label>
                        <input type="file" class="" id="image" name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <button class="btn btn-primary mt-4" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
