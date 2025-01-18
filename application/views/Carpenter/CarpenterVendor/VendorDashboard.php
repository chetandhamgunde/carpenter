<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/VendorDashboard.css' ?>">
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
                        <a class="nav-link" aria-current="page" href="<?php echo base_url() . 'CarpenterVendorSide/index' ?>">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="<?php echo base_url() . 'CarpenterVendorSide/requestPage' ?>">Request</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url() . 'CarpenterVendorSide/profile' ?>">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-content">
                        <img src="<?php echo base_url() . 'assets/Images/assets/vendor_right_icon.png' ?>" alt="">
                        <p>Completed Service</p>
                        <h5>51</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-content">
                        <img src="<?php echo base_url() . 'assets/Images/assets/vendoe_clock.png' ?>">
                        <p>Pending Service</p>
                        <h5>51</h5>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card-box">
                    <div class="card-content">
                        <img src="<?php echo base_url() . 'assets/Images/assets/vendor_star.png' ?>" alt="">
                        <p>Ratings</p>
                        <h5>4.5</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirmation Popup (for Cancel) -->
<div id="cancelPopup" class="custom-div">
    <div class="custom-div-open">
        <h1>Are you sure?</h1>
        <p>Do you want to cancel this request?</p>
        <button id="confirmCancel" class="custom-div-btn">Yes</button>
        <button id="cancelCancel" class="custom-div-btn">No</button>
    </div>
</div>

<!-- Success Popup (for Approve) -->
<div id="approvePopup" class="custom-div">
    <div class="custom-div-open">
        <h1>Request Approved</h1>
        <p>The request has been successfully approved.</p>
        <button id="closeApprovePopup" class="custom-div-btn">OK</button>
    </div>
</div>


        <h5 class="mb-3 head-text">Upcoming Requests</h5>
        <div class="table-container table-responsive">
            <table id="vendorTable" class="table">
                <thead class="table-responsive">
                    <tr>
                        <th>Name</th>
                        <th>Contact no</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="vendorTableBody">
                    <tr>
                        <td>John Doe</td>
                        <td>(555) 555-5555</td>
                        <td>Custom Furniture</td>
                        <td>15-9-2024</td>
                        <td>Mg road nashik</td>
                        <td>make it attarctive</td>
                        <td class="act-btn">
                            <button class="btn btn-success btn-sm me-3" style="border-radius: 50%;">&#10003;</button>
                            <button class="btn btn-danger btn-sm" style="border-radius: 50%;">&#10007;</button>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>(555) 555-5555</td>
                        <td>Custom Furniture</td>
                        <td>15-9-2024</td>
                        <td>Mg road nashik</td>
                        <td>make it attarctive</td>
                        <td class="act-btn">
                            <button class="btn btn-success btn-sm me-3" style="border-radius: 50%;">&#10003;</button>
                            <button class="btn btn-danger btn-sm" style="border-radius: 50%;">&#10007;</button>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>(555) 555-5555</td>
                        <td>Custom Furniture</td>
                        <td>15-9-2024</td>
                        <td>Mg road nashik</td>
                        <td>make it attarctive</td>
                        <td class="act-btn">
                            <button class="btn btn-success btn-sm me-3" style="border-radius: 50%;">&#10003;</button>
                            <button class="btn btn-danger btn-sm" style="border-radius: 50%;">&#10007;</button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <a href="<?php echo base_url() . 'CarpenterVendorSide/requestPage' ?>" class="see-more-btn mt-2">See more</a>
        <br>

        <h5 class="mb-3 head-text">User Feedbacks</h5>
        <section style="max-width:960px; margin: auto; border: 1px solid rgba(110, 69, 33, 1);">
            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active" style="height:60vh;">
                        <div class="testimonial-card text-center">
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

                    <!-- Testimonial 2 -->
                    <div class="carousel-item" style="height:60vh;">
                        <div class="testimonial-card text-center">
                            <div class="testimonial-image">
                                <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="Client Image">
                            </div>

                            <div class="testimonial-content">
                                <p>"Beautiful craftsmanship! They created exactly what we envisioned for our home
                                    office. The process was efficient, and the results were perfect."</p>
                            </div>
                            <div class="testimonial-header">
                                <h3 class="testimonial-name">Jane Smith</h3>
                                <div class="testimonial-rating">
                                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="carousel-item" style="height:60vh;">
                        <div class="testimonial-card text-center">
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
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><img src="assets/left_arrow.png"
                            alt=""></span>
                </a>
                <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><img src="assets/right_arrow.png"
                            alt=""></span>
                </a>
            </div>
        </section>
    </div>

    <br>
    <div class="footer mt-4">
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

    <script>
        // Select all success (approve) and danger (cancel) buttons dynamically
document.querySelectorAll('.btn-success').forEach(function(button) {
    button.addEventListener('click', function() {
        // Show the "Request Approved" popup
        document.getElementById('approvePopup').style.display = 'flex';
    });
});

document.querySelectorAll('.btn-danger').forEach(function(button) {
    button.addEventListener('click', function() {
        // Show the confirmation popup asking if the user is sure about canceling
        document.getElementById('cancelPopup').style.display = 'flex';
    });
});

// Actions for the Cancel Popup (Danger Button)
document.getElementById('confirmCancel').addEventListener('click', function() {
    // Handle cancel action (e.g., remove the row or any other logic)
    console.log('Request has been canceled.');
    document.getElementById('cancelPopup').style.display = 'none'; // Close the popup
    // Additional actions like removing the row or updating the database can go here
});

document.getElementById('cancelCancel').addEventListener('click', function() {
    // Close the cancel popup without doing anything
    document.getElementById('cancelPopup').style.display = 'none';
});

// Close the approve popup after approval
document.getElementById('closeApprovePopup').addEventListener('click', function() {
    // Close the approval popup
    document.getElementById('approvePopup').style.display = 'none';
});

    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>

</html>