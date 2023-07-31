@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Log in Page</title>
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
                                    <span property="name"><b>Sign In</b> </span>
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
                                        Sign In
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
    <section class="login">
        <div class="container">
            <div class="row">
                <div class="column-contaier col-sm-8">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="wrapper-content pin-side40">
                                <div class="login-block">
                                    <h2 class="mb20"><b>Sign in to your account</b></h2>
                                    <p>Please fill in all information below...</p>
                                    <form class="form-horizontal signup_form" action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="email" class="control-label">Email</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control input-sm" id="email"
                                                        name="email" placeholder="abc@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="password" class="control-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control input-sm" id="password"
                                                        name="password" placeholder="Enter Password">
                                                </div>
                                            </div>
                                        </div>
                                        <!--Button-->
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Sign In">
                                                Don't have an account? <a href="/signup">Sign Up</a>
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
