<?php

session_start();

// User Login Check

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

// Admin Check

if ($_SESSION['user_role'] != 'admin') {
    header("Location: ../index.php");
    exit();
}

include("../includes/config.php");

// Total Music

$music_count = mysqli_num_rows(
    mysqli_query(
        $connection,
        "SELECT * FROM music"
    )
);

// Total Videos

$video_count = mysqli_num_rows(
    mysqli_query(
        $connection,
        "SELECT * FROM videos"
    )
);

// Total Users

$user_count = mysqli_num_rows(
    mysqli_query(
        $connection,
        "SELECT * FROM users"
    )
);

?>

<body>

<div class="container py-5">

    <div class="row g-4">

        <div class="col-md-4">

            <div class="card text-center p-4">

                <h3>
                    <?php echo $music_count; ?>
                </h3>

                <p>
                    Total Music
                </p>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-center p-4">

                <h3>
                    <?php echo $video_count; ?>
                </h3>

                <p>
                    Total Videos
                </p>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-center p-4">

                <h3>
                    <?php echo $user_count; ?>
                </h3>

                <p>
                    Total Users
                </p>

            </div>

        </div>

    </div>

</div>

