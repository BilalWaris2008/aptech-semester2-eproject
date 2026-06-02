<?php

include("./includes/config.php");
include("./includes/header.php");

$id = $_GET['id'];

$get_video = mysqli_query(
    $connection,
    "SELECT * FROM videos
     WHERE id = '$id'"
);

$video = mysqli_fetch_assoc($get_video);

$related_videos = mysqli_query(
    $connection,
    "SELECT * FROM videos
     WHERE id != '$id'
     ORDER BY RAND()
     LIMIT 4"
);

?>

<link rel="stylesheet" href="./css/music-details.css">

<section class="container py-5">

    <section class="row">

        <section class="row g-4 align-items-start">

            <section class="col-md-6">

                <video controls class="video-player w-100">
                    <source src="./uploads/videos/<?php echo $video['video_file']; ?>" type="video/mp4">
                </video>

            </section>

            <section class="col-md-6">

                <h1 class="details-heading"><?php echo $video['title']; ?></h1>
                <h5><?php echo $video['artist']; ?></h5>

                <section class="music-meta">

                    <span>Album: <?php echo $video['album']; ?></span>
                    <span>Genre: <?php echo $video['genre']; ?></span>
                    <span>Year: <?php echo $video['year']; ?></span>
                    <span>Language: <?php echo $video['language']; ?></span>

                </section>

                <section>
                    <p><?php echo nl2br($video['description']); ?></p>
                </section>

            </section>

        </section>

    </section>

    <!-- Related Videos -->

    <section class="container related-songs">

        <h3 class="mb-4 text-center">Related Videos</h3>

        <section class="row mt-4">

            <?php while ($related = mysqli_fetch_assoc($related_videos)) { ?>

                <section class="col-lg-3 col-md-4 col-sm-6 mb-4">

                    <section class="related-card">

                        <section class="music-img">

                            <img src="./uploads/images/<?php echo $related['image']; ?>" class="w-100">

                            <section class="video-play-icon">
                                <a  href="video-details.php?id=<?php echo $related['id']; ?>">
                                    <i class="bi bi-play-fill"></i>
                                </a>
                            </section>

                        </section>

                        <section class="music-content">

                            <h5><?php echo $related['title']; ?></h5>
                            <p><?php echo $related['artist']; ?></p>
                            
                            <a href="video-details.php?id=<?php echo $related['id']; ?>" class="play-btn">Watch Now</a>

                        </section>

                    </section>

                </section>

            <?php } ?>

        </section>

    </section>

</section>


<?php include("./includes/footer.php"); ?>