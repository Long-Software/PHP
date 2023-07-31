@extends ('layout2.app')
@section('head')
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <title>Main Homepage</title>
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
                        style="background-image: url({{ asset('frontend/assets/img/slider-1-1.jpg') }});"></div>
                    <div class="container">
                        <div class="slider-title">Personal Loan to Suit Your Needs</div>
                        <p>The low rate you need for the need you want! Call (555) 123-4567</p>
                        <a href="#" class="btn btn-lg" style="background-color: #F51F8A; color:white;">Personal
                            Loans</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-img" class="d-block w-100"
                        style="background-image: url({{ asset('frontend/assets/img/slider-2-1.jpg') }});"></div>
                    <div class="container">
                        <div class="slider-title">Lowest Car Loan Rate 9.60%</div>
                        <p>We provide an excellent service Loan Company.</p>
                        <a href="#" class="btn btn-lg" style="background-color: #F51F8A; color:white;">Check
                            Eligibility</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay-img" class="d-block w-100"
                        style="background-image: url({{ asset('frontend/assets/img/slider-3-1.jpg') }});"></div>
                    <div class="container">
                        <div class="slider-title">Student Loans with Great Rates 11.10%</div>
                        <p>We provide an excellent service for all type of loans in ahmadabad and offer service, advice,
                            and
                            direction </p>
                        <a href="#" class="btn btn-lg" style="background-color: #F51F8A; color:white;">View
                            Loans</a>
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

    <!--Custom Icons-->

    <!--Custom Icons-->
    <section class="card-body">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
          letter-spacing: -1px; color: #3c4d6b;">
                    Find Loan Products We Offers
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">We will match you
                    with a loan
                    program that meet your financial need. In short term liquidity, by <br> striving to make
                    funds available to them within <strong>24 hours of application.</strong> </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="card-slider">
                    <div class="slider owl-carousel">
                        <div class="card">
                            <div class="img-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50"
                                    enable-background="new 0 0 50 50" xml:space="preserve" class="card-img-top"
                                    width="80px" height="80px">
                                    <g>
                                        <g>
                                            <path fill="#89C1F4"
                                                d="M22.685,13.351l-3.213-4.017l-3.214,4.017H2.601v15.264h4.017v-6.829c0-2.441,1.978-4.419,4.419-4.419    c2.44,0,4.418,1.978,4.418,4.419v6.829h20.887V13.351H22.685z M32.326,22.992H21.078v-6.427h11.248V22.992z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M44.377,36.648v2.41h-5.381l-2.207-1.473l-6.771-2.402c-0.645-0.227-1.336-0.181-1.945,0.129    c-0.609,0.309-1.054,0.84-1.252,1.493c-0.344,1.133,0.166,2.357,1.211,2.911l1.738,0.924l-2.528,0.008l-1.04-2.6    c-0.342-0.853-1.155-1.402-2.074-1.402c-0.717,0-1.396,0.348-1.814,0.93s-0.532,1.337-0.303,2.018l0.243,0.721l-1.762-0.964    c-0.562-0.307-1.231-0.366-1.837-0.162c-0.606,0.202-1.105,0.653-1.369,1.235c-0.516,1.14-0.041,2.466,1.081,3.02l3.965,1.957    l8.232,1.674l10.681,0.016l3.134-0.627v2.236H50V36.648H44.377z M23.618,38.514c0.269-0.376,0.919-0.297,1.091,0.133l0.803,2.008    l-1.447,0.004l-0.532-1.578C23.467,38.887,23.498,38.68,23.618,38.514z M44.377,44.824l-3.293,0.662H30.799l-7.853-1.572    l-3.871-1.91c-0.34-0.168-0.484-0.57-0.328-0.917c0.081-0.179,0.228-0.313,0.415-0.374c0.186-0.064,0.385-0.045,0.558,0.051    l2.76,1.509h7.625l3.17-1.587l-4.49-2.389c-0.369-0.194-0.549-0.627-0.428-1.025c0.07-0.231,0.227-0.419,0.442-0.527    c0.215-0.109,0.458-0.125,0.687-0.047l6.495,2.281l2.528,1.688h5.867V44.824L44.377,44.824z M48.394,47.093h-2.41v-8.837h2.41    V47.093z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M38.752,27.813H16.258v-6.026c0-2.879-2.342-5.222-5.222-5.222s-5.222,2.343-5.222,5.222v6.026H0.19v4.82    h38.562V27.813z M7.421,21.787c0-1.993,1.622-3.615,3.615-3.615s3.615,1.622,3.615,3.615v6.026h-7.23V21.787z M37.146,31.025    H1.797v-1.607h4.017h10.444h20.889V31.025L37.146,31.025z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M11.438,14.154h5.206l2.828-3.534l2.828,3.534h5.207h1.631h9.807L36.189,1.3H2.754L0,14.154h9.806H11.438z     M23.071,12.548l-3.599-4.5l-3.599,4.5h-2.803l6.402-8.323l6.401,8.323H23.071z M36.955,12.548H27.9l-7.416-9.641h14.404    L36.955,12.548z M1.987,12.548l2.066-9.641h14.405l-7.416,9.641H1.987z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M20.275,23.795h12.854v-8.034H20.275V23.795z M21.882,20.582h4.017v1.606h-4.017V20.582z M27.506,22.188    v-1.606h4.016v1.606H27.506z M31.522,18.975h-4.017v-1.607h4.017V18.975z M25.898,17.368v1.607h-4.017v-1.607H25.898z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">Home Loan</div>
                                <div class="sub-title">
                                    <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque</p>
                                </div>
                                <div class="btn">
                                    <a href=""><button>Read More</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="img-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50"
                                    enable-background="new 0 0 50 50" xml:space="preserve" class="card-img-top"
                                    width="80px" height="80px">
                                    <g>
                                        <g>
                                            <path fill="#15549A"
                                                d="M47.596,25.807h-1.629c-0.036-3.101-1.529-5.979-4.031-7.8v-4.7c0-1.557-1.267-2.823-2.822-2.823    c-3.34,0-6.166,2.425-6.74,5.645h-2.534v1.613h4.001l0.05-0.753c0.181-2.743,2.476-4.892,5.224-4.892    c0.666,0,1.209,0.543,1.209,1.21v5.555l0.361,0.239c2.299,1.523,3.672,4.073,3.672,6.824v1.496h3.24    c0.437,0,0.791,0.354,0.791,0.791v8.094c0,0.438-0.354,0.792-0.791,0.792h-3.406l-0.171,0.579    c-0.787,2.68-2.856,4.749-5.536,5.536l-0.579,0.171v3.79c0,0.226-0.183,0.407-0.408,0.407H29.44c-0.226,0-0.408-0.182-0.408-0.407    v-3.624h-8.064v3.624c0,0.225-0.183,0.407-0.408,0.407h-8.055c-0.225,0-0.408-0.183-0.408-0.407v-4.326l-0.433-0.227    c-2.718-1.417-4.406-4.196-4.406-7.253v-9.443c0-4.005,2.861-7.397,6.803-8.065l-0.271-1.591    c-4.719,0.801-8.145,4.862-8.145,9.657v2.303H4.69c0.09-0.254,0.148-0.523,0.148-0.807c0-1.334-1.085-2.42-2.419-2.42    c-0.284,0-0.553,0.058-0.807,0.148v-2.568H0v4.839c0,1.334,1.085,2.419,2.419,2.419h3.226v5.528c0,3.493,1.842,6.685,4.839,8.442    v3.362c0,1.115,0.907,2.021,2.021,2.021h8.055c1.115,0,2.021-0.906,2.021-2.021v-2.011h4.839v2.011    c0,1.114,0.906,2.021,2.021,2.021h8.055c1.114,0,2.021-0.906,2.021-2.021v-2.604c2.736-0.989,4.871-3.125,5.861-5.86h2.219    c1.325,0,2.404-1.078,2.404-2.404v-8.094C50,26.886,48.921,25.807,47.596,25.807z M1.613,27.42c0-0.445,0.362-0.807,0.807-0.807    s0.806,0.361,0.806,0.807c0,0.443-0.362,0.806-0.806,0.806S1.613,27.863,1.613,27.42z">
                                            </path>
                                            <path fill="#89C1F4"
                                                d="M21.774,21.774c-5.781,0-10.484-4.703-10.484-10.484S15.994,0.807,21.774,0.807    c5.78,0,10.483,4.703,10.483,10.484S27.555,21.774,21.774,21.774z">
                                            </path>
                                            <rect x="15.322" y="20.968" fill="#15549A" width="12.903"
                                                height="1.613"></rect>
                                            <path fill="#15549A"
                                                d="M26.613,9.677V8.468c0-2.001-1.629-3.629-3.629-3.629h-0.403V3.226h-1.613v1.613h-0.403    c-2.001,0-3.629,1.628-3.629,3.629c0,2,1.628,3.629,3.629,3.629h2.419c1.111,0,2.016,0.905,2.016,2.016s-0.905,2.016-2.016,2.016    h-2.419c-1.111,0-2.017-0.905-2.017-2.016v-1.209h-1.613v1.209c0,2.001,1.628,3.629,3.629,3.629h0.403v1.613h1.613v-1.613h0.403    c2,0,3.629-1.628,3.629-3.629s-1.629-3.629-3.629-3.629h-2.419c-1.111,0-2.016-0.905-2.016-2.016s0.905-2.016,2.016-2.016h2.419    C24.095,6.452,25,7.356,25,8.468v1.209H26.613z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M33.744,24.629c0.008-0.013,0.815-1.242,2.547-1.242c1.697,0,2.516,1.196,2.546,1.242    C38.991,24.869,39.252,25,39.518,25c0.148,0,0.299-0.041,0.434-0.127c0.375-0.24,0.484-0.739,0.244-1.115    c-0.053-0.081-1.304-1.984-3.904-1.984c-2.602,0-3.854,1.903-3.905,1.984c-0.241,0.375-0.132,0.874,0.243,1.115    C33.004,25.112,33.502,25.004,33.744,24.629z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">Education Loan </div>
                                <div class="sub-title">
                                    <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque</p>
                                </div>
                                <div class="btn">
                                    <a href=""><button>Read More</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="img-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50"
                                    enable-background="new 0 0 50 50" xml:space="preserve" class="card-img-top"
                                    width="80px" height="80px">
                                    <g>
                                        <g>
                                            <path fill="#89C1F4"
                                                d="M22.581,8.063l-8.871-2.416l-2.18,1.813c-0.685-1.026-1.046-2.221-1.046-3.454V2.018    c0-1.112,0.904-2.016,2.016-2.016s2.016,0.904,2.016,2.016v0.807c0,0.222,0.181,0.403,0.403,0.403    c0.222,0,0.403-0.182,0.403-0.403V2.018c0-1.112,0.904-2.016,2.016-2.016c1.112,0,2.016,0.904,2.016,2.016v0.807    c0,0.222,0.181,0.403,0.403,0.403c0.222,0,0.403-0.182,0.403-0.403V2.018c0-1.112,0.904-2.016,2.016-2.016    c1.112,0,2.016,0.904,2.016,2.016v1.988c0,1.233-0.361,2.428-1.046,3.454L22.581,8.063z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M9.868,20.16l-1.613-0.807h-2.61V7.256H0v15.323h5.645v-1.613h2.229l1.613,0.807h0.997v-1.613L9.868,20.16    L9.868,20.16z M4.032,20.966H1.613V8.869h2.419V20.966L4.032,20.966z">
                                            </path>
                                            <path fill="#89C1F4"
                                                d="M17.748,37.904c-0.146,0-0.291-0.002-0.438-0.008c-5.443-0.22-9.952-4.834-10.05-10.284    c-0.051-2.812,1.001-5.47,2.962-7.486c1.729-1.778,2.682-3.997,2.682-6.245l4.032-2.589l1.613,1.613v8.062h5.645l0.944-0.971    c1.992,1.98,3.088,4.617,3.088,7.426c0,2.881-1.145,5.566-3.223,7.563C23.032,36.877,20.469,37.904,17.748,37.904z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M21.774,25.805v-0.4c0-1.557-1.267-2.826-2.823-2.826h-0.403v-1.613h-1.613v1.613h-0.403    c-1.557,0-2.823,1.266-2.823,2.822c0,1.557,1.266,2.823,2.823,2.823h2.419c0.667,0,1.21,0.542,1.21,1.209s-0.543,1.21-1.21,1.21    h-2.419c-0.667,0-1.21-0.54-1.21-1.206V29.03h-1.613v0.407c0,1.557,1.266,2.818,2.823,2.818h0.403v1.613h1.613v-1.613h0.403    c1.556,0,2.823-1.266,2.823-2.822s-1.267-2.822-2.823-2.822h-2.419c-0.667,0-1.21-0.543-1.21-1.21s0.543-1.209,1.21-1.209h2.419    c0.667,0,1.209,0.546,1.209,1.213v0.4H21.774L21.774,25.805z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M25.177,11.292c0.387-0.429,0.629-0.993,0.629-1.614c0-1.334-1.085-2.421-2.419-2.421h-3.002l-0.561-0.702    l-6.302-1.802L8.579,8.869h-3.74v1.613h4.324l4.735-3.944l4.988,1.425l1.697,2.121c0.224,0.28,0.323,0.632,0.278,0.988    c-0.045,0.356-0.229,0.673-0.517,0.888c-0.52,0.39-1.26,0.337-1.721-0.123l-1.627-1.627L12.4,13.887l1.007,1.26l3.469-2.775    l0.606,0.607c0.089,0.089,0.188,0.161,0.286,0.236c0.059,0.588,0.273,0.935,0.603,1.3c-0.387,0.429-0.629,0.992-0.629,1.614    c0,0.622,0.243,1.185,0.629,1.613c-0.387,0.429-0.629,0.989-0.629,1.611c0,1.335,1.085,2.419,2.419,2.419h3.226    c1.334,0,2.419-1.084,2.419-2.418c0-0.622-0.242-1.183-0.629-1.612c0.387-0.429,0.629-0.99,0.629-1.613    c0-0.623-0.242-1.184-0.629-1.613c0.387-0.429,0.629-0.991,0.629-1.613S25.563,11.721,25.177,11.292z M23.387,20.16h-3.226    c-0.444,0-0.806-0.362-0.806-0.807s0.362-0.806,0.806-0.806h3.226c0.444,0,0.806,0.362,0.806,0.806    C24.193,19.798,23.832,20.16,23.387,20.16z M23.387,16.934h-3.226c-0.444,0-0.806-0.362-0.806-0.806s0.362-0.807,0.806-0.807    h3.226c0.444,0,0.806,0.362,0.806,0.807S23.832,16.934,23.387,16.934z M23.387,13.708h-2.988c0.322-0.096,0.632-0.246,0.913-0.457    c0.406-0.305,0.707-0.706,0.906-1.156h1.169c0.444,0,0.806,0.362,0.806,0.806C24.193,13.346,23.832,13.708,23.387,13.708z     M23.387,10.482h-0.946c-0.074-0.508-0.269-0.992-0.599-1.406L21.676,8.87h1.711c0.444,0,0.806,0.362,0.806,0.806    S23.832,10.482,23.387,10.482z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M44.355,37.901v2.419h-5.401l-2.216-1.477l-6.797-2.41c-0.646-0.229-1.342-0.182-1.953,0.129    s-1.058,0.842-1.257,1.499c-0.345,1.136,0.167,2.366,1.216,2.923l1.746,0.927l-2.539,0.009l-1.044-2.61    c-0.343-0.854-1.161-1.408-2.083-1.408c-0.72,0-1.401,0.351-1.821,0.935c-0.42,0.585-0.534,1.342-0.304,2.023l0.244,0.725    l-1.769-0.967c-0.563-0.309-1.236-0.369-1.844-0.163c-0.609,0.203-1.11,0.655-1.375,1.24c-0.518,1.144-0.041,2.476,1.085,3.03    l3.98,1.965l8.263,1.681l10.722,0.015l3.146-0.629v2.242H50V37.901H44.355L44.355,37.901z M23.516,39.776    c0.271-0.378,0.924-0.298,1.096,0.134l0.807,2.015l-1.453,0.005l-0.534-1.586C23.366,40.15,23.396,39.943,23.516,39.776z     M41.049,46.772H30.725l-7.882-1.577l-3.886-1.916c-0.341-0.169-0.486-0.572-0.329-0.92c0.081-0.181,0.229-0.314,0.417-0.377    c0.187-0.064,0.387-0.045,0.56,0.051l2.77,1.514h7.654l3.182-1.592l-4.507-2.396c-0.369-0.196-0.55-0.63-0.429-1.03    c0.07-0.232,0.227-0.42,0.443-0.529c0.215-0.11,0.461-0.125,0.688-0.046l6.521,2.288l2.537,1.691h5.891v4.178L41.049,46.772z     M48.387,48.385h-2.419v-8.87h2.419V48.385z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">Business Loan</div>
                                <div class="sub-title">
                                    <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque</p>
                                </div>
                                <div class="btn">
                                    <a href=""><button>Read More</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="img-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50"
                                    enable-background="new 0 0 50 50" xml:space="preserve" class="card-img-top"
                                    width="80px" height="80px">
                                    <g>
                                        <g>
                                            <path fill="#89C1F4"
                                                d="M27.459,26.241c-4.068,0-7.377-3.309-7.377-7.377c0-4.068,3.309-7.377,7.377-7.377    s7.377,3.309,7.377,7.377C34.836,22.932,31.527,26.241,27.459,26.241z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M12.705,41.803c-1.355,0-2.459,1.104-2.459,2.46c0,1.355,1.104,2.459,2.459,2.459    c1.356,0,2.459-1.104,2.459-2.459C15.164,42.906,14.061,41.803,12.705,41.803z M12.705,45.082c-0.452,0-0.819-0.367-0.819-0.819    s0.367-0.819,0.819-0.819c0.453,0,0.82,0.367,0.82,0.819S13.157,45.082,12.705,45.082z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M37.295,41.803c-1.355,0-2.459,1.104-2.459,2.46c0,1.355,1.104,2.459,2.459,2.459s2.459-1.104,2.459-2.459    C39.754,42.906,38.65,41.803,37.295,41.803z M37.295,45.082c-0.453,0-0.82-0.367-0.82-0.819s0.367-0.819,0.82-0.819    c0.452,0,0.819,0.367,0.819,0.819C38.115,44.715,37.748,45.082,37.295,45.082z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M43.729,33.656c-0.325-0.98-1.249-1.689-2.336-1.689h-2.601c-1.572,0-3.113,0.595-4.283,1.64h-4.592    v-1.185c0-1.607-1.307-2.914-2.914-2.914c-1.017,0-1.974,0.543-2.498,1.415l-1.61,2.684h-2.034c-0.259,0-0.49-0.124-0.632-0.343    s-0.163-0.479-0.057-0.717l1.648-3.707c0.539-1.213-0.005-2.647-1.211-3.198c-1.007-0.461-2.199-0.181-2.898,0.68l-4.668,5.756    l-7.151,2.2c-2.299,0.708-3.845,2.799-3.845,5.205v2.908c0,1.484,1.208,2.691,2.691,2.691h2.292C7.433,47.857,9.82,50,12.705,50    c2.885,0,5.272-2.143,5.672-4.918h13.246C32.023,47.857,34.41,50,37.295,50s5.272-2.143,5.672-4.918h0.066    c2.712,0,4.918-2.206,4.918-4.918v-1.64C47.951,36.049,46.112,33.995,43.729,33.656z M25.912,31.767    c0.23-0.382,0.648-0.619,1.093-0.619c0.702,0,1.274,0.571,1.274,1.274v1.185h-3.471L25.912,31.767z M12.705,48.361    c-2.26,0-4.098-1.839-4.098-4.099s1.838-4.099,4.098-4.099s4.099,1.839,4.099,4.099S14.964,48.361,12.705,48.361z M37.295,48.361    c-2.26,0-4.098-1.839-4.098-4.099s1.838-4.099,4.098-4.099s4.098,1.839,4.098,4.099C41.394,46.522,39.555,48.361,37.295,48.361z     M46.312,40.164c0,1.809-1.471,3.279-3.278,3.279h-0.066c-0.399-2.776-2.787-4.919-5.672-4.919s-5.271,2.143-5.672,4.919H18.377    c-0.4-2.776-2.788-4.919-5.672-4.919c-2.884,0-5.272,2.143-5.672,4.919H4.74c-0.581,0-1.052-0.473-1.052-1.053v-1.406h2.049    c1.13,0,2.049-0.92,2.049-2.05s-0.919-2.049-2.049-2.049h-0.41v1.64h0.41c0.226,0,0.41,0.184,0.41,0.409s-0.185,0.41-0.41,0.41    H3.7c0.059-1.622,1.114-3.02,2.676-3.5l7.629-2.348l4.982-6.143c0.229-0.282,0.617-0.37,0.943-0.222    c0.393,0.18,0.57,0.646,0.395,1.041l-1.648,3.709c-0.33,0.742-0.262,1.593,0.181,2.275c0.443,0.682,1.193,1.088,2.006,1.088    h14.313l0.24-0.24c0.889-0.889,2.12-1.398,3.377-1.398h2.601c0.452,0,0.819,0.367,0.819,0.819v0.819h0.82    c1.808,0,3.278,1.471,3.278,3.279V40.164z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M28.278,21.312h-1.64c-0.452,0-0.819,0-0.819-0.82H24.18c0,1.64,1.103,2.471,2.458,2.471v0.808h1.64    v-0.808c1.356,0,2.459-1.109,2.459-2.465s-1.103-2.465-2.459-2.465h-1.64c-0.452,0-0.819-0.367-0.819-0.82    c0-0.452,0.367-0.819,0.819-0.819h1.64c0.452,0,0.819,0,0.819,0.819h1.64c0-1.639-1.103-2.447-2.459-2.447v-0.831h-1.64v0.831    c-1.355,0-2.458,1.098-2.458,2.453c0,1.356,1.103,2.454,2.458,2.454h1.64c0.452,0,0.819,0.367,0.819,0.819    C29.098,20.944,28.731,21.312,28.278,21.312z">
                                            </path>
                                            <rect x="26.639" y="4.098" fill="#15549A" width="1.641"
                                                height="5.738"></rect>
                                            <rect x="26.639" y="0.831" fill="#15549A" width="1.641"
                                                height="1.64"></rect>
                                            <rect x="31.557" y="3.279" fill="#15549A" width="1.641"
                                                height="8.197"></rect>
                                            <rect x="31.557" fill="#15549A" width="1.641" height="1.64">
                                            </rect>
                                            <rect x="21.721" y="5.738" fill="#15549A" width="1.64"
                                                height="5.738"></rect>
                                            <rect x="21.721" y="2.471" fill="#15549A" width="1.64"
                                                height="1.639"></rect>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">Car Loan</div>
                                <div class="sub-title">
                                    <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque</p>
                                </div>
                                <div class="btn">
                                    <a href=""><button>Read More</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="img-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 50 50"
                                    enable-background="new 0 0 50 50" xml:space="preserve" class="card-img-top"
                                    width="80px" height="80px">
                                    <g>
                                        <g>
                                            <path fill="#89C1F4"
                                                d="M22.581,8.063l-8.871-2.416l-2.18,1.813c-0.685-1.026-1.046-2.221-1.046-3.454V2.018    c0-1.112,0.904-2.016,2.016-2.016s2.016,0.904,2.016,2.016v0.807c0,0.222,0.181,0.403,0.403,0.403    c0.222,0,0.403-0.182,0.403-0.403V2.018c0-1.112,0.904-2.016,2.016-2.016c1.112,0,2.016,0.904,2.016,2.016v0.807    c0,0.222,0.181,0.403,0.403,0.403c0.222,0,0.403-0.182,0.403-0.403V2.018c0-1.112,0.904-2.016,2.016-2.016    c1.112,0,2.016,0.904,2.016,2.016v1.988c0,1.233-0.361,2.428-1.046,3.454L22.581,8.063z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M9.868,20.16l-1.613-0.807h-2.61V7.256H0v15.323h5.645v-1.613h2.229l1.613,0.807h0.997v-1.613L9.868,20.16    L9.868,20.16z M4.032,20.966H1.613V8.869h2.419V20.966L4.032,20.966z">
                                            </path>
                                            <path fill="#89C1F4"
                                                d="M17.748,37.904c-0.146,0-0.291-0.002-0.438-0.008c-5.443-0.22-9.952-4.834-10.05-10.284    c-0.051-2.812,1.001-5.47,2.962-7.486c1.729-1.778,2.682-3.997,2.682-6.245l4.032-2.589l1.613,1.613v8.062h5.645l0.944-0.971    c1.992,1.98,3.088,4.617,3.088,7.426c0,2.881-1.145,5.566-3.223,7.563C23.032,36.877,20.469,37.904,17.748,37.904z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M21.774,25.805v-0.4c0-1.557-1.267-2.826-2.823-2.826h-0.403v-1.613h-1.613v1.613h-0.403    c-1.557,0-2.823,1.266-2.823,2.822c0,1.557,1.266,2.823,2.823,2.823h2.419c0.667,0,1.21,0.542,1.21,1.209s-0.543,1.21-1.21,1.21    h-2.419c-0.667,0-1.21-0.54-1.21-1.206V29.03h-1.613v0.407c0,1.557,1.266,2.818,2.823,2.818h0.403v1.613h1.613v-1.613h0.403    c1.556,0,2.823-1.266,2.823-2.822s-1.267-2.822-2.823-2.822h-2.419c-0.667,0-1.21-0.543-1.21-1.21s0.543-1.209,1.21-1.209h2.419    c0.667,0,1.209,0.546,1.209,1.213v0.4H21.774L21.774,25.805z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M25.177,11.292c0.387-0.429,0.629-0.993,0.629-1.614c0-1.334-1.085-2.421-2.419-2.421h-3.002l-0.561-0.702    l-6.302-1.802L8.579,8.869h-3.74v1.613h4.324l4.735-3.944l4.988,1.425l1.697,2.121c0.224,0.28,0.323,0.632,0.278,0.988    c-0.045,0.356-0.229,0.673-0.517,0.888c-0.52,0.39-1.26,0.337-1.721-0.123l-1.627-1.627L12.4,13.887l1.007,1.26l3.469-2.775    l0.606,0.607c0.089,0.089,0.188,0.161,0.286,0.236c0.059,0.588,0.273,0.935,0.603,1.3c-0.387,0.429-0.629,0.992-0.629,1.614    c0,0.622,0.243,1.185,0.629,1.613c-0.387,0.429-0.629,0.989-0.629,1.611c0,1.335,1.085,2.419,2.419,2.419h3.226    c1.334,0,2.419-1.084,2.419-2.418c0-0.622-0.242-1.183-0.629-1.612c0.387-0.429,0.629-0.99,0.629-1.613    c0-0.623-0.242-1.184-0.629-1.613c0.387-0.429,0.629-0.991,0.629-1.613S25.563,11.721,25.177,11.292z M23.387,20.16h-3.226    c-0.444,0-0.806-0.362-0.806-0.807s0.362-0.806,0.806-0.806h3.226c0.444,0,0.806,0.362,0.806,0.806    C24.193,19.798,23.832,20.16,23.387,20.16z M23.387,16.934h-3.226c-0.444,0-0.806-0.362-0.806-0.806s0.362-0.807,0.806-0.807    h3.226c0.444,0,0.806,0.362,0.806,0.807S23.832,16.934,23.387,16.934z M23.387,13.708h-2.988c0.322-0.096,0.632-0.246,0.913-0.457    c0.406-0.305,0.707-0.706,0.906-1.156h1.169c0.444,0,0.806,0.362,0.806,0.806C24.193,13.346,23.832,13.708,23.387,13.708z     M23.387,10.482h-0.946c-0.074-0.508-0.269-0.992-0.599-1.406L21.676,8.87h1.711c0.444,0,0.806,0.362,0.806,0.806    S23.832,10.482,23.387,10.482z">
                                            </path>
                                            <path fill="#15549A"
                                                d="M44.355,37.901v2.419h-5.401l-2.216-1.477l-6.797-2.41c-0.646-0.229-1.342-0.182-1.953,0.129    s-1.058,0.842-1.257,1.499c-0.345,1.136,0.167,2.366,1.216,2.923l1.746,0.927l-2.539,0.009l-1.044-2.61    c-0.343-0.854-1.161-1.408-2.083-1.408c-0.72,0-1.401,0.351-1.821,0.935c-0.42,0.585-0.534,1.342-0.304,2.023l0.244,0.725    l-1.769-0.967c-0.563-0.309-1.236-0.369-1.844-0.163c-0.609,0.203-1.11,0.655-1.375,1.24c-0.518,1.144-0.041,2.476,1.085,3.03    l3.98,1.965l8.263,1.681l10.722,0.015l3.146-0.629v2.242H50V37.901H44.355L44.355,37.901z M23.516,39.776    c0.271-0.378,0.924-0.298,1.096,0.134l0.807,2.015l-1.453,0.005l-0.534-1.586C23.366,40.15,23.396,39.943,23.516,39.776z     M41.049,46.772H30.725l-7.882-1.577l-3.886-1.916c-0.341-0.169-0.486-0.572-0.329-0.92c0.081-0.181,0.229-0.314,0.417-0.377    c0.187-0.064,0.387-0.045,0.56,0.051l2.77,1.514h7.654l3.182-1.592l-4.507-2.396c-0.369-0.196-0.55-0.63-0.429-1.03    c0.07-0.232,0.227-0.42,0.443-0.529c0.215-0.11,0.461-0.125,0.688-0.046l6.521,2.288l2.537,1.691h5.891v4.178L41.049,46.772z     M48.387,48.385h-2.419v-8.87h2.419V48.385z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">Personal Loan</div>
                                <div class="sub-title">
                                    <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque</p>
                                </div>
                                <div class="btn">
                                    <a href=""><button>Read More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fast_easy_process">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b;">
                    Fast & Easy Application Process
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">Suspendisse aliquet
                    varius
                    nunc atcibus lacus sit amet coed portaeri sque mami luctus viveed <br>congue lobortis faucibus.</p>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="content">
                                <div class="circle">
                                    <span class="number">1</span>
                                </div>
                                <h3 class="number-title">Choose Loan Amount</h3>
                                <p>Suspendisse accumsan imperdue ligula dignissim sit amet vestibulum in mollis etfelis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="content">
                                <div class="circle">
                                    <span class="number">2</span>
                                </div>
                                <h3 class="number-title">Approved Your Loan</h3>
                                <p>Suspendisse accumsan imperdue ligula dignissim sit amet vestibulum in mollis etfelis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="content">
                                <div class="circle">
                                    <span class="number">3</span>
                                </div>
                                <h3 class="number-title">Get Your Cash</h3>
                                <p>Suspendisse accumsan imperdue ligula dignissim sit amet vestibulum in mollis etfelis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper">
                            <a href="#" class="btn btn-default"> View Our Loan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why_people_choose_us">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b;">
                    Why People Choose Us
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">Suspendisse aliquet
                    varius
                    nunc atcibus lacus sit amet coed portaeri sque mami luctus viveed <br>congue lobortis faucibus.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="bg-boxshadow column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="vc-row">
                                <div class="column-container col-sm-4">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="content2">
                                                <div class="mb20">
                                                    <i class="fa-solid fa-users fa-2xl"></i>
                                                </div>
                                                <br>
                                                <h3>Dedicated Specialists</h3>
                                                <p>Duis eget diam quis elit erdiet alidvolutp terdum tfanissim non
                                                    intwesollis eu mauris</p>
                                                <a href="#" class="btn btn-outline mt20">Meet the team</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column-container col-sm-4">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="content2">
                                                <div class="mb20">
                                                    <i class="fa-sharp fa-solid fa-trophy fa-2xl"></i>
                                                </div>
                                                <br>
                                                <h3>Success Stories Rating</h3>
                                                <p>Duis eget diam quis elit erdiet alidvolutp terdum tfanissim non
                                                    intwesollis eu mauris</p>
                                                <a href="#" class="btn btn-outline mt20">View Client Review</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column-container col-sm-4">
                                    <div class="column-inner">
                                        <div class="wrapper">
                                            <div class="content2">
                                                <div class="mb20">
                                                    <i class="fa-solid fa-calculator fa-2xl"></i>
                                                </div>
                                                <br>
                                                <h3>No front Appraisal Fees!</h3>
                                                <p>Duis eget diam quis elit erdiet alidvolutp terdum tfanissim non
                                                    intwesollis eu mauris</p>
                                                <a href="#" class="btn btn-outline mt20">Why Choose Us</a>
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

    <br>

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

    <br>

    <section class="lastest-news">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
          letter-spacing: -1px; color: #3c4d6b;">
                    Latest News from Loan Company
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">Our mission is to
                    deliver reliable, latest news and opinions.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-slider owl-carousel">
                        <!-- 1 -->
                        <div class="news-grid">
                            <div class="news-grid-image"><img
                                    src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2016/12/blog-img-2-2.jpg"
                                    alt="">
                                <div class="news-grid-box">
                                    <h1>19</h1>
                                    <p>Sep</p>
                                </div>
                            </div>
                            <div class="news-grid-txt">
                                <span>Education Loan</span>
                                <h2>How to get a loan scholarship?</h2>
                                <ul>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                                </ul>
                                <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur
                                    reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p>
                                <a href="#">Read More...</a>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="news-grid">
                            <div class="news-grid-image"><img
                                    src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2016/12/blog-img-1-2.jpg"
                                    alt="">
                                <div class="news-grid-box">
                                    <h1>20</h1>
                                    <p>Sep</p>
                                </div>
                            </div>
                            <div class="news-grid-txt">
                                <span>Home Loan</span>
                                <h2>Couples Buying New Home Loan</h2>
                                <ul>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 20, 2020</li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                                </ul>
                                <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur
                                    reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p>
                                <a href="#">Read More...</a>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="news-grid">
                            <div class="news-grid-image"><img
                                    src="http://demo.oceanthemes.net/borrow/wp-content/uploads/2016/12/blog-img-7.jpg"
                                    alt="">
                                <div class="news-grid-box">
                                    <h1>21</h1>
                                    <p>Sep</p>
                                </div>
                            </div>
                            <div class="news-grid-txt">
                                <span>Car Loan</span>
                                <h2>Business Man Looking for Loans</h2>
                                <ul>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 21, 2020</li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                                </ul>
                                <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur
                                    reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p>
                                <a href="#">Read More...</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="We are Here to Help">
        <div class="container">
            <div class="row" style="margin: 50px 0px 50px 0px;">
                <h1 class="text-center"
                    style="font-size: 32px; line-height: 44px;
            letter-spacing: -1px; color: #3c4d6b;">
                    We are Here to Help You
                </h1>
                <p class="text-center" style="margin: 0 0 26; line-height: 1.6; font-weight: 400;">
                    Our mission is to deliver reliable, latest news and opinions.</p>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="content3 text-center">
                                <div class="mb40"><i class="fa-regular fa-calendar-days fa-2xl"></i></div>
                                <h2 class="capital-title">Apply for Loan</h2>
                                <p>Looking to buy a car or home loan? <br>then apply for loan now.</p>
                                <a href="#" class="btn-link" title="Get Appointment" target="_self">Get
                                    Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="content3 text-center">
                                <div class="mb40"><i class="fa-solid fa-user-group fa-2xl"></i></div>
                                <h2 class="capital-title">Call Us At</h2>
                                <h1 class="text-big">800-123-456 / 789</h1>
                                <p>lnfo@loanadvisor.com</p>
                                <a href="#" class="btn-link" title="Get Appointment" target="_self">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column-container col-sm-4">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="content3 text-center">
                                <div class="mb40"><i class="fa-solid fa-phone-volume fa-2xl"></i></div>
                                <h2 class="capital-title">Talk to Advisor</h2>
                                <p>Need to loan advise? Talk to our Loan advisors.</p>
                                <a href="#" class="btn-link" title="Get Appointment" target="_self">Meet the
                                    Advisor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

</body>

</html>
