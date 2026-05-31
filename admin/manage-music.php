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

$get_music = mysqli_query(
    $connection,
    "SELECT * FROM music ORDER BY id"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Music</title>
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

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-header h1 {
            color: var(--main-color);
            font-weight: 700;
        }

        .table-responsive {
            background: #181818;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(29, 185, 84, .1);
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: #1DB954;
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
        }

        .table td {
            background: #222;
            color: white;
            border: none;
            padding: 15px;
        }

        .table tbody tr {
            transition: 0.3s;
        }

        .table tbody tr:hover {
            transform: scale(1.01);
        }

        .music-thumb {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #1DB954;
        }

        .btn-warning {
            margin-right: 5px;
        }

        @media(max-width:768px) {

            .page-header {
                flex-direction: column;
                gap: 15px;
            }

        }
    </style>


</head>

<body>

    <div class="container py-5">

        <div class="page-header">

            <h1>
                Manage Music
            </h1>

            <a href="add-music.php"
                class="btn btn-success">

                Add New Music

            </a>

        </div>

        <div class="table-responsive">

            <table class="table align-middle  text-center">

                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Cover</th>

                        <th>Title</th>

                        <th>Artist</th>

                        <th>Album</th>

                        <th>Genre</th>

                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody>

                    <?php while ($music = mysqli_fetch_assoc($get_music)) { ?>

                        <tr>

                            <td>
                                <?php echo $music['id']; ?>
                            </td>

                            <td>

                                <img
                                    src="../uploads/images/<?php echo $music['image']; ?>"
                                    class="music-thumb">

                            </td>

                            <td>
                                <?php echo $music['title']; ?>
                            </td>

                            <td>
                                <?php echo $music['artist']; ?>
                            </td>

                            <td>
                                <?php echo $music['album']; ?>
                            </td>

                            <td>
                                <?php echo $music['genre']; ?>
                            </td>

                            <td>

                                <a
                                    href="edit-music.php?id=<?php echo $music['id']; ?>"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <a
                                    href="delete-music.php?id=<?php echo $music['id']; ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this music?')">

                                    Delete

                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>