<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giftdevhub.com </title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Add these CDN links to your head section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>
    /* Custom styles */
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://source.unsplash.com/random/1600x900/?technology');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 120px 0;
        margin-bottom: 30px;
    }

    .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #0d6efd;
    }

    .testimonial-card {
        border-left: 4px solid #0d6efd;
    }

    .newsletter-section {
        background-color: #f8f9fa;
        padding: 60px 0;
    }

    footer {
        background-color: #343a40;
        color: white;
        padding: 40px 0;
    }

    .social-icons a {
        color: white;
        font-size: 1.5rem;
        margin-right: 15px;
        transition: color 0.3s;
    }

    .social-icons a:hover {
        color: #0d6efd;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .card-hover:hover {
        transform: translateY(-5px);
        transition: transform 0.3s;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>
<script>
    // Initialize AOS animation library
    AOS.init({
        once: true // Animations will only happen once
    });

    // Optional: Add scroll reveal effect
    document.addEventListener('DOMContentLoaded', function() {
        const hero = document.querySelector('.hero-section');
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY;
            hero.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        });
    });
</script>
<!-- Newsletter Styles -->
<style>
    .newsletter-section {
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .subscribe-btn {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .subscribe-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
    }

    .subscribe-btn:hover .subscribe-icon {
        transform: translateX(5px);
    }

    .subscribe-icon {
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .input-group-text {
        transition: all 0.3s ease;
    }

    .form-control:focus+.input-group-text {
        background-color: #e9ecef;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .newsletter-circle {
        animation: float 6s ease-in-out infinite;
    }

    .circle-1 {
        animation-delay: 0s;
    }

    .circle-2 {
        animation-delay: 2s;
    }
</style>

<!-- Newsletter Script -->
<script>
    // Form validation
    (function() {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    event.preventDefault();
                    // Show success message
                    document.getElementById('newsletterSuccess').classList.remove('d-none');
                    document.getElementById('newsletterSuccess').classList.add('animate__bounceIn');
                    // Reset form
                    form.reset();
                    // Hide after 5 seconds
                    setTimeout(() => {
                        document.getElementById('newsletterSuccess').classList.add('animate__fadeOut');
                    }, 5000);
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();

    // Add animation to circles on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const circles = document.querySelectorAll('.newsletter-circle');
        circles.forEach(circle => {
            circle.style.opacity = '0';
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.classList.add('animate__animated', 'animate__fadeIn');
                }
            });
        }, {
            threshold: 0.1
        });

        circles.forEach(circle => {
            observer.observe(circle);
        });
    });
</script>


