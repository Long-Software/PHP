@extends('admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
           @include('dashboard')
            <!-- end row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-4">Unverified Users</h4>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Account Type</th>
                                            <th>Registed date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead><!-- end thead -->
                                    @if (count($user) != 0)
                                        <tbody>
                                            @foreach ($user as $user)
                                                <tr>
                                                    <td><a href="{{ route('edit.user', $user->user_id) }}">{{ $user->user_id }}</a></td>
                                                    <td>{{ $user->user_name }}</td>
                                                    <td>{{ $user->account_type }}</td>
                                                    <td>{{ $user->updated_at }}</td>
                                                    <td>
                                                        <a href="{{ route('verify.user', $user->user_id) }}"><button class="btn btn-success waves-effect waves-light">Approve</button></a>
                                                        <a href="{{ route('destory.user', $user->user_id) }}"><button class="btn btn-danger waves-effect waves-light">Reject</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <!-- end -->
                                        </tbody><!-- end tbody -->
                                </table> <!-- end table -->
                            @else
                                </table> <!-- end table -->
                                <h4>No data</h4>
                                @endif
                            </div>
                        </div><!-- end card -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection
