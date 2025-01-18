<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #d9cec5;
            /* Light beige background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Merriweather', serif;
            /* Apply Merriweather font */
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(164.56deg, #6E4521 -10.71%, #FFFFFF 210.94%);
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        .login-header h2 {
            margin-bottom: 5px;
        }

        .login-header p {
            margin: 0;
        }

        .login-body {
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

        .login-footer {
            text-align: center;
            margin-top: 15px;
        }

        .login-footer a {
            color: #a9754f;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .btn-primary {
            background-color: #a9754f;
            border-color: #a9754f;
        }

        .btn-primary:hover {
            background-color: #8b6342;
            border-color: #8b6342;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <h2>Welcome Back</h2>
            <p>Please sign in to continue</p>
        </div>
        <div class="login-body">
            <form>
                <!-- Role Selection -->
                <div class="mb-3 position-relative">
                    <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                    <select class="form-select form-control" aria-label="Sign in as">
                        <option selected>Sign in As</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="user">vendor</option>
                    </select>
                </div>

                <!-- Email Input -->
                <div class="mb-3 position-relative">
                    <span class="input-icon">
                        <img src="<?php echo base_url() . 'assets/Images/Landing-images/mail-icon.png'; ?>" alt="Email Icon" style="width: 20px; height: 20px;">
                    </span>
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>


                <!-- Password Input -->
                <div class="mb-3 position-relative">
                    <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="form-control" placeholder="Password">
                </div>

                <!-- Forgot Password and Submit Button -->
                <div class="d-flex justify-content-between mb-3">
                    <a href="#" class="text-decoration-none">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">Signin</button>

                <!-- Signup Link -->
                <div class="login-footer mt-3">
                    <span>Don’t have an account? <a href="<?php echo base_url() . 'Landing/Signup'; ?>">Signup</a></span>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JavaScript and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
</body>

</html>