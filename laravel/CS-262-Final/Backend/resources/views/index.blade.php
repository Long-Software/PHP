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
                            <h4 class="card-title mb-4">Latest Transactions</h4>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>IP Address</th>
                                            <th>Last Login</th>
                                            <th>Updated At</th>
                                            @if ($lvl[0]->level_id <= 4)
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead><!-- end thead -->
                                    @if (count($user) != 0)
                                        <tbody>
                                            @foreach ($user as $user)
                                                <tr>
                                                    <td><a
                                                            href="{{ route('view.map', $user->ip_id) }}">{{ $user->user_id }}</a>
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->ip }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>{{ $user->updated_at }}</td>
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
                                </table>
                                <h4>No date</h4>
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
