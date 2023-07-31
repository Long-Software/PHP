@extends ('FrontEnd.layout.app')
@section('head')
    <title>Main Homepage</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center py-5">Loans</h2>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Basic</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Min. Amount</li>
                            <li>Max. Amount</li>
                            <li>Rates</li>
                            <li>Bank name</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Min. Amount</li>
                            <li>Max. Amount</li>
                            <li>Rates</li>
                            <li>Bank name</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Premium</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Min. Amount</li>
                            <li>Max. Amount</li>
                            <li>Rates</li>
                            <li>Bank name</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container marketing">
        <h2 class="text-center py-5">Banks</h2>
        <hr class="featurette-divider">

        <div class="rowfeaturette">
            <div class="col-md-5">
                <img src="https://img.freepik.com/premium-vector/bank-building-money-bank-financing-money-exchange-financial-services-atm-giving-out-money_625536-194.jpg?w=2000" margin-right="10px" width="80px" height="auto"
                display="block" alt="Bank">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Bank Name</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In reiciendis est iusto, commodi vel laudantium omnis quisquam tenetur accusamus nihil.</p>
            </div>
           
        </div>
        <hr class="featurette-divider">

        <div class="rowfeaturette">
            <div class="col-md-5">
                <img src="https://img.freepik.com/premium-vector/bank-building-money-bank-financing-money-exchange-financial-services-atm-giving-out-money_625536-194.jpg?w=2000" margin-right="10px" width="80px" height="auto"
                display="block" alt="Bank">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Bank Name</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In reiciendis est iusto, commodi vel laudantium omnis quisquam tenetur accusamus nihil.</p>
            </div>
            
        </div>
        <hr class="featurette-divider">

        <div class="rowfeaturette">
            <div class="col-md-5">
                <img src="https://img.freepik.com/premium-vector/bank-building-money-bank-financing-money-exchange-financial-services-atm-giving-out-money_625536-194.jpg?w=2000" margin-right="10px" width="80px" height="auto"
                display="block" alt="Bank">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Bank Name</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In reiciendis est iusto, commodi vel laudantium omnis quisquam tenetur accusamus nihil.</p>
            </div>
        </div>
    </div>

@endsection
