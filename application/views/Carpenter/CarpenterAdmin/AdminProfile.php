<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/AdminProfile.css' ?>">
        <style>
             .error {
            display: none;
            color: red;
            margin-left: 5px;
            font-weight: bold;
        }
        </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid"><a class="navbar-brand" href="#">LOGO</a><button class="navbar-toggler"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
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
                        class="active">Account Info</a>
                        <a href="<?php echo base_url() . 'CarpenterAdminSide/changePassword' ?>">Privacy & Security</a>
                        <a href="#">Logout</a></div>
            </div>
            <div style="margin: 10% 0%;">
                <div style="padding: 30px;">
                    <form id="myForm">
                        <div class="mb-3"><label for="email" class="form-label">Email ID</label><input type="text"
                                class="form-control-lg" id="email" placeholder="Enter your email" readonly></div>
                                <p class="error" id="email-error">Invalid email address. Please enter a valid email.</p>
                                <div class="mb-3"><label for="contact" class="form-label">Contact No</label><input type="number"
                                class="form-control-lg" id="contact" placeholder="Enter your Contact No" readonly></div>
                                <p class="error" id="contact-error">Please enter exactly 10 digits.</p>
                        <div class="d-grid mt-5"><button type="button" class="btn btn-submit" id="editButton"
                                onclick="toggleEdit()">Edit</button><button type="button" class="btn btn-submit"
                                id="saveButton" onclick="saveChanges()" style="display: none;">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="customPopup" class="custom-div">
        <div class="custom-div-open">
            <h1>Success !</h1>
            <p>Your Profile has been changed successfully.</p><br><button id="closePopup"
                class="custom-div-btn">OK</button>
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <div>
                <p class="footer-text">Carepenter2024-AllRightsReserved</p>
            </div>
            <div><img src="assets/footer-lobo1.png" alt="" class="me-3"><img src="assets/footer-lobo2.png" alt=""
                    class="me-3"><img src="assets/footer-lobo3.png" alt="" class="me-3"></div>
        </div>
    </div>
    < !-- Bootstrap Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
            rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script>function toggleEdit() {
                var elements = document.querySelectorAll('#myForm input');
                var isReadOnly = elements[0].readOnly; // Check if the first field is readonly

                elements.forEach(function (element) {
                    element.readOnly = !isReadOnly; // Toggle readonly status
                });

                document.getElementById('editButton').style.display = isReadOnly ? 'none' : 'inline-block';
                document.getElementById('saveButton').style.display = isReadOnly ? 'inline-block' : 'none';
            }


            function saveChanges() {
                // var name = document.getElementById('name').value;
                var contact = document.getElementById('contact').value;
                // var pincode = document.getElementById('pincode').value;
                var email = document.getElementById('email').value;
                const popup = document.getElementById('customPopup');

                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    // alert("Invalid email address. Please enter a valid email.");
                const emailerror = document.getElementById('email-error');
                emailerror.style.display = 'block';
                event.preventDefault(); // Prevent form submission
                return; // Exit the function
                }

                const contactField = document.getElementById('contact');
            if (contactField.value.length !== 10) {
                  // alert('Please enter exactly 10 digits.');
                 const contacterror = document.getElementById('contact-error');
                 contacterror.style.display = 'block';
                event.preventDefault(); // Prevent form submission
                 return; // Exit the function
            }

                // If all validations pass, proceed with saving changes (e.g., submitting the form)
                // document.getElementById('myForm').submit();
                popup.style.display = 'flex'; // Show the popup
                event.preventDefault(); // Prevent form submission temporarily

                // document.getElementById('myForm').submit();
                document.getElementById('closePopup').addEventListener('click', function () {
                    popup.style.display = 'none';
                    document.getElementById('myForm').submit(); // Submit the form
                });
            }


        </script>
</body>

</html>