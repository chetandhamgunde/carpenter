<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/Landing.css' ?>" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link font-weight-bold" href="#projects">Work Sample</a>
                <a class="nav-item nav-link font-weight-bold" href="#services">Service</a>
            </div>

            <a class="navbar-brand d-none d-lg-block mx-auto font-weight-bold" href="#">LOGO HERE</a>

            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link font-weight-bold" href="#navbarNav">Home</a>
                <a class="nav-item nav-link font-weight-bold" href="#experience-section">About Us</a>
            </div>
        </div>
    </nav>

    <!-- Full-screen background carousel with content on the left -->
    <div id="backgroundCarousel" class="carousel slide" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('<?php echo base_url() . 'assets/Images/Landing-images/landing_bg1.png' ?>');"></div>
            <div class="carousel-item" style="background-image: url('<?php echo base_url() . 'assets/Images/Landing-images/landing_bg2.png' ?>');"></div>
            <div class="carousel-item" style="background-image: url('<?php echo base_url() . 'assets/Images/Landing-images/landing_bg3.png' ?>');"></div>
        </div>
        <div class="overlay"></div>
    </div>

    <div id="content-container" class="content-container">
        <br><br>
        <h1>Crafting timeless beauty from raw wood, one masterpiece at a time.</h1>
        <p>From concept to creation, we shape your vision into reality with precision and passion</p>
        <button class="btn btn-get-started" onclick="window.location.href='<?php echo base_url() . 'Landing/Login' ?>'">Get Started</button>
        </div>

    <!-- Experience Section -->
    <section id="experience-section" class="experience-section container my-5">
        <div class="row align-items-center">
            <!-- Left Image -->
            <div class="col-md-5">
                <img src="<?php echo base_url() . 'assets/Images/Landing-images/left-img.png'; ?>" alt="Experience Image" class="img-fluid">
            </div>

            <!-- Right Content -->
            <div class="col-md-6">
                <h2 class="experience-title">Crafting Excellence Since 2000</h2>
                <br>
                <p class="experience-description">With over 20 years of experience, we've built our reputation on quality craftsmanship, attention to detail, and customer satisfaction. Every project is handled with the same level of dedication and expertise</p>
                <br>
                <!-- Options with Tick Icons -->
                <div class="row">
                    <div class="col-6 d-flex align-items-start my-2">
                        <span class="tick-icon">✔️</span>
                        <p class="ml-2">High Quality Materials</p>
                    </div>
                    <div class="col-6 d-flex align-items-start my-2">
                        <span class="tick-icon">✔️</span>
                        <p class="ml-2">Expert Craftsmanship</p>
                    </div>
                    <div class="col-6 d-flex align-items-start my-2">
                        <span class="tick-icon">✔️</span>
                        <p class="ml-2">Custom Design</p>
                    </div>
                    <div class="col-6 d-flex align-items-start my-2">
                        <span class="tick-icon">✔️</span>
                        <p class="ml-2">Sustainable Practices</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="container my-5">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row">
            <!-- Service Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/card1.png'; ?>" class="card-img-top" alt="Service 1" style="height: 80%;">
                    <div class="card-body text-center" style="height: 20%;">
                        <p class="card-text">Custom Furniture & build</p>
                    </div>
                </div>
            </div>
            <!-- Service Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/card2.png'; ?>" class="card-img-top" alt="Service 2" style="height: 80%;">
                    <div class="card-body text-center" style="height: 20%;">
                        <p class="card-text">Interior woodworks & trim</p>
                    </div>
                </div>
            </div>
            <!-- Service Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/card3.png'; ?>" class="card-img-top" alt="Service 3" style="height: 80%;">
                    <div class="card-body text-center" style="height: 20%;">
                        <p class="card-text">Flooring & Wood paneling</p>
                    </div>
                </div>
            </div>
            <!-- Service Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/card4.png'; ?>" class="card-img-top" alt="Service 4" style="height: 80%;">
                    <div class="card-body text-center" style="height: 20%;">
                        <p class="card-text">Cabinet making & Installation</p>
                    </div>
                </div>
            </div>
            <!-- Service Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/card5.png'; ?>" class="card-img-top" alt="Service 5" style="height: 80%;">
                    <div class="card-body text-center" style="height: 20%;">
                        <p class="card-text">Commercial carpentry Services</p>
                    </div>
                </div>
            </div>
            <!-- Service Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/card6.png'; ?>" class="card-img-top" alt="Service 6" style="height: 80%;">
                    <div class="card-body text-center" style="height: 20%;">
                        <p class="card-text">Other Services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add this Recent Projects Section below the Services Section -->
    <section id="projects" class="container my-5">
        <h2 class="text-center mb-4">Recent Projects</h2>
        <div class="row">
            <!-- Project Card 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="project-card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/proj card1.png'; ?>" alt="Project 1" class="img-fluid project-image">
                    <div class="project-overlay">
                        <button class="btn btn-view-project">View Project</button>
                    </div>
                </div>
            </div>
            <!-- Project Card 2 -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="project-card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/proj card2.png'; ?>" alt="Project 2" class="img-fluid project-image">
                    <div class="project-overlay">
                        <button class="btn btn-view-project">View Project</button>
                    </div>
                </div>
            </div>
            <!-- Project Card 3 -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="project-card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/proj card3.png'; ?>" alt="Project 3" class="img-fluid project-image">
                    <div class="project-overlay">
                        <button class="btn btn-view-project">View Project</button>
                    </div>
                </div>
            </div>
            <!-- Project Card 4 -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="project-card">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/proj card4.png'; ?>" alt="Project 4" class="img-fluid project-image">
                    <div class="project-overlay">
                        <button class="btn btn-view-project">View Project</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Our Client Says Section -->
    <section class="container my-5 client-testimonial">
        <h2 class="text-center">What Our Client Says</h2>
        <br><br>

        <!-- Carousel Wrapper -->
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item active"  style="height:60vh;">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-image">
                            <img src="<?php echo base_url() . 'assets/Images/Landing-images/card6.png'; ?>" alt="Client Image">
                        </div>
                        <div class="testimonial-header">
                            <h3 class="testimonial-name">John Doe</h3>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"The custom cabinets exceeded our expectations! The team's attention to detail and craftsmanship were outstanding. From consultation to installation, everything was seamless and professional. Highly recommend!"</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="carousel-item" style="height:60vh;">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-image">
                            <img src="<?php echo base_url() . 'assets/Images/Landing-images/card6.png'; ?>" alt="Client Image">
                        </div>
                        <div class="testimonial-header">
                            <h3 class="testimonial-name">Jane Smith</h3>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"Beautiful craftsmanship! They created exactly what we envisioned for our home office. The process was efficient, and the results were perfect."</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="carousel-item" style="height:60vh;">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-image">
                            <img src="<?php echo base_url() . 'assets/Images/Landing-images/card6.png'; ?>" alt="Client Image">
                        </div>
                        <div class="testimonial-header">
                            <h3 class="testimonial-name">Michael Johnson</h3>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"Highly professional team. The quality of the work was exceptional, and they paid attention to every detail. We are thrilled with the results!"</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <footer class="text-black py-3" style="background: #D9D9D9;">
        <div class="container">
            <div class="row align-items-center justify-content-between text-center text-md-start">
                <div class="col-12 col-md-auto">
                    <span>Powered By:</span>
                </div>
                <div class="col-12 col-md-auto">
                    <img src="<?php echo base_url() . 'assets/Images/Landing-images/Manasvi  2 (2) 1.svg' ?>"
                        alt="Manasvi Tech Solutions Logo"
                        class="img-fluid" style="height: 30px;">
                </div>
                <div class="col-12 col-md ms-md-auto text-center text-md-end">
                    <span>This site is designed, hosted, and maintained by Manasvi Tech Solutions Pvt. Ltd.</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling function
        document.querySelectorAll('.navbar-nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                // Smoothly scroll to the target section
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>