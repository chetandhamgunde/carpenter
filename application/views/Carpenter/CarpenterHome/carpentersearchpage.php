<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/carpentersearchpage.css' ?>">
    <style>
        #no-results p {
            font-size: 18px;
            font-weight: bold;
        }

        .alert-danger {
            --bs-alert-color: var(--bs-danger-text-emphasis);
            --bs-alert-bg: var(--bs-danger-bg-subtle);
            --bs-alert-border-color: var(--bs-danger-border-subtle);
            --bs-alert-link-color: var(--bs-danger-text-emphasis);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                aria-label="Toggle navigation">
                <span clasws="navbar-toggler-icon"></span>
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
    <div style="min-height:100vh">
    <div class="container mt-4">
        <div class="">
            <form action="<?php echo base_url() . 'CarpenterUserSide/searchPage' ?>" id="search-form" class="home-form m-auto" method="get">
                <div class="input-group" style="max-width:400px;">
                    <span class="input-group-text"><img src="<?php echo base_url() . 'assets/Images/assets/home_icon_location.png' ?>" alt=""></span>
                    <input type="text" name="location" placeholder="Search by Location" class="form-control" value=""
                        id="location-input">
                </div>
                <div class="input-group" style="max-width:850px;">
                    <input type="text" name="service" placeholder="Search by Service" class="form-control" value=""
                        id="service-input">
                    <button type="submit" class="input-group-text">
                        <img src="<?php echo base_url() . 'assets/Images/assets/home_icon_search.png' ?>" alt="">          
                    </button>   
                </div>
            </form>

        </div>
    </div>
    <section class="container mt-4 pt-2">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5 card p-0 m-auto">
                    <div class="card-header">
                        <img src="<?php echo base_url() . 'assets/Images/assets/portrait-male-carpenter-wearing-ear-defender-around-his-neck-looking-camera.png' ?>"
                            alt="" style="max-width:55%">
                    </div>
                    <div class="card-body">
                        <h3>John Doe</h3>
                        <img src="<?php echo base_url() . 'assets/Images/assets/star.png' ?>" alt="">
                        <p><img src="<?php echo base_url() . 'assets/Images/assets/certification.png' ?>" alt=""> Certified Carpenter</p>
                        <p>Experience: 10+years</p>
                        <p class="location">Address : Nashik1 , Maharashtra 422001</p>
                        <p class="service">Specialization: Custom Furniture and build , Cabinet making & Installation.
                        </p>
                        <button class="" onclick="location.href='<?php echo base_url() . 'CarpenterUserSide/knowMore' ?>'">Know More</button>

                        <div class="card-half-footer mt-4"></div>
                        <div class="card-full-footer"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mb-5 card p-0 m-auto">
                    <div class="card-header">
                        <img src="<?php echo base_url() . 'assets/Images/assets/portrait-male-carpenter-wearing-ear-defender-around-his-neck-looking-camera.png' ?>"
                            alt="" style="max-width:55%">
                    </div>
                    <div class="card-body">
                        <h3>John Doe</h3>
                        <img src="<?php echo base_url() . 'assets/Images/assets/star.png' ?>" alt="">
                        <p><img src="<?php echo base_url() . 'assets/Images/assets/certification.png' ?>" alt=""> Certified Carpenter</p>
                        <p>Experience: 10+years</p>
                        <p class="location">Address : Nashik2 , Maharashtra 422001</p>
                        <p class="service">Specialization: Custom Furniture and build , Cabinet making & Installation.
                        </p>
                        <button class="" onclick="location.href=location.href='<?php echo base_url() . 'CarpenterUserSide/knowMore' ?>'">Know More</button>

                        <div class="card-half-footer mt-4"></div>
                        <div class="card-full-footer"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mb-5 card p-0 m-auto">
                    <div class="card-header">
                        <img src="<?php echo base_url() . 'assets/Images/assets/portrait-male-carpenter-wearing-ear-defender-around-his-neck-looking-camera.png' ?>"
                            alt="" style="max-width:55%">
                    </div>
                    <div class="card-body">
                        <h3>John Doe</h3>
                        <img src="<?php echo base_url() . 'assets/Images/assets/star.png' ?>" alt="">
                        <p><img src="<?php echo base_url() . 'assets/Images/assets/certification.png' ?>" alt=""> Certified Carpenter</p>
                        <p>Experience: 10+years</p>
                        <p class="location">Address : Nashik3 , Maharashtra 422001</p>
                        <p class="service">Specialization: Custom Furniture and build , Cabinet making & Installation.
                        </p>
                        <button class="" onclick="location.href='<?php echo base_url() . 'CarpenterUserSide/knowMore' ?>'">Know More</button>

                        <div class="card-half-footer mt-4"></div>
                        <div class="card-full-footer"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-0 m-auto">
                    <div class="card-header">
                        <img src="<?php echo base_url() . 'assets/Images/assets/portrait-male-carpenter-wearing-ear-defender-around-his-neck-looking-camera.png' ?>"
                            alt="" style="max-width:55%">
                    </div>
                    <div class="card-body">
                        <h3>John Doe</h3>
                        <img src="<?php echo base_url() . 'assets/Images/assets/star.png' ?>" alt="">
                        <p><img src="<?php echo base_url() . 'assets/Images/assets/certification.png' ?>" alt=""> Certified Carpenter</p>
                        <p>Experience: 10+years</p>
                        <p class="location">Address : Nashik4 , Maharashtra 422001</p>
                        <p class="service">Specialization: 2 Furniture and build , Cabinet making & Installation.
                        </p>
                        <button class="" onclick="location.href='<?php echo base_url() . 'CarpenterUserSide/knowMore' ?>'">Know More</button>

                        <div class="card-half-footer mt-4"></div>
                        <div class="card-full-footer"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0 m-auto">
                    <div class="card-header">
                        <img src="<?php echo base_url() . 'assets/Images/assets/portrait-male-carpenter-wearing-ear-defender-around-his-neck-looking-camera.png' ?>"
                            alt="" style="max-width:55%">
                    </div>
                    <div class="card-body">
                        <h3>John Doe</h3>
                        <img src="<?php echo base_url() . 'assets/Images/assets/star.png' ?>" alt="">
                        <p><img src="<?php echo base_url() . 'assets/Images/assets/certification.png' ?>" alt=""> Certified Carpenter</p>
                        <p>Experience: 10+years</p>
                        <p class="location">Address : Nashik , Maharashtra 422001</p>
                        <p class="service">Specialization: Custom Furniture and build , Cabinet making & Installation.
                        </p>
                        <button class="" onclick="location.href='<?php echo base_url() . 'CarpenterUserSide/knowMore' ?>'">Know More</button>

                        <div class="card-half-footer mt-4"></div>
                        <div class="card-full-footer"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </div>
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

    <script>
        document.getElementById("search-form").addEventListener("submit", function (e) {
            const locationInput = document.getElementById("location-input").value.trim();
            const serviceInput = document.getElementById("service-input").value.trim();

            // Validate if at least one field is filled
            if (!locationInput && !serviceInput) {
                e.preventDefault(); // Prevent form submission
                showValidationError("Please fill in at least one field: Location or Service.");
            }
        });

        // Function to display error message and auto-dismiss it
        function showValidationError(message) {
            const existingAlert = document.getElementById('validation-alert');
            if (existingAlert) existingAlert.remove();

            const alertDiv = document.createElement('div');
            alertDiv.id = 'validation-alert';
            alertDiv.className = 'alert alert-danger mt-3';
            alertDiv.textContent = message;

            const form = document.getElementById("search-form");
            form.insertAdjacentElement('afterend', alertDiv);

            // Auto-dismiss error message after 3 seconds
            setTimeout(() => {
                if (alertDiv) alertDiv.remove();
            }, 3000); // 3000 milliseconds = 3 seconds
        }
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const urlParams = new URLSearchParams(window.location.search);

            const locationSearch = urlParams.get("location")?.toLowerCase() || '';
            const serviceSearch = urlParams.get("service")?.toLowerCase() || '';

            // Prefill form inputs with query values
            document.getElementById("location-input").value = locationSearch;
            document.getElementById("service-input").value = serviceSearch;

            // Filter cards based on search criteria
            const cards = document.querySelectorAll('.card');
            let hasResults = false;

            cards.forEach(card => {
                const address = card.querySelector('.location').innerText.toLowerCase();
                const specialization = card.querySelector('.service').innerText.toLowerCase();

                if ((locationSearch === '' || address.includes(locationSearch)) &&
                    (serviceSearch === '' || specialization.includes(serviceSearch))) {
                    card.parentElement.style.display = ''; // Show matching cards
                    hasResults = true;
                } else {
                    card.parentElement.style.display = 'none'; // Hide non-matching cards
                }
            });

            // Display 'No results found' message
            const resultsContainer = document.querySelector('.container.mt-4');
            let noResults = document.getElementById('no-results');

            if (!hasResults) {
                if (!noResults) {
                    noResults = document.createElement('div');
                    noResults.id = 'no-results';
                    noResults.className = 'text-center mt-3';
                    noResults.innerHTML = `<p class="alert alert-danger">No results found.</p>`;
                    resultsContainer.appendChild(noResults);
                }
            } else {
                if (noResults) {
                    noResults.remove();
                }
            }
        });
    </script>



</body>

</html>