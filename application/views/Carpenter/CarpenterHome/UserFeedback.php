<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/UserFeedback.css' ?>">
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

    <div class="side-space">
        <div class="feedback-container">
            <div class="feedback-header">
                <h4>User Feedback</h4>
            </div>
            <div style="padding: 30px;">
                <form id="feedbackForm" action="<?php echo base_url() . 'CarpenterUserSide/Feedback' ?>">
                    <!-- Name and Service Type Row -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" class="form-control-lg" placeholder="Enter Your Name"
                                required />
                        </div>
                        <div class="col-md-6">
                            <label for="service" class="form-label">Type of Service</label>
                            <div class="custom-select">
                                <select id="service" class="form-select-lg" required>
                                    <option class="select-options" value="">Select service</option>
                                    <option class="select-options" value="1">Custom Furniture and build
                                    </option>
                                    <option class="select-options" value="2">Cabinet making & Installation</option>
                                    <option class="select-options" value="2"> Flooring & Wood paneling</option>
                                    <option class="select-options" value="2"> Commercial carpentry Services </option>
                                    <option class="select-options" value="2">Interior woodworks & trim
                                    <option class="select-options" value="2">Other</option>
                                    <option class="select-options" value="2">All</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <!-- Experience Row -->
                    <div class="mb-3">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="text" id="experience" class="form-control-lg" placeholder="Enter your experience"
                            required />
                    </div>

                    <!-- Message Row -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" class="form-control-lg" rows="3" placeholder="Your message"
                            required></textarea>
                    </div>

                    <!-- Rating Section -->
                    <div class="rating-section">
                        <label>Rate Us</label>
                        <div class="rating-stars">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label for="star5">&#9733;</label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label for="star4">&#9733;</label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3">&#9733;</label>
                            <input type="radio" id="star2" name="rating" value="2" />
                            <label for="star2">&#9733;</label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label for="star1">&#9733;</label>
                        </div>
                        <div id="ratingError" class="error-message">Please select a rating before submitting.</div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn-submit">Send Feedback</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="footer">
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

      <!-- Custom Popup Modal -->
      <div id="customPopup" class="custom-div">
        <div class="custom-div-open">
            <h1>Success!</h1>
            <p>Your form has been submitted successfully.</p>
            <br>
            <button id="closePopup" class="custom-div-btn">OK</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
        rel="stylesheet" />
    <script>
        function validateForm() {
            // Validate rating selection
            const rating = document.querySelector('input[name="rating"]:checked');
            const ratingError = document.getElementById('ratingError');

            if (!rating) {
                ratingError.style.display = 'block';
                return false; // Prevent form submission
            } else {
                ratingError.style.display = 'none';
            }

            const popup = document.getElementById('customPopup');
            popup.style.display = 'flex'; // Show the popup
            event.preventDefault(); // Prevent form submission temporarily

            document.getElementById('closePopup').addEventListener('click', function () {
            const popup = document.getElementById('customPopup');
            popup.style.display = 'none';
            document.getElementById('feedbackForm').submit(); // Submit the form
            });
            // return true; // Allow form submission
        }
        document.getElementById('feedbackForm').addEventListener('submit', function (event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });
    </script>
</body>

</html>