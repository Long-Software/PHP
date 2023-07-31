@extends('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Loan Confirm</title>
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
                                    <span property="name"><b>Confirm Loan</b> </span>
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
                                        Confirm Loan
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
    <section class="confirm_loan">
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="wrapper-content pin-side40">
                                <div class="loan_block">
                                    <h2 class="mb20"><b>Loan Confirmation</b></h2>
                                    <p>Please check the following information carefully</p>
                                    <form class="form-horizontal" action="{{ route('storeLoanHistory') }}" method="POST">
                                        @method('POST')
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <section class="loan_info">
                                                    <div class="row mb-3">
                                                        <input type="hidden" value="{{ $loan->package_id }}" name="package_id">
                                                        <div class="col-sm-4">
                                                            <label for="loan_name">Loan Name</label>
                                                            <input type="text" name="loan_name" id="loan_name"
                                                                class="form-control" placeholder="Loan Name" value="{{ $loan ->loan_name }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <label for="loan_amount">Loan Amount</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="loan_amount"
                                                                    maxlength="8" placeholder="#11223300" name="loan_amount" value="{{ $loan->loan_amount }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <label for="loan_duration">Loan Duration</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="loan_duration"
                                                                    maxlength="8" placeholder="#11223300" name="loan_duration" value="{{ $loan->loan_duration }} {{ $loan->loan_duration_in }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="desired_loan">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <label for="desired_loan_amount">Please enter your desired loan amount</label>
                                                            <input type="number" class="form-control" id="desired_loan_amount"
                                                                min="0" step="0.01" name="desired_loan_amount"
                                                                placeholder="Loan Amount" required>
                                                        </div>
                                                    </div>
                                                </section>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            {{-- <input type="submit" class="btn btn-primary" value="Submit"> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
