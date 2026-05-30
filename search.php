<?php

include("./includes/config.php");

$search = "";

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string(
        $connection,
        $_GET['search']
    );

    $get_music = mysqli_query(
        $connection,
        "SELECT * FROM music
         WHERE title LIKE '%$search%'
         OR artist LIKE '%$search%'
         ORDER BY id DESC"
    );
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body>

    <div class="container py-5">
        <h2 class="mb-4">
            Search Results For:"<?php echo htmlspecialchars($search); ?>"
        </h2>
    </div>

    <div class="row g-4">

        <?php

        if (isset($get_music) && mysqli_num_rows($get_music) > 0) {
            while ($music = mysqli_fetch_assoc($get_music)) {

        ?>

                <div class="col-lg-3 col-md-4 col-sm-6">

                    <div class="music-card">

                        <div class="music-img">
                            <img src="./uploads/images/<?php echo $music['image']; ?>" class="img-fluid" alt="Music">
                        </div>

                        <div class="music-content">

                            <h5>
                                <?php echo $music['title']; ?>
                            </h5>

                            <p>
                                <?php echo $music['artist']; ?>
                            </p>

                            <a href="music-details.php?id=<?php echo $music['id']; ?>" class="play-btn">
                                Play Now
                            </a>

                        </div>

                    </div>

                </div>

        <?php

            }
        } else {
            echo "<h4>No music found.</h4>";
        }

        ?>

    </div>

</body>

</html>