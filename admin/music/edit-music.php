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

include("../../includes/config.php");

$id = $_GET['id'];

$get_music = mysqli_query(
    $connection,
    "SELECT * FROM music WHERE id='$id'"
);

$music = mysqli_fetch_assoc($get_music);

$success = "";

if (isset($_POST['update'])) {

    $title = trim($_POST['title']);
    $artist = trim($_POST['artist']);
    $album = trim($_POST['album']);
    $genre = trim($_POST['genre']);
    $language = trim($_POST['language']);
    $year = trim($_POST['year']);
    $description = trim($_POST['description']);
    $image_name = $music['image'];
    $music_name = $music['music_file'];

    // New Image

    if (!empty($_FILES['image']['name'])) {

        if (file_exists("../../uploads/images/" . $music['image'])) {
            unlink("../../uploads/images/" . $music['image']);
        }

        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file(
            $image_tmp,
            "../../uploads/images/" . $image_name
        );
    }

    // New Music File

    if (!empty($_FILES['music_file']['name'])) {

        if (file_exists("../../uploads/music/" . $music['music_file'])) {
            unlink("../../uploads/music/" . $music['music_file']);
        }

        $music_name = $_FILES['music_file']['name'];
        $music_tmp = $_FILES['music_file']['tmp_name'];

        move_uploaded_file(
            $music_tmp,
            "../../uploads/music/" . $music_name
        );
    }

    mysqli_query(
        $connection,
        "UPDATE music SET

        title='$title',
        artist='$artist',
        album='$album',
        genre='$genre',
        language='$language',
        year='$year',
        image='$image_name',
        music_file='$music_name',
        description='$description'

        WHERE id='$id'"
    );

    $success = "Music Updated Successfully!";

    $get_music = mysqli_query(
        $connection,
        "SELECT * FROM music WHERE id='$id'"
    );

    $music = mysqli_fetch_assoc($get_music);
}

?>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Music</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Links -->
     <link rel="stylesheet" href="../css/edit.css">

</head>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="edit-card">

                <h2 class="edit-title">Edit Music</h2>

                <?php if ($success) { ?>

                    <div class="alert alert-success">
                        <?php echo $success; ?>
                    </div>

                <?php } ?>

                <form method="POST" enctype="multipart/form-data">

                    <div class="mb-3">

                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $music['title']; ?>">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Artist</label>
                        <input type="text" name="artist" class="form-control" value="<?php echo $music['artist']; ?>">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Album</label>
                        <input type="text" name="album" class="form-control" value="<?php echo $music['album']; ?>">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Genre</label>
                        <input type="text" name="genre" class="form-control" value="<?php echo $music['genre']; ?>">

                    </div>

                    <div class="mb-3">

                        <label class="form-label"> Language</label>
                        <input type="text" name="language" class="form-control" value="<?php echo $music['language']; ?>">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Year</label>
                        <input type="number" name="year" class="form-control" value="<?php echo $music['year']; ?>">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Current Image</label>
                        <br>
                        <img src="../../uploads/images/<?php echo $music['image']; ?>" class="current-image">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Change Image</label>
                        <input type="file" name="image" class="form-control">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Change Music File</label>
                        <input type="file" name="music_file" class="form-control">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Description</label>
                        <textarea name="description" rows="5" class="form-control"><?php echo $music['description']; ?></textarea>

                    </div>

                    <button type="submit" name="update" class="btn-update">Update Music</button>
                    <a href="manage-music.php" class="btn-back">Back</a>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>