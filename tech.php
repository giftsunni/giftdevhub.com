<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Resources | TechSpark</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0d6efd;
        }
        
        .hero-blog {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1499750310107-5fef28a66643');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        
        .blog-card {
            transition: all 0.3s ease;
            border: none;
            margin-bottom: 30px;
        }
        
        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .blog-img {
            height: 200px;
            object-fit: cover;
        }
        
        .badge-category {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 15px;
            font-weight: 500;
        }
        
        .resource-card {
            border-left: 4px solid var(--primary);
            transition: all 0.3s ease;
        }
        
        .resource-card:hover {
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
        
        .newsletter-box {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Tech Resources & Insights</h1>
                    <p class="lead mb-5">Stay updated with the latest trends, tutorials, and best practices in software development.</p>
                    <div class="input-group mb-3 mx-auto" style="max-width: 500px;">
                        <input type="text" class="form-control form-control-lg" placeholder="Search articles...">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="fw-bold mb-5 text-center">Featured <span class="text-primary">Articles</span></h2>
            
            <div class="row g-4">
                <!-- Post 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c" class="card-img-top blog-img" alt="Web Development">
                            <span class="badge bg-primary badge-category">Web Dev</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <small class="text-muted me-3"><i class="far fa-calendar me-2"></i>June 15, 2023</small>
                                <small class="text-muted"><i class="far fa-clock me-2"></i>8 min read</small>
                            </div>
                            <h4 class="card-title">The Future of React in 2023</h4>
                            <p class="card-text">Exploring the latest features in React 18 and how they're changing frontend development practices.</p>
                            <a href="#" class="btn btn-link ps-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1629904853893-c2c8981a1dc5" class="card-img-top blog-img" alt="Data Science">
                            <span class="badge bg-success badge-category">Data Science</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <small class="text-muted me-3"><i class="far fa-calendar me-2"></i>May 28, 2023</small>
                                <small class="text-muted"><i class="far fa-clock me-2"></i>12 min read</small>
                            </div>
                            <h4 class="card-title">Python for Data Analysis: Pandas Pro Tips</h4>
                            <p class="card-text">Advanced techniques to optimize your data workflows and analysis using Python's Pandas library.</p>
                            <a href="#" class="btn btn-link ps-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card card h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee" class="card-img-top blog-img" alt="Mobile Dev">
                            <span class="badge bg-warning text-dark badge-category">Mobile</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <small class="text-muted me-3"><i class="far fa-calendar me-2"></i>May 10, 2023</small>
                                <small class="text-muted"><i class="far fa-clock me-2"></i>10 min read</small>
                            </div>
                            <h4 class="card-title">Flutter vs React Native in 2023</h4>
                            <p class="card-text">A comprehensive comparison to help you choose the right cross-platform framework for your project.</p>
                            <a href="#" class="btn btn-link ps-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-lg">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- Tutorials Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="fw-bold mb-5 text-center">Latest <span class="text-primary">Tutorials</span></h2>
            
            <div class="row g-4">
                <!-- Tutorial 1 -->
                <div class="col-lg-6">
                    <div class="resource-card bg-white p-4 h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-4">
                                <i class="fab fa-youtube text-danger fa-3x"></i>
                            </div>
                            <div>
                                <h4>Building a REST API with Node.js</h4>
                                <p class="text-muted">Step-by-step guide to creating a secure, scalable API using Express and MongoDB.</p>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-3"><i class="far fa-clock me-2"></i>25 min</small>
                                    <small class="text-muted"><i class="fas fa-level-up-alt me-2"></i>Intermediate</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tutorial 2 -->
                <div class="col-lg-6">
                    <div class="resource-card bg-white p-4 h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-4">
                                <i class="fas fa-file-alt text-primary fa-3x"></i>
                            </div>
                            <div>
                                <h4>CSS Grid Complete Guide</h4>
                                <p class="text-muted">Master modern layout techniques with this comprehensive CSS Grid tutorial.</p>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-3"><i class="far fa-clock me-2"></i>18 min</small>
                                    <small class="text-muted"><i class="fas fa-level-up-alt me-2"></i>Beginner</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tutorial 3 -->
                <div class="col-lg-6">
                    <div class="resource-card bg-white p-4 h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-4">
                                <i class="fab fa-youtube text-danger fa-3x"></i>
                            </div>
                            <div>
                                <h4>Docker for Developers</h4>
                                <p class="text-muted">Learn containerization fundamentals and how to Dockerize your applications.</p>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-3"><i class="far fa-clock me-2"></i>32 min</small>
                                    <small class="text-muted"><i class="fas fa-level-up-alt me-2"></i>Advanced</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tutorial 4 -->
                <div class="col-lg-6">
                    <div class="resource-card bg-white p-4 h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-4">
                                <i class="fas fa-file-alt text-primary fa-3x"></i>
                            </div>
                            <div>
                                <h4>State Management in React</h4>
                                <p class="text-muted">Comparing Redux, Context API, and newer solutions like Zustand and Jotai.</p>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-3"><i class="far fa-clock me-2"></i>22 min</small>
                                    <small class="text-muted"><i class="fas fa-level-up-alt me-2"></i>Intermediate</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-lg">Browse All Tutorials</a>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="newsletter-box p-5 text-center">
                        <h2 class="fw-bold mb-3">Subscribe to Our Newsletter</h2>
                        <p class="lead mb-4">Get the latest tech tutorials, articles, and resources delivered to your inbox weekly.</p>
                        <form class="row g-3 justify-content-center">
                            <div class="col-md-8">
                                <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                            </div>
                            <div class="col-12">
                                <small class="text-muted">We'll never share your email. Unsubscribe anytime.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
</body>
</html>