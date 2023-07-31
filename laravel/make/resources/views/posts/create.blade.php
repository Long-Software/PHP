@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('posts.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="col-8 offset-2">
                <div class="form-group">
                    <div class="row">
                        <label for="caption" class="col-md-4 col-form-label ">Caption</label>

                        <div class="col-md-6">
                            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                                   name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Post Image</label>
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
