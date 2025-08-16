<?php require './partial/head.php' ?>

<body>

    <?php require './partial/navbar.php' ?>



    <!-- Hero Section with Background Image -->
   <section class="hero-section position-relative" style="height: 90vh; min-height: 600px; max-height: 1000px; overflow: hidden;">
    <!-- Background Image with Overlay -->
    <div class="hero-background" style="
        background-image: url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.4;
        z-index: -1;
    "></div>

    <!-- Color Overlay -->
    <div class="hero-overlay" style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(41, 82, 178, 0.7) 0%, rgba(92, 43, 119, 0.7) 100%);
        z-index: -1;
    "></div>

    <div class="container h-100 d-flex align-items-center">
        <div class="row align-items-center">
            <div class="col-lg-7 text-lg-start text-center" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown" style="animation-delay: 0.3s; color: #ffffff; text-shadow: 0 2px 8px rgba(0,0,0,0.4);">
                    Crafting Digital <span class="text-primary">Masterpieces</span>
                </h1>
                <p class="lead mb-5 animate__animated animate__fadeInUp" style="animation-delay: 0.6s; color: #ffffff; text-shadow: 0 1px 3px rgba(0,0,0,0.3); font-size: 1.4rem;">
                    Professional <span class="fw-bold">mobile app development</span> and <span class="fw-bold">web solutions</span>.
                    <br>Passing on knowledge through <span class="fw-bold">personalized training</span>.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-lg-start justify-content-center animate__animated animate__fadeIn" style="animation-delay: 0.9s;">
                    <button type="button" class="btn btn-primary btn-lg px-4 py-3 fw-bold" onclick="window.location.href='#contact'">
                        <i class="fas fa-paper-plane me-2"></i> Contact Us
                    </button>
                    <button type="button" class="btn btn-outline-light btn-lg px-4 py-3 fw-bold" onclick="window.location.href='#portfolio'">
                        <i class="fas fa-briefcase me-2"></i> My Work
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-lg px-4 py-3 fw-bold" onclick="window.location.href='#courses'">
                        <i class="fas fa-chalkboard-teacher me-2"></i> Learn With Me
                    </button>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block" data-aos="fade-left" data-aos-duration="1000">
                <div class="position-relative" style="max-width: 500px; margin: 0 auto;">
                    <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Mobile App Development" 
                         class="img-fluid rounded-4 shadow-lg" 
                         style="border: 8px solid white; transform: perspective(1000px) rotateY(-15deg);">
                    <div class="position-absolute bg-white rounded-pill px-3 py-2 shadow-sm" 
                         style="bottom: -20px; right: -30px; transform: rotate(15deg);">
                        <span class="text-dark fw-bold">
                            <i class="fas fa-star text-warning me-1"></i> 5.0 Rating
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tech Stack Badges -->
    <div class="position-absolute bottom-0 start-0 w-100 py-3 animate__animated animate__fadeIn d-none" style="animation-delay: 1.2s; background: rgba(0,0,0,0.2);">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <span class="badge bg-dark px-3 py-2">
                    <i class="fab fa-react text-info me-1"></i> React Native
                </span>
                <span class="badge bg-dark px-3 py-2">
                    <i class="fab fa-swift text-orange me-1"></i> Swift
                </span>
                <span class="badge bg-dark px-3 py-2">
                    <i class="fab fa-js-square text-warning me-1"></i> JavaScript
                </span>
                <span class="badge bg-dark px-3 py-2">
                    <i class="fab fa-node-js text-success me-1"></i> Node.js
                </span>
                <span class="badge bg-dark px-3 py-2">
                    <i class="fas fa-fire text-danger me-1"></i> Flutter
                </span>
            </div>
        </div>
    </div>
</section>


    <style>
        /* Additional CSS for smooth transitions */
        .hero-section {
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .btn-outline-dark {
            transition: all 0.3s ease;
        }

        .btn-outline-dark:hover {
            background-color: #333;
            color: white;
        }
    </style>



    <!-- Why Choose Us Section with Animations -->
    <section class="container mb-5" id="about" data-aos="fade-up">
        <div class="text-center mb-5" data-aos="zoom-in">
            <h2 class="fw-bold animate__animated animate__fadeInDown">Why Choose Us</h2>
            <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">We provide the best services in the industry</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 card-hover animate__animated animate__fadeInLeft">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon animate__animated animate__bounceIn" style="animation-delay: 0.3s;">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4 class="card-title animate__animated animate__fadeIn" style="animation-delay: 0.4s;">Fast Performance</h4>
                        <p class="card-text animate__animated animate__fadeIn" style="animation-delay: 0.5s;">Our solutions are optimized for speed and efficiency.</p>
                        <a href="#" class="btn btn-link animate__animated animate__fadeIn" style="animation-delay: 0.6s;">
                            Learn more <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 card-hover animate__animated animate__fadeInUp">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon animate__animated animate__bounceIn" style="animation-delay: 0.4s;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="card-title animate__animated animate__fadeIn" style="animation-delay: 0.5s;">Secure Solutions</h4>
                        <p class="card-text animate__animated animate__fadeIn" style="animation-delay: 0.6s;">We implement the latest security measures to protect your data.</p>
                        <a href="#" class="btn btn-link animate__animated animate__fadeIn" style="animation-delay: 0.7s;">
                            Learn more <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 card-hover animate__animated animate__fadeInRight">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon animate__animated animate__bounceIn" style="animation-delay: 0.5s;">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="card-title animate__animated animate__fadeIn" style="animation-delay: 0.6s;">24/7 Support</h4>
                        <p class="card-text animate__animated animate__fadeIn" style="animation-delay: 0.7s;">Our dedicated support team is available round the clock.</p>
                        <a href="#" class="btn btn-link animate__animated animate__fadeIn" style="animation-delay: 0.8s;">
                            Learn more <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="mm hero-section bg-dark text-white py-5 position-relative overflow-hidden">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">
                        <span class="text-primary">Custom Software</span> Solutions
                        <span class="typewriter" data-text='["That Scale","That Perform","That Convert"]'></span>
                    </h1>
                    <p class="lead mb-4">We build high-performance applications tailored to your business needs.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact" class="btn btn-primary btn-lg px-4 d-none d-sm-inline-block">Get Free Consultation</a>
                        <a href="#portfolio" class="btn btn-outline-light btn-lg px-4 d-none d-sm-inline-block">View Our Work</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" alt="Software Development" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </section>



    <!-- About Section with Animations -->
    <section class="bg-light py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <img src="./home-five-img.png" alt="About Us" class="img-fluid rounded shadow animate__animated animate__zoomIn">
                    <!-- <img src="./01.jpg" alt="About Us" class="img-fluid rounded shadow animate__animated animate__zoomIn"> -->
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="fw-bold mb-4 animate__animated animate__fadeInDown">About Our Company</h2>
                    <p class="lead mb-4 animate__animated animate__fadeInUp">We've been helping businesses grow since 2010 with innovative solutions.</p>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="row mt-4">
                        <div class="col-6 animate__animated animate__fadeInLeft animate__delay-1s">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Certified Experts</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Award Winning</li>
                                <li><i class="fas fa-check text-primary me-2"></i> 99% Satisfaction</li>
                            </ul>
                        </div>
                        <div class="col-6 animate__animated animate__fadeInRight animate__delay-1s">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 24/7 Support</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Competitive Pricing</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Fast Delivery</li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 animate__animated animate__pulse animate__delay-2s">Read Our Story</button>
                </div>
            </div>
        </div>
    </section>



    <style>
        /* Custom styles for animations */
        .feature-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .card-hover:hover .feature-icon {
            transform: scale(1.1);
            color: #0b5ed7;
        }

        .btn-link {
            transition: all 0.3s ease;
        }

        .btn-link:hover {
            transform: translateX(5px);
        }

        img.rounded {
            transition: transform 0.5s ease;
        }

        img.rounded:hover {
            transform: scale(1.02);
        }
    </style>

    <!-- Stats Section with Counting Animation -->
    <section class="container mb-5" data-aos="fade-up">
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="p-4 border rounded stats-card animate__animated">
                    <h3 class="text-primary fw-bold counter" data-target="250">0</h3>
                    <p class="mb-0 text-muted">Happy Clients</p>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="p-4 border rounded stats-card animate__animated">
                    <h3 class="text-primary fw-bold counter" data-target="500">0</h3>
                    <p class="mb-0 text-muted">Projects Completed</p>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="p-4 border rounded stats-card animate__animated">
                    <h3 class="text-primary fw-bold counter" data-target="50">0</h3>
                    <p class="mb-0 text-muted">Team Members</p>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="p-4 border rounded stats-card animate__animated">
                    <h3 class="text-primary fw-bold counter" data-target="10">0</h3>
                    <p class="mb-0 text-muted">Years Experience</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <style>
        /* Services Section Styles */
        #services {
            position: relative;
            overflow: hidden;
        }

        .service-card {
            perspective: 1000px;
            height: 350px;
            /* Increased height for better content display */
            margin-bottom: 30px;
        }

        .service-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
            transform-style: preserve-3d;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        .service-card:hover .service-card-inner {
            transform: rotateY(180deg);
        }

        .service-card-front,
        .service-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 12px;
            padding: 30px;
        }

        .service-card-front {
            background: white;
            align-items: center;
            text-align: center;
        }

        .service-card-back {
            background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
            transform: rotateY(180deg);
            color: white;
        }

        .icon-box {
            width: 90px;
            height: 90px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: rgba(13, 110, 253, 0.1);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .service-card:hover .icon-box {
            transform: scale(1.1);
        }

        .service-card h4 {
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .service-card-front p {
            color: #6c757d;
            font-size: 1rem;
        }

        .service-card-back ul {
            padding-left: 20px;
            margin-bottom: 25px;
        }

        .service-card-back ul li {
            margin-bottom: 8px;
            position: relative;
        }

        .service-card-back ul li:before {
            content: "•";
            color: #fff;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .service-card-back .btn {
            align-self: center;
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .service-card-back .btn:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .service-card {
                height: auto;
                min-height: 300px;
                margin-bottom: 20px;
            }

            .service-card-inner {
                transform-style: flat;
            }

            .service-card:hover .service-card-inner {
                transform: none;
            }

            .service-card-front,
            .service-card-back {
                position: relative;
                height: auto;
                transform: none !important;
                backface-visibility: visible;
            }

            .service-card-back {
                display: none;
            }

            .service-card.active .service-card-back {
                display: flex;
                margin-top: -10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
        }
    </style>

    <section class="py-5 bg-light" id="services">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Our <span class="text-primary">Development</span> Services</h2>
                <p class="lead">Custom solutions for your digital transformation</p>
            </div>

            <div class="row g-4">
                <!-- Web Development -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card h-100">
                        <div class="service-card-inner">
                            <div class="service-card-front bg-white p-4 rounded-3 text-center">
                                <div class="icon-box bg-primary-light mx-auto mb-4">
                                    <i class="fas fa-code text-primary fs-3"></i>
                                </div>
                                <h4>Web Development</h4>
                                <p>Responsive, modern web applications</p>
                                <div class="d-md-none mt-3">
                                    <button class="btn btn-sm btn-outline-primary toggle-service">Details</button>
                                </div>
                            </div>
                            <div class="service-card-back p-4 rounded-3 text-center">
                                <h4 class="text-white">Web Development</h4>
                                <ul class="text-start">
                                    <li>Custom CMS Solutions</li>
                                    <li>E-Commerce Platforms</li>
                                    <li>Web Portals</li>
                                    <li>API Integrations</li>
                                </ul>
                                <a href="#" class="btn btn-light btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Development -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card h-100">
                        <div class="service-card-inner">
                            <div class="service-card-front bg-white p-4 rounded-3 text-center">
                                <div class="icon-box bg-primary-light mx-auto mb-4">
                                    <i class="fas fa-mobile-alt text-primary fs-3"></i>
                                </div>
                                <h4>Mobile Development</h4>
                                <p>iOS & Android applications</p>
                                <div class="d-md-none mt-3">
                                    <button class="btn btn-sm btn-outline-primary toggle-service">Details</button>
                                </div>
                            </div>
                            <div class="service-card-back p-4 rounded-3 text-center">
                                <h4 class="text-white">Mobile Development</h4>
                                <ul class="text-start">
                                    <li>Native iOS/Android Apps</li>
                                    <li>Cross-Platform Solutions</li>
                                    <li>Enterprise Mobility</li>
                                    <li>App Maintenance</li>
                                </ul>
                                <a href="#" class="btn btn-light btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Software -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card h-100">
                        <div class="service-card-inner">
                            <div class="service-card-front bg-white p-4 rounded-3 text-center">
                                <div class="icon-box bg-primary-light mx-auto mb-4">
                                    <i class="fas fa-laptop-code text-primary fs-3"></i>
                                </div>
                                <h4>Custom Software</h4>
                                <p>Tailored business solutions</p>
                                <div class="d-md-none mt-3">
                                    <button class="btn btn-sm btn-outline-primary toggle-service">Details</button>
                                </div>
                            </div>
                            <div class="service-card-back p-4 rounded-3 text-center">
                                <h4 class="text-white">Custom Software</h4>
                                <ul class="text-start">
                                    <li>Business Process Automation</li>
                                    <li>CRM/ERP Solutions</li>
                                    <li>Data Analytics Platforms</li>
                                    <li>Workflow Management</li>
                                </ul>
                                <a href="#" class="btn btn-light btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5 bg-light" id="process">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Our <span class="text-primary">Development</span> Process</h2>
                <p class="lead">A structured approach to deliver quality software</p>
            </div>

            <div class="process-steps">
                <!-- Step 1 -->
                <div class="process-step" data-aos="fade-right">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Discovery & Planning</h4>
                        <p>We analyze your requirements and create a detailed project roadmap with milestones and deliverables.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step" data-aos="fade-left">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>UI/UX Design</h4>
                        <p>Our designers create wireframes and prototypes to visualize the user experience before development begins.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step" data-aos="fade-right">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Development</h4>
                        <p>We build your solution using agile methodology with regular updates and sprint reviews.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-step" data-aos="fade-left">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Testing & QA</h4>
                        <p>Rigorous testing ensures your software performs flawlessly across all scenarios.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="process-step" data-aos="fade-right">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h4>Deployment & Support</h4>
                        <p>We handle deployment and provide ongoing maintenance and support services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .process-steps {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .process-steps:before {
            content: '';
            position: absolute;
            width: 2px;
            background: #0d6efd;
            top: 0;
            bottom: 0;
            left: 50px;
            z-index: 1;
        }

        .process-step {
            position: relative;
            margin-bottom: 30px;
            display: flex;
            align-items: flex-start;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: #0d6efd;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            margin-right: 20px;
            z-index: 2;
            flex-shrink: 0;
        }

        .step-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            flex-grow: 1;
        }

        .step-content h4 {
            color: #0d6efd;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .process-steps:before {
                left: 30px;
            }

            .step-number {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
        }
    </style>

    <!-- Testimonials Section with Animations -->
    <section class="container mb-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold animate__animated animate__fadeInDown">What Our Clients Say</h2>
            <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">Don't just take our word for it</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                <div class="card h-100 card-hover testimonial-card animate__animated animate__fadeInLeft">
                    <div class="card-body p-4">
                        <div class="mb-3 animate__animated animate__bounceIn" style="animation-delay: 0.3s;">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text mb-4 animate__animated animate__fadeIn" style="animation-delay: 0.4s;">"This company transformed our business operations completely. Their solutions are top-notch and their support is exceptional."</p>
                        <div class="d-flex align-items-center animate__animated animate__fadeIn" style="animation-delay: 0.5s;">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client" class="rounded-circle me-3" width="50">
                            <div>
                                <h6 class="mb-0">Sarah Johnson</h6>
                                <small class="text-muted">CEO, TechCorp</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 card-hover testimonial-card animate__animated animate__fadeInUp">
                    <div class="card-body p-4">
                        <div class="mb-3 animate__animated animate__bounceIn" style="animation-delay: 0.4s;">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text mb-4 animate__animated animate__fadeIn" style="animation-delay: 0.5s;">"The team was professional and delivered beyond our expectations. We've seen a 40% increase in productivity since implementation."</p>
                        <div class="d-flex align-items-center animate__animated animate__fadeIn" style="animation-delay: 0.6s;">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Client" class="rounded-circle me-3" width="50">
                            <div>
                                <h6 class="mb-0">Michael Chen</h6>
                                <small class="text-muted">Director, Global Solutions</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-left" data-aos-delay="300">
                <div class="card h-100 card-hover testimonial-card animate__animated animate__fadeInRight">
                    <div class="card-body p-4">
                        <div class="mb-3 animate__animated animate__bounceIn" style="animation-delay: 0.5s;">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <p class="card-text mb-4 animate__animated animate__fadeIn" style="animation-delay: 0.6s;">"Reliable service with quick response times. They've become an essential partner for our digital transformation journey."</p>
                        <div class="d-flex align-items-center animate__animated animate__fadeIn" style="animation-delay: 0.7s;">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Client" class="rounded-circle me-3" width="50">
                            <div>
                                <h6 class="mb-0">Emma Rodriguez</h6>
                                <small class="text-muted">CTO, Innovate Inc</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional CSS -->
    <style>
        /* Stats Card Animation */
        .stats-card {
            transition: all 0.3s ease;
            background: white;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Testimonial Card Styles */
        .testimonial-card {
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(13, 110, 253, 0.2);
        }

        /* Star Rating Animation */
        .fa-star {
            transition: all 0.2s ease;
        }

        .testimonial-card:hover .fa-star {
            transform: scale(1.2);
        }
    </style>


    <!-- Newsletter Section with Animations -->
    <section class="newsletter-section mb-5 py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <!-- Animated Background Elements -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="newsletter-circle circle-1 animate__animated animate__pulse animate__infinite" style="
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(13, 110, 253, 0.1);
            border-radius: 50%;
            top: -50px;
            left: -50px;
            animation-delay: 0.3s;
        "></div>
            <div class="newsletter-circle circle-2 animate__animated animate__pulse animate__infinite" style="
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(13, 110, 253, 0.05);
            border-radius: 50%;
            bottom: -100px;
            right: -100px;
            animation-delay: 0.7s;
        "></div>
        </div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="zoom-in">
                    <h2 class="fw-bold mb-4 animate__animated animate__fadeInDown">Subscribe to Our Newsletter</h2>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">Stay updated with our latest news, products, and special offers.</p>

                    <form class="row g-3 justify-content-center needs-validation" novalidate>
                        <div class="col-md-8 animate__animated animate__fadeInLeft animate__delay-2s">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-white">
                                    <i class="fas fa-envelope text-primary"></i>
                                </span>
                                <input type="email" class="form-control form-control-lg" placeholder="Your email address" required>
                                <div class="invalid-feedback text-start">
                                    Please provide a valid email.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate__animated animate__fadeInRight animate__delay-2s">
                            <button type="submit" style="background-color: #070f1fff; color:white" class="btn btn-primaryy btn-lg w-100 py-3 subscribe-btn">
                                <span class="subscribe-text">Subscribe</span>

                                <span class="subscribe-icon ms-2"><i class="fas fa-paper-plane"></i></span>
                            </button>
                        </div>
                        <div class="col-12 animate__animated animate__fadeIn animate__delay-3s">
                            <small class="text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </form>

                    <!-- Success Message (Hidden by Default) -->
                    <div class="alert alert-success mt-4 animate__animated animate__fadeIn d-none" id="newsletterSuccess" role="alert">
                        <i class="fas fa-check-circle me-2"></i> Thank you for subscribing! Please check your email to confirm.
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php require './partial/footer.php' ?>
    <?php require './partial/script.php' ?>
</body>

</html>