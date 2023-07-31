@extends('admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card"><br><br>
                        <img class="rounded-circle avatar-xl"
                            src="{{ !empty($profile->profile_image) ? url('upload/images/' . $profile->profile_image) : url('upload/no_image.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Name : {{ $profile->user_name }} </h4>
                            <hr>
                            <h4 class="card-title">Username : {{ $profile->user_username }}</h4>
                            <hr>
                            <h4 class="card-title">User Email : {{ $profile->email }} </h4>
                            <hr>
                            <a href="{{ route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light">
                                Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
