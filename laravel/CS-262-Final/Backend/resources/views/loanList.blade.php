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
                            <h4 class="card-title mb-4">Loans</h4>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Rate(%)</th>
                                            <th>Amount</th>
                                            <th>Started Date</th>
                                            <th>Expired Date</th>
                                        </tr>
                                    </thead><!-- end thead -->
                                    @if (count($loan) != 0)
                                        <tbody>
                                            @foreach ($loan as $loan)
                                                <tr>
                                                    <td>{{ $loan->package_id }}</td>
                                                    <td>{{ $loan->loan_name }}</td>
                                                    <td>{{ $loan->loan_rate }}</td>
                                                    <td>{{ $loan->loan_amount }}</td>
                                                    <td>{{ $loan->created_at }}</td>
                                                    <td>{{ $loan->updated_at }}</td>
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
