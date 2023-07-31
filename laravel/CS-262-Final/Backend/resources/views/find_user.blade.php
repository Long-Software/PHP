@extends('admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            @include('dashboard')
            @php
                
                $id = Auth::id();
                $lvl = DB::select(
                    'select 
                                level_id
                            from 
                                admins
                            where user_id = ?',
                    [$id],
                );
            @endphp
            <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card"><br><br>
                        <img class="rounded-circle avatar-xl"
                            src="{{ !empty($user->profile_image) ? url('upload/images/' . $user->profile_image) : url('upload/no_image.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Name : {{ $user->user_name }} </h4>
                            <hr>
                            <h4 class="card-title">Username : {{ $user->user_username }}</h4>
                            <hr>
                            <h4 class="card-title">User Email : {{ $user->email }} </h4>
                            <hr>
                            <h4 class="card-title">Name : {{ $user->account_type }} </h4>
                            <hr>
                            <h4 class="card-title">Username : {{ $user->user_verified ? 'Active':'Unactive' }}</h4>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection
