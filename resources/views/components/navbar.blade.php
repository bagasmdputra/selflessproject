<!-- Header ("header--dark", "header-transparent", "header--sticky")-->
<header id="header" class="header header--dark header-transparent header--sticky">
    <!-- Nav Bar -->
    <nav id="navigation" class="header-nav">
        <div class="container">
            <div class="row d-flex flex-md-row align-items-center">
                <div class="logo mr-auto">
                    <!--logo-->
                    <a href="/">
                        <img class="logo-dark" src="img/logo-black.png" alt="Mazel" />
                        <img class="logo-light" src="img/logo-white.png" alt="Mazel" />
                    </a>
                    <!--End logo-->
                </div>

                <div class="nav-menu ml-auto">
                    <ul class="">
                        <li class="nav-menu-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">Services</a>
                            <div class="nav-dropdown">
                                <ul>

                                    <li class="nav-menu-item">
                                        <a href="#">Event services</a>
                                        <ul class="nav-dropdown-sub">
                                            <li><a href="about-1.html">About 1</a></li>
                                            <li><a href="about-2.html">About 2</a></li>
                                            <li><a href="about-3.html">About 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-menu-item">
                                        <a href="#">Massage programs</a>
                                        <ul class="nav-dropdown-sub">
                                            <li><a href="service-1.html">Service 1</a></li>
                                            <li><a href="service-2.html">Service 2</a></li>
                                            <li><a href="service-3.html">Service 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pricing.html">Book instantly</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">Pricing</a>
                            <div class="nav-dropdown">
                                <ul>

                                    <li class="nav-menu-item">
                                        <a href="#">Services calculator</a>

                                    </li>
                                    <li class="nav-menu-item">
                                        <a href="#">Massage programs Pricing</a>

                                    </li>
                                    <li><a href="pricing.html">Employer ROI</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-menu-item">
                        <a href="{{ route('blog') }} }}">Blog</a>

                        </li>
                        <li class="nav-menu-item">
                            <a href="#">About</a>

                        </li>
                        <li class="nav-menu-item">
                            <a href="#">Contact</a>

                        </li>
                    </ul>
                </div>
                <div class="nav-icons">
                    <div class="nav-icon-item d-lg-none">
                        <span class="nav-icon-trigger menu-mobile-btn align-middle"><i class="ion"></i></span>
                    </div>


                    <div class="nav-icon-item">
                        <span class="nav-icon-trigger sidebar-menu_btn align-middle"><i class="ion ion-navicon"></i></span>
                    </div>

                </div>
            </div>
        </div>
    </nav>
    <!-- End Nav Bar -->
</header>
<!-- End Header -->