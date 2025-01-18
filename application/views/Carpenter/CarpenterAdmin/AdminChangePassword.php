<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/AdminChangePassword.css' ?>">

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

    <div class="side-space">
        <div class="form-container">
        <div class="navbar2">
            <div class="nav-links m-0" style="border-radius: 8px 8px 0px 0px;"><a href="<?php echo base_url() . 'CarpenterAdminSide/profile' ?>"
                        >Account Info</a>
                        <a href="<?php echo base_url() . 'CarpenterAdminSide/changePassword' ?>" class="active">Privacy & Security</a>
                        <a href="#">Logout</a></div>
            </div>
            <div style="margin: 5% 0%;">
                <div style="padding: 30px;">
                    <form id="myForm">
                        <div class="mb-3">
                            <label for="email" class="form-label">Currrent Password</label>
                            <input type="password" class="form-control-lg" id="password"
                                placeholder="Enter Current Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control-lg" id="password"
                                placeholder="Enter New Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control-lg" id="password"
                                placeholder="Enter New Password" required>
                        </div>
                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </div>
                    </form>
                    <div id="customPopup" class="custom-div">
                        <div class="custom-div-open">
                            <h1>Success!</h1>
                            <p>Your Profile has been changed successfully.</p>
                            <br>
                            <button id="closePopup" class="custom-div-btn">OK</button>
                        </div>
                    </div>
                    <script>
                        document.getElementById('myForm').addEventListener('submit', function (event) {
                            event.preventDefault(); // Prevent form submission temporarily
                            const popup = document.getElementById('customPopup');
                            popup.style.display = 'flex'; // Show the popup

                            document.getElementById('closePopup').addEventListener('click', function () {
                                popup.style.display = 'none';
                                document.getElementById('myForm').submit(); // Submit the form
                            });
                        });
                    </script>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>