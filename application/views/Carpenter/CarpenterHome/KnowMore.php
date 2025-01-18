<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/KnowMore.css' ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-5">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url() . 'CarpenterUserSide/index' ?>">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="<?php echo base_url() . 'CarpenterUserSide/Booking' ?>">Bookings</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url() . 'CarpenterUserSide/profile' ?>">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="side-space my-5">
        <h2 class="info-header">Carpenter Info</h2>
        <div class="info-bar">
            <div class="info-image">
                <div class="ecllipse-1"><img src="<?php echo base_url() . 'assets/Images/assets/Ellipse 211.png' ?>" alt=""></div>
                <div class="ecllipse-2"><img src="<?php echo base_url() . 'assets/Images/assets/Ellipse 212.png' ?>" alt=""></div>
                <div class="ecllipse-3"><img src="<?php echo base_url() . 'assets/Images/assets/Ellipse 213.png' ?>" alt=""></div>
                <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="" class="mb-2" style="max-width: 40%;">
                
                <h3 class="mt-0">John Smith</h3>
                <img src="<?php echo base_url() . 'assets/Images/assets/info-star.png' ?>" alt="" class="m-auto">
                
                <p class="text-center"><img src="<?php echo base_url() . 'assets/Images/assets/info-certificate.png' ?>" alt="" class="d-inline m-auto">Certified
                    Carpenter
                </p>
            </div>
            <div class="info-text">
                <p class="mb-4">Experience: 10+years</p>
                <p class="mb-4">Address : Nashik , Maharashtra 422001</p>
                <p class="mb-5">Specialization: Interior woodworks & trim , Flooring & Wood paneling.</p>
                <button class="" onclick="location.href='<?php echo base_url() . 'CarpenterUserSide/bookNow' ?>'">Book Now</button>
            </div>
        </div>

        <div class="mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.26817444539!2d73.72107860073466!3d19.99110534032964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1733482716873!5m2!1sen!2sin"
                width="100%" height="450" class="map" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <div class="side-space">
        <h2 class="info-header mt-3">Work Samples</h2>
    </div>
    <section class="container-fluid py-5" style="background-color: #6E452180;">
        <div class="side-space2">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="project-card">
                        <img src="<?php echo base_url() . 'assets/Images/assets/sample-1.png' ?>" alt="Project 4" class="img-fluid project-image">
                        
                        <div class="project-overlay">
                            <div class="project-overlay-text">
                                <p class="btn-view-project">Interior woodworks & trim</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="project-card">
                        <img src="<?php echo base_url() . 'assets/Images/assets/sample-2.png' ?>" alt="Project 4" class="img-fluid project-image">
                        <div class="project-overlay">
                            <div class="project-overlay-text">
                                <p class="btn-view-project">Flooring & Wood paneling</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="project-card">
                        <img src="<?php echo base_url() . 'assets/Images/assets/sample-3.png' ?>" alt="Project 4" class="img-fluid project-image">
                        <div class="project-overlay">
                            <div class="project-overlay-text">
                                <p class="btn-view-project">Custom Furniture and build</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="side-space">
        <h2 class="info-header mt-3">User Reviews</h2>
    </div>
    <br><br>
    <section>
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item active" style="height:50vh;">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-content">
                            <div class="testimonial-image">
                                <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="Client Image">
                                
                            </div>
                            <div class="testimonial-content">
                                <p>"The custom cabinets exceeded our expectations! The team's attention to detail and
                                    craftsmanship were outstanding. From consultation to installation, everything was
                                    seamless and professional. Highly recommend!"</p>
                            </div>
                            <div class="testimonial-header">
                                <h3 class="testimonial-name">John Doe</h3>
                                <div class="testimonial-rating">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="carousel-item" style="height:50vh;">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-content">
                            <div class="testimonial-image">
                                <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="Client Image">
                            </div>

                            <div class="testimonial-content">
                                <p>"Beautiful craftsmanship! They created exactly what we envisioned for our home
                                    office.
                                    The process was efficient, and the results were perfect."</p>
                            </div>
                            <div class="testimonial-header">
                                <h3 class="testimonial-name">Jane Smith</h3>
                                <div class="testimonial-rating">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="carousel-item" style="height:50vh;">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-content">
                            <div class="testimonial-image">
                                <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="Client Image">
                            </div>

                            <div class="testimonial-content">
                                <p>"Highly professional team. The quality of the work was exceptional, and they paid
                                    attention to every detail. We are thrilled with the results!"</p>
                            </div>
                            <div class="testimonial-header">
                                <h3 class="testimonial-name">Michael Johnson</h3>
                                <div class="testimonial-rating">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                </div>
                            </div>
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

    <script>
        // Smooth scrolling function
        document.querySelectorAll('.navbar-nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                // Get the href attribute of the clicked anchor
                const targetHref = this.getAttribute('href');

                // Check if the href starts with "#" (indicating an on-page anchor)
                if (targetHref.startsWith('#')) {
                    e.preventDefault();
                    const targetId = targetHref.substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        // Smoothly scroll to the target section
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="footer mt-5">
        <div class="footer-content">
            <div>
                <p class="footer-text">Carepenter2024-AllRightsReserved</p>
            </div>
            <div>
                <img src="assets/footer-lobo1.png" alt="" class="me-3">
                <img src="assets/footer-lobo2.png" alt="" class="me-3">
                <img src="assets/footer-lobo3.png" alt="" class="me-3">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>