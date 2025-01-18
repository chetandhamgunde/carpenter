<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/VendorRequest.css' ?>">
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

    <div class="container mt-4">
        <div class="search-filter-container">
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Search by vendor name , service">
                <button id="searchButton" type="button">Search</button>
            </div>
            <div class="dropdown-filter">
                <div class="custom-select">
                    <select id="statusFilter">
                        <option value="" selected>All</option>
                        <option value="Approved">Approved</option>
                        <option value="Pending">Pending</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="table-container table-responsive">
            <table id="vendorTable" class="table">
                <thead class="table-responsive">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Experience</th>
                        <th>Phone Number</th>
                        <th>Specification</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="vendorTableBody">
                    <!-- Vendor rows dynamically inserted here -->
                </tbody>
            </table>
        </div>
        <div class="custom-pagination" id="paginationControls">
            <button class="btn btn-sm prev-btn" id="prevPage">Previous</button>
            <div id="pageNumbers"></div>
            <button class="btn btn-sm next-btn" id="nextPage">Next</button>
        </div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const recordsPerPage = 6;
        let currentPage = 1;
        const vendorData = [
            { name: "John Doe", email: "JohnDoe@gmail.com", address: "MG Road, Nashik 422001", experience: "5 yrs", phone: "1234567890", specification: "Commercial Carpentry Services", status: "Approved" },
            { name: "Jane Doe", email: "JaneDoe@gmail.com", address: "MG Road, Nashik 422001", experience: "3 yrs", phone: "1234567891", specification: "Electrical Services", status: "Pending" },
            { name: "Mark Smith", email: "MarkSmith@gmail.com", address: "MG Road, Nashik 422001", experience: "4 yrs", phone: "1234567892", specification: "Plumbing Services", status: "Rejected" },
            { name: "Sara Lee", email: "SaraLee@gmail.com", address: "MG Road, Nashik 422001", experience: "2 yrs", phone: "1234567893", specification: "Painting Services", status: "Approved" },
            { name: "Sophia Green", email: "SophiaGreen@gmail.com", address: "MG Road, Nashik 422001", experience: "2 yrs", phone: "1234567899", specification: "Painting Services", status: "Approved" }
        ];

        function renderTable() {
            const start = (currentPage - 1) * recordsPerPage;
            const end = start + recordsPerPage;
            const filteredData = getFilteredData();
            const rows = filteredData.slice(start, end).map(data => `
                <tr>
                    <td>${data.name}</td>
                    <td>${data.email}</td>
                    <td>${data.address}</td>
                    <td>${data.experience}</td>
                    <td>${data.phone}</td>
                    <td>${data.specification}</td>
                 
                    <td style="display:flex; gap:4px;">
                        <button class="btn btn-success btn-sm me-4" style="border-radius: 50%;">&#10003;</button>
                        <button class="btn btn-danger btn-sm" style="border-radius: 50%;">&#10007;</button>
                    </td>
                </tr>
            `).join("");
            document.getElementById("vendorTableBody").innerHTML = rows;
        }

        function renderPagination() {
            const totalPages = Math.ceil(getFilteredData().length / recordsPerPage);
            const pageNumbers = Array.from({ length: totalPages }, (_, i) => i + 1).map(page => `
                <button class="btn btn-sm ${page === currentPage ? 'btn-secondary' : ''}" data-page="${page}">${page}</button>
            `).join("");
            document.getElementById("pageNumbers").innerHTML = pageNumbers;
        }

        function getFilteredData() {
            const searchQuery = document.getElementById("searchInput").value.toLowerCase();
            const statusFilter = document.getElementById("statusFilter").value;

            return vendorData.filter(data => {
                const matchesSearch = !searchQuery ||
                    data.name.toLowerCase().includes(searchQuery) ||
                    data.specification.toLowerCase().includes(searchQuery);

                const matchesStatus = !statusFilter || data.status === statusFilter;

                return matchesSearch && matchesStatus;
            });
        }

        document.getElementById("paginationControls").addEventListener("click", (event) => {
            const target = event.target;
            if (target.tagName === "BUTTON") {
                if (target.id === "prevPage" && currentPage > 1) {
                    currentPage--;
                } else if (target.id === "nextPage" && currentPage < Math.ceil(getFilteredData().length / recordsPerPage)) {
                    currentPage++;
                } else if (target.dataset.page) {
                    currentPage = Number(target.dataset.page);
                }
                renderTable();
                renderPagination();
            }
        });

        document.getElementById("searchButton").addEventListener("click", () => {
            currentPage = 1;
            renderTable();
            renderPagination();
        });

        document.getElementById("statusFilter").addEventListener("change", () => {
            currentPage = 1;
            renderTable();
            renderPagination();
        });

        renderTable();
        renderPagination();
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>