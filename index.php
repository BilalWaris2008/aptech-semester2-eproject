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
                            <img src="./assets/images/music/musicimg1.png" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </section>

                        <section class="music-content">

                            <h5>Kahani Suno 2.0</h5>
                            <p>Kaifi Khalil</p>

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
                            <img src="./assets/images/music/musicimg2.png" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </section>

                        <section class="music-content">

                            <h5>Tu Hai Kahan</h5>
                            <p>AUR</p>

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
                            <img src="./assets/images/music/musicimg3.png" alt="Song">
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
                            <img src="./assets/images/music/musicimg4.png" alt="Song">
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


                <!-- music 5 -->

                <section class="col">

                    <section class="music-card">

                        <section class="music-img">
                            <img src="./assets/images/music/musicimg5.png" alt="Song">
                            <span class="new-badge">
                                NEW
                            </span>
                        </section>

                        <section class="music-content">

                            <h5>Shikayat</h5>
                            <p>AUR</p>

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

        <section class="container">

            <section class="artists-title">

                <h2>Popular Artists</h2>

                <p>
                    Listen to songs from your favorite artists
                </p>

            </section>

            <section class="row g-4 justify-content-center">

                <!-- Artist 1 -->

                <section class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <section class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5ebfc043bea91ac91c222d235c9"
                            alt="Artist">

                        <h5>Atif Aslam</h5>

                        <span>Artist</span>

                    </section>

                </section>

                <!-- Artist 2 -->

                <section class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <section class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5ebfc043bea91ac91c222d235c9"
                            alt="Artist">

                        <h5>Arijit Singh</h5>

                        <span>Singer</span>

                    </section>

                </section>

                <!-- Artist 3 -->

                <section class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <section class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5eb4293385d324db8558179afd9"
                            alt="Artist">

                        <h5>Taylor Swift</h5>

                        <span>Pop Artist</span>

                    </section>

                </section>

                <!-- Artist 4 -->

                <section class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <section class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5eb4293385d324db8558179afd9"
                            alt="Artist">

                        <h5>The Weeknd</h5>

                        <span>Artist</span>

                    </section>

                </section>

                <!-- Artist 5 -->

                <section class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <section class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5eb3bcef85e105dfc42399ef0ba"
                            alt="Artist">

                        <h5>Ed Sheeran</h5>

                        <span>Singer</span>

                    </section>

                </section>

                <!-- Artist 6 -->

                <section class="col-xl-2 col-lg-3 col-md-4 col-6">

                    <section class="artist-card">

                        <img
                            src="https://i.scdn.co/image/ab6761610000e5eb3bcef85e105dfc42399ef0ba"
                            alt="Artist">

                        <h5>Dua Lipa</h5>

                        <span>Pop Artist</span>

                    </section>

                </section>

            </section>

        </section>

    </section>




    <!-- Videos Section  -->

    <section class="latest-videos">

        <section class="container">

            <section class="videos-title">

                <h2>Latest Videos</h2>

                <p>
                    Watch trending music videos and latest releases
                </p>

            </section>

            <section class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-5 g-4">

                <!-- Video 1 -->

                <section class="col">

                    <section class="video-card">

                        <section class="video-image">

                            <img
                                src="./assets/images/music/musicimg1.png"
                                alt="Video">

                            <section class="video-play-icon">

                                <i class="bi bi-play-fill"></i>

                            </section>

                            <span class="new-badge">
                                NEW
                            </span>

                        </section>

                        <section class="video-content">

                            <h5>Kahani Suno 2.0</h5>

                            <p>Kaifi Khalil</p>

                            <a href="#" class="watch-btn">
                                Watch Now
                            </a>

                        </section>

                    </section>

                </section>

                <!-- Video 2 -->

                <section class="col">

                    <section class="video-card">

                        <section class="video-image">

                            <img
                                src="./assets/images/music/musicimg2.png"
                                alt="Video">

                            <section class="video-play-icon">

                                <i class="bi bi-play-fill"></i>

                            </section>

                            <span class="new-badge">
                                NEW
                            </span>

                        </section>

                        <section class="video-content">

                            <h5>Tu Hai Kahan</h5>

                            <p>AUR</p>

                            <a href="#" class="watch-btn">
                                Watch Now
                            </a>

                        </section>

                    </section>

                </section>

                <!-- Video 3 -->

                <section class="col">

                    <section class="video-card">

                        <section class="video-image">

                            <img
                                src="./assets/images/music/musicimg3.png"
                                alt="Video">

                            <section class="video-play-icon">

                                <i class="bi bi-play-fill"></i>

                            </section>

                            <span class="new-badge">
                                NEW
                            </span>

                        </section>

                        <section class="video-content">

                            <h5>Perfect</h5>

                            <p>Ed Sheeran</p>

                            <a href="#" class="watch-btn">
                                Watch Now
                            </a>

                        </section>

                    </section>

                </section>

                <!-- Video 4 -->

                <section class="col">

                    <section class="video-card">

                        <section class="video-image">

                            <img
                                src="./assets/images/music/musicimg4.png"
                                alt="Video">

                            <section class="video-play-icon">

                                <i class="bi bi-play-fill"></i>

                            </section>

                            <span class="new-badge">
                                NEW
                            </span>

                        </section>

                        <section class="video-content">

                            <h5>Night Changes</h5>

                            <p>One Direction</p>

                            <a href="#" class="watch-btn">
                                Watch Now
                            </a>

                        </section>

                    </section>

                </section>

                <!-- Video 5 -->

                <section class="col">

                    <section class="video-card">

                        <section class="video-image">

                            <img
                                src="./assets/images/music/musicimg5.png"
                                alt="Video">

                            <section class="video-play-icon">

                                <i class="bi bi-play-fill"></i>

                            </section>

                            <span class="new-badge">
                                NEW
                            </span>

                        </section>

                        <section class="video-content">

                            <h5>Shikayat</h5>

                            <p>AUR</p>

                            <a href="#" class="watch-btn">
                                Watch Now
                            </a>

                        </section>

                    </section>

                </section>

            </section>

        </section>

    </section>




</body>

<!-- Bootstrap 5 JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>