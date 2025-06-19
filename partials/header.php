<!DOCTYPE html>

<html lang="en">

<!-- Head -->



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propedix </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Themenix.com">
    <link href="assets/img/hero/favicon.png" rel="shortcut icon" type="image/png">
    <link href="assets/css/theme-1.min.css" rel="stylesheet">
    <link href="assets/css/theme-2.min.css" rel="stylesheet">
    <link href="assets/css/theme-3.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>
<!-- /Head -->

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- Header -->
    <header id="header" data-aos="fade">

        <!-- Header Topbar -->
        <!-- <div class="header-topbar">
            <div class="container">

            </div>
        </div> -->
        <!-- /Header Topbar -->

        <!-- Header Navbar -->
        <div class="header-navbar">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid">
                    <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="hicon hicon-bold hicon-hamburger-menu"></i>
                    </button>
                    <a class="navbar-brand" href="./">
                        <img src="assets/img/hero/logo.png" srcset="" alt="">
                    </a>
                    <div class="offcanvas offcanvas-navbar offcanvas-start border-end-0" tabindex="-1"
                        id="offcanvasNavbar">
                        <div class="offcanvas-header border-bottom p-4 p-xl-0">
                            <a href="./" class="d-inline-block">
                                <img src="assets/img/hero/logo.png"
                                    srcset="" alt="">
                            </a>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body p-4 p-xl-0">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle-hover active" href="./" data-bs-display="static">
                                        <span>Home</span>

                                    </a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle-hover" href="about" data-bs-display="static">
                                        <span>About us</span>

                                    </a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle-hover" href="Our-Science" data-bs-display="static">
                                        <span>our science</span>

                                    </a>

                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle-hover" href="" data-bs-display="static">
                                        <span>DRYELLO</span>

                                    </a>

                                </li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle-hover" href="our-pipelines" data-bs-display="static">
                                        <span> OUR Pipeline</span>

                                    </a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle-hover" href="clinical-study" data-bs-display="static">
                                        <span> Clinical Study</span>

                                    </a>

                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="dropdown user-menu ms-xl-auto">
                        <a href="" class=" ">

                            <img src="assets/img/hero/search.png" alt="">
                        </a>
                        <a href="contact-us" class="btn btn-primary1 btn-uppercase ">

                            <span>Contact us <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                    viewBox="0 0 18 19" fill="none">
                                    <path
                                        d="M9.30603 15.8C9.21003 15.8 9.10203 15.77 8.98203 15.71C8.85003 15.614 8.76303 15.488 8.72103 15.332C8.67903 15.176 8.70003 15.026 8.78403 14.882L8.80203 14.864C9.18603 14.252 9.66003 13.634 10.224 13.01C11.34 11.798 12.564 10.826 13.896 10.094H0.90003C0.74403 10.094 0.60603 10.034 0.48603 9.91399C0.36603 9.79399 0.30603 9.65299 0.30603 9.49099C0.30603 9.32899 0.36603 9.19099 0.48603 9.07699C0.60603 8.96299 0.74403 8.90599 0.90003 8.90599H13.896C13.128 8.48599 12.396 7.98199 11.7 7.39399C11.136 6.91399 10.602 6.39199 10.098 5.82799C9.73803 5.41999 9.41403 5.01199 9.12603 4.60399C8.93403 4.33999 8.82003 4.17199 8.78403 4.09999C8.70003 3.96799 8.67903 3.82099 8.72103 3.65899C8.76303 3.49699 8.85303 3.37399 8.99103 3.28999C9.12903 3.20599 9.27903 3.18499 9.44103 3.22699C9.60303 3.26899 9.73203 3.36199 9.82803 3.50599C10.08 3.91399 10.422 4.36399 10.854 4.85599C11.61 5.73199 12.438 6.48799 13.338 7.12399C14.574 7.98799 15.876 8.58199 17.244 8.90599C17.376 8.94199 17.484 9.01699 17.568 9.13099C17.652 9.24499 17.694 9.36799 17.694 9.49999C17.694 9.63199 17.652 9.75499 17.568 9.86899C17.484 9.98299 17.376 10.052 17.244 10.076C15.864 10.4 14.556 11 13.32 11.876C12.42 12.524 11.592 13.286 10.836 14.162C10.416 14.654 10.074 15.104 9.81003 15.512C9.70203 15.68 9.53403 15.776 9.30603 15.8Z"
                                        fill="white" />
                                </svg></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate slideIn" data-bs-popper="static">
                            <li>
                                <a class="dropdown-item" href="register.html">
                                    <i class="hicon hicon-edit me-1"></i>
                                    <span>Register</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.html">
                                    <i class="hicon hicon-aps-lock me-1"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- /Header Navbar -->

        <!-- Language -->
    
        <!-- /Currency -->

    </header>