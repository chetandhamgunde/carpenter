<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carpenter | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <style>
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
        <section class="hero hero-space" style="background-image: url('<?php echo base_url() . 'assets/Images/assets/carpenter_home_hero_section.png' ?>');">
            
            <div class="hero-text">
                <h2>Crafting comfort, style, and functiontailored to your vision, built to last.</h2>
                <p class="mt-2">Where every detail counts, and every piece tells a story of dedication and skill</p>

                <div class="my-1">
                    <form action="<?php echo base_url() . 'CarpenterUserSide/searchPage' ?>" id="search-form" class="home-form" method="get">
                        <div class="input-group" style="max-width:400px;">
                            <span class="input-group-text"><img src="<?php echo base_url() . 'assets/Images/assets/home_icon_location.png' ?>" alt=""></span>
                            <input type="text" name="location" placeholder="Search by Location" class="form-control"
                                value="" id="location-input" required>
                        </div>
                        <div class="input-group" style="max-width:850px;">
                            <input type="text" name="service" placeholder="Search by Service" class="form-control"
                                value="" id="service-input" required>
                            <button type="submit" class="input-group-text">
                                <img src="<?php echo base_url() . 'assets/Images/assets/home_icon_search.png' ?>" alt="">
                                
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
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