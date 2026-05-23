<?php

include("./includes/config.php");
include("./includes/header.php");

?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #121212;
        color: #fff;
    }

    /* =========================
           BANNER
        ========================= */

    .contact-banner {
        height: 300px;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),
            url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=1920&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .contact-banner h1 {
        font-size: 55px;
        font-weight: 700;
        color: #1DB954;
    }

    .contact-banner p {
        color: #ddd;
        margin-top: 10px;
        font-size: 17px;
    }

    /* =========================
           CONTACT SECTION
        ========================= */

    .contact-section {
        padding: 80px 0;
    }

    .contact-card {
        background: #181818;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 25px rgba(29, 185, 84, 0.1);
        height: 100%;
    }

    .contact-heading {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .contact-heading span {
        color: #1DB954;
    }

    .contact-text {
        color: #bbb;
        line-height: 1.8;
        margin-bottom: 30px;
    }

    /* =========================
           CONTACT INFO
        ========================= */

    .info-box {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .info-icon {
        width: 50px;
        height: 50px;
        background: #1DB954;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .info-content h5 {
        margin-bottom: 5px;
        font-size: 18px;
    }

    .info-content p {
        color: #bbb;
        margin: 0;
    }

    /* =========================
           SOCIAL ICONS
        ========================= */

    .social-icons {
        margin-top: 30px;
    }

    .social-icons a {
        width: 45px;
        height: 45px;
        background: #282828;
        color: #fff;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        margin-right: 10px;
        text-decoration: none;
        transition: 0.3s;
        font-size: 18px;
    }

    .social-icons a:hover {
        background: #1DB954;
        transform: translateY(-5px);
    }

    /* =========================
           FORM
        ========================= */

    .form-control {
        background: #282828;
        border: none;
        color: #fff;
        height: 50px;
        border-radius: 12px;
        margin-bottom: 20px;
        padding-left: 15px;
    }

    textarea.form-control {
        height: 140px;
        resize: none;
        padding-top: 15px;
    }

    .form-control:focus {
        background: #282828;
        color: #fff;
        box-shadow: none;
        border: 1px solid #1DB954;
    }

    .form-control::placeholder {
        color: #999;
    }

    .btn-send {
        background: #1DB954;
        color: #fff;
        border: none;
        padding: 14px 35px;
        border-radius: 50px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-send:hover {
        background: #1ed760;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(29, 185, 84, 0.25);
    }

    /* =========================
           MAP
        ========================= */

    .map-section {
        padding-bottom: 80px;
    }

    .map-container {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 0 25px rgba(29, 185, 84, 0.1);
    }

    iframe {
        width: 100%;
        height: 400px;
        border: 0;
    }

    /* =========================
           RESPONSIVE
        ========================= */

    @media(max-width:768px) {

        .contact-banner h1 {
            font-size: 40px;
        }

        .contact-card {
            padding: 30px 20px;
        }

        .contact-heading {
            font-size: 28px;
        }
    }
</style>
</head>

<body>

    <!-- =========================
     BANNER
========================= -->

    <section class="contact-banner">

        <div>
            <h1>Contact Us</h1>
            <p>We would love to hear from you anytime.</p>
        </div>

    </section>

    <!-- =========================
     CONTACT SECTION
========================= -->

    <section class="contact-section">

        <div class="container">

            <div class="row g-4 align-items-stretch">

                <!-- LEFT SIDE -->

                <div class="col-lg-5">

                    <div class="contact-card">

                        <h2 class="contact-heading">
                            Get In <span>Touch</span>
                        </h2>

                        <p class="contact-text">
                            Have questions, suggestions, or feedback?
                            Feel free to contact us anytime. Our team is always ready
                            to help you and provide the best experience possible.
                        </p>

                        <!-- EMAIL -->

                        <div class="info-box">

                            <div class="info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div class="info-content">
                                <h5>Email</h5>
                                <p>support@spotifyclone.com</p>
                            </div>

                        </div>

                        <!-- PHONE -->

                        <div class="info-box">

                            <div class="info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div class="info-content">
                                <h5>Phone</h5>
                                <p>+92 300 1234567</p>
                            </div>

                        </div>

                        <!-- LOCATION -->

                        <div class="info-box">

                            <div class="info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div class="info-content">
                                <h5>Location</h5>
                                <p>Karachi, Pakistan</p>
                            </div>

                        </div>

                        <!-- SOCIAL -->

                        <div class="social-icons">

                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>

                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>

                            <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                            </a>

                        </div>

                    </div>

                </div>

                <!-- RIGHT SIDE FORM -->

                <div class="col-lg-7">

                    <div class="contact-card">

                        <h2 class="contact-heading">
                            Send <span>Feedback</span>
                        </h2>

                        <form>

                            <div class="row">

                                <div class="col-md-6">

                                    <input type="text"
                                        class="form-control"
                                        placeholder="Your Name" required>

                                </div>

                                <div class="col-md-6">

                                    <input type="email"
                                        class="form-control"
                                        placeholder="Your Email">

                                </div>

                            </div>

                            <input type="text"
                                class="form-control"
                                placeholder="Subject">

                            <textarea class="form-control"
                                placeholder="Write your message"></textarea>

                            <button type="submit" class="btn-send">
                                Send Message
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================
     GOOGLE MAP
========================= -->

    <section class="map-section">

        <div class="container">

            <div class="map-container">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115832.59766894495!2d67.00113778557189!3d24.860734289449486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e0f4f6c2f7b%3A0x9c7b8b9e3fbb4c3!2sKarachi!5e0!3m2!1sen!2s!4v1715700000000!5m2!1sen!2s"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

            </div>

        </div>

    </section>


    <?php

    include("./includes/footer.php");

    ?>