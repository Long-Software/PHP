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
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-4">Admins</h4>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Admin Level</th>
                                            <th>Status</th>
                                            <th>Email</th>
                                            <th>Verified By</th>
                                            @if ($lvl[0]->level_id <= 3)
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead><!-- end thead -->
                                    @if (count($user) != 0)
                                        <tbody>
                                            @foreach ($user as $user)
                                                <tr>
                                                    <td><a
                                                            href="{{ route('edit.user', $user->user_id) }}">{{ $user->user_id }}</a>
                                                    </td>
                                                    <td>{{ $user->user_name }}</td>
                                                    <td>{{ $user->admin_description }}</td>
                                                    <td>{{ $user->user_verified == true ? 'Active' : 'Unactive' }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->created_by }}</td>
                                                    <td>
                                                        @if ($user->user_id != Auth::id() and $user->user_id != 1)
                                                            @if ($lvl[0]->level_id <= 4)
                                                                <form action="{{ route('update.user', $user->user_id) }}"
                                                                    method="POST" style="display: inline-block">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <input type="hidden" name="user_id"
                                                                        value="{{ $user->user_id }}">
                                                                    <button type='submit'
                                                                        class="btn btn-success">Suspend</button>
                                                                </form>
                                                            @endif
                                                            @if ($lvl[0]->level_id <= 3)
                                                                <form action="{{ route('destory.user', $user->user_id) }}"
                                                                    method="POST" style="display: inline-block">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type='submit'
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            @endif
                                                        @else
                                                            No Action
                                                        @endif
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
