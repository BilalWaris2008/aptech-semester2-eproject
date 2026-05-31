<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

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


<div class="container py-5">

    <h2 class="mb-4">
        Manage Music
    </h2>

    <table class="table table-dark table-striped">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Action</th>
        </tr>

        <?php while ($music = mysqli_fetch_assoc($get_music)) { ?>

            <tr>

                <td>
                    <?php echo $music['id']; ?>
                </td>

                <td>

                    <img src="../uploads/images/<?php echo $music['image']; ?>" width="70">

                </td>

                <td>
                    <?php echo $music['title']; ?>
                </td>

                <td>
                    <?php echo $music['artist']; ?>
                </td>

                <td>

                    <a href="edit-music.php?id=<?php echo $music['id']; ?>" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="delete-music.php?id=<?php echo $music['id']; ?>" class="btn btn-danger btn-sm">
                        Delete
                    </a>

                </td>

            </tr>

        <?php } ?>




    </table>

</div>