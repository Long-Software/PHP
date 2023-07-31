<section class="top-bar">
    <div class="top-bar">
        <div class="container">
            <div class="row top-bar">
                <div class="col-md-4 hidden-xs hidden-sm text-left">
                    <p class="mail-text">Welcome to our Borrow Loan Website</p>
                </div>
                <div class="col-md-8 col-sm-12 text-right col-xs-12 ">
                    <div class="top-nav">
                        <span class="top-text hidden-xs">
                            <a href="#" style="color: white; text-decoration: none;">View Location</a>
                        </span>
                        <span class="top-text">
                            <a href="#" style="color: white; text-decoration: none;">Call Us at
                                +1800-123-4567</a>
                        </span>
                        <span class="top-text">
                            <a href="#" style="color: white; text-decoration: none;">EMI Calculator</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nav-bar">
    <div class="container">
        <!--Logo-->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a href="/" class="navbar-brand mb-0 h1">
                <img src="http://demo.oceanthemes.net/borrow/wp-content/themes/borrow/images/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b>Home</b></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="/student" class="dropdown-item">Student Loan</a></li>
                            <li><a href="/business" class="dropdown-item">Business Loan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><b>Loan Product</b></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="/loan" class="dropdown-item">Loan Listing</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><b>About Us</b></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">#1</a></li>
                            <li><a href="#" class="dropdown-item">#2</a></li>
                            <li><a href="#" class="dropdown-item">#3</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><b>Blog</b></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Blog#1</a></li>
                            <li><a href="#" class="dropdown-item">Blog#2</a></li>
                            <li><a href="#" class="dropdown-item">Blog#3</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><b>Features</b></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="loan/create" class="dropdown-item">Make Loan</a></li>
                            <li><a href="/bank/borrowers" class="dropdown-item">Borrower List</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><b>Bank Account</b></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Bank Account#1</a></li>
                            <li><a href="#" class="dropdown-item">Bank Account#2</a></li>
                            <li><a href="#" class="dropdown-item">Bank Account#3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <form action="logout" method='post'>
                            @csrf
                           <input type="submit" value="Logout">
                        </form>
                    </li>
                    <a href="/createUser" id="user" role="button"><i class="fa-solid fa-user"
                            style="margin-top: 10px;"></i></a>

                </ul>
            </div>
        </nav>

    </div>
</section>
