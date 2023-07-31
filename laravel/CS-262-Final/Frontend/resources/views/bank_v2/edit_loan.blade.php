@extends('layout.app')
@section('head')
    <title>Edit Loan</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
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
                                    <span property="name"><b>Edit Loan</b> </span>
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
                                        Edit Loan
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

    <section class="edit_loan">
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="wrapper-content pin-side40">
                                <div class="loan_block">
                                    <h2 class="mb20"><b>Make a new loan Here</b></h2>
                                    <p>Please fill in all information below...</p>
                                    <form class="form-horizontal" action="{{ route('loan.update', $loan->package_id) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <section class="loan_info">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-6">
                                                            <label for="loan_name">Loan Name</label>
                                                            <input type="text" name="loan_name" id="loan_name"
                                                                class="form-control" value="{{ $loan->loan_name }}"
                                                                placeholder="Loan Name" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="loan_plan">Loan Plan</label>
                                                            <div class="input-group">
                                                                <select name="loan_plan" id="loan_plan" class="form-control"
                                                                    required>
                                                                    <option value="">Choose...</option>
                                                                    <option value="Personal"
                                                                        {{ $loan->loan_plan == 'Personal' ? 'selected' : '' }}>
                                                                        Personal Loan</option>
                                                                    <option value="Business"
                                                                        {{ $loan->loan_plan == 'Business' ? 'selected' : '' }}>
                                                                        Business Loan</option>
                                                                    <option value="Student"
                                                                        {{ $loan->loan_plan == 'Student' ? 'selected' : '' }}>
                                                                        Student Loan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <label for="package_id">Loan#</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="package_id"
                                                                    maxlength="8" placeholder="#11223300" name="package_id"
                                                                    value="{{ $loan->package_id }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div style="background-color: #D3D3D3; margin-bottom: 5px;">
                                                    <p>Loan Terms (required fields)</p>
                                                </div>
                                                <div class="red-text" style="border:10px;">
                                                    <strong style="color: red">Principle Amount:</strong>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="loan_amount">Loan Amount</label>
                                                        <input type="number" class="form-control" id="loan_amount"
                                                            min="0" step="0.01" name="loan_amount"
                                                            placeholder="Loan Amount" value="{{ $loan->loan_amount }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <label for="loan_min">Min. Amount</label>
                                                        <input type="number" class="form-control" id="loan_min"
                                                            min="0" step="0.01" name="loan_min"
                                                            placeholder="minimum" value="{{ $loan->loan_min }}" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="loan_max">Max. Amount</label>
                                                        <input type="number" class="form-control" id="loan_max"
                                                            min="0" step="0.01" name="loan_max"
                                                            placeholder="maximum" value="{{ $loan->loan_min }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="red-text" style="border:10px;">
                                                <strong style="color: red">Interest:</strong>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="loan_rate">Loan Interest Rate %</label>
                                                    <input type="text" class="form-control" id="loan_rate"
                                                        name="loan_rate" placeholder="%" value="{{ $loan->loan_rate }}"
                                                        required>
                                                </div>
                                                <br>
                                                <div class="col-md-2">
                                                    <label for="loan_rate_per"></label>
                                                    <select name="loan_rate_per" id="loan_rate_per" class="form-control"
                                                        required>
                                                        <option selected>Choose..</option>
                                                        <option value="Per Day"
                                                            {{ $loan->loan_rate_per == 'Per Day' ? 'selected' : '' }}>Per Day
                                                        </option>
                                                        <option value="Per Week"
                                                            {{ $loan->loan_rate_per == 'Per Week' ? 'selected' : '' }}>Per Week
                                                        </option>
                                                        <option value="Per Month"
                                                            {{ $loan->loan_rate_per == 'Per Month' ? 'selected' : '' }}>Per Month
                                                        </option>
                                                        <option value="Per Year"
                                                            {{ $loan->loan_rate_per == 'Per Year' ? 'selected' : '' }}>Per Year
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="red-text" style="border:10px;">
                                                <strong style="color: red">Payment Schedule:</strong>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="loan_duration">Loan Duration</label>
                                                    <input type="number" class="form-control" id="loan_duration"
                                                        name="loan_duration" value="{{ $loan->loan_duration }}" required>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for=""></label>
                                                    <select id="loan_duration_in" name="loan_duration_in"
                                                        class="form-control" id="loan_duration_in" required>
                                                        <option value="">Choose..</option>
                                                        <option value="Days"
                                                            {{ $loan->loan_duration_in == 'Days' ? 'selected' : '' }}>Days
                                                        </option>
                                                        <option value="Weeks"
                                                            {{ $loan->loan_duration_in == 'Weeks' ? 'selected' : '' }}>Weeks
                                                        </option>
                                                        <option value="Months"
                                                            {{ $loan->loan_duration_in == 'Months' ? 'selected' : '' }}>Months
                                                        </option>
                                                        <option value="Years"
                                                            {{ $loan->loan_duration_in == 'Years' ? 'selected' : '' }}>Years
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="red-text" style="border:10px;">
                                                <strong style="color: red">Repayment:</strong>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="payment_cycle">Repayment Cycle</label>
                                                    <select name="payment_cycle" id="payment_cycle" class="form-control"
                                                        required>
                                                        <option selected>Choose..</option>
                                                        <option value="Daily"
                                                            {{ $loan->payment_cycle == 'Daily' ? 'selected' : '' }}>Daily
                                                        </option>
                                                        <option value="Weekly"
                                                            {{ $loan->payment_cycle == 'Weekly' ? 'selected' : '' }}>Weekly
                                                        </option>
                                                        <option value="Biweekly"
                                                            {{ $loan->payment_cycle == 'Biweekly' ? 'selected' : '' }}>Biweekly
                                                        </option>
                                                        <option value="Monthly"
                                                            {{ $loan->payment_cycle == 'Monthly' ? 'selected' : '' }}>Monthly
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="num_of_cycle">Number of Repayment</label>
                                                    <input type="number" class="form-control" min="1"
                                                        max="100" id="num_of_cycle" name="num_of_cycle"
                                                        value="{{ $loan->num_of_cycle }}" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div style="background-color: #D3D3D3; padding: 5px;">
                                                    <p>Loan Fees (optional)</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="processing_fees">Processing Fees%</label>
                                                    <input type="number" class="form-control" id="processing_fees"
                                                        name="processing_fees" placeholder="Percentage"
                                                        value="{{ $loan->processing_fees }}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="insurance_fees">Insurance Fees</label>
                                                    <input type="number" class="form-control" id="insurance_fees"
                                                        name="insurance_fees" placeholder="Fixed Amount"
                                                        value="{{ $loan->insurance_fees }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div style="background-color: #D3D3D3; padding: 5px;">
                                                    <p>Other (optional)</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="loan_description">Description</label>
                                                    <textarea id="loan_description" name="loan_description" rows="5" cols="50" maxlength="250">{{ $loan->loan_description }}</textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
