<?php require './partial/head.php' ?>
<style>
    :root {
        --primary: #0d6efd;
        --primary-light: rgba(13, 110, 253, 0.1);
    }

    .contact-hero {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
    }

    .contact-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
        height: 100%;
    }

    .contact-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--primary-light);
        color: var(--primary);
        font-size: 24px;
        margin-bottom: 20px;
    }

    .form-control {
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #eee;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        border-color: var(--primary);
    }

    .btn-submit {
        padding: 12px 30px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
    }

    .map-container {
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        min-height: 300px;
        border: none;
    }
</style>

<body>
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

    <?php require './partial/navbar.php' ?>
    <!-- Hero Section -->
    <style>
        .contact-hero {
            background: linear-gradient(135deg, #0b182b, #0b182bff);
            color: white;
            padding: 100px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: ellipse(100% 85% at 50% 15%);
        }

        .contact-hero h1 {
            font-weight: 700;
            font-size: 3rem;
            animation: fadeInDown 1s ease-in-out;
        }

        .contact-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: auto;
            animation: fadeInUp 1.2s ease-in-out;
        }

        /* Simple fade animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <section class="contact-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4">Get in Touch</h1>
                    <p>We'd love to hear from you! Whether you have a question about our services, pricing, or anything else, our team is ready to answer all your questions.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Cards -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-4">
                <style>
                    .contact-card {
                        border: 1px solid #ccc;
                    }
                </style>
                <!-- Contact Card 1 -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="contact-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="contact-icon mx-auto">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h4>Our Location</h4>
                            <p class="mb-0">123 Tech Park Avenue<br>San Francisco, CA 94107</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Card 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="contact-icon mx-auto">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h4>Phone Number</h4>
                            <p class="mb-2"><strong>Sales:</strong> +1 (555) 123-4567</p>
                            <p class="mb-0"><strong>Support:</strong> +1 (555) 765-4321</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Card 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="contact-icon mx-auto">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h4>Email Address</h4>
                            <p class="mb-2"><strong>General:</strong> devgift8@gmail.com</p>
                            <p class="mb-0"><strong>Support:</strong> support@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Contact Section Styles */
        .contact-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
            overflow: hidden;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(13, 110, 253, 0.1);
            border-radius: 50%;
            z-index: 0;
        }

        .contact-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: rgba(13, 110, 253, 0.05);
            border-radius: 50%;
            z-index: 0;
        }

        .contact-heading {
            position: relative;
            z-index: 1;
            background: linear-gradient(to right, #0d6efd, #0dcaf0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }

        .contact-lead {
            font-size: 1.1rem;
            color: #495057;
            position: relative;
            z-index: 1;
        }

        .contact-form-container {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(5px);
        }

        .contact-form-container .form-control,
        .contact-form-container .form-select {
            border: 2px solid #e9ecef;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
            border-radius: 8px;
        }

        .contact-form-container .form-control:focus,
        .contact-form-container .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }

        .contact-form-container .form-label {
            font-weight: 600;
            color: #212529;
            margin-bottom: 0.5rem;
        }

        .contact-info-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .contact-info-card:hover {
            transform: translateY(-5px);
        }

        .contact-info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, #0d6efd, #0dcaf0);
        }

        .icon-box {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
            color: white;
            border-radius: 12px;
            font-size: 1.25rem;
            transition: all 0.3s ease;
        }

        .contact-item:hover .icon-box {
            transform: rotate(5deg) scale(1.1);
        }

        .contact-item {
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .contact-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .contact-item h5 {
            color: #212529;
            margin-bottom: 0.75rem;
        }

        .contact-item p {
            color: #6c757d;
            margin-bottom: 0;
        }

        .contact-item a {
            color: #212529;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .contact-item a:hover {
            color: #0d6efd;
            text-decoration: underline;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
            border-radius: 50%;
            margin-right: 0.75rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #0d6efd;
            color: #f2f2f2f2 !important;
            transform: translateY(-3px);
        }

        .btn-send-message {
            background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            border-radius: 50px !important;
        }

        .btn-send-message:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.2);
        }

        /* Map Modal Styles */
        .map-modal .modal-content {
            border-radius: 15px;
            overflow: hidden;
            border: none;
        }

        .map-modal .modal-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            background: #f8f9fa;
        }

        .map-modal .modal-footer {
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {

            .contact-section::before,
            .contact-section::after {
                display: none;
            }

            .contact-form-container {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 576px) {

            .contact-form-container,
            .contact-info-card {
                padding: 1.5rem;
            }

            .icon-box {
                width: 48px;
                height: 48px;
                font-size: 1rem;
            }
        }
    </style>

    <!-- Premium Contact Section -->
    <section class="contact-section py-6" id="contact">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- Contact Form Column -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="pe-lg-4">
                        <h2 class="contact-heading display-5 fw-bold mb-4">Get In Touch</h2>
                        <p class="contact-lead mb-5">Have questions or want to discuss a project? Our team is ready to assist you. We typically respond within 24 hours.</p>

                        <div class="contact-form-container">
                            <form id="contactForm" class="needs-validation" novalidate>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="firstName" placeholder="John" required>
                                        <div class="invalid-feedback">
                                            Please provide your first name.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Doe" required>
                                        <div class="invalid-feedback">
                                            Please provide your last name.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="your.email@example.com" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid email address.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="+1 (123) 456-7890">
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                                        <select class="form-select" id="subject" required>
                                            <option value="" selected disabled>Select a subject</option>
                                            <option value="sales">Sales Inquiry</option>
                                            <option value="support">Technical Support</option>
                                            <option value="partnership">Partnership</option>
                                            <option value="careers">Careers</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a subject.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Tell us about your project..." required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter your message (minimum 20 characters).
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" id="consentCheck" required>
                                            <label class="form-check-label small" for="consentCheck">
                                                I consent to having this website store my submitted information for response purposes.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-send-message w-100" type="submit">
                                            <i class="fas fa-paper-plane me-2"></i> Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info Column -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="contact-info-card">
                        <h3 class="fw-bold mb-5 text-primary">How to Reach Us</h3>

                        <div class="contact-item d-flex">
                            <div class="icon-box me-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Our Headquarters</h5>
                                <p class="mb-2">123 Innovation Boulevard<br>San Francisco, CA 94107<br>United States</p>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#mapModal">
                                    <i class="fas fa-directions me-1"></i> View on Map
                                </a>
                            </div>
                        </div>

                        <div class="contact-item d-flex">
                            <div class="icon-box me-4 flex-shrink-0">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h5>Call Us Directly</h5>
                                <p class="mb-1">
                                    <a href="tel:+11234567890">+1 (123) 456-7890</a>
                                </p>
                                <small class="text-muted d-block mb-2">Monday-Friday: 9am-5pm PST</small>
                                <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#scheduleModal">
                                    <i class="fas fa-calendar-alt me-1"></i> Schedule a Call
                                </a>
                            </div>
                        </div>

                        <div class="contact-item d-flex">
                            <div class="icon-box me-4 flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email Us</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <a href="mailto:hello@yourcompany.com" class="d-flex align-items-center">
                                            <i class="fas fa-envelope-open-text text-primary me-2"></i>
                                            <span>hello@yourcompany.com</span>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="mailto:support@yourcompany.com" class="d-flex align-items-center">
                                            <i class="fas fa-headset text-primary me-2"></i>
                                            <span>support@yourcompany.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:careers@yourcompany.com" class="d-flex align-items-center">
                                            <i class="fas fa-briefcase text-primary me-2"></i>
                                            <span>careers@yourcompany.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="contact-item pt-3">
                            <h5 class="fw-bold mb-3">Connect With Us</h5>
                            <div class="social-links">
                                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Modal -->
    <div class="modal fade map-modal" id="mapModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Our Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.138053615814!2d-122.4194!3d37.7749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDQ2JzI5LjYiTiAxMjLCsDI1JzA5LjkiVw!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="https://maps.google.com?q=123+Business+Avenue+San+Francisco+CA+94107"
                        class="btn btn-primary" target="_blank">
                        <i class="fas fa-external-link-alt me-1"></i> Open in Maps
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .icon-box {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-info {
            background-size: cover;
            background-position: center;
        }

        .social-links a {
            color: #6c757d;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #0d6efd;
        }
    </style>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="text-center fw-bold mb-5" data-aos="fade-up">Frequently Asked Questions</h2>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm" data-aos="fade-up">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What types of projects do you work on?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We specialize in custom software development, including web applications, mobile apps (iOS & Android), enterprise solutions, and SaaS products. Our team has experience across various industries including healthcare, finance, e-commerce, and education.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How much does custom software development cost?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Project costs vary depending on scope, complexity, and timeline. We offer flexible engagement models including fixed-price projects for well-defined requirements and time-and-materials for more agile development. After understanding your requirements, we'll provide a detailed estimate with transparent pricing.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is your development process?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We follow an agile development methodology with 2-week sprints. Our process includes discovery & planning, UI/UX design, development, testing, and deployment. You'll receive regular updates and have opportunities to provide feedback at each stage. We use modern tools like Jira, Slack, and GitHub to ensure transparency and collaboration.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you provide ongoing support and maintenance?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we offer comprehensive maintenance and support packages tailored to your needs. Our support services include bug fixes, performance optimization, security updates, feature enhancements, and 24/7 emergency support options. Many of our clients choose to retain us for ongoing development and optimization after launch.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5" data-aos="fade-up">
                        <p class="lead">Don't see your question here?</p>
                        <a href="#contactForm" class="btn btn-outline-primary">Ask Us Anything</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-6 py-lg-7 bg-primary text-white position-relative" style="background: linear-gradient(135deg, #0d6efd 0%, #084298 100%);">
        <!-- Decorative elements (optional) -->
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');"></div>
        </div>

        <div class="container py-4 py-lg-5 text-center position-relative" data-aos="zoom-in" data-aos-delay="150">
            <!-- Animated heading -->
            <h2 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                Let's Build Something <span class="text-warning">Amazing</span> Together
            </h2>

            <!-- Subheading with animated underline -->
            <div class="mb-5 position-relative d-inline-block">
                <p class="lead fs-3 mb-0 animate__animated animate__fadeIn">Get in touch with our team to discuss your project ideas.</p>
                <div class="position-absolute bottom-0 start-50 translate-middle-x animate__animated animate__fadeIn animate__delay-1s" style="width: 100px; height: 3px; background: rgba(255,255,255,0.5);"></div>
            </div>

            <!-- Enhanced CTA button with hover effect -->
            <a href="#contactForm" class="btn btn-light btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg animate__animated animate__pulse animate__infinite animate__slow mx-2 mb-3" style="transition: all 0.3s ease;">
                <i class="bi bi-lightning-charge-fill text-primary me-2"></i>
                Start Your Project
                <i class="bi bi-arrow-right ms-2"></i>
            </a>



            <!-- Animated mouse scroll indicator (for page anchors) -->
            <div class="mt-5 animate__animated animate__fadeInUp animate__delay-2s animate__infinite animate__slower">
                <a href="#contactForm" class="text-white-50 text-decoration-none d-flex flex-column align-items-center">
                    <small class="mb-2">Scroll Down</small>
                    <i class="bi bi-mouse fs-4"></i>
                </a>
            </div>
        </div>
    </section>

    <?php require './partial/footer.php' ?>

    <?php require './partial/script.php' ?>
</body>

</html>