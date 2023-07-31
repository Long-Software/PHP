@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Borrower Sign Up Page</title>
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
                                    <span property="name"><b>Register</b> </span>
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
                                        Borrower Registration
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
    <br>
    <section class="signup">
        <div class="container">
            <div class="row">
                <div class="column-contaier col-sm-8">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="wrapper-content pin-side40">
                                <div class="signup-block">
                                    <h2 class="mb20"><b>Register Your Account Here</b></h2>
                                    <p>Please fill in all information below...</p>
                                    <form class="form-horizontal signup_form" method="post" action="{{ route('borrower.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $post }}" name="user_id">
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="borrower_phone_num" class="control-label">Phone Number</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm"
                                                        id="borrower_phone_num" name="borrower_phone_num"
                                                        placeholder="012345678">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="borrower_address" class="control-label">Address</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm"
                                                        id="borrower_address" name="borrower_address"
                                                        placeholder="Enter Address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-info waves-effect waves-light" value="SignUp">
                                                Already Register? <a href="/login">Login</a>
                                            </div>
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
