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

    <!-- CSS Link -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>


    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg navbar-dark py-3 custom-navbar">
        <section class="container">

            <a class="navbar-brand" href="#">
                SOUND GROUP
            </a>

            <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <section class="collapse navbar-collapse" id="menu">

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

                <section>
                    <a href="./auth/login.php" class="btn btn-outline-light">
                        Login
                    </a>
                    <a href="./auth/register.php" class="btn btn-success register-btn">
                        Register
                    </a>
                </section>
            </section>
        </section>
    </nav>


    <!-- Banner -->

    <section class="home-banner">

        <section>
            <h1>Unlimited Music & Videos</h1>
        </section>

        <p>Latest Songs & Entertainment Anytime</p>

        <button class="btn btn-success btn-lg mt-3 px-5 explore-btn">
            Explore Now
        </button>

    </section>


    <!-- Latest Music -->

    <section class="latest-music">

        <section class="container">

            <section class="music-title">
                <h2>Latest Music</h2>
                <p> Discover newly added songs and trending music</p>
            </section>


            <section class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-5 g-4">

                <!-- music 1 -->

                <section class="col">

                    <section class="music-card">

                        <section class="music-img">
                            <img src="./assets/latestmusic1.avif" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </section>

                        <section class="music-content">

                            <h5>Night Changes</h5>
                            <p>One Direction</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </section>

                    </section>

                </section>

                <!-- music 2 -->

                <section class="col">

                    <section class="music-card">

                        <section class="music-img">
                            <img src="./assets/latestmusic2.avif" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </section>

                        <section class="music-content">

                            <h5>Blinding Lights</h5>
                            <p>The Weeknd</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </section>

                    </section>

                </section>

                <!-- music 3 -->

                <section class="col">

                    <section class="music-card">

                        <section class="music-img">
                            <img src="./assets/latestmusic3.png" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </section>

                        <section class="music-content">

                            <h5>Perfect</h5>
                            <p>Ed Sheeran</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </section>

                    </section>

                </section>

                <!-- music 4 -->

                <section class="col">

                    <section class="music-card">

                        <section class="music-img">
                            <img src="./assets/latestmusic4.png" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </section>

                        <section class="music-content">

                            <h5>Shape Of You</h5>
                            <p>Ed Sheeran</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </section>

                    </section>

                </section>


                <!-- music 5 -->

                <section class="col">

                    <section class="music-card">

                        <section class="music-img">
                            <img src="./assets/homebanner-img.jfif" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </section>

                        <section class="music-content">

                            <h5>Closer</h5>
                            <p>The Chainsmokers</p>

                            <button class="play-btn">
                                <i class="bi bi-play-fill"></i>
                                Play Now
                            </button>

                        </section>

                    </section>

                </section>

            </section>

        </section>

    </section>



    <!-- Artists Section -->

    <section class="artists-section">

        <div class="container">

            <div class="artists-title">

                <h2>Popular Artists</h2>

                <p>
                    Listen to songs from your favorite artists
                </p>

            </div>

            <div class="row g-4 justify-content-center">

                <!-- Artist 1 -->

                <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <div class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5ebfc043bea91ac91c222d235c9"
                            alt="Artist">

                        <h5>Atif Aslam</h5>

                        <span>Artist</span>

                    </div>

                </div>

                <!-- Artist 2 -->

                <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <div class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5ebfc043bea91ac91c222d235c9"
                            alt="Artist">

                        <h5>Arijit Singh</h5>

                        <span>Singer</span>

                    </div>

                </div>

                <!-- Artist 3 -->

                <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <div class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5eb4293385d324db8558179afd9"
                            alt="Artist">

                        <h5>Taylor Swift</h5>

                        <span>Pop Artist</span>

                    </div>

                </div>

                <!-- Artist 4 -->

                <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <div class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5eb4293385d324db8558179afd9"
                            alt="Artist">

                        <h5>The Weeknd</h5>

                        <span>Artist</span>

                    </div>

                </div>

                <!-- Artist 5 -->

                <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <div class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5eb3bcef85e105dfc42399ef0ba"
                            alt="Artist">

                        <h5>Ed Sheeran</h5>

                        <span>Singer</span>

                    </div>

                </div>

                <!-- Artist 6 -->

                <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <div class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5eb3bcef85e105dfc42399ef0ba"
                            alt="Artist">

                        <h5>Dua Lipa</h5>

                        <span>Pop Artist</span>

                    </div>

                </div>

            </div>

        </div>

    </section>


</body>

<!-- Bootstrap 5 JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>