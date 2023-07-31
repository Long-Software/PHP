@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style5.css') }}">
    <title>Loan History</title>
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
                                    <span property="name"><b>Loan History</b> </span>
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
                                        Loan History
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
    <section class="history">
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="wrapper-content pin-side40">
                                <div class="loan_history_block">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Bank Name</th>{{-- bank --}}
                                            <th>Loan Plan</th>{{-- loan_packages --}}
                                            <th>Amount</th>{{-- loan_history --}}
                                            <th>Rate%</th>
                                            <th>Payment Schedule</th> {{-- loan_packages --}}
                                        </tr>
                                        @foreach ($loanHistory as $history)
                                        <tr>
                                            <td>{{ $history->history_id }}</td>
                                            <td>{{ $history->bank_name }}</td>
                                            <td>{{ $history->loan_name }}</td>
                                            <td>{{ $history->loan_amount }}</td>
                                            <td>{{ $history->loan_rate }} {{ $history->loan_rate_per }}</td>
                                            <td>{{ $history->loan_duration }} {{ $history->loan_duration_in }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
