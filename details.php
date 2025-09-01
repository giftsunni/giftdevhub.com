<?php require './partial/head.php' ?>

<body>

    <?php require './partial/navbar.php' ?>




    <!-- Our Blog Section -->
    <section class="blog-area pt-100 pb-70 position-relative overflow-hidden">


        <style>
            .banner {
                background: #0b182bff;
                background-size: 200% 200%;
                animation: gradientWave 8s ease infinite;
                padding: 100px 8px 100px;
                /* More bottom padding for curve space */
                color: #fff;
                text-align: center;
                position: relative;
                overflow: hidden;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);

                /* Curved bottom edge */
                clip-path: ellipse(140% 100% at 50% 0%);
                -webkit-clip-path: ellipse(140% 100% at 50% 0%);

                /* Text styling */
                text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
                font-family: 'Segoe UI', system-ui, sans-serif;

                /* Subtle pattern overlay */
                background-image:
                    radial-gradient(circle at 20% 30%, rgba(59, 11, 181, 0.05) 0.5px, transparent 1px),
                    radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.05) 0.5px, transparent 1px);
                background-size: 40px 40px;
            }

            /* Gradient wave animation */
            @keyframes gradientWave {
                0% {
                    background-position: 0% 50%;
                }

                50% {
                    background-position: 100% 50%;
                }

                100% {
                    background-position: 0% 50%;
                }
            }

            /* Top accent bar */
            .banner::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(to right,
                        rgba(255, 102, 0, 0.8),
                        rgba(0, 102, 255, 0.8));
            }

            /* Bottom curve overlay */
            .banner::after {
                content: '';
                position: absolute;
                bottom: -1px;
                left: 0;
                right: 0;
                height: 80px;
                background: white;
                clip-path: ellipse(100% 100% at 50% 100%);
                -webkit-clip-path: ellipse(100% 100% at 50% 100%);
            }

            .banner h1 {
                font-size: 42px;
                margin-bottom: 15px;
                font-weight: 700;
                position: relative;
                display: inline-block;
            }

            .banner h1::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 60px;
                height: 3px;
                background: linear-gradient(to right, #ff6600, #0066ff);
                border-radius: 3px;
            }

            .banner .meta {
                font-size: 16px;
                opacity: 0.9;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 20px;
                flex-wrap: wrap;
            }

            .banner .meta i {
                margin-right: 5px;
                color: #ff6600;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .banner {
                    padding: 80px 15px 140px;
                    background-size: 300% 300%;
                    animation-duration: 10s;
                    clip-path: ellipse(160% 100% at 50% 0%);
                    -webkit-clip-path: ellipse(160% 100% at 50% 0%);
                }

                .banner h1 {
                    font-size: 32px;
                }

                .banner .meta {
                    font-size: 14px;
                    gap: 10px;
                }
            }
        </style>

        <!-- Blog Header -->
        <section class="banner" data-aos="fade-down">
            <h1>Course Details</h1>
            <div class="meta">
                <span><i class='bx bxs-calendar'></i> August 5, 2024</span>
                <span><i class='bx bxs-user'></i> Admin</span>
            </div>
        </section>


        <style>
            :root {
                --primary-color: #0b182bff;
                --secondary-color: #1f314dff;
                --accent-color: #ff6b6b;
                --dark-color: #2c2c54;
                --light-color: #f7f7f7;
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
            .fa-shopping-cart:hover{
                color: white;
            }

            @media (max-width: 768px) {
                .course-meta {
                    flex-wrap: wrap;
                }
            }
        </style>


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
                                <img src="./blog-img12.png" alt="JavaScript Tips" class="post-img">
                                <div>
                                    <h5 class="post-title"><a href="#" class="text-decoration-none">10 JavaScript Tips Every Developer Should Know</a></h5>
                                    <div class="post-date"><i class="far fa-calendar me-1"></i>June 12, 2023</div>
                                </div>
                            </div>
                            <div class="post-item">
                                <img src="./computer02.avif" alt="CSS Framework" class="post-img">
                                <div>
                                    <h5 class="post-title"><a href="#" class="text-decoration-none">Comparing CSS Frameworks: Bootstrap vs Tailwind</a></h5>
                                    <div class="post-date"><i class="far fa-calendar me-1"></i>June 5, 2023</div>
                                </div>
                            </div>
                            <div class="post-item">
                                <img src="./01.jpg" alt="React Performance" class="post-img">
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


        <!-- AOS Animation -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                once: true
            });
        </script>




        </div>
    </section>


    <?php require './partial/footer.php' ?>
    <?php require './partial/script.php' ?>
</body>

</html>