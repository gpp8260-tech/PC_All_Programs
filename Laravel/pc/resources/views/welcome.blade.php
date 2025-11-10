<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patel Computer Classes</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-laptop"></i> Patel Computer Classes
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary-orange ms-2" href="#" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Advance Your Computer Skills</h1>
            <p class="lead">Professional computer training for beginners to advanced learners</p>
            <a href="#courses" class="btn btn-primary-orange btn-lg mt-3">Explore Courses</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
           
            <div class="row align-items-center">
                 
                <div class="col-lg-6">
                  <section class="about-section">
  <div class="container">
    <h2 class="about-title">About Us — Patel Computers</h2>

    <p class="lead">
      Founded in 1991 and headquartered in Rajkot, Patel Computers is one of Gujarat’s most trusted names in computer education and vocational training. With over three decades of excellence, we have empowered thousands of students to build successful careers in Hardware, Software, Networking, and Mobile Repairing.
    </p>

    <p class="lead">
      As an ISO 9001:2015 certified institute, Patel Computers is an Authorized Training Centre for industry-leading platforms such as Tally, Miracle, Profit, and Shri Sava. Our courses are conducted with a focus on practical learning and Artificial Intelligence (AI) integration, ensuring that every student gains the knowledge and confidence to excel in today’s digital world.
    </p>

    <p class="lead">
      At Patel Computers, we believe education should be accessible, relevant, and impactful. That’s why we offer training in vernacular language (Gujarati), helping learners from all backgrounds understand complex IT concepts with ease. Over the years, we’ve trained 30,000+ students and built 26+ centers across Gujarat, supported by 300+ placement partners.
    </p>

    <p class="lead">
      Our motto, “Learn…..To Make a Difference,” truly defines who we are. We are committed to shaping not just skilled professionals, but confident individuals ready to make a positive impact in their communities and careers.
    </p>

    <p class="lead">
      Whether you’re a beginner exploring the digital world or a professional upgrading your skills, Patel Computers is your partner in growth, innovation, and lifelong learning.
    </p>
  </div>

</section>

<style>
  /* Section background and layout */
  .about-section {
    background: linear-gradient(135deg, rgba(208, 187, 26, 1), #5e4429ff, #2c5364);
    color: #ddd;
    padding: 60px 20px;
    text-align: justify;
  }

  .about-section .container {
    max-width: 900px;
    margin: 0 auto;
  }

  /* Silver gradient text effect */
  .about-title {
    font-size: 2.2rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 30px;
    background: linear-gradient(90deg, #c0c0c0, #e0e0e0, #ffffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
  }

  /* Paragraph styling */
  .lead {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #f1f1f1;
    margin-bottom: 20px;
  }

  /* Responsive design */
  @media (max-width: 768px) {
    .about-title {
      font-size: 1.8rem;
    }

    .lead {
      font-size: 1rem;
      line-height: 1.6;
    }

    .about-section {
      padding: 40px 15px;
    }
  }
</style>



                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-primary-orange"></i> Experienced instructors</li>
                        <li><i class="bi bi-check-circle-fill text-primary-orange"></i> Hands-on training</li>
                        <li><i class="bi bi-check-circle-fill text-primary-orange"></i> Modern computer lab</li>
                        <li><i class="bi bi-check-circle-fill text-primary-orange"></i> Job placement assistance</li>
                       
                    </ul>
                   
                    <!-- More Info Section -->
                    <div class="more-info-section">
                        <a class="more-info-toggle" id="moreInfoToggle">
                            More Info <i class="bi bi-chevron-down"></i>
                        </a>
                        
                        <div class="more-info-content" id="moreInfoContent">
                            <div class="info-item">
                                <h5>Our History</h5>
                                <p>Founded in 2005 by Mr. Raj Patel, our institute started with just 5 computers and a vision to make computer education accessible to everyone in our community. Over the years, we've grown to become one of the most trusted computer training centers in the region, training over 5,000 students.</p>
                            </div>
                            
                            <div class="info-item">
                                <h5>Our Mission</h5>
                                <p>To empower individuals with practical computer skills that enhance their career prospects and personal growth in our increasingly digital world. We believe that everyone should have access to quality computer education regardless of their background.</p>
                            </div>
                            
                            <div class="info-item">
                                <h5>Our Values</h5>
                                <ul>
                                    <li><strong>Quality Education:</strong> We maintain high standards in our curriculum and teaching methods.</li>
                                    <li><strong>Student Success:</strong> Our primary focus is on ensuring each student achieves their learning goals.</li>
                                    <li><strong>Community Focus:</strong> We actively participate in community digital literacy programs.</li>
                                    <li><strong>Innovation:</strong> We continuously update our courses to reflect the latest industry trends.</li>
                                </ul>
                            </div>
                            
                            <div class="info-item">
                                <h5>Our Team</h5>
                                <p>Our instructors are industry professionals with years of experience in their respective fields. They are not just teachers but mentors who guide students through their learning journey. Each instructor undergoes regular training to stay updated with the latest technologies.</p>
                            </div>
                            
                            <div class="stats-container">
                                <div class="stat-item">
                                    <div class="stat-number">18+</div>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">5,000+</div>
                                    <div class="stat-label">Students Trained</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">25+</div>
                                    <div class="stat-label">Courses Offered</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">95%</div>
                                    <div class="stat-label">Success Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--- about image-->
              <!--  <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="img-fluid rounded" alt="Computer class">
                </div>-->
            </div>
        </div>
    </section>
    

    <!-- Courses Section -->
    <section id="courses" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 display-5 fw-bold text-primary-orange">Our Courses</h2>
            <div class="row g-4">
                <!-- Course 1 -->
                <div class="col-md-4">
                    <div class="card course-card h-100">
                        <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Programming course">
                        <div class="card-body">
                            <h5 class="card-title">Programming Fundamentals</h5>
                            <p class="card-text">Learn the basics of programming with Python, Java, and C++. Perfect for beginners.</p>
                            <span class="badge bg-primary-orange">8 Weeks</span>
                        </div>
                    </div>
                </div>
                <!-- Course 2 -->
                <div class="col-md-4">
                    <div class="card course-card h-100">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Web design course">
                        <div class="card-body">
                            <h5 class="card-title">Web Design & Development</h5>
                            <p class="card-text">Master HTML, CSS, JavaScript and modern frameworks to create stunning websites.</p>
                            <span class="badge bg-primary-orange">12 Weeks</span>
                        </div>
                    </div>
                </div>
                <!-- Course 3 -->
                <div class="col-md-4">
                    <div class="card course-card h-100">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Data science course">
                        <div class="card-body">
                            <h5 class="card-title">Data Science & Analytics</h5>
                            <p class="card-text">Learn to analyze and visualize data using Python, R, and powerful data tools.</p>
                            <span class="badge bg-primary-orange">10 Weeks</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary-orange">View All Courses</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 display-5 fw-bold text-primary-orange">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-orange">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Get in Touch</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary-orange"></i> 123 Computer Street, Tech City</li>
                                <li class="mb-3"><i class="bi bi-telephone-fill text-primary-orange"></i> +1 (555) 123-4567</li>
                                <li class="mb-3"><i class="bi bi-envelope-fill text-primary-orange"></i> info@patelcomputerclasses.com</li>
                                <li class="mb-3"><i class="bi bi-clock-fill text-primary-orange"></i> Mon-Sat: 9AM - 6PM</li>
                            </ul>
                            <div class="mt-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1840523769235!2d-73.9876141845839!3d40.74824397932678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1678886597758!5m2!1sen!2sus" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Patel Computer Classes</h5>
                    <p>Providing quality computer education for over 15 years.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-white">Home</a></li>
                        <li><a href="#about" class="text-white">About</a></li>
                        <li><a href="#courses" class="text-white">Courses</a></li>
                        <li><a href="#contact" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin fs-4"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <p class="text-center mb-0">&copy; 2023 Patel Computer Classes. All rights reserved.</p>
        </div>
    </footer>

    <!-- Sign In Modal -->
    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signInModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="loginEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary-orange w-100">Sign In</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#" class="text-primary-orange">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpModalLabel">Create Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="signupName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="signupName" required>
                        </div>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signupEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signupPassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="signupConfirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="signupConfirmPassword" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="termsAgree">
                            <label class="form-check-label" for="termsAgree">I agree to the Terms & Conditions</label>
                        </div>
                        <button type="submit" class="btn btn-primary-orange w-100">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript for toggle functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const moreInfoToggle = document.getElementById('moreInfoToggle');
            const moreInfoContent = document.getElementById('moreInfoContent');
            
            moreInfoToggle.addEventListener('click', function() {
                // Toggle the display of the content
                moreInfoContent.classList.toggle('show');
                moreInfoToggle.classList.toggle('active');
            });
        });
    </script>
</body>
</html>