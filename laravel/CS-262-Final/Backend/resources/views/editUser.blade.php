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
                            <h4 class="card-title">Username : {{ $profile->user_username ?? $profile->user_name }}</h4>
                            <hr>
                            <h4 class="card-title">User Email : {{ $profile->email }} </h4>
                            <hr>
                            <h4 class="card-title">Account Type : {{ $profile->account_type == 'a' ? 'Admin' : 'User' }}</h4>
                            <hr>
                            <form action="{{ route('update.user', $profile->user_id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="user_id" value="{{ $profile->user_id }}">
                                <button type='submit' class="btn btn-success">Suspend</button>
                            </form>
                            <form action="{{ route('destory.user', $profile->user_id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type='submit' class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
