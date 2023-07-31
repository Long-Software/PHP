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
                                            <form name="loandata" class="form-horizontal loan-eligibility-form">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="input" class="control-label">First Payment
                                                            Date</label>
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
                                                                id="input" name="principle" min="0"
                                                                placeholder="Enter Loan Amount" onchange="calculate()">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="input" class="control-label">Interest rate</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">%</span>
                                                            <input type="number" class="form-control input-sm"
                                                                id="input" name="interestRate" value="9.5"
                                                                step="any" onchange="calculate()">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="input" class="control-label">Years:</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"></span>
                                                            <input type="number" class="form-control input-sm"
                                                                id="input" name="years" placeholder=""
                                                                onchange="calculate()">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="button" class="btn btn-default"
                                                            onclick="calculate()">Calculate</button>
                                                        <button type="reset" class="btn btn-primary">Reset All</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6">
                                            <h2 class="mb40"><b>How much loan you have to pay for?</b></h2>
                                            <div class="loan-eligibility-info">
                                                <form name="loan_result">
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
                                                            name="field14"></output>
                                                        <output
                                                            class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-amount"
                                                            name="field12"></output>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <h2 class="mb40"><b>Payment Schedule</b></h2>
                                            <div id="payment_schedule"></div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function calculate() {
                                        var FirstPayment = new Date(document.loandata.first_payment.value);
                                        var Principle = parseFloat(document.loandata.principle.value);
                                        var interestRate = parseFloat(document.loandata.interestRate.value) / 100 / 12;
                                        var Years = parseFloat(document.loandata.years.value);
                                        var Time = Years * 12;

                                        // Compute for monthly payment
                                        var X = Math.pow(1 + interestRate, Time); //(1 + r)^n
                                        var monthly = (Principle * X * interestRate) / (X - 1);

                                        // Check that the result is a finite number. If so, display the results.
                                        if (!isNaN(monthly) && (monthly !== Number.POSITIVE_INFINITY) && (monthly !== Number.NEGATIVE_INFINITY)) {
                                            document.loan_result.field13.value = "Your Monthly Payment is: $";
                                            document.loan_result.field11.value = monthly.toFixed(2);

                                            var totalPayment = monthly * Time;
                                            document.loan_result.field14.value = "Your Total Payment is: $";
                                            document.loan_result.field12.value = totalPayment.toFixed(2);

                                            // Generate payment schedule table
                                            generatePaymentSchedule(Principle, monthly, Time, FirstPayment);
                                        } else {
                                            document.loan_result.field13.value = "";
                                            document.loan_result.field11.value = "";
                                            document.loan_result.field14.value = "";
                                            document.loan_result.field12.value = "";

                                            // Clear payment schedule table
                                            document.getElementById("payment_schedule").innerHTML = "";
                                        }

                                    }

                                    function generatePaymentSchedule(principle, monthlyPayment, numMonths, firstPaymentDate) {
                                        var table = document.createElement("table");
                                        table.classList.add("table", "table-bordered");

                                        // Create table header
                                        var headerRow = table.insertRow();
                                        var headers = ["Payment Date", "Payment Amount"];
                                        for (var i = 0; i < headers.length; i++) {
                                            var headerCell = document.createElement("th");
                                            headerCell.textContent = headers[i];
                                            headerRow.appendChild(headerCell);
                                        }

                                        // Generate table rows
                                        var currentDate = new Date(firstPaymentDate);
                                        for (var month = 1; month <= numMonths; month++) {
                                            var row = table.insertRow();
                                            var dateCell = row.insertCell();
                                            var paymentCell = row.insertCell();

                                            dateCell.textContent = currentDate.toDateString();
                                            paymentCell.textContent = monthlyPayment.toFixed(2);

                                            currentDate.setMonth(currentDate.getMonth() + 1);
                                        }

                                        // Append the table to the container element
                                        var container = document.getElementById("payment_schedule");
                                        container.innerHTML = "";
                                        container.appendChild(table);
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
