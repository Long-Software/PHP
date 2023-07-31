@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Sign Up Page</title>
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
                                        Sign Up
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
                                    <form class="form-horizontal signup_form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="user_name" class="control-label">Full Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" id="user_name"
                                                        name="user_name" placeholder="Enter your full name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="user_username" class="control-label">Username</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" id="user_name"
                                                        name="last_name" placeholder="Enter your username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="email" class="control-label">Email</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" id="email"
                                                        name="email" placeholder="abc@gmail.com">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="password" class="control-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control input-sm" id="pwd"
                                                        name="password" placeholder="Enter Password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="account_type" class="control-label">Account Type</label>
                                                <div class="input-group">
                                                    <select name="account_type" id="account_type" class="form-control"
                                                        required>
                                                        <option selected disabled>Select Account Type</option>
                                                        <option value="u">Borrower</option>
                                                        <option value="b">Bank</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Sign Up</button>
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
