@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style2.css') }}">
    <title>Business Loan</title>
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
                        style="background-image: url({{ asset('frontend/assets/img/business-slider-1.jpg') }});"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-1">
                                <div class="slider-caption">
                                    <h1 class="slider-title">Hassle Free Small Business Loan up to $2000</h1>
                                    <p class="slider-text hidden-xs">Education Loan from Avanse at an Attractive Rate
                                        of Interest. Apply Now!</p>
                                    <a href="#" class="btn btn-default hidden-xs"
                                        style="background-color: #F51F8A; color:white;">View Products</a>
                                    <span class="rate-badge">Rate of Interest: Up to 16% - 32%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="overlay-img" class="d-block w-100"
                        style="background-image: url({{ asset('frontend/assets/img/business-slider-3.jpg') }});"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-1">
                                <div class="slider-caption">
                                    <h1 class="slider-title">The Key to Business Growth is Borrow</h1>
                                    <p class="slider-text hidden-xs">The Low Rate You Need for the Need You Want! Call
                                        <br> (555) 123-4567
                                    </p>
                                    <a href="#" class="btn btn-default hidden-xs"
                                        style="background-color: #F51F8A; color:white;">Get Started Today</a>
                                    <span class="rate-badge">Rate of Interest: Up to 16% - 32%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="overlay-img" class="d-block w-100"
                        style="background-image: url({{ asset('frontend/assets/img/business-slider-2.jpg') }});"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-1">
                                <div class="slider-caption">
                                    <h1 class="slider-title">Looking to Set Up or Expand your Business?</h1>
                                    <p class="slider-text hidden-xs">Award Winning Car Loans with Low Fixed Rates and
                                        No-Ongoing Fees</p>
                                    <a href="#" class="btn btn-default hidden-xs"
                                        style="background-color: #F51F8A; color:white;">View Products</a>
                                    <span class="rate-badge">Rate of Interest: Up to 16% - 32%</span>
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

    <br>

    <section class="checkmark">
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-3">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column">
                                <div class="wrapper">
                                    <p>
                                        <i class="fa-solid fa-circle-check fa-success"></i>
                                        Approval within 24 hours
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-3">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column">
                                <div class="wrapper">
                                    <p>
                                        <i class="fa-solid fa-circle-check fa-success"></i>
                                        Nominal interest rates
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-3">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column">
                                <div class="wrapper">
                                    <p>
                                        <i class="fa-solid fa-circle-check fa-success"></i>
                                        No guarantors
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-3">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column">
                                <div class="wrapper">
                                    <p>
                                        <i class="fa-solid fa-circle-check fa-success"></i>
                                        Minimum documentation
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b; ">
                    <strong>Feature of business loan</strong>
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">Here is an
                    exhaustive list of all the fees and charges to be paid for the education loan.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature feature-bg">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-bolt "></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Quick Approval</h3>
                                    <p>Duis massa duilobortis vitae elitet acurusa felis sed arcu sagittis commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature feature-bg">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Easy Loan Repayment</h3>
                                    <p>Pelle ntesque habitant morbi trist ique ses uada fa mes lacust feugiat metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="feature feature-bg">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-martini-glass-empty"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>100% Transparency</h3>
                                    <p>Aenean quis neque ac enim ferm entum feugiaro masla ndit tellus non cursus
                                        varius.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <section class="products">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b; ">
                    <strong>Our Business Loan Products</strong>
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">If you know which
                    product you would like to apply for, choose one from below:</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="business-loan-products bg-boxshadow">
                                <div class="loan-products-icon">
                                    <img src="{{ asset('frontend/assets/img/get-money.png') }}" alt="">
                                </div>
                                <div class="loan-products-content">
                                    <h3><strong>Fast Business Cash</strong></h3>
                                    <p>Donec magna augue, mollis ac eros id, viverra facilisis lectus. Aliquam erat
                                        volutpat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="business-loan-products bg-boxshadow">
                                <div class="loan-products-icon">
                                    <img src="{{ asset('frontend/assets/img/time-is-money.png') }}" alt="">
                                </div>
                                <div class="loan-products-content">
                                    <h3><strong>Flexible Credit Line</strong> </h3>
                                    <p>Quisque eget bibendum ipsum. Mauris eget tincidunt sapien. In ut mollis metus, id
                                        dignissim ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="business-loan-products bg-boxshadow">
                                <div class="loan-products-icon">
                                    <img src="{{ asset('frontend/assets/img/money-bag.png') }}" alt="">
                                </div>
                                <div class="loan-products-content">
                                    <h3><strong>Unsecured Term Loan</strong></h3>
                                    <p>Quisque eget bibendum ipsum. Mauris eget tincidunt sapien. In ut mollis metus, id
                                        dignissim ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="business-loan-products bg-boxshadow">
                                <div class="loan-products-icon">
                                    <img src="{{ asset('frontend/assets/img/store.png') }}" alt="">
                                </div>
                                <div class="loan-products-content">
                                    <h3><strong>Merchant Funding Loan</strong></h3>
                                    <p>Donec magna augue, mollis ac eros id, viverra facilisis lectus. Aliquam erat
                                        volutpat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="business-loan-products bg-boxshadow">
                                <div class="loan-products-icon">
                                    <img src="{{ asset('frontend/assets/img/food-stand.png') }}" alt="">
                                </div>
                                <div class="loan-products-content">
                                    <h3><strong>Small Business Owner</strong></h3>
                                    <p>Quisque eget bibendum ipsum. Mauris eget tincidunt sapien. In ut mollis metus, id
                                        dignissim ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="business-loan-products bg-boxshadow">
                                <div class="loan-products-icon">
                                    <img src="{{ asset('frontend/assets/img/safe-box.png') }}" alt="">
                                </div>
                                <div class="loan-products-content">
                                    <h3><strong>Secured Business Loan</strong></h3>
                                    <p>Quisque eget bibendum ipsum. Mauris eget tincidunt sapien. In ut mollis metus, id
                                        dignissim ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="FAQ">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b; ">
                    <strong>About Business Loan and How does it work</strong>
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">Cras nunc leo,
                    bibendum at sapien nec, tempus aliquet turpis.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-12 col-md-6">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column" style="margin-bottom: 35px;">
                                <div class="wrapper">
                                    <p class="lead">
                                        Donec ullamcorper magna non orci scele risque consect enean ornare lectus nunc,
                                        elementum fermentum erat mattis id.
                                    </p>
                                    <p>Mauris fermentum ipsum in dolor sollicitudin, scelerisque placeed. <br>Aliquam
                                        feugiat at odio at consectetur.</p>
                                    <p>In nec lacinia nisi. Cras at orci suscipit, sodales libero vitae, rhoncus<br>
                                        lectus.
                                        Quisque congue leo pharetra sapien pellentesque varius.</p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary mb-3 mb-lg-0">Frequently Asked Questions</a>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-12 col-md-6">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="section-about-video">
                                <div class="about-img" style="position: relative;">
                                    <img width="555" height="335"
                                        src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/business-loan-about.jpg"
                                        class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                                        srcset="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/business-loan-about.jpg 555w, http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/business-loan-about-300x181.jpg 300w"
                                        sizes="(max-width: 555px) 100vw, 555px">
                                </div>
                                {{-- <div class="video-play">
                                    <a class="popup-youtube"
                                        href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">
                                        <img width="82" height="82" src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/play-icon.png" class="attachment-full size-full" alt="" decoding="async"
                                            loading="lazy">
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="time_for_action">
        <div class="container">
            <div class="row">
                <div class="column-container col-sm-6 col-lg-5">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="text-column">
                                <div class="wrapper">
                                    <h1 class="text-white">Get Started Simple & Securely</h1>
                                    <p class="text-white">
                                        Donec ullamcorper magna non orci scelerisque consectetur. Aenean ornare lectus
                                        nunc, elementum fermentum erat mattis id.
                                    </p>
                                    <p class="text-white">
                                        Aenean ornare lectus nunc, elementum fermentum erat mattis id. Donec ullamcorper
                                        magna non orci scelerisque consectetur.
                                    </p>
                                    <h3 class="text-white">
                                        Just 3 steps away
                                    </h3>
                                    <ul class="list-none">
                                        <li>1. Fill the online form. Apply Now</li>
                                        <li>2. Fill in the mandatory details, & click Submit</li>
                                        <li>3. Our representative will get in touch with you</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="column-container col-sm-6 col-lg-offset-2 col-lg-5">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="form">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                </div>
                                <form action="#" method="post">
                                    <div class="business-request-form well-box">
                                        <h3>Let us help you business grow!</h3>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <p>
                                                    <span class="form-control-wrap" data-name="your-name">
                                                        <input size="40" class="form-control" placeholder="Name" value="" type="text">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p>
                                                    <span class="form-control-wrap" data-name="your-email">
                                                        <input size="40" class="form-control" placeholder="E-mail" value="" type="text">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p>
                                                    <span class="form-control-wrap" data-name="your-phone-number">
                                                        <input size="40" class="form-control" placeholder="Phone" value="" type="text">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p>
                                                    <span class="form-control-wrap" data-name="your-city">
                                                        <select name="city" id="city" class="form-control">
                                                            <option value="1">Phnom Penh</option>
                                                            <option value="2">Siem Reap</option>
                                                            <option value="3">Battambang</option>
                                                            <option value="4">Preah Sihanouk</option>
                                                            <option value="5">Pursat</option>
                                                        </select>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p>
                                                    <span class="form-control-wrap">
                                                        <input size="40" class="form-control" placeholder="Phone" value="" type="text">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p>
                                                    <input type="submit" value="Send a Request" class="form-control btn btn-default btn-block">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="meet_our_lenders">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b; ">
                    <strong>Meet Our Lenders</strong>
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">Compare 60+
                    business funding options & check eligibility saving you time/ money</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="mb-3 mb-lg-0 column-container col-sm-4 col-md-2">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="img-wrapper lender-block bg-boxshadow">
                                <figure class="vc_figure">
                                    <div class="vc_image_wrapper">
                                        <img width="140" height="60"
                                            src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/lender-logo-1.png"
                                            alt="">
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mb-lg-0 column-container col-sm-4 col-md-2">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="img-wrapper lender-block bg-boxshadow">
                                <figure class="vc_figure">
                                    <div class="vc_image_wrapper">
                                        <img width="140" height="60"
                                            src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/lender-logo-2.png"
                                            alt="">
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mb-lg-0 column-container col-sm-4 col-md-2">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="img-wrapper lender-block bg-boxshadow">
                                <figure class="vc_figure">
                                    <div class="vc_image_wrapper">
                                        <img width="140" height="60"
                                            src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/lender-logo-3.png"
                                            alt="">
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mb-lg-0 column-container col-sm-4 col-md-2">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="img-wrapper lender-block bg-boxshadow">
                                <figure class="vc_figure">
                                    <div class="vc_image_wrapper">
                                        <img width="140" height="60"
                                            src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/lender-logo-4.png"
                                            alt="">
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mb-lg-0 column-container col-sm-4 col-md-2">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="img-wrapper lender-block bg-boxshadow">
                                <figure class="vc_figure">
                                    <div class="vc_image_wrapper">
                                        <img width="140" height="60"
                                            src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/lender-logo-5.png"
                                            alt="">
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-3 mb-lg-0 column-container col-sm-4 col-md-2">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="img-wrapper lender-block bg-boxshadow">
                                <figure class="vc_figure">
                                    <div class="vc_image_wrapper">
                                        <img width="140" height="60"
                                            src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2017/12/lender-logo-6.png"
                                            alt="">
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

</html>
