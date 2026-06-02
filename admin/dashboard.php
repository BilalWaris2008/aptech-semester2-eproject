<?php

session_start();

// Login Check

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

// Latest Music

$latest_music = mysqli_query(
    $connection,
    "SELECT * FROM music
     ORDER BY id DESC
     LIMIT 5"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Link -->
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/sidebar.css">
</head>

<body>

    <section class="admin-wrapper">

        <?php include("./includes/sidebar.php"); ?>

        <section class="main-content">

            <section class="dashboard-header">

                <h1>Welcome Admin</h1>
                <p>Manage Music, Videos and Users</p>

            </section>

            <section class="row g-4 mb-5">

                <section class="col-md-4">

                    <section class="dashboard-card">
                        <h2><?php echo $music_count; ?></h2>
                        <p>Total Music</p>
                    </section>

                </section>

                <section class="col-md-4">

                    <section class="dashboard-card">
                        <h2><?php echo $video_count; ?></h2>
                        <p>Total Videos</p>
                    </section>

                </section>

                <section class="col-md-4">

                    <section class="dashboard-card">
                        <h2><?php echo $user_count; ?></h2>
                        <p>Total Users</p>
                    </section>

                </section>

            </section>

            <!-- Latest Music -->

            <h3 class="section-title">Latest Music</h3>

            <section class="table-responsive">

                <table class="table align-middle text-center">

                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Artist</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php while ($music = mysqli_fetch_assoc($latest_music)) { ?>

                            <tr>
                                <td><img src="../uploads/images/<?php echo $music['image']; ?>" alt="Music"></td>
                                <td><?php echo $music['title']; ?></td>
                                <td><?php echo $music['artist']; ?></td>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            </section>

        </section>

    </section>

</body>

</html>