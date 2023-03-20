@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5" class="rounded-circle"><img src="/svg/freeCodeCampLogo.svg"></div>
            <div class="col-9 pt-5">
                <div><h1>{{$user['username']}}</h1></div>
                <div class="d-flex">
                    <div class="pe-5"><strong>153</strong> posts</div>
                    <div class="pe-5"><strong>23k</strong> followers</div>
                    <div class="pe-5"><strong>212k</strong> following</div>
                </div>
                <div class="pt-4">freeCodeCamp.org</div>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur culpa eligendi, exercitationem fugiat fugit necessitatibus neque nisi sit temporibus voluptates.</div>
                <div><a href="#">www.freecodecamp.org</a></div>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-4" style="background: #0d6efd"></div>
            <div class="col-4" style="background: #0d6efd"></div>
            <div class="col-4" style="background: #0d6efd"></div>
        </div>
    </div>
@endsection
