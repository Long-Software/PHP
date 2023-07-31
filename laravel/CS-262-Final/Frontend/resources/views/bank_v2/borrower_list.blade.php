@extends('layout.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>All Borrower</title>
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
                                    <span property="name"><b>Borrowers</b> </span>
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
                                        Borrowers
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
                        <th>Borrower Name</th>
                        <th>Loan Name</th>
                        <th>Desired Amount</th>
                        <th>Rate</th>
                        <th>Duration</th>
                        <th>Payment Cycle</th>
                        <th>Number of Repayment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($borrower as $borrowers)
                        <tr>
                            <td>{{ $borrowers->package_id }}</td>
                            <td>{{ $borrowers->user_name }}</td>
                            <td>{{ $borrowers->loan_name }}</td>
                            <td>{{ $borrowers->loan_amount }}</td>
                            <td>{{ $borrowers->loan_rate }}</td>
                            <td>{{ $borrowers->loan_duration }} {{ $borrowers->loan_duration_in }}</td>
                            <td>{{ $borrowers->payment_cycle }}</td>
                            <td>{{ $borrowers->num_of_cycle }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection
