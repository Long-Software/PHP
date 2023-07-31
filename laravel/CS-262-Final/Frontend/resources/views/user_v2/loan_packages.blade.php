@extends('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Available Loan</title>
@endsection
@section('content')
    <section class="title">
        <div class="page-header" style="background-image: url({{ asset('frontend/assets/img/slider-1-1.jpg') }}); ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a property="item" typeof="WebPage" title="" href="#" class="home">
                                        <span property="name" style="color: #15549a;">Home</span>
                                    </a>
                                    <meta property="position" content="1">
                                </span>
                                <li>/</li>
                                <span property="itemListElement" typeof="ListItem">
                                    <span property="name"><b>Available Loan</b> </span>
                                    <meta property="position" content="2">
                                </span>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pin-side30">
                            <div class="row">
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                    <h1 class="page-title">
                                        Available Loan
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="sticky-wrappper" id="sub-nav-sticky-wrapper" style="heigth: 0.666667px">
                            <div class="sub-nav" id="sub-nav">
                                <div id="menu-button">subnav</div>
                                <ul class="nav nav-justified"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="active_loans">
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Loan Name</th>
                        <th>Loan Plan</th>
                        <th>Loan Amount</th>
                        <th>Minimum</th>
                        <th>Maximum</th>
                        <th>Release Date</th>
                        <th>Rate%</th>
                        <th>Duration</th>
                        <th>Payment Cycle</th>
                        <th>Number of Repayment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loan as $post)
                        <tr>
                            <td>{{ $post->package_id }}</td>
                            <td>{{ $post->loan_name }}</td>
                            <td>{{ $post->loan_plan }}</td>
                            <td>{{ $post->loan_amount }}</td>
                            <td>{{ $post->loan_min }}</td>
                            <td>{{ $post->loan_max }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->loan_rate }} {{ $post->loan_rate_per }}</td>
                            <td>{{ $post->loan_duration }} {{ $post->loan_duration_in }}</td>
                            <td>{{ $post->payment_cycle }}</td>
                            <td>{{ $post->num_of_cycle }}</td>
                            <td>
                                <div style="display: flex; gap: 10px;">
                                    <button type="button" class="btn btn-primary" style="padding: 10px 25px;">
                                        <i class="fa-regular fa-pen-to-square"
                                            style="margin-bottom: 5px; positive: absolute;"></i>
                                        <a href="/user/apply/{{ $post->package_id }}" class="btn btn-primary"
                                            style="padding: 10px 25px; text-decoration:none; color: white;">
                                            Apply
                                        </a>

                                    </button><br>
                                    {{-- <button type="submit" class="btn btn-danger" title="Delete Student"
                                        onclick="return confirm('Confirm delete?')" style="padding: 10px 20px;">
                                        <i class="fa-solid fa-trash" style="margin-bottom: 5px; positive: absolute;"></i>
                                        <a href="/loan/{{ $post->package_id }}/delete"
                                            style="text-decoration:none; color: white;">
                                            Delete
                                        </a>
                                    </button> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection
