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

?>


<?php

include("../includes/config.php");

if (isset($_POST['submit'])) {

    // Get Form Data

    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];
    $language = $_POST['language'];
    $year = $_POST['year'];
    $description = $_POST['description'];

    // Image Upload

    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file(
        $image_tmp,
        "../uploads/images/" . $image_name
    );

    // Music Upload

    $music_name = $_FILES['music_file']['name'];
    $music_tmp = $_FILES['music_file']['tmp_name'];
    move_uploaded_file(
        $music_tmp,
        "../uploads/music/" . $music_name
    );

    // Insert Query

    $insert = mysqli_query(
        $connection,
        "INSERT INTO music(
            title,
            artist,
            album,
            genre,
            language,
            year,
            image,
            music_file,
            description
        )

        VALUES(
            '$title',
            '$artist',
            '$album',
            '$genre',
            '$language',
            '$year',
            '$image_name',
            '$music_name',
            '$description'
        )"
    );

    if ($insert) {
        echo "Music Added Successfully";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Music</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add Music CSS Link -->
    <link rel="stylesheet" href="./add-music.css">

</head>

<body>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="add-music-card">

                    <h2 class="mb-4">
                        Add Music
                    </h2>

                    <form action="" method="POST" enctype="multipart/form-data">

                        <!-- Title -->

                        <div class="mb-3">

                            <label class="form-label">
                                Music Title
                            </label>
                            <input type="text" name="title" class="form-control">

                        </div>

                        <!-- Artist -->

                        <div class="mb-3">

                            <label class="form-label">
                                Artist
                            </label>
                            <input type="text" name="artist" class="form-control">

                        </div>

                        <!-- Album -->

                        <div class="mb-3">

                            <label class="form-label">
                                Album
                            </label>
                            <input type="text" name="album" class="form-control">

                        </div>

                        <!-- Genre -->

                        <div class="mb-3">

                            <label class="form-label">
                                Genre
                            </label>
                            <input type="text" name="genre" class="form-control">

                        </div>

                        <!-- Language -->

                        <div class="mb-3">

                            <label class="form-label">
                                Language
                            </label>
                            <input type="text" name="language" class="form-control">

                        </div>

                        <!-- Year -->

                        <div class="mb-3">

                            <label class="form-label">
                                Year
                            </label>
                            <input type="number" name="year" class="form-control">

                        </div>

                        <!-- Image -->

                        <div class="mb-3">

                            <label class="form-label">
                                Music Image
                            </label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <!-- Music File -->

                        <div class="mb-3">

                            <label class="form-label">
                                Music File
                            </label>
                            <input type="file" name="music_file" class="form-control">

                        </div>

                        <!-- Description -->

                        <div class="mb-3">

                            <label class="form-label">
                                Description
                            </label>
                            <textarea name="description" rows="4" class="form-control">
                            </textarea>

                        </div>

                        <button
                            type="submit" name="submit" class="btn-add-music">Add Music
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>