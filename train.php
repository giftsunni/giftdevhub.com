<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Education | TechSpark</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --primary-light: rgba(13, 110, 253, 0.1);
        }
        
        .hero-education {
            background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
            color: white;
            padding: 100px 0;
        }
        
        .course-card {
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .course-img {
            height: 200px;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .course-card:hover .course-img {
            transform: scale(1.05);
        }
        
        .badge-pill {
            padding: 8px 15px;
            font-weight: 500;
        }
        
        .instructor-card {
            text-align: center;
            padding: 20px;
            transition: all 0.3s ease;
        }
        
        .instructor-card:hover {
            transform: translateY(-5px);
        }
        
        .instructor-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .testimonial-card {
            border-left: 4px solid var(--primary);
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-education">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">Tech Education & Training</h1>
                    <p class="lead mb-4">Empowering the next generation of developers with industry-relevant skills.</p>
                    <p>At TechSpark, we don't just build software - we build careers. Our practical, project-based courses are designed by professional developers for aspiring technologists.</p>
                    <a href="#courses" class="btn btn-light btn-lg mt-3">Explore Courses</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" alt="Students Learning" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="py-5" id="courses">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our <span class="text-primary">Course</span> Offerings</h2>
                <p class="lead">Hands-on training in today's most in-demand technologies</p>
            </div>

            <div class="row g-4">
                <!-- Course 1 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="course-card card h-100">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c" class="card-img-top course-img" alt="Web Development">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-primary bg-opacity-10 text-primary badge-pill">12 Weeks</span>
                                <span class="badge bg-success bg-opacity-10 text-success badge-pill">Beginner</span>
                            </div>
                            <h4 class="card-title">Full Stack Web Development</h4>
                            <p class="card-text">Master HTML, CSS, JavaScript, React, Node.js, and MongoDB to build modern web applications.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Project-based curriculum</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Career support</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Certificate of completion</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="#" class="btn btn-primary w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-card card h-100">
                        <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee" class="card-img-top course-img" alt="Mobile Development">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-primary bg-opacity-10 text-primary badge-pill">10 Weeks</span>
                                <span class="badge bg-warning bg-opacity-10 text-warning badge-pill">Intermediate</span>
                            </div>
                            <h4 class="card-title">Mobile App Development</h4>
                            <p class="card-text">Build cross-platform mobile apps with React Native and Flutter, from prototyping to publishing.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> iOS & Android</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Firebase integration</li>
                                <li><i class="fas fa-check text-primary me-2"></i> App Store deployment</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="#" class="btn btn-primary w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="course-card card h-100">
                        <img src="https://images.unsplash.com/photo-1629904853893-c2c8981a1dc5" class="card-img-top course-img" alt="Data Science">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-primary bg-opacity-10 text-primary badge-pill">14 Weeks</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger badge-pill">Advanced</span>
                            </div>
                            <h4 class="card-title">Data Science & Python</h4>
                            <p class="card-text">Learn Python, Pandas, NumPy, and machine learning to analyze and visualize complex data.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Real-world datasets</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> ML model building</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Data storytelling</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="#" class="btn btn-primary w-100">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-lg">View All Courses</a>
            </div>
        </div>
    </section>

    <!-- Learning Approach -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" alt="Learning Approach" class="img-fluid rounded shadow">
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

    <!-- Instructors Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Meet Our <span class="text-primary">Instructors</span></h2>
                <p class="lead">Learn from industry professionals with real-world experience</p>
            </div>

            <div class="row g-4">
                <!-- Instructor 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="instructor-card">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Alex Johnson" class="instructor-img">
                        <h4>Alex Johnson</h4>
                        <p class="text-muted">Senior Web Developer</p>
                        <p>10+ years building scalable web applications for Fortune 500 companies.</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Instructor 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="instructor-card">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Kim" class="instructor-img">
                        <h4>Sarah Kim</h4>
                        <p class="text-muted">Mobile Architect</p>
                        <p>Former lead developer at a top mobile app agency with 50+ published apps.</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Instructor 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="instructor-card">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Michael Chen" class="instructor-img">
                        <h4>Michael Chen</h4>
                        <p class="text-muted">Data Scientist</p>
                        <p>Machine learning specialist with PhD in Computer Science and published research.</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Instructor 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="instructor-card">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Patel" class="instructor-img">
                        <h4>Priya Patel</h4>
                        <p class="text-muted">DevOps Engineer</p>
                        <p>Cloud infrastructure expert with AWS, Azure, and Kubernetes certifications.</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-github"></i></a>
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

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-5 text-center">
            <h2 class="display-5 fw-bold mb-4">Ready to Launch Your Tech Career?</h2>
            <p class="lead mb-5">Join our next cohort and gain the skills employers are looking for.</p>
            <a href="#" class="btn btn-light btn-lg px-4 me-3">Apply Now</a>
            <a href="#" class="btn btn-outline-light btn-lg px-4">Schedule Consultation</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 TechSpark. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-white text-decoration-none">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>