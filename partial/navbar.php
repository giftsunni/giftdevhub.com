<style>
    /* Top Contact Bar Styles */
    .top-contact-bar {
        background-color: #0b182bff !important;
        color: #f2f2f2;
        padding: 8px 0;
        font-size: 14px;
        border-bottom: 1px solid #e9ecef;
    }

    .contact-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .contact-details {
        display: flex;
        align-items: center;
    }

    .contact-details span {
        margin-right: 20px;
        color: #f2f2f2;
    }

    .contact-details i {
        margin-right: 5px;
        color: #4e73df;
    }

    .social-icons a {
        color: #f2f2f2;
        margin-left: 15px;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: #4e73df;
    }

    /* Navbar Styles */
    .navbar {
        transition: all 0.3s ease;
        padding: 15px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: white !important;
    }

    .navbar.scrolled {
        padding: 10px 0;
        background-color: white !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 1.5rem;
        transition: all 0.3s ease;
        color: #0b182bff !important;
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
        color: #0b182bff !important;
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

    /* Mobile Menu Styles */
    @media (max-width: 991.98px) {
        .top-contact-bar {
            display: none;
            /* Hide on mobile or adjust as needed */
        }

        .navbar-collapse {
            position: fixed;
            top: 0;
            right: -100%;
            width: 280px;
            height: 100vh;
            background-color: white;
            padding: 80px 30px 30px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
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

        .close-sidebar {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #0b182bff !important;
            font-size: 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
        }

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

        .mobile-contact-info {
            display: block;
            padding: 15px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            text-align: center;
        }

        .mobile-contact-info span {
            display: block;
            margin-bottom: 5px;
            color: #495057;
        }
    }

    @media (min-width: 992px) {
        .mobile-contact-info {
            display: none;
        }
    }
</style>

<!-- Top Contact Bar -->
<div class="top-contact-bar">
    <div class="container">
        <div class="contact-info">
            <div class="contact-details">
                <span><i class="fas fa-phone-alt"></i> +234 818 781 8257</span>
                <span><i class="fas fa-envelope"></i> giftsunday34@gmail.com</span>
            </div>
            <div class="social-icons">
                <a href="https://github.com/yourusername" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://instagram.com/yourusername" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Header/Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <div class="logo-container">
                <img src="./logo2.jpg" alt="Logo" class="logo-img">
            </div>
        </a>

        <style>
            /* Logo container */
            .logo-container {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                /* padding: 6px; */
                /* background: #fff; */
                border-radius: 14px;
                /* border: 3px solid #0B182B; Bold dark border */
                /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); */
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            /* Hover effect */
            .logo-container:hover {
                transform: scale(1.07);
                box-shadow: 0 6px 14px rgba(0, 0, 0, 0.18);
            }

            /* Logo image */
            .logo-img {
                width: 150px;
                /* Bigger logo */
                height: auto;
                max-height: 100px;
                object-fit: contain;
            }

            /* Responsive adjustments */
            @media (max-width: 780px) {
    .logo-img {
        width: 150px;   /* increased width */
        max-height: 120px; /* increased height */
    }
}

            @media (max-width: 480px) {
                .logo-img {
                    width: 120px;
                    max-height: 80px;
                }
            }
            
        </style>




        <button class="navbar-toggler" type="button" aria-label="Toggle navigation" id="navbarToggler">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Overlay that will appear when sidebar is open -->
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="close-sidebar d-lg-none" id="closeSidebar">&times;</button>

            <!-- Centered Navigation Links -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="home">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                        <li><a class="dropdown-item" href="#">Frontend Development</a></li>
                        <li><a class="dropdown-item" href="#">Backend Development</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact-us">Contact</a>
                </li>
            </ul>

            <!-- Right-aligned items (Account) -->
            <div class="d-flex align-items-center">
                <div class="ms-3">
                    <a href="register" class="btn btn-outline-primary" style="font-weight: 800;">Create Account</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Sidebar toggle functionality
    const navbarToggler = document.getElementById('navbarToggler');
    const navbarCollapse = document.getElementById('navbarNav');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const closeSidebar = document.getElementById('closeSidebar');

    navbarToggler.addEventListener('click', function() {
        navbarCollapse.classList.add('show');
        sidebarOverlay.classList.add('show');
        document.body.style.overflow = 'hidden';
    });

    closeSidebar.addEventListener('click', function() {
        closeMobileMenu();
    });

    sidebarOverlay.addEventListener('click', function() {
        closeMobileMenu();
    });

    // Close navbar when clicking on a nav link
    const navLinks = document.querySelectorAll('.nav-link, .btn');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 991.98) {
                closeMobileMenu();
            }
        });
    });

    function closeMobileMenu() {
        navbarCollapse.classList.remove('show');
        sidebarOverlay.classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    // Close menu when window is resized above mobile breakpoint
    window.addEventListener('resize', function() {
        if (window.innerWidth > 991.98) {
            closeMobileMenu();
        }
    });
</script>