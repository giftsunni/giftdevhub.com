<style>
    /* Blog Section Container with Curved Background */
    .blog-section-container {
        position: relative;
        padding: 80px 0;
        background: #f8f9fa;
        overflow: hidden;
    }
    
    /* Curved top edge */
    .blog-section-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 50px;
        background: white;
        border-radius: 0 0 50% 50% / 0 0 30px 30px;
        z-index: 1;
    }
    
    /* Curved bottom edge */
    .blog-section-container::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 50px;
        background: white;
        border-radius: 50% 50% 0 0 / 30px 30px 0 0;
        z-index: 1;
    }
    
    /* Section Title Styling */
    .section-title {
        position: relative;
        z-index: 2;
    }
    
    .section-subtitle {
        display: inline-block;
        color: #ff6600;
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 2px;
        margin-bottom: 15px;
        position: relative;
        margin-top: 20px;
    }
    
    .section-subtitle span {
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
        color: #333;
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
        color: #666;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        font-size: 18px;
        line-height: 1.6;
    }
    
    /* Blog Cards */
    .blog-card {
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        height: 100%;
        position: relative;
        z-index: 2;
    }
    
    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .blog-section-container {
            padding: 60px 0;
        }
        
        .blog-section-container::before,
        .blog-section-container::after {
            height: 30px;
        }
        
        .section-title h2 {
            font-size: 32px;
        }
    }
</style>

<!-- Blog Section with Curved Background -->
<div class="blog-section-container">
    <div class="container">
        <!-- Styled Section Title -->
        <div class="section-title text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-subtitle">
                LATEST INSIGHTS
                <span></span>
            </span>
            <h2>
                Our <span>Blog</span>
            </h2>
            <p>
                Discover the latest trends, expert tips, and innovative ideas in technology and digital transformation.
            </p>
        </div>

        <div class="row g-4 pt-4">
            <!-- Blog Card 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card">
                    <div class="blog-img position-relative" style="overflow: hidden;">
                        <a href="blog/turn-your-website-into-a-mobile-app-with-dyseatech">
                            <div class="img-container" style="height: 250px; overflow: hidden;">
                                <img src="uploads/33a0e8f379a385804b8fbfc2e8a349794ff8a70918ee16e3da206f04903d2148.jpg"
                                    alt="Blog Image"
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                                    class="hover-zoom">
                            </div>
                        </a>
                        <div class="blog-tag">
                            <h3 style="margin: 0; font-size: 18px; font-weight: 700;">05</h3>
                            <span style="font-size: 13px; font-weight: 500;">AUGUST</span>
                        </div>
                    </div>
                    <div class="content p-4" style="position: relative;">
                        <div style="position: absolute; top: -20px; right: 20px; width: 40px; height: 40px; background: #0066ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; box-shadow: 0 4px 15px rgba(0, 102, 255, 0.3);">
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

                        <h3 style="margin-bottom: 15px; font-size: 20px; line-height: 1.4; font-weight: 700;">
                            <a href="blog/turn-your-website-into-a-mobile-app-with-dyseatech" style="color: #333; text-decoration: none; background-image: linear-gradient(#ff6600, #ff6600); background-size: 0% 2px; background-repeat: no-repeat; background-position: left bottom; transition: background-size 0.3s ease; padding-bottom: 3px;">
                                Turn Your Website Into a Mobile App with DyseaTech
                            </a>
                        </h3>

                        <a href="blog/turn-your-website-into-a-mobile-app-with-dyseatech" class="read-more-btn" style="display: inline-flex; align-items: center; color: #0066ff; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                            Read More
                            <i class='bx bx-chevron-right' style="transition: transform 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 (Placeholder) -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card">
                    <div class="blog-img position-relative" style="overflow: hidden;">
                        <a href="#">
                            <div class="img-container" style="height: 250px; overflow: hidden;">
                                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                    alt="Blog Image"
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                                    class="hover-zoom">
                            </div>
                        </a>
                        <div class="blog-tag">
                            <h3 style="margin: 0; font-size: 18px; font-weight: 700;">12</h3>
                            <span style="font-size: 13px; font-weight: 500;">AUGUST</span>
                        </div>
                    </div>
                    <div class="content p-4" style="position: relative;">
                        <div style="position: absolute; top: -20px; right: 20px; width: 40px; height: 40px; background: #ff6600; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; box-shadow: 0 4px 15px rgba(255, 102, 0, 0.3);">
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

                        <h3 style="margin-bottom: 15px; font-size: 20px; line-height: 1.4; font-weight: 700;">
                            <a href="#" style="color: #333; text-decoration: none; background-image: linear-gradient(#0066ff, #0066ff); background-size: 0% 2px; background-repeat: no-repeat; background-position: left bottom; transition: background-size 0.3s ease; padding-bottom: 3px;">
                                The Future of Progressive Web Apps in 2023
                            </a>
                        </h3>

                        <a href="#" class="read-more-btn" style="display: inline-flex; align-items: center; color: #ff6600; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                            Read More
                            <i class='bx bx-chevron-right' style="transition: transform 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3 (Placeholder) -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-card">
                    <div class="blog-img position-relative" style="overflow: hidden;">
                        <a href="#">
                            <div class="img-container" style="height: 250px; overflow: hidden;">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                    alt="Blog Image"
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                                    class="hover-zoom">
                            </div>
                        </a>
                        <div class="blog-tag">
                            <h3 style="margin: 0; font-size: 18px; font-weight: 700;">19</h3>
                            <span style="font-size: 13px; font-weight: 500;">AUGUST</span>
                        </div>
                    </div>
                    <div class="content p-4" style="position: relative;">
                        <div style="position: absolute; top: -20px; right: 20px; width: 40px; height: 40px; background: #9933ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; box-shadow: 0 4px 15px rgba(153, 51, 255, 0.3);">
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

                        <h3 style="margin-bottom: 15px; font-size: 20px; line-height: 1.4; font-weight: 700;">
                            <a href="#" style="color: #333; text-decoration: none; background-image: linear-gradient(#9933ff, #9933ff); background-size: 0% 2px; background-repeat: no-repeat; background-position: left bottom; transition: background-size 0.3s ease; padding-bottom: 3px;">
                                Essential UI/UX Principles for Modern Websites
                            </a>
                        </h3>

                        <a href="#" class="read-more-btn" style="display: inline-flex; align-items: center; color: #9933ff; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                            Read More
                            <i class='bx bx-chevron-right' style="transition: transform 0.3s ease;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
            <a href="blog" class="view-all-btn" style="display: inline-block; padding: 12px 30px; background: linear-gradient(45deg, #0066ff, #00ccff); color: white; border-radius: 50px; text-decoration: none; font-weight: 600; box-shadow: 0 5px 15px rgba(0, 102, 255, 0.3); transition: all 0.3s ease; border: none; position: relative; overflow: hidden;">
                View All Articles
                <span style="position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0)); transform: rotate(30deg); transition: all 0.3s ease;"></span>
            </a>
        </div>
    </div>
</div>