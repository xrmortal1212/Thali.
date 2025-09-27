<!doctype html>
<html lang="en">

<head>
    <title> <?php if(isset($title)): ?>
        <?php echo e($title); ?> |
    <?php endif; ?>
        <?php echo e(config('app.name')); ?>

    </title>
    <!-- AOS Animation css link  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />


    <link rel="shortcut icon" href="/assets/images/Logo.png" type="image/x-icon">

    <!-- splide css lnk  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

</head>

<body style="background-color: #111; box-sizing: border-box; margin: 0; padding: 0;">
    <!-- <div class="v-b-t">
        <?php for($i = 0; $i < 9; $i++): ?>
            <h1> THALI •</h1>
        <?php endfor; ?>
    </div> -->

    <!-- ======================= HEADER ======================= -->
    <header class="mt-3 mb-3 px-3">
        <div class="container">
            <div class="row align-items-center gx-2">
                <!-- Logo -->
                <div class="col-6 col-sm-4 col-lg-2 d-flex align-items-center">
                    <a class="navbar-brand" href="/">
                        <img src="<?php echo e(asset('assets/images/Logo.png')); ?>" alt="Logo" class="img-fluid logo" />
                    </a>
                </div>

                <!-- Navigation Menu -->
                <div class="col-6 col-sm-8 col-lg-8">
                    <nav class="navbar navbar-expand-lg navbar-custom justify-content-center p-0">
                        <button class="navbar-toggler text-white ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">
                                        <i class="fa-solid fa-house nav-icon"></i>Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?php echo e(request()->is('template*') ? 'active' : ''); ?>"
                                        href="#" id="templateDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-box nav-icon"></i>Templates
                                    </a>
                                    <ul style="background: rgba(17, 17, 17, 0.95);
                                            border: 1px solid rgba(255, 255, 255, 0.06);
                                            padding: 8px;
                                            min-width: 170px;
                                            border-radius: 12px;
                                            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
                                            backdrop-filter: blur(6px);
                                            font-family:'Surgena;
                                        " class="dropdown-menu text-dark mt-2 btn-main"
                                        aria-labelledby="templateDropdown">
                                        <li>
                                            <a class="dropdown-item " href="ctemplate">
                                                Customizable
                                            </a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <a class="dropdown-item" href="template">
                                                Uncustomizable
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                                               <li class="nav-item">
                                    <a class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>" href="/about">
                                        <i class="fa-solid fa-user nav-icon"></i>About
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(request()->is('contact') ? 'active' : ''); ?>" href="/contact">
                                        <i class="fa-solid fa-address-book nav-icon"></i>Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Sign In Button -->
                <div class="col-12 col-lg-2 d-flex justify-content-end mt-2 mt-lg-0 btn-main">
                    <div class="dropdown">
                        <button class="btn g-btn dropdown-toggle" type="button" id="authDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user-plus"></i> Account
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(route('signin')); ?>">Sign In</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="<?php echo e(route('signup')); ?>">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- Custom Cursor Container -->
    <div class="custom-cursor">
        <img src="" alt="Preview" />
    </div>

    <!-- ======================= MAIN CONTENT ======================= -->
    <?php echo $__env->yieldContent('main-content'); ?>

    <!-- ======================= MARQUEE ======================= -->
    <div id="move">
        <?php for($i = 0; $i < 9; $i++): ?>
            <div class="marque">
                <h2>THRIVE BEYOND LIMIT</h2>
                <img src="<?php echo e(asset('assets/images/arrow-br.svg')); ?>" alt="arrow" />
            </div>
        <?php endfor; ?>
    </div>

    <!-- ======================= FOOTER ======================= -->
    <footer class="footer-custom mt-1 pt-4 pb-3">
        <div class="container-fluid">
            <div class="row text-center text-md-start p-3">

                <!-- Social Media -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h2 class="footer-title mb-3">Follow Us</h2>
                    <a href="#" class="footer-social mx-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="footer-social mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="footer-social mx-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer-social mx-2"><i class="fab fa-linkedin-in"></i></a>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h2 class="footer-title mb-3">Quick Links</h2>
                    <ul class="list-unstyled footer-links">
                        <li><a href="/" class="footer-link">Home</a></li>
                        <li><a href="template" class="footer-link">Templates</a></li>
                        <li><a href="contact" class="footer-link">Contact Us</a></li>
                        <li><a href="about" class="footer-link">About Us</a></li>
                    </ul>
                </div>

                <!-- Feedback Form -->
                <div class="col-md-4">
                    <h2 class="footer-title tex mb-3">Feedback</h2>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control footer-input" placeholder="Your Email"
                                aria-label="Your Email">
                            <button class="btn btn-footer" type="submit">
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <hr class="footer-hr my-4" />
            <div class="row">
                <div class="col-12 text-center">
                    <small class="footer-copy">&copy; <?php echo e(date('Y')); ?> Thali. All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- ======================= SCRIPTS ======================= -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"
        integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
        integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- GSAP Observer plugin -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo e(asset('assets/js/template.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/signin.js')); ?>"></script>

    <!-- AOS anmation js link  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- Custom Script -->

    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>




</body>

</html><?php /**PATH C:\Users\Rimsha\Downloads\Thali\resources\views/layout/headerfooter.blade.php ENDPATH**/ ?>