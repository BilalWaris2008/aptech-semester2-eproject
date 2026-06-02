<?php

include("./includes/config.php");
include("./includes/header.php");

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

<link rel="stylesheet" href="./css/style.css">

<section class="latest-music py-5">

    <section class="container">

        <section class="music-title">

            <h2>Search Results</h2>
            <p>Results for: "<?php echo htmlspecialchars($search); ?>"</p>

        </section>

        <section class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

            <?php

            if (isset($get_music) && mysqli_num_rows($get_music) > 0) {
                while ($music = mysqli_fetch_assoc($get_music)) {

            ?>

                    <section class="col">

                        <section class="music-card">

                            <section class="music-img">

                                <img src="./uploads/images/<?php echo $music['image']; ?>" alt="Song">
                                <span class="new-badge">FOUND</span>

                            </section>

                            <section class="music-content">

                                <h5><?php echo $music['title']; ?></h5>
                                <p><?php echo $music['artist']; ?></p>
                                <a href="music-details.php?id=<?php echo $music['id']; ?>" class="play-btn">
                                    <i class="bi bi-play-fill"></i>Play Now
                                </a>

                            </section>

                        </section>

                    </section>

            <?php

                }

            } else {
                echo "<h4 class='text-center text-white'>No music found.</h4>";
            }

            ?>

        </section>

    </section>

</section>

<?php include("./includes/footer.php"); ?>