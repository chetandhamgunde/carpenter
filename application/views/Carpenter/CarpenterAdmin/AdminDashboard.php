<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/AdminDashboard.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-5">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url() . 'CarpenterAdminSide/index' ?>">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="<?php echo base_url() . 'CarpenterAdminSide/requestPage' ?>">Request</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url() . 'CarpenterAdminSide/profile' ?>">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-4">
        <!-- Top Stats Section -->
        <div class="row g-3">
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="card-box-text">
                        <h5>Total Vendors</h5>
                        <p>50</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-box-text">
                        <h5>Total Users</h5>
                        <p>50</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="card-box-text">
                        <h5>Pending Request</h5>
                        <p>50</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Request Section -->
        <div class="mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Recent Request</h4>
                <button class="see-all-btn" onclick="location.href='<?php echo base_url() . 'CarpenterAdminSide/requestPage' ?>'">See All</button>
            </div>
            <div class="recent-request">
                <div class="recent-request-content">
                    <div>
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Email:</strong> JohnDoe@gmail.com</p>
                        <p><strong>Experience:</strong> 10+ years</p>
                        <p><strong>Documents Attached:</strong> <a href="#">View Documents</a></p>
                    </div>
                    <div>
                        <p><strong>Address:</strong> Mg Road, Nashik 422001</p>
                        <p><strong>Phone No:</strong> 1234556</p>
                        <p><strong>Specification:</strong> Commercial Carpentry Services</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-2">
                    <button class="btn btn-success">Approve</button>
                    <button class="btn btn-danger">Reject</button>
                </div>
            </div>
        </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Select all success (approve) and danger (cancel) buttons dynamically
    document.querySelectorAll('.btn-success').forEach(function (button) {
        button.addEventListener('click', function () {
            // Show the "Request Approved" popup
            document.getElementById('approvePopup').style.display = 'flex';
        });
    });

    document.querySelectorAll('.btn-danger').forEach(function (button) {
        button.addEventListener('click', function () {
            // Show the confirmation popup asking if the user is sure about canceling
            document.getElementById('cancelPopup').style.display = 'flex';
        });
    });

    // Actions for the Cancel Popup (Danger Button)
    document.getElementById('confirmCancel').addEventListener('click', function () {
        console.log('Request has been canceled.');
        document.getElementById('cancelPopup').style.display = 'none'; // Close the popup
    });

    document.getElementById('cancelCancel').addEventListener('click', function () {
        document.getElementById('cancelPopup').style.display = 'none';
    });

    // Close the approve popup after approval
    document.getElementById('closeApprovePopup').addEventListener('click', function () {
        document.getElementById('approvePopup').style.display = 'none';
    });
});
</script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>