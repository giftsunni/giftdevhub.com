<!-- Footer -->
 <style>
    .bd-footer{
        background-color: #0b182bff !important;
    }
 </style>
    <footer class="bd-footer text-white pt-5 pb-4 position-relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="footer-circle circle-1 position-absolute"></div>
        <div class="footer-circle circle-2 position-absolute"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row g-4">
                <!-- Company Info Column -->
                <div class="col-lg-4" data-aos="fade-up">
                    <h5 class="text-white mb-4 animate__animated animate__fadeInDown">
                        <i class="fas fa-rocket me-2 text-primary animate__animated animate__pulse animate__infinite" style="animation-duration: 2s;"></i>giftdevhub
                    </h5>
                    <p class="animate__animated animate__fadeIn animate__delay-1s">
                        Innovative solutions for your business growth. We provide the best services to help you succeed in the digital world.
                    </p>
                    <div class="social-icons mt-4 animate__animated animate__fadeIn animate__delay-2s">
                        <a href="#" class="social-icon animate__animated"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon animate__animated"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon animate__animated"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon animate__animated"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon animate__animated"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="text-white mb-4 animate__animated animate__fadeInDown">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 animate__animated animate__fadeInLeft animate__delay-1s">
                            <a href="#about" class="footer-link">Home</a>
                        </li>
                        <li class="mb-2 animate__animated animate__fadeInLeft animate__delay-2s">
                            <a href="#" class="footer-link">About Us</a>
                        </li>
                        <li class="animate__animated animate__fadeInLeft animate__delay-3s">
                            <a href="#" class="footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="text-white mb-4 animate__animated animate__fadeInDown">Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 animate__animated animate__fadeInRight animate__delay-1s">
                            <a href="#" class="footer-link">Web Design</a>
                        </li>
                        <li class="mb-2 animate__animated animate__fadeInRight animate__delay-2s">
                            <a href="#" class="footer-link">Development</a>
                        </li>
                        <li class="mb-2 animate__animated animate__fadeInRight animate__delay-3s">
                            <a href="#" class="footer-link">Marketing</a>
                        </li>
                        <li class="mb-2 animate__animated animate__fadeInRight animate__delay-4s">
                            <a href="#" class="footer-link">SEO</a>
                        </li>
                        <li class="animate__animated animate__fadeInRight animate__delay-5s">
                            <a href="#" class="footer-link">Support</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="text-white mb-4 animate__animated animate__fadeInDown">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3 animate__animated animate__fadeInUp animate__delay-1s">
                            <i class="fas fa-map-marker-alt me-2 text-primary"></i> No. 5 Palevi close Eliogobolo, Eliozu, River state, Port Harcourt
                        </li>
                        <li class="mb-3 animate__animated animate__fadeInUp animate__delay-2s">
                            <i class="fas fa-phone me-2 text-primary"></i> +234 8187818257
                        </li>
                        <li class="mb-3 animate__animated animate__fadeInUp animate__delay-3s">
                            <i class="fas fa-envelope me-2 text-primary"></i> devgift8@gmail.com
                        </li>
                        <li class="animate__animated animate__fadeInUp animate__delay-4s">
                            <i class="fas fa-clock me-2 text-primary"></i> <?php echo date_format(new DateTime(), 'l, F j, g:i a') ?>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="my-4 bg-light opacity-25">

            <div class="row">
                <div class="col-md-6 text-center text-md-start animate__animated animate__fadeIn">
                    <p class="mb-0">&copy; <?php echo date('Y') ?> giftdevhub. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end animate__animated animate__fadeIn">
                    <p class="mb-0">
                        <a href="#" class="footer-link me-3">Privacy Policy</a>
                        <a href="#" class="footer-link">Terms of Service</a>
                    </p>
                </div>
            </div>

            <!-- Back to Top Button -->
            <div class="text-center mt-4 animate__animated animate__fadeInUp">
                <a href="#" class="btn btn-primary btn-back-to-top animate__animated animate__pulse animate__infinite" style="animation-duration: 3s;">
                    <i class="fas fa-arrow-up"></i> Back to Top
                </a>
            </div>
        </div>
    </footer>

    <!-- Footer Styles -->
    <style>
        /* Footer Base Styles */
        footer {
            position: relative;
            overflow: hidden;
            
        }

        /* Footer Circles */
        .footer-circle {
            border-radius: 50%;
            background: rgba(13, 110, 253, 0.05);
            z-index: 1;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            left: -150px;
            animation: float 8s ease-in-out infinite;
        }

        .circle-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            right: -100px;
            animation: float 6s ease-in-out infinite reverse;
        }

        /* Footer Links */
        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .footer-link:hover {
            color: white;
            padding-left: 5px;
        }

        .footer-link:before {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: 0;
            left: 0;
            background-color: #0d6efd;
            transition: all 0.3s ease;
        }

        .footer-link:hover:before {
            width: 100%;
        }

        /* Social Icons */
        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #0d6efd;
            color: white !important;
            transform: translateY(-3px);
        }

        /* Back to Top Button */
        .btn-back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            z-index: 99;
            border-radius: 50px;
            padding: 10px 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Floating Animation */
        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        @media screen and (max-width: 768px) {
            footer{
                padding: 10px;
            }
            
        }
    </style>

    <!-- Footer Scripts -->
    <script>
        // Back to Top Button
        window.addEventListener('scroll', function() {
            const backToTopButton = document.querySelector('.btn-back-to-top');
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        document.querySelector('.btn-back-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Animate social icons on hover
        document.querySelectorAll('.social-icon').forEach((icon, index) => {
            icon.addEventListener('mouseenter', () => {
                icon.classList.add('animate__rubberBand');
            });
            icon.addEventListener('mouseleave', () => {
                setTimeout(() => {
                    icon.classList.remove('animate__rubberBand');
                }, 1000);
            });
        });

        // Initialize AOS animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true
            });
        });
    </script>