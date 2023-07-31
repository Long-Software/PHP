@extends ('layout.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Make Loan Page</title>
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
                                    <span property="name"><b>Make Loan</b> </span>
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
                                        Make Loan
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

    <section class="make_loan_form">
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="wrapper-content pin-side40">
                                <div class="loan_block">
                                    <h2 class="mb20"><b>Make a new loan Here</b></h2>
                                    <p>Please fill in all information below...</p>
                                    <form class="form-horizontal" action="{{ route('loan.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <section class="loan_info">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-6">
                                                            <label for="loan_name">Loan Name</label>
                                                            <input type="text" name="loan_name" id="loan_name"
                                                                class="form-control" placeholder="Loan Name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="loan_plan">Loan Plan</label>
                                                            <div class="input-group">
                                                                <select name="loan_plan" id="loan_plan" class="form-control"
                                                                    required>
                                                                    <option selected>Choose...</option>
                                                                    <option value="Personal">Personal Loan</option>
                                                                    <option value="Business">Business Loan</option>
                                                                    <option value="Student">Student Loan</option>
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
                                                                    required>
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
                                                            placeholder="Loan Amount" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <label for="loan_min">Min. Amount</label>
                                                        <input type="number" class="form-control" id="loan_min"
                                                            min="0" step="0.01" name="loan_min"
                                                            placeholder="minimum" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="loan_max">Max. Amount</label>
                                                        <input type="number" class="form-control" id="loan_max"
                                                            min="0" step="0.01" name="loan_max"
                                                            placeholder="maximum" required>
                                                    </div>
                                                </div>
                                                {{-- <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <label for="loan_date">Loan Release Date</label>
                                                        <input type="date" class="form-control" id="loan_date"
                                                            placeholder="mm/dd/yyyy" name="loan_date" required>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="red-text" style="border:10px;">
                                                <strong style="color: red">Interest:</strong>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="loan_rate">Loan Interest Rate %</label>
                                                    <input type="text" class="form-control" id="loan_rate"
                                                        name="loan_rate" placeholder="%" required>
                                                </div>
                                                <br>
                                                <div class="col-md-2">
                                                    <label for="loan_rate_per"></label>
                                                    <select name="loan_rate_per" id="loan_rate_per" class="form-control"
                                                        required>
                                                        <option selected>Choose..</option>
                                                        <option value="Per Day">Per Day</option>
                                                        <option value="Per Week">Per Week</option>
                                                        <option value="Per Month">Per Month</option>
                                                        <option value="Per Year">Per Year</option>
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
                                                        name="loan_duration">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for=""></label>
                                                    <select id="loan_duration_in" name="loan_duration_in"
                                                        class="form-control" id="loan_duration_in" required>
                                                        <option selected>Choose..</option>
                                                        <option value="Days">Days</option>
                                                        <option value="Weeks">Weeks</option>
                                                        <option value="Months">Months</option>
                                                        <option value="Years">Years</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="red-text" style="border:10px;">
                                                <strong style="color: red">Repayment:</strong>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="payment_cycle">Repayment Cycle</label>
                                                    <select name="payment_cycle" id="payment_cycle" class="form-control">
                                                        <option selected>Choose..</option>
                                                        <option value="Daily">Daily</option>
                                                        <option value="Weekly">Weekly</option>
                                                        <option value="Biweekly">Biweekly</option>
                                                        <option value="Monthly">Monthly</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="num_of_cycle">Number of Repayment</label>
                                                    <input type="number" class="form-control" min="1"
                                                        max="100" id="num_of_cycle" name="num_of_cycle" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div style="background-color: #D3D3D3; padding: 5px;">
                                                    <p>Loan Fees (optional)</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="processing_fees">Processing Fees%</label>
                                                    <input type="number" class="form-control" id="processing_fees"
                                                        name="processing_fees" placeholder="Percentage">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="insurance_fees">Insurance Fees</label>
                                                    <input type="number" class="form-control" id="insurance_fees"
                                                        name="insurance_fees" placeholder="Fixed Amount">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div style="background-color: #D3D3D3; padding: 5px;">
                                                    <p>Other (optional)</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="loan_description">Description</label>
                                                    <textarea id="loan_description" name="loan_description" rows="5" cols="50" maxlength="250"></textarea>
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
