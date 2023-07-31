@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style3.css') }}">
    <title>Student Loan</title>
@endsection
@section('content')
    <section class="carousel">
        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="overlay-img" class="d-block w-100"
                        style="background-image: url({{ asset('frontend/assets/img/student-slider-1.jpg') }});"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-1">
                                <div class="slider-caption">
                                    <h1 class="slider-title">Helping Student Build a Stronger Tomorrow</h1>
                                    <p class="slider-text hidden-xs">The low rate you need for the need you want! Call <br>
                                        (555) 123-4567</p>
                                    <a href="#" class="btn btn-default hidden-xs"
                                        style="background-color: #F51F8A; color:white;">View Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="overlay-img" class="d-block w-100"
                        style="background-image: url({{ asset('frontend/assets/img/student-slider-2.jpg') }});"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-1">
                                <div class="slider-caption">
                                    <h1 class="slider-title">Award Winning University Education Loans</h1>
                                    <p class="slider-text hidden-xs"> Award winning car loans with low fixed rates and no
                                        ongoing fees.
                                    </p>
                                    <a href="#" class="btn btn-default hidden-xs"
                                        style="background-color: #F51F8A; color:white;">Get Started Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="overlay-img" class="d-block w-100"
                        style="background-image: url({{ asset('frontend/assets/img/student-slider-3.jpg') }});"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-1">
                                <div class="slider-caption">
                                    <h1 class="slider-title">Education Loan from Borrow Rate Low of Interest</h1>
                                    <p class="slider-text hidden-xs">Education Loan From Avanse At An Attractive Rate Of
                                        Interest. Apply Now!</p>
                                    <a href="#" class="btn btn-default hidden-xs"
                                        style="background-color: #F51F8A; color:white;">View Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <a href="#myCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
                <span class="sr-only"></span>
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a href="#myCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
                <span class="sr-only"></span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b; ">
                    <strong>Features & Benefits of Loans</strong>
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">Here is an exhaustive
                    list of all the fees and charges to be paid for the education loan.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature">
                                <div class="feature-icon feature-circle">
                                    <i class="fa-solid fa-rocket"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>High Valueable Loans</h3>
                                    <p>Max loan up to $2500 for studies in any university</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature">
                                <div class="feature-icon feature-circle">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Easy Loan Repayment</h3>
                                    <p>Maximum tenure up to 10 years for loans up to $500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature">
                                <div class="feature-icon feature-circle">
                                    <i class="fa-solid fa-martini-glass-empty"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>100% Transparency</h3>
                                    <p>Donec accumsax tincidunt, ipsum nulla vulputro equcorper nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature">
                                <div class="feature-icon feature-circle">
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Quick and Easy Disbursals</h3>
                                    <p>Nulla vulputate elit, non rh liberoe qutpat lnd orper nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature">
                                <div class="feature-icon feature-circle">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Secure your Loans</h3>
                                    <p>Donec accumsax tincidunt, ipsum nulla vulputro equcorper nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature">
                                <div class="feature-icon feature-circle">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Attractive Rates of Interest</h3>
                                    <p>Nulla vulputate elit, non rhoncus liber oequtpa tlndorper nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b; ">
                    <strong>About Education Loan</strong>
                </h1>
                <p class="lead text-center">No matter how long the
                    educational path is, ease it with<br> Borrow Education Loan. Borrow Bank Education Loan provides you<br>
                    with
                    quick and completely transparent loans to fuel your<br> future aspirations and dreams.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column">
                                <div class="wrapper">
                                    <div class="well-box">
                                        <h3>Eligibility Criteria</h3>
                                        <ul class="list-none bullet bullet-check-circle-default">
                                            <li>Resident of Country</li>
                                            <li>Required Age between 16 and 35</li>
                                            <li>Your Post Completion of Certificate</li>
                                            <li>Write your eligibility criteria</li>
                                            <li>Write your eligibility criteria content</li>
                                            <li>Write your eligibility criteria</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column">
                                <div class="wrapper">
                                    <div class="well-box">
                                        <h3>Documents Needs</h3>
                                        <ul class="list-none bullet bullet-check-circle-default">
                                            <li>Passport</li>
                                            <li>Voter ID card</li>
                                            <li>Driving License</li>
                                            <li>Pan Card</li>
                                            <li>Bank account statement</li>
                                            <li>Latest electricity bill</li>
                                            <li>Latest mobile/telephone bill</li>
                                            <li>Existing house lease agreement</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column">
                                <div class="wrapper">
                                    <div class="well-box">
                                        <h3>Download Forms</h3>
                                        <ul class="list-none bullet list-pdf-file">
                                            <li>
                                                <a href="#"><b>Education Loan Application Form</b></a>
                                            </li>
                                            <li>
                                                <a href="#"><b>Education Loan Agreement</b></a>
                                            </li>
                                            <li>
                                                <a href="#"><b>Income Certificate Issuing Authority</b></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimony">
        <div class="row-filler">
            <div class="container">
                <div class="row" style="margin: 50px 0px 50px 0px;">
                    <h1 class="text-center"
                        style="font-size: 32px; line-height: 44px;
                letter-spacing: -1px; color: #ffffff;">
                        Some of our Awesome Testimonials
                    </h1>
                    <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400; color:#87c0ff">
                        You won’t be the only one lorem ipsu mauris diam mattises.
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="column-container col-sm-12">
                        <div class="column-inner">
                            <div class="wrapper">
                                <div class="row isotope" style="position: relative; overflow: hidden; height: 280px;">
                                    <div class="col-md-4 col-sm-4 clearfix col-xs-12 isotope-item"
                                        style="position: relative; left: 0px; top: 0px;">
                                        <div class="testimonial-block mb-30">
                                            <div class="testimonial-box">
                                                <div class="testimonial-text">
                                                    <p>“I loved the customer service you guys provided me. That was very
                                                        nice and patient with questions I had. I would really like
                                                        definitely come back here”</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-profile">
                                                <div class="testimonial-img">
                                                    <img
                                                        src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2016/12/testimonial-img-3.jpg">
                                                </div>
                                                <div class="testimonial-profile-infos">
                                                    <h4 class="testimonial-name">Donny J. Griffin</h4>
                                                    <span class="testimonial-meta">Personal Loan</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 clearfix col-xs-12 isotope-item"
                                        style="position: relative; left: 0px; top: 0px;">
                                        <div class="testimonial-block mb-30">
                                            <div class="testimonial-box">
                                                <div class="testimonial-text">
                                                    <p>“I had a good experience with Insight Loan Services. I am
                                                        thankful to insight for the help you guys gave me. My loan was
                                                        easy and fast. thank you Insigtht”</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-profile">
                                                <div class="testimonial-img">
                                                    <img
                                                        src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2016/12/testimonial-img-2-1.jpg">
                                                </div>
                                                <div class="testimonial-profile-infos">
                                                    <h4 class="testimonial-name">Lindo E. Olson</h4>
                                                    <span class="testimonial-meta">Car Loan</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 clearfix col-xs-12 isotope-item"
                                        style="position: relative; left: 0px; top: 0px;">
                                        <div class="testimonial-block mb-30">
                                            <div class="testimonial-box">
                                                <div class="testimonial-text">
                                                    <p>“We came out of their offices very happy with their service. They
                                                        treated us very kind. Definite will come back. The waiting time
                                                        was very appropriate.”</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-profile">
                                                <div class="testimonial-img">
                                                    <img
                                                        src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2016/12/testimonial-img-1-1.jpg">
                                                </div>
                                                <div class="testimonial-profile-infos">
                                                    <h4 class="testimonial-name">Mary O. Randle</h4>
                                                    <span class="testimonial-meta">Education Loan</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
