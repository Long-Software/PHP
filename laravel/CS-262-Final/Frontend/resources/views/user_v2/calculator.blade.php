@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style4.css') }}">
    <title>Loan Eligibility Calculator</title>
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
                                    <span property="name"><b>Loan Calculator</b> </span>
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
                                        Loan Calculator
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

    <section class="calculator">
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper" style="background-color: #ffffff;">
                            <div class="wrapper-content pin-side40">
                                <div class="loan-eligibility-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h2 class="mb20"><b>Fixed Rate Loan Payment</b></h2>
                                            <form name="formval2" class="form-horizontal loan-eligibility-form">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="input" class="control-label">First Payment Date</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"></span>
                                                            <input type="date" class="form-control input-sm"
                                                                id="input" name="first_payment"
                                                                placeholder="Enter First Payment Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="input" class="control-label">Loan Amount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            <input type="number" class="form-control input-sm"
                                                                id="input" name="loan_amount" min="0"
                                                                placeholder="Enter Loan Amount">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="input" class="control-label">Loan term (months)</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            <input type="number" class="form-control input-sm"
                                                                id="input" name="loan_term" placeholder="# of months">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="input" class="control-label">Interest rate per year</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">%</span>
                                                            <input type="number" class="form-control input-sm"
                                                                id="input" name="interestRate" value="9.5" step="any">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="button" class="btn btn-default"
                                                            onclick="eligiable()">Calculate</button>
                                                        <button type="reset" class="btn btn-primary">Reset All</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6">
                                            <h2 class="mb40"><b>How much loan you are eligible for?</b></h2>
                                            <div class="loan-eligibility-info">
                                                <form name="formval3">
                                                    <div class="form-group">
                                                        <output
                                                            class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-text"
                                                            name="field13"></output>
                                                        <output
                                                            class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-amount"
                                                            name="field11"></output>
                                                    </div>
                                                    <div class="form-group">
                                                        <output
                                                            class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-text"
                                                            name="field12"></output>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function eligiable() {
                                        var P1 = document.formval2.amount.value; // pick the form input value..
                                        var rate1 = document.formval2.int_rate2.value; // pick the form input value..
                                        var n1 = document.formval2.period2.value; // pick the form input value..
                                        var r1 = rate1 / (12 * 100); // to calculate rate percentage..
                                        var prate1 = (P1 * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) -
                                            1); // to calculate compound interest..
                                        var emi1 = Math.ceil(prate1 * 100) / 100; // to parse emi amount..

                                        var existing = document.formval2.ExLoan.value;
                                        var existingLoan = (existing - (existing * 60 / 100));
                                        var income1 = document.formval2.NetIncome.value;
                                        if (income1 <= 14999) {
                                            var incomere = ((income1) * 40 / 100) - existingLoan;
                                        } else if (income1 <= 29999) {
                                            var incomere = ((income1) * 45 / 100) - existingLoan;
                                        } else if (income1 >= 30000) {
                                            var incomere = ((income1) * 50 / 100) - existingLoan;
                                        }
                                        var incomereq = Math.floor(incomere / emi1 * P1);
                                        var prate2 = (incomereq * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) -
                                            1); // to calculate compound interest2..
                                        var emi2 = Math.ceil((prate2) * 100) / 100; // to parse emi2 amount..   //Check again Reminder

                                        // to assign value in field1 as fixed upto two decimal..
                                        if (incomereq > P1) {
                                            document.formval3.field13.value = ("You are Eligible for this loan");
                                            document.formval3.field11.value = ("$" + P1 + " at EMI " + "$" + emi1.toFixed(0).replace(".", ".").replace(
                                                /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                                            document.formval3.field12.value = ("You are Eligible for a maximum loan of " + ("$" + incomereq.toFixed(0)
                                                .replace(".", ".").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")) + " at EMI " + ("$" + emi2
                                                .toFixed(0).replace(".", ".").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")));
                                        } else {
                                            document.formval3.field13.value = ("You are not Eligible for this loan");
                                            document.formval3.field11.value = ("");
                                            document.formval3.field12.value = ("You are Eligible for a maximum loan of " + ("$" + incomereq.toFixed(0)
                                                .replace(".", ".").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")) + " at EMI " + ("$" + emi2
                                                .toFixed(0).replace(".", ".").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")));
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
