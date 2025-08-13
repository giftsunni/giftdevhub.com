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


        <!-- Blog Content -->
        <style>
            /* Layout */
            .blog-container {
                max-width: 1200px;
                margin: 50px auto;
                display: flex;
                gap: 30px;
                padding: 0 15px;
                flex-wrap: wrap;
                /* Allows stacking on small screens */
            }

            /* Blog Content */
            .blog-content {
                flex: 3;
                background: #fff;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }

            /* Responsive Image */
            .blog-content img {
                width: 100%;
                height: auto;
                display: block;
                border-radius: 10px;
                margin-bottom: 20px;
            }

            /* Sidebar */
            .sidebar {
                flex: 1;
                min-width: 280px;
            }

            .widget {
                background: #fff;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }

            /* Responsive Behavior */
            @media (max-width: 768px) {
                .blog-container {
                    flex-direction: column;
                }

            }
        </style>

        <div class="blog-container">

            <!-- Main Article -->
            <div class="blog-content" data-aos="fade-up">
                <img src="https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Blog Image">

                <p>
                    In today's fast-paced digital world, businesses are constantly seeking innovative ways to reach their
                    customers. One of the most effective strategies is converting your website into a mobile application...
                </p>

                <h2>Why Go Mobile?</h2>
                <p>
                    Mobile apps offer faster access, better user experience, and offline capabilities that websites can't
                    match...
                </p>

                <h2>Steps to Convert Your Website to an App</h2>
                <p>
                    1. Assess your website's mobile compatibility.<br>
                    2. Choose the right framework or platform for conversion.<br>
                    3. Ensure your app is optimized for speed and performance...
                </p>

                <p>
                    Ready to take your business mobile? Our team at DyseaTech specializes in creating seamless mobile
                    experiences that keep your users engaged.
                </p>
            </div>

            <!-- Sidebar -->
            <aside class="sidebar" data-aos="fade-left">

                <!-- Recent Posts -->
                <div class="widget">
                    <h3>Recent Posts</h3>
                    <ul>
                        <li><a href="#">How AI is Changing the Tech Industry</a></li>
                        <li><a href="#">Top 5 UI/UX Trends in 2024</a></li>
                        <li><a href="#">Boost Your SEO with These Tips</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="widget">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#">Mobile Development</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Technology News</a></li>
                    </ul>
                </div>

            </aside>
        </div>


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