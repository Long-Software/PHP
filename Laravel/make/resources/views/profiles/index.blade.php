@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 p-5 d-flex">
                <img src="" alt="nth" class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->username}}</h1>
                    <div class="d-flex flex-column">
                        <button class="btn btn-info"><a href="{{route('post.create')}}">Add</a></button>
                        <button class="btn btn-info"><a href="{{$user->id}}/edit">Edit</a></button>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pe-5"><strong>23k</strong> followers</div>
                    <div><strong>212</strong> following</div>
                </div>
                <div class="pt-4"><strong>{{$user->profile->Title}}</strong></div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>
        <div class="row">
            @foreach($user->posts as $post)
                <div class="col-4 pt-3">
                    <a href="/post/{{$post->id}}"><img src="/storage/{{$post->image}}" class="rounded-circle container"></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
