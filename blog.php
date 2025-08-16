<?php require './partial/head.php' ?>

<body>

    <?php require './partial/navbar.php' ?>




    <!-- Our Blog Section -->
    <section class="blog-area pt-100 pb-70 position-relative overflow-hidden">
        <!-- Background divider effect -->
        <div class="background-divider" style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #00000020 50%, #ffffff 50%);
        z-index: -1;
        opacity: 0.9;
    "></div>

        <!-- Diagonal divider overlay -->
        <div class="diagonal-overlay" style="
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' preserveAspectRatio=\'none\'><path d=\'M0,0 L100,100 L100,0 Z\' fill=\'%23ffffff\' opacity=\'0.2\'/></svg>');
    background-size: 100px 100px;
    z-index: -1;
    opacity: 0.15;
"></div>


        <div class="container">
            <!-- Styled Section Title -->
            <style>
                .section-title-container {
                    position: relative;
                    padding: 60px 0;
                    margin-bottom: 30px;
                    background: linear-gradient(135deg, #091e34ff 0%, #0b182bff 100%);
                    overflow: hidden;
                }

                /* Curved top edge */
                .section-title-container::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    height: 40px;
                    background: white;
                    border-radius: 0 0 50% 50% / 0 0 30px 30px;
                    z-index: 1;
                }

                /* Curved bottom edge */
                .section-title-container::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    height: 40px;
                    background: white;
                    border-radius: 50% 50% 0 0 / 30px 30px 0 0;
                    z-index: 1;
                }

                .section-title {
                    position: relative;
                    z-index: 2;
                }

                .section-subtitle {
                    display: inline-block;
                    color: #f2f2f2f2;
                    font-size: 16px;
                    font-weight: 600;
                    letter-spacing: 2px;
                    margin-bottom: 15px;
                    position: relative;
                    margin-top: 20px;
                    text-transform: uppercase;
                }

                .section-subtitle::after {
                    content: '';
                    position: absolute;
                    bottom: -8px;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 50px;
                    height: 2px;
                    background: linear-gradient(to right, #ff6600, #0066ff);
                }

                .section-title h2 {
                    margin: 0;
                    font-size: 38px;
                    font-weight: 700;
                    color: #f2f2f2f2;
                    position: relative;
                    display: inline-block;
                    padding-bottom: 15px;
                }

                .section-title h2 span {
                    color: #0066ff;
                }

                .section-title h2::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 80px;
                    height: 3px;
                    background: linear-gradient(to right, #ff6600, #0066ff);
                    border-radius: 3px;
                }

                .section-title p {
                    margin-top: 20px;
                    color: #f2f2f2f2;
                    max-width: 700px;
                    margin-left: auto;
                    margin-right: auto;
                    font-size: 18px;
                    line-height: 1.6;
                }

                /* Responsive adjustments */
                @media (max-width: 768px) {
                    .section-title-container {
                        padding: 40px 0;
                    }

                    .section-title h2 {
                        font-size: 32px;
                    }

                    .section-title p {
                        font-size: 16px;
                        padding: 0 15px;
                    }
                }
            </style>

            <!-- Section Title with Curved Background -->
            <div class="section-title-container">
                <div class="container">
                    <div class="section-title text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                        <span class="section-subtitle">
                            LATEST INSIGHTS
                        </span>
                        <h2>
                            Our <span>Blog</span>
                        </h2>
                        <p>
                            Discover the latest trends, expert tips, and innovative ideas in technology and digital transformation.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4 pt-4">
                <!-- Blog Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card" style="
                    border-radius: 12px;
                    overflow: hidden;
                    background: #fff;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
                    height: 100%;
                ">
                        <div class="blog-img position-relative" style="overflow: hidden;">
                            <a href="blog/turn-your-website-into-a-mobile-app-with-dyseatech">
                                <div class="img-container" style="height: 250px; overflow: hidden;">
                                    <img src="uploads/33a0e8f379a385804b8fbfc2e8a349794ff8a70918ee16e3da206f04903d2148.jpg"
                                        alt="Blog Image"
                                        style="
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                        transition: transform 0.5s ease;
                                     "
                                        class="hover-zoom">
                                </div>
                            </a>
                            <div class="blog-tag" style="
                            position: absolute;
                            top: 20px;
                            left: 20px;
                            background: linear-gradient(45deg, #ff6600, #ff8c00);
                            color: #fff;
                            padding: 8px 15px;
                            text-align: center;
                            border-radius: 6px;
                            box-shadow: 0 4px 15px rgba(255, 102, 0, 0.3);
                        ">
                                <h3 style="margin: 0; font-size: 18px; font-weight: 700;">05</h3>
                                <span style="font-size: 13px; font-weight: 500;">AUGUST</span>
                            </div>
                        </div>
                        <div class="content p-4" style="position: relative;">
                            <div style="
                            position: absolute;
                            top: -20px;
                            right: 20px;
                            width: 40px;
                            height: 40px;
                            background: #0066ff;
                            border-radius: 50%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: white;
                            box-shadow: 0 4px 15px rgba(0, 102, 255, 0.3);
                        ">
                                <i class='bx bx-link-external'></i>
                            </div>

                            <ul class="list-unstyled d-flex gap-3 mb-3" style="font-size: 14px; color: #888;">
                                <li style="display: flex; align-items: center; gap: 5px;">
                                    <i class='bx bxs-user' style="color: #ff6600;"></i>
                                    <span>By Admin</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 5px;">
                                    <i class='bx bx-purchase-tag-alt' style="color: #0066ff;"></i>
                                    <span>Mobile App</span>
                                </li>
                            </ul>

                            <h3 style="
                            margin-bottom: 15px;
                            font-size: 20px;
                            line-height: 1.4;
                            font-weight: 700;
                        ">
                                <a href="blog/turn-your-website-into-a-mobile-app-with-dyseatech" style="
                                color: #333;
                                text-decoration: none;
                                background-image: linear-gradient(#ff6600, #ff6600);
                                background-size: 0% 2px;
                                background-repeat: no-repeat;
                                background-position: left bottom;
                                transition: background-size 0.3s ease;
                                padding-bottom: 3px;
                            ">
                                    Turn Your Website Into a Mobile App with DyseaTech
                                </a>
                            </h3>

                            <a href="blog/turn-your-website-into-a-mobile-app-with-dyseatech" class="read-more-btn" style="
                            display: inline-flex;
                            align-items: center;
                            color: #0066ff;
                            font-weight: 600;
                            text-decoration: none;
                            transition: all 0.3s ease;
                        ">
                                Read More
                                <i class='bx bx-chevron-right' style="transition: transform 0.3s ease;"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 2 (Placeholder) -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card" style="
                    border-radius: 12px;
                    overflow: hidden;
                    background: #fff;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
                    height: 100%;
                ">
                        <div class="blog-img position-relative" style="overflow: hidden;">
                            <a href="#">
                                <div class="img-container" style="height: 250px; overflow: hidden;">
                                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                        alt="Blog Image"
                                        style="
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                        transition: transform 0.5s ease;
                                     "
                                        class="hover-zoom">
                                </div>
                            </a>
                            <div class="blog-tag" style="
                            position: absolute;
                            top: 20px;
                            left: 20px;
                            background: linear-gradient(45deg, #0066ff, #0099ff);
                            color: #fff;
                            padding: 8px 15px;
                            text-align: center;
                            border-radius: 6px;
                            box-shadow: 0 4px 15px rgba(0, 102, 255, 0.3);
                        ">
                                <h3 style="margin: 0; font-size: 18px; font-weight: 700;">12</h3>
                                <span style="font-size: 13px; font-weight: 500;">AUGUST</span>
                            </div>
                        </div>
                        <div class="content p-4" style="position: relative;">
                            <div style="
                            position: absolute;
                            top: -20px;
                            right: 20px;
                            width: 40px;
                            height: 40px;
                            background: #ff6600;
                            border-radius: 50%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: white;
                            box-shadow: 0 4px 15px rgba(255, 102, 0, 0.3);
                        ">
                                <i class='bx bx-link-external'></i>
                            </div>

                            <ul class="list-unstyled d-flex gap-3 mb-3" style="font-size: 14px; color: #888;">
                                <li style="display: flex; align-items: center; gap: 5px;">
                                    <i class='bx bxs-user' style="color: #ff6600;"></i>
                                    <span>By Admin</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 5px;">
                                    <i class='bx bx-purchase-tag-alt' style="color: #0066ff;"></i>
                                    <span>Web Development</span>
                                </li>
                            </ul>

                            <h3 style="
                            margin-bottom: 15px;
                            font-size: 20px;
                            line-height: 1.4;
                            font-weight: 700;
                        ">
                                <a href="details.html" style="
                                color: #333;
                                text-decoration: none;
                                background-image: linear-gradient(#0066ff, #0066ff);
                                background-size: 0% 2px;
                                background-repeat: no-repeat;
                                background-position: left bottom;
                                transition: background-size 0.3s ease;
                                padding-bottom: 3px;
                            ">
                                    The Future of Progressive Web Apps in 2023
                                </a>
                            </h3>

                            <a href="#" class="read-more-btn" style="
                            display: inline-flex;
                            align-items: center;
                            color: #ff6600;
                            font-weight: 600;
                            text-decoration: none;
                            transition: all 0.3s ease;
                        ">
                                Read More
                                <i class='bx bx-chevron-right' style="transition: transform 0.3s ease;"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 3 (Placeholder) -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="blog-card" style="
                    border-radius: 12px;
                    overflow: hidden;
                    background: #fff;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
                    height: 100%;
                ">
                        <div class="blog-img position-relative" style="overflow: hidden;">
                            <a href="#">
                                <div class="img-container" style="height: 250px; overflow: hidden;">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                        alt="Blog Image"
                                        style="
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                        transition: transform 0.5s ease;
                                     "
                                        class="hover-zoom">
                                </div>
                            </a>
                            <div class="blog-tag" style="
                            position: absolute;
                            top: 20px;
                            left: 20px;
                            background: linear-gradient(45deg, #00cc66, #00cc99);
                            color: #fff;
                            padding: 8px 15px;
                            text-align: center;
                            border-radius: 6px;
                            box-shadow: 0 4px 15px rgba(0, 204, 102, 0.3);
                        ">
                                <h3 style="margin: 0; font-size: 18px; font-weight: 700;">19</h3>
                                <span style="font-size: 13px; font-weight: 500;">AUGUST</span>
                            </div>
                        </div>
                        <div class="content p-4" style="position: relative;">
                            <div style="
                            position: absolute;
                            top: -20px;
                            right: 20px;
                            width: 40px;
                            height: 40px;
                            background: #9933ff;
                            border-radius: 50%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: white;
                            box-shadow: 0 4px 15px rgba(153, 51, 255, 0.3);
                        ">
                                <i class='bx bx-link-external'></i>
                            </div>

                            <ul class="list-unstyled d-flex gap-3 mb-3" style="font-size: 14px; color: #888;">
                                <li style="display: flex; align-items: center; gap: 5px;">
                                    <i class='bx bxs-user' style="color: #ff6600;"></i>
                                    <span>By Admin</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 5px;">
                                    <i class='bx bx-purchase-tag-alt' style="color: #0066ff;"></i>
                                    <span>UI/UX Design</span>
                                </li>
                            </ul>

                            <h3 style="
                            margin-bottom: 15px;
                            font-size: 20px;
                            line-height: 1.4;
                            font-weight: 700;
                        ">
                                <a href="#" style="
                                color: #333;
                                text-decoration: none;
                                background-image: linear-gradient(#9933ff, #9933ff);
                                background-size: 0% 2px;
                                background-repeat: no-repeat;
                                background-position: left bottom;
                                transition: background-size 0.3s ease;
                                padding-bottom: 3px;
                            ">
                                    Essential UI/UX Principles for Modern Websites
                                </a>
                            </h3>

                            <a href="#" class="read-more-btn" style="
                            display: inline-flex;
                            align-items: center;
                            color: #9933ff;
                            font-weight: 600;
                            text-decoration: none;
                            transition: all 0.3s ease;
                        ">
                                Read More
                                <i class='bx bx-chevron-right' style="transition: transform 0.3s ease;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                <a href="blog" class="view-all-btn" style="
                display: inline-block;
                padding: 12px 30px;
                background: linear-gradient(45deg, #0066ff, #00ccff);
                color: white;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 600;
                box-shadow: 0 5px 15px rgba(0, 102, 255, 0.3);
                transition: all 0.3s ease;
                border: none;
                position: relative;
                overflow: hidden;
            ">
                    View All Articles
                    <span style="
                    position: absolute;
                    top: -50%;
                    left: -50%;
                    width: 200%;
                    height: 200%;
                    background: linear-gradient(
                        to bottom right,
                        rgba(255, 255, 255, 0.3),
                        rgba(255, 255, 255, 0)
                    );
                    transform: rotate(30deg);
                    transition: all 0.3s ease;
                "></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Add this CSS for hover effects -->
    <style>
        .blog-card:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1) !important;
        }

        .blog-card:hover .hover-zoom {
            transform: scale(1.05);
        }

        .blog-card h3 a:hover {
            background-size: 100% 2px !important;
        }

        .read-more-btn:hover {
            color: #ff6600 !important;
        }

        .read-more-btn:hover i {
            transform: translateX(5px);
        }

        .view-all-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 102, 255, 0.4) !important;
        }

        .view-all-btn:hover span {
            left: 100%;
        }
    </style>


    <!-- Learning Approach -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <img src="./src/assests/img/IMG-20250813-WA0011.jpg" alt="Learning Approach" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="fw-bold mb-4">Our <span class="text-primary">Learning</span> Approach</h2>
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary">
                            <i class="fas fa-laptop-code fa-2x"></i>
                        </div>
                        <div>
                            <h4>Project-Based Curriculum</h4>
                            <p>Learn by building real applications from day one. Our courses focus on practical skills you'll use on the job.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary">
                            <i class="fas fa-user-tie fa-2x"></i>
                        </div>
                        <div>
                            <h4>Industry Expert Instructors</h4>
                            <p>Learn from professional developers who bring current industry practices into the classroom.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-4 text-primary">
                            <i class="fas fa-briefcase fa-2x"></i>
                        </div>
                        <div>
                            <h4>Career Support</h4>
                            <p>Get resume reviews, mock interviews, and job placement assistance after course completion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">What Our <span class="text-primary">Students</span> Say</h2>
                <p class="lead">Success stories from our alumni community</p>
            </div>

            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="testimonial-card bg-white p-4 h-100">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-4">"The Full Stack course completely transformed my career. I went from retail management to a junior developer position in just 3 months after completing the program."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Student" width="50" class="rounded-circle me-3">
                            <div>
                                <h6 class="mb-0">Emily Rodriguez</h6>
                                <small class="text-muted">Junior Developer at TechCorp</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card bg-white p-4 h-100">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-4">"The Data Science course gave me the practical skills I needed to transition from academic research to industry. The projects were incredibly relevant to real-world problems."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Student" width="50" class="rounded-circle me-3">
                            <div>
                                <h6 class="mb-0">David Kim</h6>
                                <small class="text-muted">Data Analyst at DataWorld</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card bg-white p-4 h-100">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="mb-4">"As a self-taught developer, the Mobile App course filled crucial gaps in my knowledge. The instructor's industry insights were invaluable."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Student" width="50" class="rounded-circle me-3">
                            <div>
                                <h6 class="mb-0">Sophia Martinez</h6>
                                <small class="text-muted">Freelance App Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>















    <?php require './partial/footer.php' ?>
    <?php require './partial/script.php' ?>
</body>

</html>