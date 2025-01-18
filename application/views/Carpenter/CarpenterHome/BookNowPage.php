<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/BookNowPage.css' ?>">
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
        <div class="container position-relative">

            <form action="<?php echo base_url() . 'CarpenterUserSide/BookNow' ?>" id="myForm" onsubmit="return validateContact()">
                <div class="row form-container">
                    <!-- Left Section -->
                    <div class="col-12 col-md-6 left-section">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" oninput="this.value=this.value.replace(/[^a-z\sA-Z]/g,'')" class="
                                form-control-lg" id="name" placeholder="Enter Your name" required />
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control-lg" id="date" required />
                            <div id="dateError" style="color: red; display: none;">Please select a valid date.</div>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Type of Service</label>
                            <div class="custom-select">
                                <select class="form-select-lg" id="service" style="height:54px;" required>
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

                    <!-- Right Section -->
                    <div class="col-12 col-md-6 right-section">
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="number" class="form-control-lg" id="contact" pattern="[0-9]{10}" name="contact"
                                placeholder=" Enter your phone number" required />
                            <p class="error" id="contact-error">Please enter exactly 10 digits.</p>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control-lg" id="address" placeholder="Enter your address"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control-lg" id="message" rows="3" placeholder="Your message"
                                required></textarea>
                        </div>
                        <br><br><br>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </div>
            </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Custom Popup Modal -->
    <div id="customPopup" class="custom-div">
        <div class="custom-div-open">
            <h1>Success!</h1>
            <p>Your form has been submitted successfully.</p>
            <br>
            <button id="closePopup" class="custom-div-btn">OK</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const dateField = document.getElementById('date');

    // Set the minimum date to today's date
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // Month is 0-indexed
    const dd = String(today.getDate()).padStart(2, '0');
    const minDate = `${yyyy}-${mm}-${dd}`;

    dateField.setAttribute('min', minDate); // Set the min attribute
});

// Date form submission validation
document.getElementById('myForm').addEventListener('submit', function (event) {
    const dateField = document.getElementById('date');
    const dateError = document.getElementById('dateError');

    // Reset error message
    dateError.style.display = 'none';

    // Validate if the field is empty
    if (!dateField.value) {
        dateError.textContent = 'Date is required.';
        dateError.style.display = 'block';
        event.preventDefault(); // Prevent form submission
        return; // Exit the function
    }

    // Contact number validation
    const contactField = document.getElementById('contact');
    if (contactField.value.length !== 10) {
        // alert('Please enter exactly 10 digits.');
        const contacterror = document.getElementById('contact-error');
        contacterror.style.display = 'block';
        event.preventDefault(); // Prevent form submission
        return; // Exit the function
    }

    // Show popup if all validations pass
    const popup = document.getElementById('customPopup');
    popup.style.display = 'flex'; // Show the popup
    event.preventDefault(); // Prevent form submission temporarily
});
    
// Close popup on OK button click
document.getElementById('closePopup').addEventListener('click', function () {
    const popup = document.getElementById('customPopup');
    popup.style.display = 'none';
    document.getElementById('myForm').submit(); // Submit the form
});
    </script>
</body>

</html>