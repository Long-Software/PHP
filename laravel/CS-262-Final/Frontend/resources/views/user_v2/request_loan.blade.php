@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Request Loan Page</title>
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
                                    <span property="name"><b>Loan Application</b> </span>
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
                                        Loan Application
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
                                    <h2 class="mb20"><b>Loan Application Form</b></h2>
                                    <p>Please fill in all information below...</p>
                                    <form class="form-horizontal" action="{{ route('loan.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <section class="loan_info">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-5">
                                                            <label for="desired_amt">Desired Loan Amount $</label>
                                                            <input type="number" name="desired_amt" id="desired_amt"
                                                                class="form-control" value="0">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <label for="annual_income">Annual Income $</label>
                                                            <input type="number" name="annual_income" id="annual_income"
                                                                class="form-control" value="0">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-4">
                                                            <label for="#">Loan will be used for</label>
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                    name="loan_purpose" id="loan_purpose" value="1">
                                                                <label for="loan_purpose" class="form-check label">Personal
                                                                    Loan</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                    name="loan_purpose" id="loan_purpose" value="2">
                                                                <label for="loan_purpose" class="form-check label">Student
                                                                    Loan</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input"
                                                                    name="loan_purpose" id="loan_purpose" value="3">
                                                                <label for="loan_purpose" class="form-check label">Business
                                                                    Loan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div style="text-transform: uppercase; margin-bottom: 25px">
                                                    <h2>Contact Information</h2>
                                                </div>
                                                <div class="row mb-3">
                                                    {{-- <div class="col-sm-4">
                                                        <label for="title">Title</label>
                                                        <select name="title" id="title" class="form-control"
                                                            required>
                                                            <option value="1">Mr.</option>
                                                            <option value="2">Mrs.</option>
                                                            <option value="3">Dr.</option>
                                                            <option value="4">Ms.</option>
                                                        </select>
                                                    </div> --}}
                                                    <div class="col-sm-4">
                                                        <label for="first_name">First Name</label>
                                                        <input type="text" class="form-control" id="first_name"
                                                            name="first_name" placeholder="First Name" require~d>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="last_name">Last Name</label>
                                                        <input type="text" class="form-control" id="last_name"
                                                            name="last_name" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="birthday">Birth Date</label>
                                                        <input type="date" class="form-control" id="birthday"
                                                            name="birthday" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="status">Marital Status:</label>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="status"
                                                            id="status" value="1">
                                                        <label for="status" class="form-check label">Single</label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="status"
                                                            id="status" value="2">
                                                        <label for="status" class="form-check label">Married</label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="status"
                                                            id="status" value="3">
                                                        <label for="status" class="form-check label">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="phone_number">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone_number"
                                                        name="phone_number" placeholder="012345678"​​​ required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" placeholder="Email Address"​​​ required>
                                                </div>
                                            </div>
                                            <div style="text-transform: uppercase; margin-bottom: 25px">
                                                <p>Address</p>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="street_address"
                                                        name="street_address">
                                                    <label for="street_address">Street Address</label>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="city"
                                                        name="city">
                                                    <label for="city">City</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="province"
                                                        name="province">
                                                    <label for="province">State/Province</label>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="postal_code"
                                                        name="postal_code">
                                                    <label for="postal_code">Postal Code</label>
                                                </div>
                                            </div>
                                            <div style="text-transform: uppercase; margin-bottom: 25px">
                                                <h2>Employment Information</h2>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="job_title">Job Title</label>
                                                    <input type="text" class="form-control" id="job_title"
                                                        name="job_title" placeholder=""​​​ required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="employer_name">Employer Name</label>
                                                    <input type="text" class="form-control" id="employer_name"
                                                        name="employer_name" placeholder=""​​​ required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Apply</button>
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
