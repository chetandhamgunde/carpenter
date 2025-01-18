<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/ProfilePage.css' ?>">
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
        <div class="form-container">
            <div class="nav-links m-0" style="border-radius: 8px 8px 0px 0px;">
                <a href="<?php echo base_url() . 'CarpenterUserSide/profile' ?>" class="active">Account Info</a>
                <a href="<?php echo base_url() . 'CarpenterUserSide/changePassword' ?>">Privacy & Security</a>
                <a href="#">Logout</a>
            </div>
            <div style="padding: 30px;">
                <!-- Image Section -->
                <div class="image-section">
                    <div class="img-container">
                        <div class="img1">
                            <div class="edit-image">
                                <img src=" <?php echo base_url() . 'assets/Images/assets/camera.png' ?>" id="previewImage" alt="Preview"
                                    style="max-width: 100%; height: auto;">
                                   
                                <div class="dropdown">
                                    <ul class="dropdown-menu">
                                        <li><button class="dropdown-item" id="editImageBtn">Edit Image</button></li>
                                        <li><button class="dropdown-item" id="edit-Btn" onclick="toggleEdit()">Edit
                                                Profile</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById('editImageBtn').addEventListener('click', function () {
                        // Open file picker when "Edit Image" is clicked
                        const fileInput = document.createElement('input');
                        fileInput.type = 'file';
                        fileInput.accept = 'image/*';
                        fileInput.style.display = 'none';

                        fileInput.addEventListener('change', function (event) {
                            const file = event.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function (e) {
                                    document.getElementById('previewImage').src = e.target.result;
                                }
                                reader.readAsDataURL(file);
                            }
                        });

                        document.body.appendChild(fileInput);
                        fileInput.click(); // Trigger the file input click
                        document.body.removeChild(fileInput); // Clean up after selection
                    });


                </script>
                <form id="myForm">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control-lg" id="name" value="Kunal Wagh" pattern="[0-9]{10}"
                                readonly>
                                <p class="error" id="name-error">Invalid name. Only letters and spaces are allowed.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact No</label>
                            <input type="text" class="form-control-lg" id="contact" value="9295009756" readonly>
                            <p class="error" id="contact-error">Please enter exactly 10 digits.</p>
                                                       
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID</label>
                        <input type="email" class="form-control-lg" id="email" value="Kunalwagh45@gmail.com" readonly>
                        <p class="error" id="email-error">Invalid email address. Please enter a valid email.</p>
                    </div>
                    <h4>Address</h4>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="landmark" class="form-label">Nearest Landmark</label>
                            <input type="text" class="form-control-lg" id="landmark" value="Kabra Sarees" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City/District</label>
                            <input type="text" class="form-control-lg" id="city" value="Nashik" readonly>
                            <p class="error" id="city-error">Field can,t be empty.</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control-lg" id="state" value="Maharashtra" readonly>
                            <p class="error" id="state-error">Field can,t be empty.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="pincode" class="form-label">Pincode</label>
                            <input type="text" class="form-control-lg" id="pincode" value="422001" readonly>
                            <p class="error" id="pincode-error">Please enter exactly 6 digits.</p>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn-submit" id="editButton"
                            onclick="toggleEdit()">Edit</button>
                        <button type="button" class="btn-submit" id="saveButton" onclick="saveChanges()"
                            style="display: none;">Save Changes</button>
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
            <p>Your Profile has been changed successfully.</p>
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
        function toggleEdit() {
            var elements = document.querySelectorAll('#myForm input');
            var isReadOnly = elements[0].readOnly; // Check if any field is readonly

            elements.forEach(function (element) {
                element.readOnly = !isReadOnly; // Toggle readonly status
            });

            document.getElementById('editButton').style.display = isReadOnly ? 'none' : 'inline-block';
            document.getElementById('saveButton').style.display = isReadOnly ? 'inline-block' : 'none';
        }

        function saveChanges() {
            var name = document.getElementById('name').value;
            var contact = document.getElementById('contact').value;
            var pincode = document.getElementById('pincode').value;
            var email = document.getElementById('email').value;
            const popup = document.getElementById('customPopup');
            // event.preventDefault();
            
            if (!/^[A-Za-z\s]+$/.test(name)) {
                // alert("Invalid name. Only letters and spaces are allowed.");
                const nameerror = document.getElementById('name-error');
                nameerror.style.display = 'block';
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

            if (!/^\d{6}$/.test(pincode)) {
                const pincodeerror= document.getElementById('pincode-error');
                pincodeerror.style.display = 'block';
                vent.preventDefault(); // Prevent form submission
                return; // Exit the function
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                // alert("Invalid email address. Please enter a valid email.");
                const emailerror = document.getElementById('email-error');
                emailerror.style.display = 'block';
                event.preventDefault(); // Prevent form submission
                return; // Exit the function
            }

            const state = document.getElementById('state').value.trim();
            if (state === '') { 
                // alert("Invalid email address. Please enter a valid email.");
                const stateerror = document.getElementById('state-error');
                stateerror.style.display = 'block';
                event.preventDefault(); // Prevent form submission
                return; // Exit the function
            }
            const city = document.getElementById('city').value.trim();
            if (city === '') { 
                // alert("Invalid email address. Please enter a valid email.");
                const cityerror = document.getElementById('city-error');
                cityerror.style.display = 'block';
                event.preventDefault(); // Prevent form submission
                return; // Exit the function
            }

            // If all validations pass, proceed with saving changes (e.g., submitting the form)
            popup.style.display = 'flex'; // Show the popup
            event.preventDefault(); // Prevent form submission temporarily
            document.getElementById('closePopup').addEventListener('click', function () {
                popup.style.display = 'none';
                document.getElementById('myForm').submit(); // Submit the form
            });
        }


    </script>

</body>

</html>