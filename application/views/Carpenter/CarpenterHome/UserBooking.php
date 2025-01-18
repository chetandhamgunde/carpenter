<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search and Filter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/UserBooking.css' ?>">
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


    <div id="confirmPopup" class="custom-div">
    <div class="custom-div-open">
        <h1>Are you sure?</h1>
        <p>Do you want to cancel?</p>
        <button id="yesButton" class="custom-div-btn">Yes</button>
        <button id="noButton" class="custom-div-btn">No</button>
    </div>
</div>


<!-- Success Popup (Record Deleted) -->
<div id="successPopup" class="custom-div">
    <div class="custom-div-open">
        <h1>Success!</h1>
        <p>The record has been deleted.</p>
        <button id="closeSuccessPopup" class="custom-div-btn">OK</button>
    </div>
</div>

    <div class="side-space">
        <div class="card-space">
            <div class="search-filter-container">
                <div class="search-box">
                    <input id="searchInput" type="text" placeholder="Search by Bookings...">
                    <button id="searchButton" type="button">Search</button>
                </div>
                <div class="dropdown-filter">
                    <div class="custom-select">
                        <select id="statusFilter">
                            <option value="all">All</option>
                            <option value="approved">Approved</option>
                            <option value="pending">Pending</option>
                            <option value="rejected">Rejected</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row card-row">
                <div class="col-lg-4 col-md-6 col-sm-12 card-item" data-status="pending" data-name="Interior woodworks & trim">
                    <div class="card">
                        <div class="card-content">
                            <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="" class="card-img">
                            
                            <h4>John Doe</h4>
                            <p>Contact: 9529566457</p>
                            <p>Address: Shalimar Nashik</p>
                            <p>Date:15-10-2024</p>
                            <p>Service: Interior woodworks & trim</p>
                            <p>Status: Pending</p>
                            <div class="card-button-div">
                            <button class="cancelButton">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 card-item" data-status="approved" data-name="Cabinet making & Installation">
                    <div class="card">
                        <div class="card-content">
                            <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="" class="card-img" data-status="pending"
                                data-name="John Doe">
                            <h4>John Doe</h4>
                            <p>Contact: 9529566457</p>
                            <p>Address: Shalimar Nashik</p>
                            <p>Date:15-10-2024</p>
                            <p>Service: Cabinet making & Installation</p>
                            <p>Status: Approved</p>

                            <div class="card-button-div">
                            <button class="cancelButton">Cancel</button>
                            <button class="callNowButton">Call Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 card-item" data-status="completed" data-name="Flooring & Wood paneling">
                    <div class="card">
                        <div class="card-content">
                            <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="" class="card-img">
                            <h4>John Doe</h4>
                            <p>Contact: 9529566457</p>
                            <p>Address: Shalimar Nashik</p>
                            <p>Date:15-10-2024</p>
                            <p>Service: Flooring & Wood paneling</p>
                            <p>Status: Completed</p>

                            <div class="card-button-div">
                                <button onclick="location.href='<?php echo base_url() . 'CarpenterUserSide/Feedback' ?>'">Give Feebdack</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 card-item" data-status="rejected" data-name="Commercial carpentry Services">
                    <div class="card">
                        <div class="card-content">
                            <img src="<?php echo base_url() . 'assets/Images/assets/info-user.png' ?>" alt="" class="card-img">
                            <h4>John Doe</h4>
                            <p>Contact: 9529566457</p>
                            <p>Address: Shalimar Nashik</p>
                            <p>Date:15-10-2024</p>
                            <p>Service: Commercial carpentry Services</p>
                            <p>Status: Rejected</p>

                            <div class="card-button-div">
                                <button onclick="location.href='<?php echo base_url() . 'CarpenterUserSide/searchPage' ?>'">Back To Services</button>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script>
      document.querySelectorAll('.cancelButton').forEach(function(button) {
    button.addEventListener('click', function() {
        // Show the confirmation popup when any cancel button is clicked
        document.getElementById('confirmPopup').style.display = 'flex';
    });
});

document.getElementById('yesButton').addEventListener('click', function() {
    // Hide the confirmation popup
    document.getElementById('confirmPopup').style.display = 'none';
    console.log('Action confirmed!');
    document.getElementById('successPopup').style.display = 'flex';
});

document.getElementById('noButton').addEventListener('click', function() {
    // Close the popup without doing anything
    document.getElementById('confirmPopup').style.display = 'none';
});

document.getElementById('closeSuccessPopup').addEventListener('click', function() {
    // Close the success popup
    document.getElementById('successPopup').style.display = 'none';
});

document.querySelectorAll('.callNowButton').forEach(function(button) {
    button.addEventListener('click', function() {
        // Action for all "Call Now" buttons (e.g., open the dialer or show a popup)
        console.log('Call Now button clicked!');
        
        // Example: Open the phone dialer (for mobile devices)
        window.location.href = 'tel:+1234567890'; // Replace with the actual phone number

        // Or, show a popup with a message
        // document.getElementById('callNowPopup').style.display = 'flex'; // Assuming you have a popup defined
    });
});
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const searchInput = document.getElementById("searchInput");
        const statusFilter = document.getElementById("statusFilter");
        const cards = document.querySelectorAll(".card-item"); // Select cards with the appropriate class.

        function filterCards() {
            const searchValue = searchInput.value.toLowerCase();
            const statusValue = statusFilter.value;

            cards.forEach(card => {
                const name = card.dataset.name.toLowerCase();
                const status = card.dataset.status;

                const matchesSearch = name.includes(searchValue);
                const matchesStatus = statusValue === "all" || status === statusValue;

                card.style.display = matchesSearch && matchesStatus ? "block" : "none";
            });
        }

        searchInput.addEventListener("input", filterCards);
        statusFilter.addEventListener("change", filterCards);

    </script>

</body>

</html>