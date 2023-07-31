@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 p-5 d-flex">
                <img src="/storage/{{$user->profile->image}}" alt="nth" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->username}}</h1>
                    <div class="d-flex flex-column">
                        <a href="{{route('post.create')}}">Add</a>
                            <a href="{{$user->id}}/edit">Edit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pe-5"><strong>23k</strong> followers</div>
                    <div><strong>212</strong> following</div>
                </div>
                <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>
        <div class="row">
            @foreach($user->posts as $post)
                <div class="col-4 pt-3">
                    <a href="/post/{{$post->id}}"><img src="/storage/{{$post->image}}" class=" container" alt=""></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
