<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/VendorProfile.css' ?>">
    <style>
        .error {
            display: none;
            color: red;
            margin-left: 5px;
            font-weight: bold;
        }

        .custom-select {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .custom-select select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            cursor: pointer;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>');
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 30px;
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
                        <a class="nav-link" aria-current="page"
                            href="<?php echo base_url() . 'CarpenterVendorSide/index' ?>">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link"
                            href="<?php echo base_url() . 'CarpenterVendorSide/requestPage' ?>">Request</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url() . 'CarpenterVendorSide/profile' ?>">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="side-space">
        <div class="form-container">
            <div class="nav-links m-0" style="border-radius: 8px 8px 0px 0px;">
                <a href="<?php echo base_url() . 'CarpenterVendorSide/profile' ?>" class="active">Account Info</a>
                <a href="<?php echo base_url() . 'CarpenterVendorSide/changePassword' ?>">Privacy & Security</a>
                <a href="#">Logout</a>
            </div>
            <div style="padding: 30px;">
                <!-- Image Section -->
                <div class="image-section">
                    <div class="img-container">
                        <div class="img1">
                            <div class="edit-image">
                                <img src="<?php echo base_url() . 'assets/Images/assets/camera.png' ?>"
                                    id="previewImage" alt="Preview" style="max-width: 100%; height: auto;">
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
                            <input type="text" class="form-control-lg" id="name" value="Kunalwagh" readonly>
                            <p class="error" id="name-error">Invalid name. Only letters and spaces are allowed.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact No</label>
                            <input type="text" class="form-control-lg" id="contact" value="9529509756" readonly>
                            <p class="error" id="contact-error">Please enter exactly 10 digits.</p>
                        </div>
                    </div>

                    <h4>Address</h4>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="landmark" class="form-label">Nearest Landmark</label>
                            <input type="text" class="form-control-lg" id="landmark" value="kabra sarees" readonly>
                            <p class="error" id="landmark-error">Field can,t be empty.</p>
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
                            <input type="text" class="form-control-lg" id="state" value="maharashtra" readonly>
                            <p class="error" id="state-error">Field can,t be empty.</p>
                        </div>

                        <div class="col-md-6">
                            <label for="state" class="form-label">Town</label>
                            <input type="text" class="form-control-lg" id="town" value="Shrirampur" readonly>
                            <p class="error" id="town-error">Field can,t be empty.</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pincode" class="form-label">Pincode</label>
                            <input type="text" class="form-control-lg" id="pincode" value="422001" readonly>
                            <p class="error" id="pincode-error">Please enter exactly 6 digits.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="service" class="form-label">Service You Provide</label>
                            <div class="custom-select">
                                <select class="form-select-lg" id="service" style="height:54px;" disabled>
                                    <option class="select-options" value="">Select service</option>
                                    <option class="select-options" value="1" selected>Custom Furniture and build
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

                        <div class="col-md-12">
                            <label for="file-upload" class="form-label">Upload Document</label>
                            <div class="input-group">
                                <!-- Link to view the document -->
                                <a id="view-document" href="#" target="_blank" class="form-control value-text"
                                    style="text-decoration: underline; cursor: pointer; color: blue; display: none;">
                                    View Document
                                </a>

                                <!-- File upload functionality -->
                                <div id="upload-container" style="display: none;">
                                    <label class="input-group-text custom-file-label" for="file-upload">Choose
                                        File</label>
                                    <input type="file" class="form-control custom-file-input" id="file-upload">
                                    <span class="form-control value-text" id="file-value">No File Chosen</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="button" class="btn-submit" id="editButton"
                                onclick="toggleEdit()">Edit</button>
                            <button type="button" class="btn btn-submit" id="saveButton" onclick="saveChanges()"
                                style="display: none;">Save Changes</button>
                        </div>
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

            </div>
        </div>
        <div class="form-container">
            <div style="padding: 30px;">
                <h5 class="work-sample-form">Services</h5>
                <form id="services-form">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="service-name" class="form-label">Service Name</label>
                            <input type="text" class="form-control-lg" id="service-name"
                                placeholder="Enter Service Name">
                        </div>
                        <div class="col-md-6">
                            <label for="service-file-upload" class="form-label">Upload Document</label>
                            <div class="input-group" style="margin-top: 0;">
                                <label class="input-group-text custom-file-label" for="service-file-upload">Choose
                                    File</label>
                                <input type="file" class="form-control custom-file-input" id="service-file-upload">
                                <span class="form-control placeholder-text" id="service-file-placeholder"
                                    style="padding:0.75rem 0.75rem;">No File Chosen</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="button" class="btn-submit" id="service-submit">Submit</button>
                    </div>
                </form>

                <h5 class="mt-5">Submitted Services</h5>
                <div id="submitted-services">
                    <!-- Submitted services will appear here -->
                </div>

                <hr class="my-5">

                <h5 class="work-sample-form">Work/Projects</h5>
                <form id="work-experience-form">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="job-title" class="form-label">Job Title</label>
                            <input type="text" class="form-control-lg" id="job-title" placeholder="Enter Job Title">
                        </div>
                        <div class="col-md-6">
                            <label for="work-file-upload" class="form-label">Upload Document</label>
                            <div class="input-group" style="margin-top: 0;">
                                <label class="input-group-text custom-file-label" for="work-file-upload">Choose
                                    File</label>
                                <input type="file" class="form-control custom-file-input" id="work-file-upload">
                                <span class="form-control placeholder-text" id="work-file-placeholder"
                                    style="padding:0.75rem 0.75rem;">No File Chosen</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="button" class="btn-submit" id="work-submit">Submit</button>
                    </div>
                </form>

                <h5 class="mt-5">Submitted Work Experiences</h5>
                <div id="submitted-work-experiences">
                    <!-- Submitted work experiences will appear here -->
                </div>
            </div>
            <div id="servicePopup" class="custom-div">
                <div class="custom-div-open">
                    <p id="servicePopupMessage"></p>
                    <button id="closeServicePopup" class="custom-div-btn">Close</button>
                </div>
            </div>
            <div id="workPopup" class="custom-div">
                <div class="custom-div-open">
                    <p id="workPopupMessage"></p>
                    <button id="closeWorkPopup" class="custom-div-btn">Close</button>
                </div>
            </div>

            <script>
                // Custom Popup Functions
                function showPopup(message, popupId) {
                    const popup = document.getElementById(popupId);
                    const popupMessage = popup.querySelector("p");
                    popupMessage.innerText = message;
                    popup.style.display = "flex";
                }

                function closePopup(popupId) {
                    const popup = document.getElementById(popupId);
                    popup.style.display = "none";
                }

                // Close Popup Event Listeners
                document.getElementById("closeServicePopup").addEventListener("click", function () {
                    closePopup("servicePopup");
                });
                document.getElementById("closeWorkPopup").addEventListener("click", function () {
                    closePopup("workPopup");
                });

                // Handle Services Form
                document.getElementById("service-file-upload").addEventListener("change", function () {
                    const filePlaceholder = document.getElementById("service-file-placeholder");
                    const selectedFile = this.files[0];
                    filePlaceholder.innerText = selectedFile ? selectedFile.name : "No File Chosen";
                });

                document.getElementById("service-submit").addEventListener("click", function () {
                    const serviceName = document.getElementById("service-name").value;
                    const fileInput = document.getElementById("service-file-upload");
                    const file = fileInput.files[0];

                    if (!serviceName || !file) {
                        showPopup("Please provide both Service Name and a File.", "servicePopup");
                        return;
                    }

                    const submittedServices = document.getElementById("submitted-services");

                    const entryDiv = document.createElement("div");
                    entryDiv.classList.add("mb-3");

                    const serviceNameElement = document.createElement("p");
                    serviceNameElement.innerText = `Service Name: ${serviceName}`;

                    const fileLink = document.createElement("a");
                    fileLink.href = URL.createObjectURL(file);
                    fileLink.download = file.name;
                    fileLink.innerText = `Download: ${file.name}`;
                    fileLink.style.display = "block";

                    const deleteButton = document.createElement("button");
                    deleteButton.classList.add("btn", "btn-danger", "btn-sm", "mt-2");
                    deleteButton.innerText = "Delete";
                    deleteButton.onclick = function () {
                        submittedServices.removeChild(entryDiv);
                    };

                    entryDiv.appendChild(serviceNameElement);
                    entryDiv.appendChild(fileLink);
                    entryDiv.appendChild(deleteButton);

                    submittedServices.appendChild(entryDiv);

                    document.getElementById("services-form").reset();
                    document.getElementById("service-file-placeholder").innerText = "No File Chosen";
                });

                // Handle Work Experience Form
                document.getElementById("work-file-upload").addEventListener("change", function () {
                    const filePlaceholder = document.getElementById("work-file-placeholder");
                    const selectedFile = this.files[0];
                    filePlaceholder.innerText = selectedFile ? selectedFile.name : "No File Chosen";
                });

                document.getElementById("work-submit").addEventListener("click", function () {
                    const jobTitle = document.getElementById("job-title").value;
                    const fileInput = document.getElementById("work-file-upload");
                    const file = fileInput.files[0];

                    if (!jobTitle || !file) {
                        showPopup("Please provide both Job Title and a File.", "workPopup");
                        return;
                    }

                    const submittedWorkExperiences = document.getElementById("submitted-work-experiences");

                    const entryDiv = document.createElement("div");
                    entryDiv.classList.add("mb-3");

                    const jobTitleElement = document.createElement("p");
                    jobTitleElement.innerText = `Job Title: ${jobTitle}`;

                    const fileLink = document.createElement("a");
                    fileLink.href = URL.createObjectURL(file);
                    fileLink.download = file.name;
                    fileLink.innerText = `Download: ${file.name}`;
                    fileLink.style.display = "block";

                    const deleteButton = document.createElement("button");
                    deleteButton.classList.add("btn", "btn-danger", "btn-sm", "mt-2");
                    deleteButton.innerText = "Delete";
                    deleteButton.onclick = function () {
                        submittedWorkExperiences.removeChild(entryDiv);
                    };

                    entryDiv.appendChild(jobTitleElement);
                    entryDiv.appendChild(fileLink);
                    entryDiv.appendChild(deleteButton);

                    submittedWorkExperiences.appendChild(entryDiv);

                    document.getElementById("work-experience-form").reset();
                    document.getElementById("work-file-placeholder").innerText = "No File Chosen";
                });


            </script>
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Store the reference to the currently uploaded document
        let uploadedDocument = null; // Will hold the uploaded file URL (or default)

        // Function to toggle edit mode
        function toggleEdit() {
            var elements = document.querySelectorAll('#myForm input, #myForm select');
            var isReadOnly = elements[0].hasAttribute('readonly');

            elements.forEach(function (element) {
                if (element.tagName === "SELECT" || element.type === "file") {
                    element.disabled = !isReadOnly; // Enable/Disable <select> and <input type="file">
                } else {
                    if (isReadOnly) {
                        element.removeAttribute('readonly'); // Remove readonly
                    } else {
                        element.setAttribute('readonly', true); // Add readonly
                    }
                }
            });

            // Toggle the visibility of file upload vs. document view
            var uploadContainer = document.getElementById('upload-container');
            var viewDocumentLink = document.getElementById('view-document');

            if (isReadOnly) {
                // In edit mode
                uploadContainer.style.display = 'flex'; // Show the upload container
                viewDocumentLink.style.display = 'none'; // Hide the document view link
            } else {
                // In non-edit mode
                uploadContainer.style.display = 'none'; // Hide the upload container
                viewDocumentLink.style.display = uploadedDocument ? 'inline-block' : 'none'; // Show the view link if a document exists
            }

            // Toggle buttons
            document.getElementById('editButton').style.display = isReadOnly ? 'none' : 'inline-block';
            document.getElementById('saveButton').style.display = isReadOnly ? 'inline-block' : 'none';
        }

        // Initialize with a placeholder document (optional)
        function initializeDocument() {
            uploadedDocument = "https://example.com/sample-document.pdf"; // Replace with actual document URL
            document.getElementById('view-document').href = uploadedDocument;
            document.getElementById('view-document').style.display = 'inline-block';
        }

        // Call initializeDocument on page load
        initializeDocument();

        function saveChanges() {
            var name = document.getElementById('name').value;
            var contact = document.getElementById('contact').value;
            var pincode = document.getElementById('pincode').value;
            const popup = document.getElementById('customPopup');

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
                const pincodeerror = document.getElementById('pincode-error');
                pincodeerror.style.display = 'block';
                vent.preventDefault(); // Prevent form submission
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

            const town = document.getElementById('town').value.trim();
            if (town === '') {
                // alert("Invalid email address. Please enter a valid email.");
                const townerror = document.getElementById('town-error');
                townerror.style.display = 'block';
                event.preventDefault(); // Prevent form submission
                return; // Exit the function
            }

            const landmark = document.getElementById('landmark').value.trim();
            if (landmark === '') {
                // alert("Invalid email address. Please enter a valid email.");
                const landmarkerror = document.getElementById('landmark-error');
                landmarkerror.style.display = 'block';
                event.preventDefault(); // Prevent form submission
                return; // Exit the function
            }

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