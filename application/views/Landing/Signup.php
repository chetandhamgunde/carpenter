<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #d9cec5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Merriweather', serif;
        }

        .signup-container {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .signup-header {
            background: linear-gradient(164.56deg, #6E4521 -10.71%, #FFFFFF 210.94%);
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        .signup-header h2 {
            margin-bottom: 5px;
        }

        .signup-header p {
            margin: 0;
        }

        .signup-body {
            padding: 30px;
            background-color: #fff;
        }

        .form-control {
            position: relative;
            padding-left: 40px;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #a9754f;
        }

        .btn-primary {
            background-color: #a9754f;
            border-color: #a9754f;
        }

        .btn-primary:hover {
            background-color: #8b6342;
            border-color: #8b6342;
        }

        .timer {
            font-size: 14px;
            color: #a9754f;
            text-align: center;
            margin-top: 10px;
        }

        .invalid-feedback {
            display: none;
            font-size: 12px;
            color: red;
        }

        .is-invalid .invalid-feedback {
            display: block;
        }
    </style>
</head>

<body>
    <div class="signup-container">
        <div class="signup-header">
            <h2>Join Us</h2>
            <p>Create your account</p>
        </div>
        <div class="signup-body">
            <form id="signupForm">
                <!-- Email Input -->
                <div class="mb-3" id="emailField">
                    <input type="email" id="emailInput" class="form-control" placeholder="Enter your email" required>
                    <div class="invalid-feedback" id="emailError">Please enter a valid email address.</div>
                    <button type="button" id="emailSubmit" class="btn btn-primary w-100 mt-3">Submit</button>
                </div>

                <!-- OTP Verification -->
                <div class="mb-3 d-none" id="otpField">
                    <input type="text" id="otpInput" class="form-control" placeholder="Enter OTP" required>
                    <div class="invalid-feedback" id="otpError">Please enter the OTP correctly.</div>
                    <div class="timer" id="timer">OTP expires in 01:00</div>
                    <button type="button" id="otpSubmit" class="btn btn-primary w-100 mt-3">Verify OTP</button>
                </div>

                <!-- Signup Form -->
                <div class="d-none" id="signupFields">
                    <!-- Signup As -->
                    <div class="mb-3">
                        <select class="form-select form-control" id="signupAs" required>
                            <option selected>Signup As</option>
                            <option value="user">User</option>
                            <option value="carpenter">Carpenter</option>
                        </select>
                        <div class="invalid-feedback" id="roleError">Please select a role.</div>
                    </div>
                    <!-- Name -->
                    <div class="mb-3">
                        <input type="text" id="nameInput" class="form-control" placeholder="Full Name" required>
                        <div class="invalid-feedback" id="nameError">Please enter your full name.</div>
                    </div>
                    <!-- Contact -->
                    <div class="mb-3">
                        <input type="text" id="contactInput" class="form-control" placeholder="Contact Number" required>
                        <div class="invalid-feedback" id="contactError">Please enter a valid contact number.</div>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <input type="email" id="signupEmail" class="form-control" placeholder="Email Address" required>
                        <div class="invalid-feedback" id="signupEmailError">Please enter a valid email address.</div>
                    </div>
                    <!-- Password -->
                    <div class="mb-3">
                        <input type="password" id="passwordInput" class="form-control" placeholder="Password" required>
                        <div class="invalid-feedback" id="passwordError">Password is required.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Signup</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const emailSubmit = document.getElementById('emailSubmit');
        const otpField = document.getElementById('otpField');
        const signupFields = document.getElementById('signupFields');
        const emailField = document.getElementById('emailField');
        const otpSubmit = document.getElementById('otpSubmit');
        const timer = document.getElementById('timer');
        const emailInput = document.getElementById('emailInput');
        const otpInput = document.getElementById('otpInput');
        const signupForm = document.getElementById('signupForm');
        const signupAs = document.getElementById('signupAs');
        const nameInput = document.getElementById('nameInput');
        const contactInput = document.getElementById('contactInput');
        const signupEmail = document.getElementById('signupEmail');
        const passwordInput = document.getElementById('passwordInput');

        let countdown;

        emailSubmit.addEventListener('click', () => {
            // Email validation
            if (!emailInput.value || !validateEmail(emailInput.value)) {
                emailInput.classList.add('is-invalid');
                return;
            }
            emailInput.classList.remove('is-invalid');
            emailField.classList.add('d-none');
            otpField.classList.remove('d-none');
            startTimer();
        });

        otpSubmit.addEventListener('click', () => {
            // OTP validation
            if (!otpInput.value || otpInput.value.length !== 6) {
                otpInput.classList.add('is-invalid');
                return;
            }
            otpInput.classList.remove('is-invalid');
            otpField.classList.add('d-none');
            signupFields.classList.remove('d-none');
        });

        signupForm.addEventListener('submit', (e) => {
            e.preventDefault();

            let isValid = true;

            // Role validation
            if (!signupAs.value) {
                signupAs.classList.add('is-invalid');
                isValid = false;
            } else {
                signupAs.classList.remove('is-invalid');
            }

            // Name validation
            if (!nameInput.value) {
                nameInput.classList.add('is-invalid');
                isValid = false;
            } else {
                nameInput.classList.remove('is-invalid');
            }

            // Contact validation
            if (!contactInput.value || !validatePhone(contactInput.value)) {
                contactInput.classList.add('is-invalid');
                isValid = false;
            } else {
                contactInput.classList.remove('is-invalid');
            }

            // Email validation
            if (!signupEmail.value || !validateEmail(signupEmail.value)) {
                signupEmail.classList.add('is-invalid');
                isValid = false;
            } else {
                signupEmail.classList.remove('is-invalid');
            }

            // Password validation
            if (!passwordInput.value) {
                passwordInput.classList.add('is-invalid');
                isValid = false;
            } else {
                passwordInput.classList.remove('is-invalid');
            }

            if (isValid) {
                // Submit form logic here (e.g., send data to the server)
                alert('Form submitted successfully!');
            }
        });

        function validateEmail(email) {
            const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return regex.test(email);
        }

        function validatePhone(phone) {
            const regex = /^[0-9]{10}$/;
            return regex.test(phone);
        }

        function startTimer() {
            let timeLeft = 60;
            timer.textContent = `OTP expires in 01:00`;

            countdown = setInterval(() => {
                timeLeft--;
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                timer.textContent = `OTP expires in ${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    timer.textContent = 'OTP expired';
                }
            }, 1000);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
