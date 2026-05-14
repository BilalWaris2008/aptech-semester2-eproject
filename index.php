<?php

include("./includes/config.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sound Group</title>

    <!-- Bootstrap 5 CSS CDN  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/style.css">

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark py-3 custom-navbar">
        <div class="container">

            <a class="navbar-brand" href="#">
                SOUND GROUP
            </a>

            <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Music</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Artists</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Albums</a>
                    </li>

                </ul>

                <div>
                    <a href="#" class="btn btn-outline-light">
                        Login
                    </a>
                    <a href="#" class="btn btn-success">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>



    <section class="home-banner">

        <div>
            <h1>Unlimited Music & Videos</h1>
        </div>

        <p>Latest Songs & Entertainment Anytime</p>

        <button class="btn btn-success btn-lg mt-3 px-5">
            Explore Now
        </button>

    </section>



    <section class="latest-music">

        <div class="music-container">

            <div class="music-title">
                <h2>Latest Music</h2>
                <p> Discover newly added songs and trending music</p>
            </div>


            <div class="row g-4">

                <!-- music 1 -->

                <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="music-card">

                        <div class="music-img">
                            <img src="./assets/latestmusic1.avif" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </div>

                        <div class="music-content">

                            <h4>Night Changes</h4>
                            <p>One Direction</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </div>

                    </div>

                </div>

                <!-- music 2 -->

                <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="music-card">

                        <div class="music-img">
                            <img src="./assets/latestmusic2.avif" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </div>

                        <div class="music-content">

                            <h4>Blinding Lights</h4>
                            <p>The Weeknd</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </div>

                    </div>

                </div>

                <!-- music 3 -->

                <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="music-card">

                        <div class="music-img">
                            <img src="./assets/latestmusic3.png" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </div>

                        <div class="music-content">

                            <h4>Perfect</h4>
                            <p>Ed Sheeran</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </div>

                    </div>

                </div>

                <!-- music 4 -->

                 <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="music-card">

                        <div class="music-img">
                            <img src="./assets/latestmusic4.png" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </div>

                        <div class="music-content">

                            <h4>Shape Of You</h4>
                            <p>Ed Sheeran</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </div>

                    </div>

                </div>


                <!-- music 5 -->

                <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="music-card">

                        <div class="music-img">
                            <img src="./assets/homebanner-img.jfif" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </div>

                        <div class="music-content">

                            <h4>Closer</h4>
                            <p>The Chainsmokers</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


</body>

<!-- Bootstrap 5 JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>