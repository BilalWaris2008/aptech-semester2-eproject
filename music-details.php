<?php

include("./includes/config.php");
include("./includes/header.php");

$id = $_GET['id'];

$get_music = mysqli_query(
    $connection,
    "SELECT * FROM music WHERE id = '$id'"
);

$music = mysqli_fetch_assoc($get_music);

$related_music = mysqli_query(
    $connection,
    "SELECT * FROM music
     WHERE id != '$id'
     ORDER BY RAND()
     LIMIT 4"
);


?>

<link rel="stylesheet" href="./music-details.css">

<body>

    <section class="container py-5">

        <section class="row">

            <section class="col-md-4">

                <img
                    src="./uploads/images/<?php echo $music['image']; ?>"
                    class="img-fluid rounded">

            </section>

            <section class="col-md-8">

                <h1>
                    <?php echo $music['title']; ?>
                </h1>

                <h5>
                    <?php echo $music['artist']; ?>
                </h5>

                <section class="music-meta">

                    <span>
                        Album:
                        <?php echo $music['album']; ?>
                    </span>

                    <span>
                        Genre:
                        <?php echo $music['genre']; ?>
                    </span>

                    <span>
                        Year:
                        <?php echo $music['year']; ?>
                    </span>

                    <span>
                        Language:
                        <?php echo $music['language']; ?>
                    </span>

                </section>

                <p>
                    <?php echo $music['description']; ?>
                </p>


                <h4 class="mt-4 mb-3">
                    Listen Now
                </h4>

                <audio controls class="w-100">
                    <source
                        src="./uploads/music/<?php echo $music['music_file']; ?>">
                </audio>

            </section>

        </section>

    </section>

</body>

</html>