@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Bank Registration Page</title>
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
                                    <span property="name"><b>Bank Registeration</b> </span>
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
                                        Bank Registration
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
                                    <h2 class="mb20"><b>Let's Get Started!</b></h2>
                                    <p>Please fill in all information below...</p>
                                    <form class="form-horizontal signup_form" action="{{ route('bank.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" value='{{ $post }}'>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="bank_name" class="control-label">Bank Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" id="bank_name"
                                                        name="bank_name" placeholder="Enter your bank name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="bank_address" class="control-label">Bank Address</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" id="bank_address"
                                                        name="bank_address" placeholder="Enter your bank address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <label for="bank_capital" class="control-label">Bank Capital</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control input-sm" id="bank_capital"
                                                        name="bank_capital" placeholder="Your Bank Capital">
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
