<?php require './partial/head.php' ?>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            font-weight: 700;
        }

        :root {
            --primary: #0d6efd;
            --primary-light: rgba(13, 110, 253, 0.1);
        }


        .hero-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 100px 0;
        }

        .section-title {
            position: relative;
            margin-bottom: 50px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--primary);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .team-card {
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .team-img {
            height: 250px;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .team-card:hover .team-img {
            transform: scale(1.05);
        }

        .social-links a {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: var(--primary-light);
            color: var(--primary);
            margin: 0 5px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background: var(--primary);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -12px;
            background: white;
            border: 4px solid var(--primary);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        .right::after {
            left: -12px;
        }

        .timeline-content {
            padding: 20px 30px;
            background: white;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            .left::after,
            .right::after {
                left: 18px;
            }

            .right {
                left: 0%;
            }
        }
    </style>
    <style>
        /* Navbar Styles */
        .navbar {
            transition: all 0.3s ease;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar.scrolled {
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.9) !important;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .navbar-brand i {
            color: #4e73df;
            transition: all 0.3s ease;
        }

        .nav-link {
            font-weight: 500;
            margin: 0 8px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #4e73df;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Sidebar Mobile Menu */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                position: fixed;
                top: 0;
                right: -100%;
                width: 280px;
                height: 100vh;
                background-color: rgba(0, 0, 0, 0.95);
                padding: 80px 30px 30px;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.2);
                transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                z-index: 1000;
                overflow-y: auto;
            }

            .navbar-collapse.show {
                right: 0;
            }

            .navbar-nav {
                flex-direction: column !important;
            }

            .nav-item {
                opacity: 0;
                transform: translateX(20px);
                transition: all 0.3s ease;
                margin-bottom: 15px;
            }

            .navbar-collapse.show .nav-item {
                opacity: 1;
                transform: translateX(0);
            }

            .navbar-collapse.show .nav-item:nth-child(1) {
                transition-delay: 0.1s;
            }

            .navbar-collapse.show .nav-item:nth-child(2) {
                transition-delay: 0.2s;
            }

            .navbar-collapse.show .nav-item:nth-child(3) {
                transition-delay: 0.3s;
            }

            .ms-3 {
                opacity: 0;
                transform: translateX(20px);
                transition: all 0.3s ease;
                transition-delay: 0.4s;
                margin-top: 20px;
            }

            .navbar-collapse.show .ms-3 {
                opacity: 1;
                transform: translateX(0);
            }

            /* Close button */
            .close-sidebar {
                position: absolute;
                top: 20px;
                right: 20px;
                color: white;
                font-size: 1.5rem;
                background: none;
                border: none;
                cursor: pointer;
            }

            /* Overlay when sidebar is open */
            .sidebar-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 999;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }

            .sidebar-overlay.show {
                opacity: 1;
                visibility: visible;
            }

            .mm {
                padding: 10px;
            }
        }
    </style>

    <!-- Header/Navbar -->
    <?php require './partial/navbar.php' ?>
    <!-- Hero Section -->
    <style>
    .banner {
        background: #0b182bff;
        background-size: 200% 200%;
        animation: gradientWave 8s ease infinite;
        padding: 100px 20px 150px; /* extra bottom padding for curve space */
        color: #fff;
        text-align: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        font-family: 'Segoe UI', system-ui, sans-serif;

        /* Pattern overlay */
        background-image:
            radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.05) 0.5px, transparent 1px),
            radial-gradient(circle at 90% 80%, rgba(255, 255, 255, 0.05) 0.5px, transparent 1px);
        background-size: 30px 30px;
    }

    /* Gradient animation */
    @keyframes gradientWave {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Curved bottom using pseudo-element */
    .banner::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 120px;
        background: white; /* color of the next section */
        clip-path: ellipse(75% 100% at 50% 100%);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .banner {
            padding: 70px 15px 120px;
            background-size: 300% 300%;
            animation-duration: 10s;
        }
    }

    .banner h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .banner .meta {
        font-size: 14px;
        opacity: 0.9;
    }
</style>

<!-- Blog Header -->
<section class="banner" data-aos="fade-down">
    <h1>About Us</h1>
    <div class="meta">
        <i class='bx bxs-calendar'></i> August 5, 2024 &nbsp; | &nbsp;
    </div>
</section>


    <!-- Our Mission Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <!-- <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="Our Mission" class="img-fluid rounded shadow"> -->
                    <img src="./computer01.avif" alt="Our Mission" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title text-center text-lg-start">Our Mission</h2>
                    <p class="lead">To empower businesses through innovative technology solutions.</p>
                    <p>We believe that technology should be an enabler, not a barrier. Our mission is to create software solutions that are powerful yet intuitive, helping our clients achieve their business objectives efficiently.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-bullseye fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Our Vision</h5>
                                    <p class="mb-0">To be the most trusted technology partner for SMBs worldwide.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-chart-line fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Our Approach</h5>
                                    <p class="mb-0">Agile development with a focus on measurable results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="section-title text-center" data-aos="fade-up">Meet Our Team</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">The talented people behind our success</p>

            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                    <div class="team-card card h-100">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top team-img" alt="John Doe">
                        <div class="card-body text-center">
                            <h5 class="card-title">John Doe</h5>
                            <p class="text-muted">CEO & Founder</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="team-card card h-100">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="card-img-top team-img" alt="Jane Smith">
                        <div class="card-body text-center">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="text-muted">CTO</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="team-card card h-100">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" class="card-img-top team-img" alt="Mike Johnson">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mike Johnson</h5>
                            <p class="text-muted">Lead Developer</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-stack-overflow"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="team-card card h-100">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="card-img-top team-img" alt="Sarah Williams">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sarah Williams</h5>
                            <p class="text-muted">UX Designer</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="section-title text-center" data-aos="fade-up">Our Core Values</h2>

            <div class="row g-4">
                <!-- Value 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary-light mx-auto mb-4">
                                <i class="fas fa-lightbulb text-primary fa-2x"></i>
                            </div>
                            <h4>Innovation</h4>
                            <p>We constantly push boundaries to deliver cutting-edge solutions that give our clients a competitive edge.</p>
                        </div>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary-light mx-auto mb-4">
                                <i class="fas fa-handshake text-primary fa-2x"></i>
                            </div>
                            <h4>Integrity</h4>
                            <p>We believe in transparency, honesty, and doing what's right - even when no one is watching.</p>
                        </div>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary-light mx-auto mb-4">
                                <i class="fas fa-users text-primary fa-2x"></i>
                            </div>
                            <h4>Collaboration</h4>
                            <p>We work closely with our clients as partners, not vendors, to achieve shared success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <!-- <section class="py-5 bg-primary text-white">
        <div class="container py-5 text-center" data-aos="zoom-in">
            <h2 class="display-5 fw-bold mb-4">Ready to Start Your Project?</h2>
            <p class="lead mb-5">Let's discuss how we can help you achieve your business goals.</p>
            <a href="contact.html" class="btn btn-light btn-lg px-4">Contact Us Today</a>
        </div>
    </section> -->

    <section class="py-6 py-lg-7 bg-primary text-white position-relative overflow-hidden">

        <div class="position-absolute top-0 end-0 w-100 h-100 opacity-10">
            <div class="position-absolute top-0 end-0 w-100 h-100 bg-white" style="clip-path: polygon(100% 0, 0% 100%, 100% 100%);"></div>
        </div>

        <div class="container py-4 py-lg-5 text-center position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h2 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown">Ready to Start Your Project?</h2>
            <p class="lead mb-5 fs-3 animate__animated animate__fadeIn animate__delay-1s">Let's discuss how we can help <small style="color: black;">you achieve your business goals.</small></p>

            <div class="d-flex flex-column flex-md-row justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-1s">
                <a href="contact" class="btn btn-light btn-lg px-4 py-3 fw-bold shadow-sm">
                    <i class="bi bi-chat-left-text me-2"></i>Contact Us Today
                </a>
                <a href="tel:+1234567890" class="btn btn-outline-primary btn-lg px-4 py-3 fw-bold">
                    <i class="bi bi-telephone me-2"></i>Call Now
                </a>
            </div>


        </div>
    </section>

    <?php require './partial/footer.php' ?>

    <?php require './partial/script.php' ?>
</body>

</html>