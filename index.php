<?php
    // Initialize the session
    session_start();
    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Travel Companion</title>
    <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <style>
    body {
        background: black;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        margin-top: 0;
    }

    h1 {
        font-size: 72px;
        background: -webkit-linear-gradient(#ef4436, #b82730);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    h2 {
        font-size: 72px;
        background: #b82730;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    </style>
    <script>
    $(document).ready(function() {
        $(".dropdown").hover(function() {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });
    </script>
</head>

<body>

    <!-- socials top right start -->
    <div class="d-flex justify-content-end" style="padding-top:10px;">
        <a href="https://www.w3schools.com"> <i class="fa-brands fa-facebook fa-2xl "
                style="padding-right: 5px;"></i></a>
        <a href="https://www.w3schools.com"> <i class="fa-brands fa-twitter fa-2xl"
                style="padding-right: 5px;"></i></a>
        <a href="https://www.w3schools.com"> <i class="fa-brands fa-instagram fa-2xl"
                style="padding-right: 15px;"></i></a>
    </div> <!-- socials top right end -->
    <!-- centred logo start -->
    <div class="d-flex justify-content-center" style="">

        <a href="index.php"> <img src="images/logonobg.png" alt="logo">
            <h1></h1>
        </a><br>


    </div>
    <div class="d-flex justify-content-center">
        <h1> Ducking</h1>
        <h2> Hell</h2><br>
    </div>
    <div class="d-flex justify-content-center">
        <h4 style="color: white;">Things that make you go Aargh!</h4>
    </div>
    <!-- Navbar start 
    <ul class="nav justify-content-center">
        <nav class="navbar navbar-expand-lg " style="padding-top:;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="
    background: #b82730;">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav" style="border-top: 1px solid #b82730; border-bottom: 1px solid #b82730;">
                        <li class="nav-item">
                            <a class="nav-link" href="alllistings.php" style="padding-right: 100px; color: #b82730;">
                                Be Inspired
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lastmin.php" style="padding-right: 100px; color: #b82730;">
                                Make a Booking
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php" style="padding-right: 0px; color: #b82730;">
                                Already Booked
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </ul> navbar end -->


    <div class="container">
        <!-- Constainer Start -->

        <div class="row" >
            <div class="col-sm-6" style="padding-top: 15px;">
                <div class="card text-center">
                    <div class="card-header">
                    <h5 class="card-title">Blog Title</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/logonobg.png" style="height: 75px;">
                            </div>
                            <div class="col-md-9">
                            <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere libero in varius ornare. Phasellus vitae auctor sapien. Donec cursus sem vel purus porttitor laoreet.</p>
                            </div>

                        </div>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="padding-top: 15px;">
                <div class="card text-center">
                    <div class="card-header">
                    <h5 class="card-title">Blog Title</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                            <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere libero in varius ornare.</p>
                            </div>

                        </div>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>

            <div class="col-sm-3" style="padding-top: 15px;">
                <div class="card text-center">
                    <div class="card-header">
                    <h5 class="card-title">Blog Title</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                            <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere libero in varius ornare.</p>
                            </div>

                        </div>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Start -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"
            style="position: relative; z-index: 1;">

            <!-- logo start -->
            <ul class="nav">
                <a href="index.php"> <img src="images/logonobg.png" alt="logo" style="height:75px;"> </a>
            </ul><!-- logo end -->
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-facebook fa-2xl "
                    style="padding-right: 5px;"></i> </a>
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-twitter fa-2xl"
                    style="padding-right: 5px;"></i></a>
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-instagram fa-2xl"
                    style="padding-right: 15px;"></i></a>
        </footer><!-- Footer End -->
    </div> <!-- Container End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>