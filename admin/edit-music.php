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

        if (file_exists("../uploads/images/" . $music['image'])) {
            unlink("../uploads/images/" . $music['image']);
        }

        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file(
            $image_tmp,
            "../uploads/images/" . $image_name
        );
    }

    // New Music File

    if (!empty($_FILES['music_file']['name'])) {

        if (file_exists("../uploads/music/" . $music['music_file'])) {
            unlink("../uploads/music/" . $music['music_file']);
        }

        $music_name = $_FILES['music_file']['name'];
        $music_tmp = $_FILES['music_file']['tmp_name'];

        move_uploaded_file(
            $music_tmp,
            "../uploads/music/" . $music_name
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--main-font-family);
        }

        ::selection {
            background-color: var(--main-color);
            color: var(--text-color);
        }

        /* Scrollbar */

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: var(--bg-color);
        }

        ::-webkit-scrollbar-thumb {
            background-color: var(--main-color);
            border-radius: 30px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: var(--btn-hover-color);
        }

        :root {
            --main-color: #1db954;
            --sec-color: #ccc;
            --text-color: #ffffff;
            --sec-text-color: #aaaaaa;
            --bg-color: #111111;
            --btn-hover-color: #18a349;
            --main-font-family: "Poppins";
        }

        body {
            background-color: var(--bg-color);
        }

        .edit-card {
            background: #181818;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 0 25px rgba(29, 185, 84, .1);
        }

        .edit-title {
            color: var(--main-color);
            font-weight: 700;
            margin-bottom: 25px;
        }

        .form-label {
            color: var(--text-color);
            font-weight: 500;
        }

        .form-control {
            background: #222;
            border: 1px solid #333;
            color: var(--text-color);
        }

        .form-control:focus {
            background: #222;
            color: var(--text-color);
            border-color: var(--main-color);
            box-shadow: 0 0 10px rgba(29, 185, 84, .3);
        }

        .form-control::placeholder {
            color: var(--sec-text-color);
        }

        .current-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
            border: 3px solid var(--main-color);
        }

        .btn-update {
            background: var(--main-color);
            border: none;
            color: white;
            padding: 12px 25px;
            border-radius: 10px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-update:hover {
            background: var(--btn-hover-color);
        }

        .btn-back {
            background: var(--text-color);
            color: black;
            font-weight: 600;
            padding: 13px 25px;
            border-radius: 10px;
            text-decoration: none;
            margin-left: 10px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: var(--sec-color);
        }

        .success-msg {
            background: var(--main-color);
            color: white;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        textarea {
            resize: none;
        }

        .card {
            border: none !important;
        }
    </style>

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
                        <img src="../uploads/images/<?php echo $music['image']; ?>" class="current-image">

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