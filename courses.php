<?php require './partial/head.php' ?>


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
    <style>
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
            --accent-color: #ff6b6b;
            --dark-color: #2c2c54;
            --light-color: #f7f7f7;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background-color: #f9f9f9;
        }

        .course-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 3rem 0;
        }

        .course-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .course-img {
            height: 300px;
            object-fit: cover;
            width: 100%;
        }

        .course-title {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
        }

        .course-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        .course-meta {
            display: flex;
            gap: 15px;
            margin: 1.5rem 0;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
            font-size: 0.9rem;
        }

        .meta-item i {
            color: var(--primary-color);
        }

        .btn-enroll {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-enroll:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 84, 200, 0.4);
        }

        .sidebar-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .sidebar-title {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .sidebar-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        .post-item {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .post-item:hover {
            transform: translateX(5px);
        }

        .post-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .post-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
        }

        .post-title {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 5px;
            color: var(--dark-color);
        }

        .post-date {
            font-size: 0.8rem;
            color: #888;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .feature-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }

        .instructor-card {
            display: flex;
            gap: 15px;
            align-items: center;
            background: rgba(78, 84, 200, 0.1);
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .instructor-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .rating {
            color: #ffc107;
            margin: 10px 0;
        }

        @media (max-width: 768px) {
            .course-meta {
                flex-wrap: wrap;
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


    <section class="course-section">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Course Content -->
                <div class="col-lg-8 col-md-12">
                    <div class="course-card p-4">
                        <img src="./background_Img.jpg" alt="Advanced Web Development Course" class="course-img rounded-3">

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div>
                                <span class="badge bg-primary mb-2">Bestseller</span>
                                <span class="badge bg-success ms-2">Updated</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">4.5 (2,478 reviews)</span>
                            </div>
                        </div>

                        <h1 class="course-title mt-3">Advanced Web Development Masterclass</h1>

                        <p class="lead">
                            Master modern web development with this comprehensive course. Learn to build responsive,
                            interactive websites and applications using the latest technologies and frameworks.
                        </p>

                        <div class="course-meta">
                            <div class="meta-item">
                                <i class="far fa-clock"></i>
                                <span>48 hours of content</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-tasks"></i>
                                <span>12 modules</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-download"></i>
                                <span>36 resources</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-certificate"></i>
                                <span>Certificate</span>
                            </div>
                        </div>

                        <p>
                            This immersive course takes you from fundamental concepts to advanced techniques in web development.
                            You'll gain hands-on experience with HTML5, CSS3, JavaScript (ES6+), React, Node.js, and more.
                            Through real-world projects, you'll build a portfolio that showcases your skills to potential employers.
                        </p>

                        <h4 class="mt-4 mb-3">What You'll Learn:</h4>
                        <ul class="feature-list">
                            <li>Create responsive layouts with Flexbox and CSS Grid</li>
                            <li>Build interactive web applications with modern JavaScript</li>
                            <li>Develop single-page applications with React</li>
                            <li>Implement server-side functionality with Node.js and Express</li>
                            <li>Work with databases and user authentication</li>
                            <li>Deploy applications to cloud platforms</li>
                        </ul>

                        <div class="instructor-card">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Instructor" class="instructor-img">
                            <div>
                                <h5 class="mb-1">Mark Johnson</h5>
                                <p class="mb-0 text-muted">Senior Web Developer with 10+ years of experience</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div>
                                <h3 class="text-primary mb-0">$89.99</h3>
                                <s class="text-muted">$129.99</s>
                            </div>
                            <button class="btn btn-enroll">
                                <i class="fas fa-shopping-cart me-2"></i>Enroll Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12">
                    <!-- Recent Posts -->
                    <div class="sidebar-card">
                        <h4 class="sidebar-title">Recent Posts</h4>
                        <div class="post-item">
                            <img src="post1.jpg" alt="JavaScript Tips" class="post-img">
                            <div>
                                <h5 class="post-title"><a href="#" class="text-decoration-none">10 JavaScript Tips Every Developer Should Know</a></h5>
                                <div class="post-date"><i class="far fa-calendar me-1"></i>June 12, 2023</div>
                            </div>
                        </div>
                        <div class="post-item">
                            <img src="post2.jpg" alt="CSS Framework" class="post-img">
                            <div>
                                <h5 class="post-title"><a href="#" class="text-decoration-none">Comparing CSS Frameworks: Bootstrap vs Tailwind</a></h5>
                                <div class="post-date"><i class="far fa-calendar me-1"></i>June 5, 2023</div>
                            </div>
                        </div>
                        <div class="post-item">
                            <img src="post3.jpg" alt="React Performance" class="post-img">
                            <div>
                                <h5 class="post-title"><a href="#" class="text-decoration-none">Optimizing React Applications for Performance</a></h5>
                                <div class="post-date"><i class="far fa-calendar me-1"></i>May 28, 2023</div>
                            </div>
                        </div>
                    </div>

                    <!-- About the Course -->
                    <div class="sidebar-card">
                        <h4 class="sidebar-title">About the Course</h4>
                        <p>
                            Our course is designed to provide hands-on experience and real-world knowledge.
                            You'll gain insights from industry experts and develop skills that matter in today's
                            competitive job market.
                        </p>
                        <div class="d-flex justify-content-between mt-4">
                            <div class="text-center">
                                <div class="fw-bold text-primary fs-3">98%</div>
                                <div class="text-muted">Completion Rate</div>
                            </div>
                            <div class="text-center">
                                <div class="fw-bold text-primary fs-3">12k+</div>
                                <div class="text-muted">Students</div>
                            </div>
                            <div class="text-center">
                                <div class="fw-bold text-primary fs-3">4.8/5</div>
                                <div class="text-muted">Satisfaction</div>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-card">
                        <h4 class="sidebar-title">Categories</h4>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark p-2">Web Development</span>
                            <span class="badge bg-light text-dark p-2">JavaScript</span>
                            <span class="badge bg-light text-dark p-2">React</span>
                            <span class="badge bg-light text-dark p-2">Node.js</span>
                            <span class="badge bg-light text-dark p-2">CSS</span>
                            <span class="badge bg-light text-dark p-2">HTML5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>






    <?php require './partial/footer.php' ?>

    <?php require './partial/script.php' ?>
</body>

</html>